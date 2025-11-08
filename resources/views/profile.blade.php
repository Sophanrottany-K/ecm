@extends('layouts.masterHomepage')
@section('title', 'My Profile')
@section('content')
    <main>
        <section class="profile-area">
            <div class="container py-4">

                <div class="row g-4">
                    <div class="col-lg-12">
                        <!-- Profile header card -->
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-1">
                            <div class="position-relative">
                                <div class="position-relative">
                                    <img class="w-100 object-cover" style="height:210px"
                                        src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1600&auto=format&fit=crop"
                                        alt="cover">
                                    <form action="" class="form-img-cover">
                                        <label for="file-upload" class="custom-file-upload">
                                            <i class="bi bi-pencil-square"></i>
                                        </label>
                                        <input id="file-upload-cover" type="file" />
                                    </form>
                                </div>
                                <div class="position-relative mb-4">
                                    <img class="rounded-circle border border-3 border-white position-absolute  translate-middle-y ms-3"
                                        style="top:90%; width:120px; height:120px; object-fit:cover"
                                        src="../assets/icons/user1.png" alt="avatar-user">
                                    <form action="" class="form-img-avatar">
                                        <label for="file-upload" class="custom-file-upload">
                                            <i class="bi bi-pencil-square"></i>
                                        </label>
                                        <input id="file-upload-avatar" type="file" />
                                    </form>
                                </div>
                            </div>

                            <div class="card-body pt-5 position-relative">
                                <div class="d-flex align-items-start justify-content-between flex-wrap gap-2">
                                    <div class="ms-3">
                                        <h4>khmerboost</h4>
                                    </div>
                                    <button type="button"
                                        class="text-decoration-none btn btn-pill-primary position-absolute top-0 "
                                        style="right: 50px;" data-bs-toggle="modal" data-bs-target="#ModalInfo">កំណត់ -
                                        ប្រវត្តិរូប</button>
                                </div>
                                <div class="ms-3">
                                    <span class="text-secondary">@KhmerBoost1921698</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- right side -->


                    <div class="col-lg-6">
                        <!-- Personal info -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                            <div class="d-flex justify-content-between align-items-center  mb-3">
                                <h6 class=" fw-semibold fs-5">ព័ត៍មានផ្ទាល់ខ្លួន</h6>
                            </div>
                            <ul class="list-unstyled small mb-0">
                                <li class="d-flex justify-content-between py-2 ">
                                    <span class="text-secondary txt-info">ឈ្មោះ</span>
                                    <span class="txt-info">khmerboost</span>
                                </li>
                                <li class="d-flex justify-content-between py-2 ">
                                    <span class="text-secondary txt-info">ភេទ</span>
                                    <span class="txt-info">មិនទាន់មាន</span>
                                </li>
                                <li class="d-flex justify-content-between py-2 ">
                                    <span class="text-secondary txt-info">ថ្ងៃខែឆ្នាំកំណើត</span>
                                    <span class="txt-info">មិនទាន់មាន</span>
                                </li>
                                <li class="d-flex justify-content-between py-2 ">
                                    <span class="text-secondary txt-info">អុីមែល</span>
                                    <span class="txt-info"><a href="#">KhmerBoost@gmail.com</a></span>
                                </li>
                                <li class="d-flex justify-content-between py-2 ">
                                    <span class="text-secondary txt-info">លេខទូរស័ព្ទ</span>
                                    <span class="txt-info">09174673937</span>
                                </li>
                                <li class="d-flex justify-content-between py-2 ">
                                    <span class="text-secondary txt-info">ទីតាំង</span>
                                    <span class="txt-info">មិនទាន់មាន</span>
                                </li>
                                <li class="d-flex justify-content-between py-2 ">
                                    <span class="text-secondary txt-info">អាសយដ្ឋាន</span>
                                    <address class="mb-0 txt-info">មិនទាន់មាន</address>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <span class="text-secondary txt-info">ថ្ងៃបង្កើតគណនី</span>
                                    <span class="txt-info">Dec 10, 2025</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Social networks -->
                    <div class="col-lg-6">
                        <div class="card social border-0 shadow-sm rounded-4 p-4 mb-4 ">
                            <div class="card-header">
                                <h6 class=" fw-semibold fs-5 mb-3">បណ្ដាញសង្គមផ្សេងៗ</h6>
                                <i class="bi bi-plus btn btn-pill-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalAddsm"></i>
                            </div>
                            <ul class="list-unstyled small mb-0">
                                <li class="py-1 d-none"><a href="#"> <i
                                            class="bi bi-telegram me-2"></i><span>Telegram</span></a>
                                    <!-- <li class="py-1"><a href="#"> <i class="bi bi-telegram me-2 d-none"></i><span>មិនទាន់មាន</span></a> -->
                                </li>
                            </ul>
                        </div>
                        <!-- Deleted Account -->
                        <div class="col-lg-12">
                            <div class="card DeletedAcc border-0 shadow-sm rounded-4 p-4 mb-4">
                                <h6 class=" fw-semibold fs-5 mb-3">លុបគណនី</h6>

                                <p class="card-text">តើអ្នកប្រាកដថាចង់លុបគណនីរបស់អ្នកមែនទេ?
                                    វានឹងលុបទិន្នន័យគណនីរបស់អ្នកទាំងអស់ចេញពីគេហទំព័រ។
                                    ដើម្បីលុបគណនីរបស់អ្នក
                                    សូមបញ្ចូលពាក្យសម្ងាត់របស់អ្នកខាងក្រោម។</p>

                                <form action="" onsubmit="killBehavior()">
                                    <div class="mb-3 position-relative">
                                        <label for="password-comfirm" class="card-text mb-2">ពាក្យសម្ងាត់</label>
                                        <input type="password" class="form-control" id="password-comfirm"
                                            placeholder="សូមបញ្ចូលពាក្យសម្ងាត់របស់អ្នក">
                                        <i class="bi bi-eye-slash-fill icon-show"
                                            style="position: absolute; top: 55%; right:20px; cursor: pointer; font-size: 20px;color:var(--bs-ink)"></i>
                                    </div>
                                    <button type="submit" data-bs-toggle="modal" data-bs-target="#modalDeletedAcc"
                                        class="btn btn-pill-primary"><i
                                            class="bi bi-person-x-fill me-2"></i><span>លុបគណនី</span></button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Modal Add social media -->
        <div class="modal fade" id="modalAddsm" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-3 ">
                    <div id="liveAlertPlaceholderS" class="position-absolute py-2 w-100 top-0 start-0 "></div>
                    <div class="modal-header  border-0 py-3">
                        <h3 class="mx-auto">បណ្ដាញសង្គមផ្សេងៗ</h3>
                    </div>
                    <div class="modal-body position-relative ">
                        <p class="fs-5">ជ្រើសរើសចរបស់អ្នក</p>
                        <form action="../index.html">
                            <div class="mb-3">
                                <div class="d-flex gap-1 mb-3">
                                    <input class=" rounded-start py-2 form-control" id="social-1" type="text"
                                        value="" placeholder="username/web address">
                                    <select class="form-select w-50 rounded-end bg-white "
                                        aria-label="Default select example">
                                        <option disabled>Social Media</option>
                                        <option selected value="Telegram">Telegram</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="LinkIN">LinkIn</option>
                                        <option value="WeChart">WeChart</option>
                                    </select>
                                </div>
                                <button type="button" class="alert alert-warning px-2 py-1 align-content-center "><i
                                        class="bi bi-plus fs-6"></i><span
                                        style="font-size: 15px;">បន្ថែមតំណភ្ជាប់បណ្ដាញសង្គម</span></button>
                            </div>

                            <div class="d-flex justify-content-center mb-3 gap-3">
                                <button type="button" class="btn btn-danger rounded-5"
                                    data-bs-dismiss="modal">បោះបង់</button>
                                <button type="button" class="btn btn-pill-primary"
                                    id="liveAlertSocialMedia">រក្សាទុក</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- Modal Delete account -->
        <div class="modal fade" id="modalDeletedAcc" tabindex="-1" aria-labelledby="modalDeletedAccLabel"
            aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-3">
                    <div class="modal-header  border-0 py-1">
                        <h3 class=" mx-auto">លុបគណនី</h3>
                    </div>
                    <div class="modal-body ">
                        <p class="text-center fs-5">សូមបញ្ចូល <strong>"យល់ព្រមនឹងលុបគណនី"</strong>
                            ដើម្បីបញ្ជាក់តាមទម្រង់ខាងក្រោម:
                            </ផ>
                        <form action="../index.html" class="d-flex flex-column align-items-center">
                            <div class="mb-3 w-100">
                                <label for="txtChg" class="form-label w-100"></label>
                                <input class="form-control" id="txtChg" type="text" placeholder=""
                                    value="យល់ព្រមនឹងលុបគណនី" required>
                            </div>
                            <div class="d-flex gap-3">
                                <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal"
                                    aria-label="Close">បោះបង់</button>
                                <button type="submit" class="btn btn-pill-primary">យល់ព្រម</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal profile -->
        <div class="modal fade  " id="ModalInfo" tabindex="-1" aria-labelledby="ModalInfoLabel" aria-hidden="true"
            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0 justify-content-center bg-warning">
                        <div class="modal-header-content">
                            <img src="../assets/icons/user1.png" alt="user-image">
                        </div>
                    </div>
                    <div class="modal-body">
                        <ul class="navbar px-5 rounded-pill" type="none">
                            <li class="nav-item">
                                <button type="button" class="nav-link category-button active" data-target="tab1"><i
                                        class="bi bi-person-circle me-2"></i><span>ព័ត៍មានផ្ទាល់ខ្លួន</span></button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link category-button" data-target="tab2"><i
                                        class="bi bi-pen me-2"></i><span>ផ្លាស់ប្តូរពាក្យសម្ងាត់</span></button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link category-button" data-target="tab3"><i
                                        class="bi bi-bell me-2"></i><span>ការជូនដំណឹង</span></button>
                            </li>
                        </ul>
                        <form class="page-content tab1" onsubmit="killBehavior()">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="firstName" class="form-label">នាមត្រកូល</label>
                                        <input class="form-control" id="firstName" type="text" value="khmer"
                                            placeholder="បញ្ជូលឈ្មោះ">
                                    </div>
                                    <div class="col-6">
                                        <label for="LastName" class="form-label">នាមខ្លួន</label>
                                        <input class="form-control" id="LastName" type="text" value="boost"
                                            placeholder="បញ្ជូលឈ្មោះ">
                                    </div>
                                </div>
                            </div>
                            <label for="gender" class="form-label">ភេទ</label>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input " name="radioGender" type="radio" value="Male"
                                        id="GMale">
                                    <label class="form-check-label" for="GMale">
                                        ប្រុស
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="radioGender" type="radio" value="Female"
                                        id="GFemale">
                                    <label class="form-check-label" for="GFemale">
                                        ស្រី
                                    </label>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="Date" class="form-label">ថ្ងៃខែឆ្នាំ កំណើត</label>
                                <input class="form-control" id="Date" type="date" placeholder="ថ្ងៃខែ">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">អុីម៉ែល</label>
                                <input class="form-control" id="email" type="email" placeholder="បញ្ជូលអុីម៉ែល"
                                    value="KhmerBoost@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label">លេខទូរស័ព្ទ</label>
                                <input class="form-control" id="telephone" type="tel"
                                    placeholder="បញ្ជូលលេខទូរស័ព្ទ" value="09174673937">
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">ទីតាំង</label>
                                <select class="form-select form-select-md py-2 mb-3 " id="loaction">
                                    <option disabled selected>ជ្រើសរើសទីតាំង</option>
                                    <option value="pp">Phnom Penh</option>
                                    <option value="pt">Kampong Tom</option>
                                    <option value="kep">Kep</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="address" class="form-label">អាសយដ្ឋាន</label>
                                <input class="form-control" id="address" type="text" placeholder="">
                            </div>

                            <div class="d-flex justify-content-center gap-3">
                                <button type="button" class="btn btn-danger rounded-pill px-3"
                                    data-bs-dismiss="modal">បោះបង់</button>
                                <button type="submit" class="btn btn-pill-primary save-change-info" id="liveAlertBtn">
                                    <i class="bi bi-floppy2-fill me-1"></i>
                                    <span>រក្សាទុកការកែប្រែ</span>
                                </button>
                            </div>
                        </form>

                        <div class="page-content tab2">
                            <!-- password -->
                            <div class="card border-0 shadow-sm rounded-4 p-4">
                                <h6 class=" fw-semibold mb-3">ពាក្យសម្ងាត់</h6>
                                <form action="" class="row">
                                    <div class="mb-3 position-relative">
                                        <label for="password" class="form-label">លេខសម្ងាត់ - បច្ចុប្បន្ន</label>
                                        <input class="form-control" id="password" type="password"
                                            placeholder="បញ្ចូលពាក្យសម្ងាត់បច្ចុប្បន្ន">
                                        <i class="bi bi-eye-slash-fill icon-show"
                                            style="position: absolute; top: 55%; right:20px; cursor: pointer; font-size: 20px;"></i>

                                    </div>
                                    <div class="mb-3  position-relative">
                                        <label for="password1" class="form-label">លេខសម្ងាត់ - ថ្មី</label>
                                        <input class="form-control" id="password1" type="password"
                                            placeholder="បញ្ចូលពាក្យសម្ងាត់ថ្មី">
                                        <i class="bi bi-eye-slash-fill icon-show1"
                                            style="position: absolute; top: 55%; right:20px; cursor: pointer; font-size: 20px;"></i>
                                    </div>
                                    <div class="mb-3 position-relative ">
                                        <label for="password2" class="form-label">បញ្ចាក់លេខសម្ងាត់ - ថ្មី</label>
                                        <input class="form-control" id="password2" type="password"
                                            placeholder="បញ្ចូលពាក្យសម្ងាត់ថ្មី">
                                        <i class="bi bi-eye-slash-fill icon-show2"
                                            style="position: absolute; top: 55%; right:20px; cursor: pointer; font-size: 20px;"></i>
                                    </div>

                                    <div class=" d-flex justify-content-center">
                                        <button type="button" class="btn btn-pill-primary" id="liveAlertUpdatePassword">
                                            <i class="bi bi-floppy2-fill"></i> <span>រក្សាទុកលេខសម្ងាត់ថ្មី</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="page-content tab3">
                            <img src="../assets/images/No_notifcation-removebg-preview.png" class="w-75 mx-auto"
                                alt="no No_notification">
                        </div>
                    </div>
                    <div id="liveAlertPlaceholder"></div>
                    <div id="liveAlertPlaceholderUP"></div>

                </div>
            </div>
        </div>
        <!-- modal success -->

    </main>
@endsection
