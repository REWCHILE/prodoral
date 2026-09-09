/**
 * Prodoral Chile - Funcionalidad JavaScript Interactiva
 * Manejo de navegación móvil, acordeón FAQ, efectos y tracking
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Header con efecto al scrollear
    const siteHeader = document.getElementById('siteHeader');
    if (siteHeader) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 30) {
                siteHeader.classList.add('scrolled');
            } else {
                siteHeader.classList.remove('scrolled');
            }
        }, { passive: true });
    }

    // 2. Menú de Navegación Móvil (Drawer)
    const mobileToggle = document.getElementById('mobileMenuToggle');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const mobileClose = document.getElementById('mobileDrawerClose');

    // Crear overlay dinámico si no existe
    let drawerOverlay = document.querySelector('.drawer-overlay');
    if (!drawerOverlay) {
        drawerOverlay = document.createElement('div');
        drawerOverlay.className = 'drawer-overlay';
        document.body.appendChild(drawerOverlay);
    }

    function openMobileMenu() {
        if (mobileDrawer) {
            mobileDrawer.classList.add('open');
            mobileDrawer.setAttribute('aria-hidden', 'false');
            drawerOverlay.classList.add('active');
            document.body.classList.add('menu-open');
            document.body.style.overflow = 'hidden';
            if (mobileToggle) {
                mobileToggle.setAttribute('aria-expanded', 'true');
                mobileToggle.classList.add('is-active');
            }
        }
    }

    function closeMobileMenu() {
        if (mobileDrawer) {
            mobileDrawer.classList.remove('open');
            mobileDrawer.setAttribute('aria-hidden', 'true');
            drawerOverlay.classList.remove('active');
            document.body.classList.remove('menu-open');
            document.body.style.overflow = '';
            if (mobileToggle) {
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileToggle.classList.remove('is-active');
            }
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
    drawerOverlay.addEventListener('click', closeMobileMenu);

    // Cerrar menú si se hace click en un enlace interno del drawer
    if (mobileDrawer) {
        mobileDrawer.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                // Solo cerrar si no es enlace de llamada tel o whatsapp directo en nueva ventana
                if (!link.getAttribute('href').startsWith('tel:') && !link.getAttribute('target')) {
                    closeMobileMenu();
                }
            });
        });
    }

    // Cerrar menú móvil al presionar tecla Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileDrawer && mobileDrawer.classList.contains('open')) {
            closeMobileMenu();
        }
    });

    // 3. Acordeón de Preguntas Frecuentes (FAQs)
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach((item, index) => {
        const questionBtn = item.querySelector('.faq-question');
        const answerPanel = item.querySelector('.faq-answer');

        if (questionBtn && answerPanel) {
            // Abrir el primer elemento por defecto
            if (index === 0) {
                item.classList.add('active');
                answerPanel.style.maxHeight = answerPanel.scrollHeight + 'px';
            }

            questionBtn.addEventListener('click', () => {
                const isActive = item.classList.contains('active');

                // Opcional: Cerrar los demás acordeones para mantener orden
                faqItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        if (otherAnswer) otherAnswer.style.maxHeight = null;
                    }
                });

                // Alternar el actual
                if (isActive) {
                    item.classList.remove('active');
                    answerPanel.style.maxHeight = null;
                } else {
                    item.classList.add('active');
                    answerPanel.style.maxHeight = answerPanel.scrollHeight + 'px';
                }
            });
        }
    });

    // 4. Pausa de videos fuera del viewport para optimizar rendimiento de CPU/Batería
    const videos = document.querySelectorAll('video');
    if ('IntersectionObserver' in window) {
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
        }, { threshold: 0.25 });

        videos.forEach(v => videoObserver.observe(v));
    }
});
