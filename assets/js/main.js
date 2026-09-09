/**
 * Prodoral Chile - Funcionalidad JavaScript Interactiva
 * Alto rendimiento, cero reflows forzados, navegación accesible
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Header sin reflows (usando IntersectionObserver)
    const siteHeader = document.getElementById('siteHeader');
    const sentinel = document.getElementById('topSentinel');

    if (siteHeader && sentinel && 'IntersectionObserver' in window) {
        const headerObserver = new IntersectionObserver((entries) => {
            const isScrolled = !entries[0].isIntersecting;
            siteHeader.classList.toggle('scrolled', isScrolled);
        }, { threshold: 0 });
        headerObserver.observe(sentinel);
    } else if (siteHeader) {
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    siteHeader.classList.toggle('scrolled', window.scrollY > 30);
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });
    }

    // 2. Menú de Navegación Móvil (Drawer)
    const mobileToggle = document.getElementById('mobileMenuToggle');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const mobileClose = document.getElementById('mobileDrawerClose');
    const drawerOverlay = document.getElementById('drawerOverlay');

    function openMobileMenu() {
        if (!mobileDrawer) return;
        mobileDrawer.classList.add('open');
        mobileDrawer.setAttribute('aria-hidden', 'false');
        mobileDrawer.removeAttribute('inert');
        if (drawerOverlay) drawerOverlay.classList.add('active');
        document.body.classList.add('menu-open');
        document.body.style.overflow = 'hidden';
        if (mobileToggle) {
            mobileToggle.setAttribute('aria-expanded', 'true');
            mobileToggle.classList.add('is-active');
        }
    }

    function closeMobileMenu() {
        if (!mobileDrawer) return;
        mobileDrawer.classList.remove('open');
        mobileDrawer.setAttribute('aria-hidden', 'true');
        mobileDrawer.setAttribute('inert', '');
        if (drawerOverlay) drawerOverlay.classList.remove('active');
        document.body.classList.remove('menu-open');
        document.body.style.overflow = '';
        if (mobileToggle) {
            mobileToggle.setAttribute('aria-expanded', 'false');
            mobileToggle.classList.remove('is-active');
        }
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            if (mobileDrawer && mobileDrawer.classList.contains('open')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    if (mobileClose) {
        mobileClose.addEventListener('click', (e) => {
            e.stopPropagation();
            closeMobileMenu();
        });
    }

    if (drawerOverlay) {
        drawerOverlay.addEventListener('click', closeMobileMenu);
    }

    // Cerrar menú si se hace click en un enlace interno del drawer
    if (mobileDrawer) {
        mobileDrawer.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                const href = link.getAttribute('href') || '';
                if (!href.startsWith('tel:') && !link.getAttribute('target')) {
                    closeMobileMenu();
                }
            });
        });
    }

    // Cerrar menú móvil al presionar Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileDrawer && mobileDrawer.classList.contains('open')) {
            closeMobileMenu();
        }
    });

    // 3. Acordeón de Preguntas Frecuentes (FAQs) - Cero lectura geométrica en carga
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const questionBtn = item.querySelector('.faq-question');
        if (questionBtn) {
            questionBtn.addEventListener('click', () => {
                const isCurrentlyActive = item.classList.contains('active');

                // Cerrar otros acordeones
                faqItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                        const otherBtn = otherItem.querySelector('.faq-question');
                        if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                    }
                });

                // Alternar estado
                item.classList.toggle('active', !isCurrentlyActive);
                questionBtn.setAttribute('aria-expanded', (!isCurrentlyActive).toString());
            });
        }
    });

    // 4. Pausa/Reproducción de videos con IntersectionObserver
    const videos = document.querySelectorAll('video');
    if ('IntersectionObserver' in window && videos.length > 0) {
        const videoObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const video = entry.target;
                if (!entry.isIntersecting) {
                    if (!video.paused && video.hasAttribute('autoplay')) {
                        video.pause();
                    }
                } else {
                    if (video.paused && video.hasAttribute('autoplay')) {
                        video.play().catch(() => {});
                    }
                }
            });
        }, { threshold: 0.2 });

        videos.forEach(v => videoObserver.observe(v));
    }

    // 5. Carga diferida del video hero en desktop tras el primer render (0 contención LCP, 0 CLS)
    if (window.innerWidth >= 768) {
        const bgVideo = document.querySelector('video[data-hero-video]');
        if (bgVideo) {
            const startBgVideo = () => {
                const source = bgVideo.querySelector('source[data-src]');
                if (source && !source.src) {
                    source.src = source.dataset.src;
                    bgVideo.load();
                    bgVideo.play().catch(() => {});
                }
            };
            if (document.readyState === 'complete') {
                setTimeout(startBgVideo, 300);
            } else {
                window.addEventListener('load', () => setTimeout(startBgVideo, 300), { once: true });
            }
        }
    }
});
