document.addEventListener('DOMContentLoaded', function () {
    let swiperSlider = null;
    let progressBarInterval;
    const progressBar = document.querySelector('.section_slider .swiper-progress-bar .progress');

    function initProgressBar() {
        progressBar.style.width = '0%'; // Khởi tạo lại thanh tiến trình
    }

    function startProgressBar() {
        const duration = 8000; // Thời gian đầy thanh tiến trình
        progressBarInterval = setInterval(function () {
            let progress = parseFloat(progressBar.style.width) || 0;
            progress += (100 / duration) * (1000 / 60); // Tính toán mức độ đầy thanh tiến trình
            progressBar.style.width = Math.min(progress, 100) + '%'; // Đảm bảo không quá 100%
        }, 1000 / 60); // Cập nhật mỗi frame
    }

    function resetProgressBar() {
        clearInterval(progressBarInterval); // Dừng lại thanh tiến trình
        initProgressBar(); // Khởi tạo lại thanh tiến trình
    }

    function initSwiperSlider() {
        swiperSlider = new Swiper('.section_slider .swiper-container', {
            speed: 1000, // Thời gian chuyển đổi giữa các slide
            spaceBetween: 14, // Khoảng cách giữa các slide
            effect: 'fade', // Hiệu ứng chuyển đổi giữa các slide
            loop: true, // Enable loop to repeat slides
            navigation: {
                nextEl: '.section_slider .swiper-button-next',
                prevEl: '.section_slider .swiper-button-prev',
            },
            autoplay: {
                delay: 8000, // Thời gian mỗi slide tự động chuyển
                disableOnInteraction: false, // Không dừng autoplay khi người dùng tương tác
                pauseOnMouseEnter: true, // Dừng autoplay khi di chuột vào slide
            },
            pagination: {
                el: '.section_slider .swiper-pagination',
                clickable: true, // Cho phép click vào pagination
            },
            on: {
                init: function () {
                    initProgressBar(); // Khởi tạo thanh tiến trình khi swiper khởi động
                    startProgressBar(); // Bắt đầu thanh tiến trình
                },
                slideChangeTransitionStart: function () {
                    resetProgressBar(); // Reset thanh tiến trình khi thay đổi slide
                },
                slideChangeTransitionEnd: function () {
                    startProgressBar(); // Bắt đầu lại thanh tiến trình khi chuyển slide xong
                },
            },
        });
    }

    initSwiperSlider(); // Khởi tạo Swiper khi trang tải xong
    // ========================= Banner Ends
    function runSwiperSale() {
        let swiperSale = null;

        function initSwiperSale() {
            swiperSale = new Swiper('.swiper_sale', {
                slidesPerView: 4,
                spaceBetween: 20,
                slidesPerGroup: 1,
                navigation: {
                    nextEl: '.swiper_sale .swiper-button-next',
                    prevEl: '.swiper_sale .swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            });
        }

        function destroySwiperSale() {
            if (swiperSale) {
                swiperSale.destroy(true, true);
                swiperSale = null;
            }
        }

        function toggleSwiperSale() {
            const windowWidth = window.innerWidth;

            if (windowWidth <= 767 && swiperSale) {
                destroySwiperSale();
            } else if (windowWidth > 767 && !swiperSale) {
                initSwiperSale();
            }
        }

        // Initialize toggle function
        toggleSwiperSale();

        // Listen for window resize to toggle Swiper
        window.addEventListener('resize', toggleSwiperSale);
    }

    function lazyBlockProduct(sectionId, margin, callback) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    callback();
                    obs.unobserve(entry.target);
                }
            });
        }, { rootMargin: margin });

        const target = document.querySelector(`[data-section="${sectionId}"]`);
        if (target) {
            observer.observe(target);
        }
    }

    // Run the lazy load and Swiper setup
    lazyBlockProduct('section_flash_sale', '0px 0px -250px 0px', runSwiperSale);

    
    // Đặt thời gian đích 
    const countdownDate = new Date("Nov 30, 2024 21:09:00").getTime();
    const x = setInterval(function () {
        const now = new Date().getTime();
        const distance = countdownDate - now;
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        if (distance <= 0) {
            clearInterval(x); // Dừng đồng hồ đếm ngược
            const sale = document.querySelector('.sale');
            const homeSale = document.querySelector('.section-index.section_flash_sale');
            if (homeSale) {
                homeSale.style.display = "none";
            }
            if( sale) {
                sale.style.display = "none";
            }
        }
    }, 1000);

    // onclick hiểm thị tìm kiếm 
    function openSearch() {
        const open_search = document.querySelector('.header_tim_kiem .search-bar .search-suggest');
        const body = document.querySelector('body');

        open_search.classList.add('open');

        body.addEventListener('click', function (event) {
            if (!event.target.closest('.header_tim_kiem')) {
                open_search.classList.remove('open');
            }
        });
    }

    // Gắn sự kiện click vào ô tìm kiếm
    const searchInput = document.querySelector('.header_tim_kiem .search-bar .search-auto');
    searchInput.addEventListener('click', function (event) {
        event.stopPropagation();  // Ngăn sự kiện click lan ra ngoài
        openSearch();
    });


    // thanh trượt sản phẩm liên qua bên chitiets sp
    var swiper_related = null;

    function initSwiperRelated() {
        swiper_related = new Swiper('.swiper_product_related', {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },
        });
    }
    initSwiperRelated();
    // ==========================
    // thumbnail gallery trang chi tiết sp

    // Initialize Thumbnail Slider
    const galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
                direction: 'vertical',
            },
            1024: {
                slidesPerView: 4,
                direction: 'vertical',
            },
        },
    });

    // Initialize Main Gallery Slider
    const galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        hashNavigation: {
            watchState: true, // Đồng bộ trạng thái hash
        },
        thumbs: {
            swiper: galleryThumbs, // Đồng bộ với thumbnail slider
        },
    });
    //  thêm active cho tab-link sp
    const tabs = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            this.classList.add('active');
            const target = document.querySelector(this.dataset.tab);
            if (target) target.classList.add('active');
        });
    });
    //  thêm active cho tab-link sp
    // thêm tin tức thông báo sp
    const view_More = document.querySelector('.view-more');
    const hien = document.querySelector('.blog_wrapper.layout-blog');


    if (hien) {
        view_More.addEventListener('click', () => {
            if (hien.style.display === 'none') {
                hien.style.display = 'block';
            } else {
                hien.style.display = 'none';
            }
        });
    }

    // thêm tin tức thông báo sp
    const header = document.querySelector('.header');
    const menu = header?.querySelector(".header-menu");
    const btn = document.getElementById("btn-menu-mobile");
    const close = header?.querySelector(".close-mb-menu");
    const tagLinks = header?.querySelectorAll(".tab-link");
    const tags = header?.querySelectorAll(".tab-content-mb");

    if (btn && menu && close && tags) {
        btn.addEventListener("click", () => menu.classList.toggle("current"));
        close.addEventListener("click", () => menu.classList.remove("current"));
        tagLinks.forEach((item) => {
            item.addEventListener('click', (e) => {
                const target = e.target.dataset.tab;
                tags.forEach((item) => {
                    if (item.id === target) {
                        item.classList.add("active");
                    }
                    else {
                        item.classList.remove("active");
                    }
                })
            })
        });

    }
    // Lấy các phần tử cần thiết    
    document.querySelectorAll(".sudes-main-cate-has-child > .open_mnu.down_icon").forEach((icon) => {
        icon.addEventListener("click", (event) => {
            event.stopPropagation(); // Ngăn sự kiện lan ra ngoài
            event.preventDefault(); // Ngăn hành vi mặc định

            const parentLi = icon.parentElement; // Tìm `<li>` cha của icon
            const childMenu = parentLi.querySelector(".menu-child"); // Tìm menu con

            // Kiểm tra trạng thái của menu
            const isOpen = childMenu?.style.display === "block";

            // Đóng tất cả menu cùng cấp
            parentLi.parentElement.querySelectorAll(".menu-child").forEach((menu) => (menu.style.display = "none"));
            parentLi.parentElement.querySelectorAll(".open_mnu.down_icon").forEach((i) => i.classList.remove("current"));

            // Mở hoặc đóng menu
            if (!isOpen) {
                childMenu.style.display = "block";
                icon.classList.add("current");
            } else {
                childMenu.style.display = "none";
                icon.classList.remove("current");
            }
        });
    });

    // Xử lý cho menu con (icon thứ hai - mở menu con trong <li>)
    document.querySelectorAll(".menu-child .open_mnu.down_icons").forEach((icon) => {
        icon.addEventListener("click", (event) => {
            event.stopPropagation(); // Ngăn sự kiện lan ra ngoài
            event.preventDefault(); // Ngăn hành vi mặc định

            const parentLi = icon.parentElement; // Tìm `<li>` cha của icon
            const subChildMenu = parentLi.querySelector(".menu-child-2"); // Tìm menu con trong

            // Kiểm tra trạng thái của menu
            const isOpen = subChildMenu?.style.display === "block";

            // Đóng tất cả menu con ở cùng cấp
            parentLi.parentElement.querySelectorAll(".menu-child-2").forEach((menu) => (menu.style.display = "none"));
            parentLi.parentElement.querySelectorAll(".open_mnu.down_icons").forEach((i) => i.classList.remove("current"));

            // Mở hoặc đóng menu con
            if (!isOpen) {
                subChildMenu.style.display = "block";
                icon.classList.add("current");
            } else {
                subChildMenu.style.display = "none";
                icon.classList.remove("current");
            }
        });
    });


    // responsive

});

