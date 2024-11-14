<!-- footer -->
<footer class="bg-secondary-subtle">
    <div class="container">

        <div class="row pt-4">
            <div class="px-3 col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">
                <div class="h5 text-danger font-weight-bold">
                    Ebook
                </div>
                <div class="text-muted small">Hotline: 1900.636.099</div>
                <div class="text-muted small">
                    13 phố Trịnh Văn Bô, phường Phương Canh, quận Nam Từ Liêm, TP Hà Nội
                </div>

                <div class="text-muted small mt-2">Hotline: 1900.636.099</div>
                <div class="text-muted small mt-2">
                    Email: hello@merakiui.com
                </div>
            </div>

            <div class="px-3 col-xl-6 col-lg-6 col-md-5 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="h5 text-danger font-weight-bold">Chính sách</div>
                        <div class="my-1 text-muted small">
                            <a href="#" class="text-muted text-decoration-none">Hotline: 1900.636.099</a>
                        </div>
                        <div class="my-1 text-muted small">
                            <a href="#" class="text-muted text-decoration-none">Chính sách vận chuyển</a>
                        </div>
                        <div class="my-1 text-muted small">
                            <a href="#" class="text-muted text-decoration-none">Chính sách đổi trả</a>
                        </div>
                        <div class="my-1 text-muted small">
                            <a href="#" class="text-muted text-decoration-none">Quy định sử dụng</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="h5 text-danger font-weight-bold">Hỗ trợ</div>
                        <div class="my-1 text-muted small">
                            <a href="#" class="text-muted text-decoration-none">Hướng dẫn mua hàng</a>
                        </div>
                        <div class="my-1 text-muted small">
                            <a href="#" class="text-muted text-decoration-none">Hướng dẫn thanh toán</a>
                        </div>
                        <div class="my-1 text-muted small">
                            <a href="#" class="text-muted text-decoration-none">Hướng dẫn giao nhận</a>
                        </div>
                        <div class="my-1 text-muted small">
                            <a href="#" class="text-muted text-decoration-none">Điều khoản dịch vụ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4" />
        <div class="text-center text-muted small pb-4">
            Bản quyền thuộc về Nhóm 1. Fpoly
        </div>
    </div>
</footer>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>

    var swiper = new Swiper(".mySwiper3", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
    var swiper = new Swiper(".mySwiper2", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });
    // Initialize Swiper
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        freeMode: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    const navLinks = document.querySelector('.nav-links')
    function onToggleMenu(e) {
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('position-relative')
    }

    // Drop down menu
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', function () {
        const isMenuVisible = dropdownMenu.classList.contains('d-none');

        if (isMenuVisible) {
            dropdownMenu.classList.remove('d-none');
        } else {
            dropdownMenu.classList.add('d-none');
        }
    });

    document.addEventListener('click', function (event) {
        const isClickedInsideDropdown = dropdownButton.contains(event.target) || dropdownMenu.contains(event.target);

        if (!isClickedInsideDropdown) {
            dropdownMenu.classList.add('d-none');
        }
    });

    // slider
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) { slides[i].style.display = "none"; }
        for (i = 0; i < dots.length; i++) { dots[i].className = dots[i].className.replace(" active", ""); }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>