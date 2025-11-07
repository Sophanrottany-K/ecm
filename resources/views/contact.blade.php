    @extends('layouts.master')
    @section('title', 'Contact Us')
    @section('content')
        <main>
            <section class="contact-area position-relative">
                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31269.142252699163!2d104.90384559999998!3d11.5774458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1skm!2skh!4v1757149174614!5m2!1skm!2skh"
                        width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="container position-relative">
                    <div class="row gx-3 py-4 px-5 bg-contact w-100 align-items-center d-inline-flex position-absolute shadow-lg"
                        style="left: 50%; transform: translateX(-50%); top: -200px">
                        <div class="col-12 col-sm-6">
                            <div class="card">
                                <form action="#" class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="firstname" class="form-label text-allTheme">នាមត្រកូល</label>
                                                <input class="form-control" id="firstname" type="text"
                                                    placeholder="បញ្ចូលនាមត្រកូល" required />
                                            </div>
                                            <div class="col-6">
                                                <label for="lastname" class="form-label text-allTheme">នាមខ្លួន</label>
                                                <input class="form-control" id="lastname" type="text"
                                                    placeholder="បញ្ចូលនាមខ្លួន" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label text-allTheme">អុីមែល</label>
                                        <input class="form-control" id="" type="text" placeholder="បញ្ចូលអុីមែល"
                                            required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label text-allTheme">លេខទូរស័ព្ទ</label>
                                        <input class="form-control" id="" type="text"
                                            placeholder="បញ្ចូលលេខទូរស័ព្ទ" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label text-allTheme">មតិ</label>
                                        <textarea class="form-control" id="" rows="3" placeholder="ផ្ញើសារ..." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-pill-primary">
                                        <i class="bi bi-send-fill"></i> បញ្ចូនព័ត៍មាន
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h2 class="mb-3 text-center mt-md-0 mt-5">ទំនាក់ទំនង់ពួកយើង</h2>
                            <div class="card justify-content-center align-items-center">
                                <!-- <p class="text-allTheme px-2 text-center fs-5 mb-4">វេទិកាពាណិជ្ជកម្មដែលសហការភ្ជាប់អ្នកផលិត
                                        អ្នកលក់ និងអ្នកទិញក្នុងប្រទេស ដោយផ្តោតលើភាពទុកចិត្ត និងការផ្ទៀងផ្ទាត់។</p> -->
                                <ul class="contact-info gx-5">
                                    <li class="col-12 col-md-6">
                                        <a href="#" class="contact-link">
                                            <i class="bi bi-telephone-outbound"></i>
                                            <h5>
                                                <span>ជំនួយបច្ចេកទេស</span>
                                            </h5>
                                            <p>098278939</p>
                                        </a>
                                    </li>
                                    <li class="col-12 col-md-6">
                                        <a href="#" class="contact-link">
                                            <i class="bi bi-facebook"></i>
                                            <h5>
                                                <span>facebook</span>
                                            </h5>
                                            <p>KhmerBoots</p>
                                        </a>
                                    </li>

                                    <li class="col-12 col-md-6">
                                        <a href="https://t.me/khmer_boost" class="contact-link">
                                            <i class="bi bi-telegram"></i>
                                            <h5>
                                                <span>Telegram</span>
                                            </h5>
                                            <p>KhmerBoot</p>
                                        </a>
                                    </li>
                                    <li class="col-12 col-md-6">
                                        <a href="#" class="contact-link">
                                            <i class="bi bi-envelope"></i>
                                            <h5>
                                                <span>Email</span>
                                            </h5>
                                            <p>KhmerBoot@gmail.com</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    @endsection
