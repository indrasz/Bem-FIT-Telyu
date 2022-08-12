@extends('layouts.frontend')

@section('title', ' Home')

@section('content')

    <!-- header karya section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .header-karya img {
                border-radius: 16px;

            }
        </style>
        <div class="header-karya container-fluid  position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="row justify-content-between p-md-4 ">
                <img src="/frontend/images/header-banner-advokasi.png" alt="Banner home">
            </div>
        </div>
    </section>
    <!-- end header karya section -->

    <!-- kema fit information section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">

        <div class="kema-fit-information container-xxl p-3 mb-4 position-relative"
            style="font-family: 'Poppins', sans-serif">

            <!-- web view -->
            <div class="d-sm-flex flex-row gap-5 text-center justify-content-center d-none d-sm-block">
                <div class=" p-3">
                    <div class="college-total semibold-text fs-24 mb-3">
                        845
                    </div>
                    <img src="/frontend/images/ic-received.png" alt="college-logo" width="70" class="college-image ">
                    <div class="mt-3 text-uppercase semibold-text fs-16 ">
                        diterima
                    </div>
                </div>
                <div class=" p-3">
                    <div class="college-total semibold-text fs-24 mb-3">
                        150
                    </div>
                    <img src="/frontend/images/ic-pending.png" alt="ormawa-logo" width="70" class="college-image">
                    <div class="mt-3 semibold-text fs-16 text-uppercase">
                        pending
                    </div>
                </div>
                <div class=" p-3">
                    <div class="college-total semibold-text fs-24 mb-3 ">
                        640
                    </div>
                    <img src="/frontend/images/ic-approved.png" alt="prodi-logo" width="70"
                        class="d-none d-sm-block college-image">
                    <div class="mt-3 semibold-text fs-16 text-uppercase">
                        disetujui
                    </div>
                </div>
                <div class=" p-3">
                    <div class="college-total semibold-text fs-24 mb-3 ">
                        55
                    </div>
                    <img src="/frontend/images/ic-rejected.png" alt="prodi-logo" width="70"
                        class="d-none d-sm-block college-image">
                    <div class="mt-3 semibold-text fs-16 text-uppercase">
                        ditolak
                    </div>
                </div>
            </div>
            <!-- web view -->

            <div class=" d-sm-none">

                <div class="college-information d-flex p-3">
                    <img src="/frontend/images/ic-received.png" alt="college-logo" style="max-width: 80px; max-height:50px;"
                        class="college-image px-3 col-4">
                    <div class="d-flex flex-column align-content-center text-uppercase ">
                        <h6 class="semibold-text fs-16">
                            Diterima
                        </h6>
                        <h4 class="college-total semibold-text fs-16 ">
                            845
                        </h4>
                    </div>
                </div>

                <div class="college-information d-flex p-3">
                    <img src="/frontend/images/ic-pending.png" alt="college-logo" style="max-width: 80px; max-height:50px;"
                        class="college-image px-3 col-4">
                    <div class="d-flex flex-column align-content-center text-uppercase ">
                        <h6 class="semibold-text fs-16">
                            Pending
                        </h6>
                        <h4 class="college-total semibold-text fs-16 ">
                            150
                        </h4>
                    </div>
                </div>

                <div class="college-information d-flex p-3">
                    <img src="/frontend/images/ic-approved.png" alt="college-logo" style="max-width: 80px; max-height:50px;"
                        class="college-image px-3 col-4">
                    <div class="d-flex flex-column align-content-center text-uppercase ">
                        <h6 class="semibold-text fs-16">
                            Disetujui
                        </h6>
                        <h4 class="college-total semibold-text fs-16 ">
                            640
                        </h4>
                    </div>
                </div>

                <div class="college-information d-flex p-3">
                    <img src="/frontend/images/ic-rejected.png" alt="college-logo" style="max-width: 80px; max-height:50px;"
                        class="college-image px-3 col-4">
                    <div class="d-flex flex-column align-content-center text-uppercase ">
                        <h6 class="semibold-text fs-16">
                            Ditolak
                        </h6>
                        <h4 class="college-total semibold-text fs-16 ">
                            55
                        </h4>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- end kema fit information section -->

    <!-- advokasi section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <div class="advokasi-banner container  position-relative pb-5" style="font-family: 'Poppins', sans-serif">
            <style>
                .advokasi-banner .image-banner-advokasi {
                    width: 400px;
                }

                .advokasi-banner .btn-report {
                    background-color: var(--secondary-color);
                    color: #ffffff;
                    font-size: 16px;
                }

                @media (min-width:280px) and (max-width:576px) {
                    .advokasi-banner .image-banner-advokasi {
                        width: 230px;
                        margin-top: 2rem;
                    }

                    .advokasi-banner .btn-report {
                        font-size: 8px;
                    }
                }
            </style>
            <div class="row justify-content-between p-4">

                <div class="col-12 col-md-6 text-center ps-lg-4">
                    <img src="/frontend/images/advokasi-banner.png" alt="advokasi-banner" class="image-banner-advokasi">
                </div>

                <div class="col-12 col-md-6 mt-5 mt-sm-0">
                    <div class="header-text text-uppercase">
                        Advokasi
                    </div>
                    <div class="title-text mt-4">
                        Advokasi hadir untuk aktualisasi peran kami untuk mewujudkan kesejahteraan. Kami sangat membutuhkan saran, pendapat, dan kritik Anda sebagai alasan kami untuk terus tumbuh lebih tinggi, terus berkembang lebih baik, karena kami percaya KEMA FIT bukan hanya memerlukan #TitikTerang, lebih dari itu memerlukan rasa dibersamai, rasa dimiliki, rasa diperjuangkan, dengan Bantuan Anda mari bersama - sama merawat FIT tumbuh, menjadi sebuah pohon yang tidak hanya hidup, lebih dari itu, ia mampu menghasilkan buah, membagi kebahagiaan, membagikan senyuman kepada semua orang.

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end advokasi section -->

    <!-- advokasi section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <div class="advokasi-banner container  position-relative pb-5" style="font-family: 'Poppins', sans-serif">
            <style>
                .advokasi-banner .image-banner-advokasi {
                    width: 400px;
                }

                .advokasi-banner .btn-report {
                    background-color: var(--secondary-color);
                    color: #ffffff;
                    font-size: 16px;
                }

                .form-check-input {
                    background: #fff !important;
                    border: 2px solid #7B1FA2 !important;
                    transform: scale(-1) !important;
                }

                .form-check-input:checked {

                    opacity: 1 !important;
                    border: 6px solid #7B1FA2 !important;
                    transition: transform 0.3s linear, opacity 0.3s linear !important;
                    transform: scale(1) !important;
                }

                .advokasi-banner .btn-send {
                    background: #C8238B;
                    border-radius: 15px;
                }

                @media (min-width:280px) and (max-width:576px) {
                    .advokasi-banner .image-banner-advokasi {
                        width: 230px;
                        margin-top: 2rem;
                    }

                    .advokasi-banner .btn-report {
                        font-size: 8px;
                    }


                }
            </style>
            <form action="{{ route('advokasi-store') }}" method="POST">
                @csrf
                <div class="d-flex flex-row justify-content-center p-4">

                    <div class="col-12 col-md-5 text-start w-lg-50">
                        <div id="div1" class="hide">
                            <div class="mb-3">
                                <label for="name" class="form-label medium-text fs-16">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control grey-color fs-16 regular-text border-grey"
                                    id="name" placeholder="Masukkan nama anda">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label medium-text fs-16">Email address</label>
                                <input type="email" name="email" class="form-control grey-color fs-16 regular-text border-grey"
                                    id="email" placeholder="Masukkan email anda">
                            </div>
                        </div>

                        <label for="name" class="form-label medium-text fs-16">Kirim dengan data pribadi</label>

                        <div class="d-flex justify-content-around gap-3">

                            <div class="form-check">
                                <input class="form-check-input " type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" onclick="show2();" checked>
                                <label class="form-check-label medium-text fs-16" for="flexRadioDefault1">
                                    Iya
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" onclick="show1();">
                                <label class="form-check-label medium-text fs-16" for="flexRadioDefault2">
                                    Tidak
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1"
                                class="form-label medium-text fs-16">Kategori</label>
                            <select name="category" class="form-select grey-color fs-16 regular-text border-grey"
                                aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label  medium-text fs-16">Pesan</label>
                            <textarea name="message" class="form-control grey-color fs-16 regular-text border-text-area" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>

                        <button type="submit"
                            class="btn btn-send w-100 py-2 px-5 text-white text-capitalize semibold-text fs-18">Kirim</button>
                    </div>


                </div>

            </form>

        </div>
    </section>
    <!-- end advokasi section -->
@endsection

@push('after-script')
    <script>
        function show1() {
            document.getElementById('div1').style.display = 'none';
        }

        function show2() {
            document.getElementById('div1').style.display = 'block';
        }
    </script>
@endpush
