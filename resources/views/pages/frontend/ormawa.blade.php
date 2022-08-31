@extends('layouts.frontend')

@section('title', ' Ormawa')

@section('content')

    <!-- header bem kema section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">

        <style>
            .header-kema-home .image-banner-home {
                width: 350px;
            }

            .header-kema-home .btn-medpart {
                background-color: var(--secondary-color);
                color: #ffffff;
                font-size: 16px;
            }

            .header-kema-home .btn-video-profile {
                border: 1px solid var(--secondary-color);
                color: var(--secondary-color);
                font-size: 16px;
            }

            @media (min-width:280px) and (max-width:576px) {
                .header-kema-home .image-banner-home {
                    width: 230px;
                    margin-top: 2rem;
                }

                .header-kema-home .btn-medpart {
                    font-size: 8px;
                }

                .header-kema-home .btn-video-profile {
                    font-size: 8px;
                }

                .header-kema-home .btn-video-profile img {
                    width: 10px;
                }
            }
        </style>
        <div class="header-kema-home container-xxl p-lg-4 position-relative">
            <!-- <div class="row justify-content-between p-5">
                    <div class="col-12 col-md-6">
                        <div class="header-text">
                            <span">Ormawa</span> <br>
                             <span class="purple-text">Vokasi</span>
                         </div>
                        <div class="title-text grey-color mt-3">
                            Vokasi tidak hanya sebatas istilah, vokasi hadir untuk membawa nama harum Indonesia dengan berbagai upaya. Temukan mahakarya Vokasi secara lengkap disini. Kami optimis dan terus berkarya untuk mewujudkan "Vokasi Bangun Negeri" bukan sebatas slogan.
                        </div>

                        <div class="d-flex mt-4 gap-3 d-none d-sm-flex">
                            <a class="btn btn-medpart rounded-pill px-4 py-3">
                                Media Partner
                            </a>
                            <a class="btn btn-video-profile rounded-pill px-4 py-2 ">
                                <img src="/frontend/images/btn-display.svg" alt="button-display">
                                Video Profile
                            </a>
                        </div>
                   </div>

                    <div class="col-12 col-md-6 text-center ">
                        <img src="/frontend/images/banner-bem.png" alt="banner-bem" class="image-banner-home">

                        <div class="d-flex justify-content-center mt-5 gap-2 d-sm-none d-md-none d-lg-none">
                            <a class="btn btn-medpart rounded-pill py-2">
                                Media Partner
                            </a>
                            <a class="btn btn-video-profile rounded-pill py-2">
                                <img src="/frontend/images/btn-display.svg" alt="button-display">
                                Video Profile
                            </a>
                        </div>
                    </div>
               </div> -->

            <a href="">
                <img src="/frontend/images/banner-ormawa.png" alt="banner" class="rounded-3 w-100">
            </a>
        </div>
    </section>
    <!-- end header bem kema section -->

    <!-- visi bem section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <div class="visi-banner container  position-relative mt-5" style="font-family: 'Poppins', sans-serif">
            <style>
                .visi-banner .image-banner-visi {
                    width: 425px;
                }

                .visi-banner .btn-report {
                    background-color: var(--secondary-color);
                    color: #ffffff;
                    font-size: 16px;
                    border-radius: 12px;
                }

                @media (min-width:280px) and (max-width:576px) {
                    .visi-banner .image-banner-visi {
                        width: 200px;
                        margin-top: 2rem;
                    }

                    .visi-banner .btn-report {
                        font-size: 8px;
                    }
                }
            </style>
            <div class="row justify-content-between p-4">

                <div class="col-12 col-md-6 d-grid justify-content-center align-content-center ps-lg-4">
                    <img src="/frontend/images/hero-visi-ormawa.png" alt="visi-banner"
                        class="image-banner-visi mb-4 mb-sm-0">
                </div>

                <div class="col-12 col-md-6 d-grid align-content-center justify-content-sm-start justify-content-center">
                    <div class="header-text text-uppercase mb-3">
                        Visi
                    </div>
                    <div class="title-text ">
                        {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suscipit in facilisis morbi nunc nunc
                        dui. Massa
                        massa purus
                        feugiat condimentum at. Suscipit egestas integer pharetra --}}
                        {!! $ormawas->vision !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end visi bem section -->

    <!-- misi bem section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .misi-banner .image-banner-misi {
                width: 400px;
            }

            .sub-header-text {
                font-size: 22px;
            }

            @media (min-width:280px) and (max-width:576px) {
                .misi-banner .image-banner-misi {
                    width: 230px;
                    margin-top: 2rem;
                }

                .misi-banner .btn-report {
                    font-size: 8px;
                }
            }
        </style>
        <div class="misi-banner container-xxl position-relative pb-5" style="font-family: 'Poppins', sans-serif">
            <div class="row justify-content-between p-sm-4 p-1">
                <div class="col-12 col-md-6 p-sm-5 p-3">
                    <div class=" header-text text-uppercase text-sm-end text-center">

                        <div class="d-flex d-sm-none justify-content-center">
                            <img src="/frontend/images/hero-misi-ormawa.png" alt="misi-banner"
                                class="image-banner-misi d-block d-sm-none">
                        </div>
                        Misi

                    </div>

                    <div class="title-text text-center text-sm-end grey-color mt-3">
                        {!! $ormawas->mission !!}
                    </div>

                </div>

                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center text-center">
                    <img src="/frontend/images/hero-misi-ormawa.png" alt="misi-banner"
                        class="image-banner-misi d-none d-sm-block">

                </div>
            </div>
        </div>
    </section>
    <!-- end misi bem section -->

    <!-- profile section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .header-karya img {
                border-radius: 16px;

            }
        </style>
        <div class="header-karya container-xxl position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="row header-text justify-content-center text-center p-md-4 p-2">
                Our Profile
                <img src="/frontend/images/banner_profile.png" alt="Banner home" class="mt-4">
            </div>
        </div>
    </section>
    <!-- end profile section -->


@endsection
