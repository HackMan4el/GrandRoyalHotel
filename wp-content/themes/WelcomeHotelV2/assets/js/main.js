document.addEventListener('DOMContentLoaded', () => {
    // Анимация при скролле
    const animateElements = document.querySelectorAll('.animate');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.animationPlayState = 'running';
            } else {
                entry.target.style.opacity = '0';
                entry.target.style.animationPlayState = 'paused';
            }
        });
    }, { threshold: 0.2 });
    animateElements.forEach(element => observer.observe(element));

    // Инициализация слайдеров
    const roomsSlider = new Swiper('.rooms-slider', {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            375: {
                slidesPerView: 1,
            },
        },
    });

    const promotionsSlider = new Swiper('.promotions-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const reviewsSlider = new Swiper('.reviews-slider', {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            375: {
                slidesPerView: 1,
            },
        },
    });

    const servicesSlider = new Swiper('.services-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            375: {
                slidesPerView: 1,
            },
        },
    });
});