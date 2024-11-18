document.addEventListener("DOMContentLoaded", () => {
    const navBtns = document.querySelectorAll(".nav-btn");
    const videoSlides = document.querySelectorAll(".video-slide");
    const contentSlides = document.querySelectorAll(".content");

    let currentIndex = 0;
    const intervalTime = 15000;

    function showSlide(index) {
        navBtns.forEach((btn) => btn.classList.remove("activos"));
        videoSlides.forEach((video) => video.classList.remove("activos"));
        contentSlides.forEach((content) => content.classList.remove("activos"));

        navBtns[index].classList.add("activos");
        videoSlides[index].classList.add("activos");
        contentSlides[index].classList.add("activos");
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % navBtns.length;
        showSlide(currentIndex);
    }

    showSlide(currentIndex);
    setInterval(nextSlide, intervalTime);

    navBtns.forEach((btn, index) => {
        btn.addEventListener("click", () => {
            currentIndex = index;
            showSlide(currentIndex);
        });
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.cards');
    const cards = document.querySelectorAll('.card');
    const btnLeft = document.querySelector('.slide-left');
    const btnRight = document.querySelector('.slide-right');

    let currentIndex = 0;
    const visibleCards = 3;
    const cardWidth = cards[0].offsetWidth + parseInt(getComputedStyle(cards[0]).marginLeft) * 2;

    function updateButtons() {
        btnLeft.disabled = currentIndex === 0;
        btnRight.disabled = currentIndex >= cards.length - visibleCards;
    }

    function updateSlider() {
        slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }

    btnLeft.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
            updateButtons();
        }
    });

    btnRight.addEventListener('click', () => {
        if (currentIndex < cards.length - visibleCards) {
            currentIndex++;
            updateSlider();
            updateButtons();
        }
    });

    updateSlider();
    updateButtons();

    //
    const imageList = document.querySelector('.image-list');
    const imageItems = document.querySelectorAll('.image-item');
    const visibleCount = 6;
    const totalImages = imageItems.length;
    const imageWidth = 100 / visibleCount;
    let autoIndex = 0;

    if (totalImages > 0) {
        function updateVisibleImages() {
            const translateX = -autoIndex * imageWidth;
            imageList.style.transform = `translateX(${translateX}%)`;
        }

        function nextImage() {
            autoIndex = (autoIndex + 1) % (totalImages - visibleCount + 1);
            updateVisibleImages();
        }

        updateVisibleImages();
        setInterval(nextImage, 5000);
    } else {
        console.log('Aucun logo à afficher');
    }

    //

    function animateValue(element, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            element.innerText = Math.floor(progress * end);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    function checkVisibility() {
        const stats = document.querySelectorAll('.stat-number');
        stats.forEach((stat) => {
            const rect = stat.getBoundingClientRect();
            if (rect.top >= 0 && rect.bottom <= window.innerHeight && !stat.animated) {
                animateValue(stat, parseInt(stat.dataset.count), 2000);
                stat.animated = true;
            }
        });
    }

    const stats = document.querySelectorAll('.stat-number');
    stats.forEach((stat) => {
        animateValue(stat, parseInt(stat.dataset.count), 2000);
    });

    window.addEventListener('scroll', checkVisibility);
});


document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');

    const options = {
        threshold: 1.
    };

    const callback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                counter.innerText = '0';
                const updateCounter = () => {
                    const target = +counter.getAttribute('data-target');
                    const current = +counter.innerText;
                    const increment = target / 200;

                    if (current < target) {
                        counter.innerText = `${Math.ceil(current + increment)}`;
                        setTimeout(updateCounter, 10);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCounter();
                observer.unobserve(counter); // Stop observing once the counter animation is done
            }
        });
    };

    const observer = new IntersectionObserver(callback, options);
    counters.forEach(counter => {
        observer.observe(counter);
    });
});
