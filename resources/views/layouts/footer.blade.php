<footer class="footer-framed py-3">
    <div class="container position-relative footer-inner">
        <!-- Top: CTA / Newsletter -->
        <div class="row g-4 align-items-center mb-4">
            <div class="col-lg-7">
                <div class="d-flex align-items-center gap-3">
                    <img src="assets/images/logo.png" alt="kb-logo" class="logo-footer flex-shrink-0" />
                    <p class="mb-0 text-footer">
                        បណ្តាញពាណិជ្ជកម្មសហការសម្រាប់កម្ពុជា — ផលិតផលក្នុងស្រុក •
                        ការផ្ទៀងផ្ទាត់ • ទំនុកចិត្ត
                    </p>
                </div>
            </div>
        </div>

        <hr class="footer-sep" />

        <!-- Middle: Columns -->
        <div class="row g-5">
            <div class="col-md-4">
                <h6 class="fw-semibold mb-3 text-title">About KhmerBoost</h6>
                <p class="text-footer">
                    វេទិកាពាណិជ្ជកម្មសហការដែលភ្ជាប់អ្នកផលិត អ្នកលក់
                    និងអ្នកទិញក្នុងប្រទេស ដោយផ្តោតលើភាពទុកចិត្ត និងការផ្ទៀងផ្ទាត់។
                </p>
                <div class="d-flex gap-2 mt-3">
                    <a class="social-btn" href="#" aria-label="facebook"><i class="bi bi-facebook"></i></a>
                    <a class="social-btn" href="https://t.me/khmer_boost" aria-label="telegram"><i
                            class="bi bi-telegram"></i></a>
                    <a class="social-btn" href="#" aria-label="messenger"><i class="bi bi-messenger"></i></a>
                </div>
            </div>

            <div class="col-md-4">
                <h6 class="fw-semibold mb-3 text-title">Quick Links</h6>
                <ul class="list-unstyled link-grid">
                    <li>
                        <a class="footer-link" href="/pages/products.html">ផលិតផល</a>
                    </li>
                    <li>
                        <a class="footer-link" href="/pages/vendors-list.html">អ្នកផលិត</a>
                    </li>
                    <li>
                        <a class="footer-link" href="/pages/event.html">ព្រឹត្តិការណ៍</a>
                    </li>
                    <li>
                        <a class="footer-link" href="/pages/tourisim.html">ទេសចរណ៍</a>
                    </li>
                    <li>
                        <a class="footer-link" href="/pages/guides.html">មគ្គុទ្ទេសក៍</a>
                    </li>
                    <li><a class="footer-link" href="/pages/blog.html">ប្លុក</a></li>
                    <li><a class="footer-link" href="#">Privacy</a></li>
                    <li><a class="footer-link" href="#">Terms</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h6 class="fw-semibold mb-3 text-title">ទំនាក់ទំនងមកកាន់យើង</h6>
                <ul class="list-unstyled text-footer">
                    <li class="d-flex align-items-center mb-2">
                        <i class="bi bi-telephone me-2 opacity-75"></i> +855 12 345 678
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope me-2 opacity-75"></i>
                        hello@khmerboost.com
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-geo-alt me-2 opacity-75"></i> Phnom Penh,
                        Cambodia
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom: Legal -->
        <div
            class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 pt-3 small text-footer-weak">
            <div>© <span id="year"></span> KhmerBoost. All rights reserved.</div>
            <div class="mt-2 mt-md-0">
                Made by Group12 • <a class="footer-link" href="#">Back to top</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/themeMode.js') }}"></script>

<!-- counter lib js  -->
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
<script>
    new PureCounter();
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const partnersSwiper = new Swiper("#partnersSwiper", {
        loop: true,
        autoplay: {
            delay: 2200,
            disableOnInteraction: false
        },
        speed: 700,
        spaceBetween: 12,
        // Responsive slides per view
        slidesPerView: 1.2,
        breakpoints: {
            480: {
                slidesPerView: 2
            },
            640: {
                slidesPerView: 2.5
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 4
            },
            1200: {
                slidesPerView: 5
            },
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
    });
</script>

<!-- <script>
    // Year
    document.getElementById("year").textContent = new Date().getFullYear();

    // Navbar elevate on scroll
    (function() {
        const nav = document.getElementById("kbNav");
        const onScroll = () =>
            nav.classList.toggle("navbar-elevate", window.scrollY > 12);
        document.addEventListener("scroll", onScroll);
        onScroll();
    })();
</script> -->

<script>
    const btnheart = document.querySelectorAll(".active-heart");
    const iconH = document.querySelectorAll(".card a .bi-heart");
    console.log(iconH);
    for (let items of btnheart) {
        items.addEventListener("click", (e) => {
            e.preventDefault();

            let icon = items.lastElementChild;

            if (icon.classList.contains("bi-heart")) {
                icon.classList.remove("bi-heart");
                icon.classList.add("bi-heart-fill");
            } else {
                icon.classList.remove("bi-heart-fill");
                icon.classList.add("bi-heart");
            }
        });
    }
</script>
<!--  event  -->
<script>
    (function() {
        const el = document.querySelector(".events-cta .countdown");
        if (!el) return;
        const targetISO = el.getAttribute("data-countdown");
        const target = new Date(targetISO).getTime();

        function tick() {
            const now = Date.now();
            const dist = Math.max(0, target - now);
            const d = Math.floor(dist / (1000 * 60 * 60 * 24));
            const h = Math.floor((dist / (1000 * 60 * 60)) % 24);
            const m = Math.floor((dist / (1000 * 60)) % 60);
            el.querySelector(".cd-d").textContent = String(d);
            el.querySelector(".cd-h").textContent = String(h).padStart(2, "0");
            el.querySelector(".cd-m").textContent = String(m).padStart(2, "0");
        }
        tick();
        setInterval(tick, 30_000); // update every 30s
    })();
</script>
</body>

</html>
