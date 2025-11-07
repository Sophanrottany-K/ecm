    @extends('layouts.master')
    @section('title', 'About US')
    @section('content')


        <main>
            <!-- HERO -->
            <section class="hero-about text-white py-5">
                <div class="container rounded-4 gx-0" data-aos="fade-up" data-aos-duration="800"
                    style="background: url(../assets/images/about.jpg); background-size: cover; background-position: center; ">
                    <div class="hero-overlay-about rounded-4">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-8">
                                <div>
                                    <span class="pill mb-3 " style="color: var(--bs-text) !important;"><i
                                            class="bi bi-stars"></i> អំពីយើង
                                        (About Us)</span>
                                    <h1 class="display-5 fw-bold text-white">
                                        បង្កើតសហគមន៍ពាណិជ្ជកម្មខ្មែរ ដោយបច្ចេកវិទ្យា និងទំនុកចិត្ត
                                    </h1>
                                    <p class="lead mt-3">
                                        KhmerBoost ជាវេទិកាដែលភ្ជាប់អ្នកផលិត អ្នកលក់ និងអ្នកទិញ
                                        ដើម្បីលើកកម្ពស់ផលិតផលខ្មែរ និងវប្បធម៌។
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- STORY / TIMELINE -->
            <section class="py-5">
                <div class="container">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <h3 class="section-title">គោលបំណង</h3>
                    </div>
                    <div class="row g-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="col-lg-12">
                            <div class="card-surface p-4 h-100 d-flex flex-column justify-content-center">
                                <h5 class="fw-bold">មូលហេតុដែលយើងមាន</h5>
                                <p class="mb-0 text-secondary">
                                    បង្កើតឡើងដើម្បីជួយពាណិជ្ជករ
                                    អាចភ្ជាប់ដោយផ្ទាល់ទៅកាន់អតិថិជនបានយ៉ាងមានប្រសិទ្ធភាព
                                    និងទុកចិត្តបាន។ វេទិកានេះផ្តោតលើការលើកកម្ពស់ផលិតផល
                                    និងស្នាដៃក្នុងស្រុក ដូចជា ផលិតផលប្រពៃណីខ្មែរ, សិល្បៈ,
                                    អាហារប្រពៃណី, និងគ្រឿងអនុស្សាវរីយ៍ទេសចរណ៍។
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- MISSION / VISION / VALUES -->
            <section id="mission" class="py-5">
                <div class="container">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="800">
                        <h3 class="section-title">បេសកកម្ម • ចក្ខុវិស័យ • តម្លៃ</h3>
                    </div>
                    <div class="row g-4">
                        <div class="col-12 col-md-4">
                            <div class="card-surface h-100 p-4" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="100">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-rocket"></i>
                                    <h5 class="m-0">Mission</h5>
                                </div>
                                <p class="text-secondary">
                                    បេសកកម្មរបស់ KhmerBoost គឺជួយលើកកម្ពស់សហគមន៍ MSMEs ខ្មែរ
                                    តាមរយៈវេទិកាឌីជីថលដែលមានសុវត្ថិភាព ទុកចិត្តបាន
                                    និងងាយស្រួលប្រើ។ យើងមានបំណងបង្កើតឱកាសអោយអ្នកផលិត
                                    និងអ្នកលក់ក្នុងស្រុក អាចដល់ទៅកាន់អតិថិជនថ្មីៗ
                                    និងមានទីផ្សារធំជាងមុន។
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card-surface h-100 p-4" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="200">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-eyeglasses"></i>
                                    <h5 class="m-0">Vision</h5>
                                </div>
                                <p class="text-secondary">
                                    យើងមានចក្ខុវិស័យក្នុងការក្លាយជាមូលដ្ឋានសំខាន់មួយ សម្រាប់ផលិតផល
                                    និងវប្បធម៌ខ្មែរ ដែលអាចភ្ជាប់មនុស្សទូទាំងប្រទេស និងអន្តរជាតិ។
                                    KhmerBoost
                                    ចង់កសាងអេកូស៊ីស្ទឹមសហគមន៍ដែលអាចជំរុញឱ្យផលិតផលខ្មែរទទួលបានការទទួលស្គាល់
                                    និងឥទ្ធិពលកាន់តែច្រើន។
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card-surface h-100 p-4" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="300">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-heart"></i>
                                    <h5 class="m-0">Values</h5>
                                </div>
                                <ul class="text-secondary m-0 ps-3 small">
                                    <li>
                                        ទំនុកចិត្ត និងតម្លាភាព៖
                                        យើងជឿថាការបង្កើតសេវាដែលអាចទុកចិត្តបានគឺជាគន្លងសំខាន់ក្នុងការអភិវឌ្ឍសហគមន៍។
                                    </li>
                                    <li>
                                        សហគមន៍៖ ជាមូលដ្ឋានសម្រាប់ភាពជោគជ័យ និងការរីកចម្រើនរបស់យើង។
                                    </li>
                                    <li>
                                        គុណភាព និងបេតិកភណ្ឌ៖ យើងគោរពដល់គុណភាពផលិតផល
                                        និងតម្លៃវប្បធម៌ខ្មែរ
                                        ដើម្បីអោយជំនាន់ក្រោយមានអារម្មណ៍ភ្ញាក់ផ្អើលនូវអ្វីដេលយើងមាន។
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION COUNTER  -->
            <section class="py-5 counter-area">
                <div class="container">
                    <div class="row g-4 text-center">
                        <div class="col-6 col-lg-3">
                            <div class="glass-soft p-4 h-100">
                                <i class="bi bi-shop fs-1 text-support"></i>
                                <div data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="2"
                                    class="purecounter fs-2 fw-bold"></div>
                                <div class="text-support fs-4">អ្នកលក់</div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="glass-soft p-4 h-100">
                                <i class="bi bi-box mx-2 text-support fs-1"></i>
                                <div data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="2"
                                    class="purecounter fs-2 fw-bold"></div>
                                <div class="text-support fs-4">ផលិតផល</div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="glass-soft p-4 h-100">
                                <i class="bi bi-clipboard-check fs-1 text-support"></i>
                                <div data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="2"
                                    class="purecounter fs-2 fw-bold"></div>
                                <div class="text-support fs-4">ការបញ្ជាទិញ</div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="glass-soft p-4 h-100">
                                <i class="bi bi-hand-thumbs-up fs-1 text-support"></i>
                                <div data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2"
                                    data-purecounter-suffix="%" class="purecounter fs-2 fw-bold"></div>
                                <div class="text-support fs-4">ការពេញចិត្ត</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION COUNTER -->

            <!-- PARTNER -->
            <section class="py-5">
                <div class="container">
                    <div class="mt-5">
                        <div class="section-header" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <h3 class="section-title">ដៃគូរសហការ</h3>
                        </div>
                        <div class="swiper" id="partnersSwiper" aria-label="Partners carousel" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-delay="200">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="partner-tile">
                                        <div class="partner-logo">
                                            <img src="../assets/images/partner-aba.png" alt="ABA Bank" />
                                        </div>
                                        <div class="partner-name">ABA Bank</div>
                                        <div class="partner-meta">Banking Partner</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="partner-tile">
                                        <div class="partner-logo">
                                            <img src="../assets/images/partner-ac.jpg" alt="ACLEDA Bank" />
                                        </div>
                                        <div class="partner-name">ACLEDA Bank</div>
                                        <div class="partner-meta">Banking Partner</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="partner-tile">
                                        <div class="partner-logo">
                                            <img src="../assets/images/partner-vatanak.jpg" alt="Vattanc Bank" />
                                        </div>
                                        <div class="partner-name">Vattanc Bank</div>
                                        <div class="partner-meta">Banking Partner</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="partner-tile">
                                        <div class="partner-logo">
                                            <img src="../assets/images/partner-wing.jpg" alt="Wing Cambodia" />
                                        </div>
                                        <div class="partner-name">Wing</div>
                                        <div class="partner-meta">Fintech Partner</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="partner-tile">
                                        <div class="partner-logo">
                                            <img src="../assets/images/partner-fade-trade.png"
                                                alt="Fair Trade Cambodia" />
                                        </div>
                                        <div class="partner-name">Fair Trade Cambodia</div>
                                        <div class="partner-meta">NGO Partner</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="partner-tile">
                                        <div class="partner-logo">
                                            <img src="../assets/images/partner-moc.png" alt="ក្រសួងពាណិជ្ជកម្ម" />
                                        </div>
                                        <div class="partner-name">ក្រសួងពាណិជ្ជកម្ម</div>
                                        <div class="partner-meta">Government Partner</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="partner-tile">
                                        <div class="partner-logo">
                                            <img src="../assets/images/partner-ox.png" alt="Oxfam Cambodia" />
                                        </div>
                                        <div class="partner-name">Oxfam Cambodia</div>
                                        <div class="partner-meta">NGO Partner</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- TEAM -->
            <section class="team py-5">
                <div class="container">
                    <div class="section-header" data-aos="fade-right" data-aos-duration="1000">
                        <h3 class="section-title py-3">ក្រុមការងារ</h3>
                    </div>
                    <div class="row g-4">
                        <div class="col-12 col-lg-6">
                            <div class="card card-member-info border-0 shadow-lg text-start p-3" data-aos="fade-right"
                                data-aos-duration="1000">
                                <div class="d-flex justify-content-between gap-4">
                                    <div class="member-img" style="width: 120px; height: 120px">
                                        <img src="../assets/images/member1.JPG" class="rounded-circle mx-auto"
                                            width="120" height="120" alt="" />
                                    </div>
                                    <div>
                                        <h6 class="fw-bold fs-4 mb-3 card-text">សាន​ តុលា</h6>
                                        <p class="card-text">
                                            សួស្ដី, ខ្ញុំជានិស្សិតឆ្នាំទី៤ ផ្នែកព័ត៌មានវិទ្យា
                                            នៃសាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ(RUPP)<span class="dot-more">...</span><span
                                                class="text-more card-title">បច្ចុប្បន្នជាសិស្សកំពុងសិក្សាថ្នាក់អាហារូបករណ៍
                                                Web
                                                Development នៅមជ្ឈមណ្ឌល​សិក្សា​ជំនាញ​កុំព្យូទ័រ
                                                ANT។</span>
                                        </p>
                                        <div class="social-links fs-4">
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                            <a href="#"><i class="bi bi-telegram"></i></a>
                                            <a href="#"><i class="bi bi-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card card-member-info border-0 shadow-lg text-start p-3" data-aos="fade-left"
                                data-aos-duration="1000">
                                <div class="d-flex justify-content-between gap-4">
                                    <div class="member-img" style="width: 120px; height: 120px">
                                        <img src="../assets/images/member2.png" class="rounded-circle mx-auto"
                                            width="120" height="120" alt="" />
                                    </div>
                                    <div>
                                        <h6 class="fw-bold fs-4 mb-3">សុីម​ រតនា</h6>
                                        <p class="card-text">
                                            សួស្ដី, ខ្ញុំជានិស្សិតឆ្នាំទី៤ ផ្នែកព័ត៌មានវិទ្យា
                                            នៃសាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ(RUPP)<span class="dot-more">...</span><span
                                                class="text-more card-title">បច្ចុប្បន្នជាសិស្សកំពុងសិក្សាថ្នាក់អាហារូបករណ៍
                                                Web
                                                Development នៅមជ្ឈមណ្ឌល​សិក្សា​ជំនាញ​កុំព្យូទ័រ
                                                ANT។</span>
                                        </p>
                                        <div class="social-links fs-4">
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                            <a href="#"><i class="bi bi-telegram"></i></a>
                                            <a href="#"><i class="bi bi-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="card card-member-info border-0 shadow-lg text-start p-3" data-aos="fade-right"
                                data-aos-duration="1000">
                                <div class="d-flex justify-content-between gap-4">
                                    <div class="member-img" style="width: 120px; height: 120px">
                                        <img src="../assets/images/member3.jpg" class="rounded-circle mx-auto"
                                            width="120" height="120" alt="" />
                                    </div>
                                    <div>
                                        <h6 class="fw-bold fs-4 mb-3">កែវ សេរីវឌ្ឍ</h6>
                                        <p class="card-text">
                                            សួស្ដី, ខ្ញុំជានិស្សិតឆ្នាំទី4 ផ្នែកព័ត៌មានវិទ្យា
                                            នៃសាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ(RUPP)<span class="dot-more">...</span><span
                                                class="text-more card-title">បច្ចុប្បន្នជាសិស្សកំពុងសិក្សាថ្នាក់អាហារូបករណ៍
                                                Web
                                                Development នៅមជ្ឈមណ្ឌល​សិក្សា​ជំនាញ​កុំព្យូទ័រ
                                                ANT។</span>
                                        </p>
                                        <div class="social-links fs-4">
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                            <a href="#"><i class="bi bi-telegram"></i></a>
                                            <a href="#"><i class="bi bi-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card card-member-info border-0 shadow-lg text-start p-3" data-aos="fade-left"
                                data-aos-duration="1000">
                                <div class="d-flex justify-content-between gap-4">
                                    <div class="member-img" style="width: 120px; height: 120px">
                                        <img src="../assets/images/member4.jpg" class="rounded-circle mx-auto"
                                            width="120" height="120" alt="" />
                                    </div>
                                    <div>
                                        <h6 class="fw-bold fs-4 mb-3">ហួន​ ថានុន</h6>
                                        <p class="card-text">
                                            សួស្ដី, ខ្ញុំជានិស្សិតឆ្នាំទី៣ ផ្នែកព័ត៌មានវិទ្យា
                                            នៃសាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ(RUPP)<span class="dot-more">...</span><span
                                                class="text-more card-title">បច្ចុប្បន្នជាសិស្សកំពុងសិក្សាថ្នាក់អាហារូបករណ៍
                                                Web
                                                Development នៅមជ្ឈមណ្ឌល​សិក្សា​ជំនាញ​កុំព្យូទ័រ
                                                ANT។</span>
                                        </p>
                                        <div class="social-links fs-4">
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                            <a href="#"><i class="bi bi-telegram"></i></a>
                                            <a href="#"><i class="bi bi-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- our thank-->
            <section class="py-5">
                <div class="container">
                    <div class="card-surface p-4 p-lg-5 text-center" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="fw-bold mb-3">ថ្លែងអំណរគុណ</h3>
                        <p class="thank-content mb-5">
                            ពួកយើង​ សូមថ្លែងអំណរគុណយ៉ាងជ្រាលជ្រៅដល់
                            <span class="fw-bold">ក្រសួងប្រៃសណីយ៍ និងទូរគមនាគមន៍ មូលនិធិ ស.អ</span>
                            និង
                            <span class="fw-bold">ថ្នាក់បណ្ដុះបណ្ដាលបច្ចេកវិទ្យា ANT</span>
                            <br />
                            ដែលបានផ្តល់អាហារូបករណ៍ និងឱកាសដ៏មានតម្លៃសម្រាប់ការសិក្សាផ្នែក Web
                            Development ដល់ពួកយើង។<br />
                            អរគុណចំពោះការគាំទ្រ និងការយកចិត្តទុកដាក់របស់ស្ថាប័នទាំងអស់
                            ដែលមិនត្រឹមតែផ្ដល់ចំណេះដឹង និងជំនាញបច្ចេកទេសសម្រាប់ក្រុមយើងទេ
                            <br />
                            ប៉ុន្តែថែមទាំងជួយបង្កើនទំនុកចិត្ត និងសមត្ថភាពក្នុងការបង្កើតគម្រោង
                            KhmerBoost ដើម្បីរួមចំណែកក្នុងការលើកស្ទួយផលិតផលក្នុងស្រុក<br />
                            និងអាជីវកម្មឌីជីថលនៅកម្ពុជាទៀតផង។<br />
                            យើងសូមសន្យាថា នឹងប្រើប្រាស់ចំណេះដឹង និងជំនាញដែលទទួលបាន
                            ដើម្បីបន្តការបង្កើត និងអភិវឌ្ឍកម្មវិធី ឲ្យមានប្រយោជន៍ចំពោះសង្គម
                            និងសហគមន៍ក្នុងស្រុក។
                        </p>
                        <div class="row" data-aos="zoom-in-up" data-aos-duration="1000">
                            <div class="col-12 col-md-4 align-content-center">
                                <img class="img-fluid w-100 object-fit-contain" src="../assets/images/MPTC.png"
                                    alt="ក្រសួងប្រៃសណីយ៍" />
                            </div>
                            <div class="col-12 col-md-4 align-content-center">
                                <img class="img-fluid w-75 object-fit-contain" src="../assets/images/CBRD Fund.png"
                                    alt="CBRD Fund" style="transform: scale(0.7)" />
                            </div>
                            <div class="col-12 col-md-4 align-content-center">
                                <img class="img-fluid w-50 object-fit-contain" src="../assets/images/ANT.png"
                                    alt="ANT Technology" style="transform: scale(0.7)" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    @endsection
