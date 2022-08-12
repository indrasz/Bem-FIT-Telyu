@extends('layouts.frontend')

@section('title', ' Home')

@section('content')

    {{-- <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>

    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a> --}}

    <!-- header bem kema section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">

        <style>
            .header-kema-home .image-banner-home {
                width: 300px;
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
                    width: 150px;
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
        <div class="header-kema-home container-xxl p-lg-4 position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="row justify-content-between p-5">
                <div class="col-12 col-md-6">
                    <div class="header-text">
                        <span class="purple-text">BEM</span> KEMA FIT<br>
                        KABINET <span class="purple-text">TITIK TERANG</span>
                    </div>
                    <div class="title-text mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suscipit in facilisis morbi nunc nunc
                        dui. Massa massa purus
                        feugiat condimentum at. Suscipit egestas integer pharetra
                    </div>

                    <div class="d-flex mt-4 gap-3 d-none d-sm-flex">
                        <a class="btn btn-medpart rounded-pill px-4 py-3">
                            Media Partner
                        </a>
                        <a class="btn btn-video-profile rounded-pill px-4 py-2 ">
                            <img src="{{ asset('frontend/images/btn-display.svg') }}" alt="button-display">
                            Video Profile
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 text-center ">
                    <img src="{{ asset('frontend/images/banner1.png') }}" alt="banner-home" class="image-banner-home">

                    <div class="d-flex justify-content-center mt-5 gap-2 d-sm-none d-md-none d-lg-none">
                        <a class="btn btn-medpart rounded-pill py-2">
                            Media Partner
                        </a>
                        <a class="btn btn-video-profile rounded-pill py-2">
                            <img src="{{ asset('frontend/images/btn-display.svg') }}" alt="button-display">
                            Video Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end header bem kema section -->

    <!-- kema fit information section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <div class="kema-fit-information container-xxl p-3 mb-4 position-relative">
            <!-- web view -->
            <div class="d-sm-flex flex-row gap-5 text-center justify-content-center d-none d-sm-block">
                <div class="px-4">
                    <div class="college-total semibold-text fs-24 mb-3">
                        3500
                    </div>
                    <img src="/frontend/images/logo-mahasiswa.png" alt="college-logo" width="120" class="college-image ">
                    <div class="mt-3 text-uppercase semibold-text fs-16">
                        Mahasiswa <br> Aktif
                    </div>
                </div>
                <div class="px-4">
                    <div class="college-total semibold-text fs-24 mb-3">
                        14
                    </div>
                    <img src="/frontend/images/logo-ormawa.png" alt="ormawa-logo" width="80" class="college-image">
                    <div class="mt-3 text-uppercase semibold-text fs-16">
                        Ormawa
                    </div>
                </div>
                <div class="px-4">
                    <div class="college-total semibold-text fs-24 mb-3 ">
                        12
                    </div>
                    <img src="/frontend/images/logo-prodi.png" alt="prodi-logo" width="135"
                        class="d-none d-sm-block college-image">
                    <div class="mt-3 text-uppercase semibold-text fs-16">
                        Prodi
                    </div>
                </div>
            </div>
            <!-- web view -->

            <div class="d-sm-none d-md-none d-lg-none">
                <div class="college-information d-flex p-3">
                    <img src="/frontend/images/logo-mahasiswa.png" alt="college-logo" width="80" height="70"
                        class="college-image px-3 col-4">
                    <div class="d-flex flex-column align-content-center text-uppercase ">
                        <h6 class="semibold-text fs-16">
                            Mahasiswa Aktif
                        </h6>
                        <h4 class="college-total semibold-text fs-16 mb-3">
                            3500
                        </h4>
                    </div>
                </div>

                <div class="college-information d-flex p-3">
                    <img src="/frontend/images/logo-ormawa.png" alt="college-logo" width="80" height="70"
                        class="college-image px-3 col-4">
                    <div class="d-flex flex-column align-content-center text-uppercase semibold-text">

                        <h6 class="semibold-text fs-16">
                            Ormawa
                        </h6>
                        <h4 class="college-total fs-16 mb-3">
                            14
                        </h4>
                    </div>
                </div>

                <div class="college-information d-flex p-3">
                    <img src="/frontend/images/logo-prodi.png" alt="college-logo" width="80" height="60"
                        class="college-image px-3 col-4">
                    <div class="d-flex flex-column align-content-center text-uppercase semibold-text">

                        <h6 class="semibold-text fs-16">
                            Prodi
                        </h6>
                        <h4 class="college-total fs-16 mb-3">
                            12
                        </h4>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- end kema fit information section -->
    <!-- header karya section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .header-karya img {
                border-radius: 16px;
            }
        </style>
        <div class="header-karya container-xxl  position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="row justify-content-between p-md-4 p-2">
                <img src="/frontend/images/benner_karya.png" alt="Banner home">
            </div>
        </div>
    </section>
    <!-- end header karya section -->

    <!-- hot news section -->
    <section class="h-100 w-100 mt-5 mb-5" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .hot-news .headline {
                font: var(--title-text);
            }

            .hot-news .hot-news-card .image-preview {
                -o-object-fit: cover;
                object-fit: cover;
                border-radius: 16px 16px 0px 0px;
                max-width: 340px;
                height: 300px;
            }

            .hot-news-card {
                background: #F9F9F9;
                box-shadow: 25px 27px 37px -9px rgba(106, 48, 147, 0.1);
                border-radius: 30px;
                max-width: 340px;
                margin: 0 12px;
            }

            .hot-news-card .text-preview {
                max-height: 88px;
            }

            .hot-news-card .title {
                font: var(--title-text);
                color: #000000;
            }

            .hot-news-card .text-preview {
                font: var(--body-text);
                color: #7882A4;
                text-align: justify;
            }

            .hot-news-card .btn-see-more {
                background: var(--secondary-color);
                border-radius: 8px;
            }

            @media (min-width:280px) and (max-width: 576px) {
                .hot-news-card {
                    max-width: 250px;
                }

                .hot-news-card .image-mobile-preview {
                    max-width: 250px;
                    max-height: 200px;
                }

            }
        </style>
        <div class="hot-news container-xxl px-3 pb-5 mb-4 position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="fs-24 medium-text mb-5 px-3">
                Hot News
            </div>

            <div class="carousel gap-4" style="background: #ffffff !important;"
                data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true }'>

                <!-- Card Container 1 -->
                @forelse ($news as $key => $item)
                    <div class="box-border bg-white rounded-2xl hot-news-card mb-4">
                        <div class="">
                            @if (isset($item->thumbnail) != null)
                                <img src=" {{ url(Storage::url($item->thumbnail)) }}" alt="preview"
                                    class="d-none d-sm-block image-preview" />
                                <img src=" {{ url(Storage::url($item->thumbnail)) }}" alt="preview"
                                    class="d-sm-none image-mobile-preview" />
                            @else
                                <img src="{{ url('https://via.placeholder.com/750x500') }}" alt="preview"
                                    class="d-none d-sm-block image-preview" />
                                <img src="{{ url('https://via.placeholder.com/750x500') }}" alt="preview"
                                    class="d-sm-none image-mobile-preview" />
                            @endif

                            <div class="px-2 mt-2">
                                <div class="title p-md-2 mt-3 text-capitalize"> {{ $item->name ?? '' }}</div>
                                <div class="text-preview p-md-2 text-capitalize text-wrap text-truncate mt-2 mt-sm-0">
                                    {!! $item->description ?? '' !!}</div>
                            </div>
                            <div class="d-flex justify-content-center mt-3 pb-3">
                                <a href="#" class="btn btn-see-more py-2 px-5 text-white text-capitalize">see
                                    more</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="justify-content-center text-center">
                        Belum ada Product yang diupload
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- end hot news section -->

    <!-- header karya section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .header-karya img {
                border-radius: 16px;
            }
        </style>
        <div class="header-karya container-xxl pb-5 position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="row justify-content-between p-md-4 p-2">
                <img src="/frontend/images/benner_karya2.png" alt="Banner home">
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-md-6 p-2 p-md-4 mt-md-3">
                    <img src="/frontend/images/sub_benner.png" class="w-100" alt="Sub Banner home">
                </div>

                <div class="col-12 col-md-6 p-2 p-md-4 mt-md-3">
                    <img src="/frontend/images/subenner2.png" class="w-100 " alt="Sub Banner home">
                </div>
            </div>
        </div>
    </section>
    <!-- end header karya section -->

    <!-- karya news section -->
    <section class="h-100 w-100 mt-5 mb-5" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .hot-creation-news .headline {
                font: var(--title-text);
            }

            .hot-creation-news .hot-creation-news-card .image-preview {
                -o-object-fit: cover;
                object-fit: cover;
                border-radius: 16px 16px 0px 0px;
                max-width: 340px;
                min-height: 300px;
            }

            .hot-creation-news-card {
                background: #F9F9F9;
                box-shadow: 25px 27px 37px -9px rgba(106, 48, 147, 0.1);
                border-radius: 30px;
                max-width: 340px;
                margin: 0 12px;
            }

            .hot-creation-news-card .text-preview {
                max-height: 88px;
            }

            .hot-creation-news-card .title {
                font: var(--title-text);
                color: #000000;
            }

            .hot-creation-news-card .text-preview {
                font: var(--body-text);
                color: #7882A4;
                text-align: justify;
            }

            .hot-creation-news-card .btn-see-more {
                background: var(--secondary-color);
                border-radius: 8px;
            }

            @media (min-width:280px) and (max-width: 576px) {
                .hot-creation-news-card {
                    max-width: 250px;
                }

                .hot-creation-news-card img {
                    max-width: 250px;
                    max-height: 200px;
                }
            }
        </style>
        <div class="hot-creation-news container-xxl px-2 pb-5 mb-4 position-relative"
            style="font-family: 'Poppins', sans-serif">
            <div class="fs-24 medium-text mb-5 px-3">
                News
                <span class="float-end me-3">See All</span>
            </div>

            <div class="carousel gap-4" style="background: #ffffff !important;"
                data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true }'>

                <!-- Card Container 1 -->
                @forelse ($creation as $key => $item)
                    <div class="box-border bg-white rounded-2xl hot-creation-news-card mb-4">
                        <div class="">
                            @if (isset($item->thumbnail) != null)
                                <img src=" {{ url(Storage::url($item->thumbnail)) }}" alt="preview"
                                    class="d-none d-sm-block image-preview" />
                                    
                                <img src=" {{ url(Storage::url($item->thumbnail)) }}" alt="preview"
                                    class="d-sm-none image-mobile-preview" />
                            @else
                                <img src="{{ url('https://via.placeholder.com/750x500') }}" alt="preview"
                                    class="d-none d-sm-block image-preview" />
                                <img src="{{ url('https://via.placeholder.com/750x500') }}" alt="preview"
                                    class="d-sm-none image-mobile-preview" />
                            @endif

                            <div class="px-2 mt-2">
                                <div class="title p-md-2 mt-3 text-capitalize"> {{ $item->name ?? '' }}</div>
                                <div class="text-preview p-md-2 text-capitalize text-wrap text-truncate mt-2 mt-sm-0">
                                    {!! $item->description ?? '' !!}</div>
                            </div>
                            <div class="d-flex justify-content-center mt-3 pb-3">
                                <a href="#" class="btn btn-see-more py-2 px-5 text-white text-capitalize">see
                                    more</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="justify-content-center text-center">
                        Belum ada Product yang diupload
                    </div>
                @endforelse

            </div>
        </div>
    </section>
    <!-- end karya news section -->

    <!-- podcast section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .btn-podcast {
                background: #C8238B;
                border-radius: 15px;
            }
        </style>
        <div class="podcast-bem-fit container-xxl  position-relative pb-5" style="font-family: 'Poppins', sans-serif">
            <div class="title-section semibold-text fs-36 justify-content-center text-center">
                Listen Our Spotify
            </div>
            <div class="podcast-link mt-4 p-4">
                <div class="carousel gap-4" style="background: #ffffff !important;"
                    data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": true, "pageDots": true, "prevNextButtons": false, "draggable": false }'>

                    <iframe style="border-radius:12px"
                        src="https://open.spotify.com/embed/show/2MUDGIF4iIxdvq1iGiWkBF?utm_source=generator"
                        width="100%" height="232" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <iframe style="border-radius:12px"
                        src="https://open.spotify.com/embed/show/2MUDGIF4iIxdvq1iGiWkBF?utm_source=generator"
                        width="100%" height="232" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                </div>
            </div>
            <div class="title-section justify-content-center text-center mt-4">
                <a class="btn btn-podcast text-white semibold-text fs-18 w-50 py-3">
                    Dengarkan yang lainnya
                </a>
            </div>
        </div>
    </section>
    <!-- end podcast section -->

    <!-- insta feed section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <div class="insta-bem-fit container-xxl  position-relative pb-5" style="font-family: 'Poppins', sans-serif">
            <!-- <div class="title-section justify-content-start text-start px-4">
                        Instagram Feed
                    </div> -->

            <div loading="lazy" data-mc-src="5782e99c-c420-40ee-9276-37b3f6be9822#instagram"></div>

        </div>
    </section>
    <!-- end insta feed section -->

    <!-- advokasi section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <div class="advokasi-banner container-xxl  position-relative pb-5" style="font-family: 'Poppins', sans-serif">
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

                <div class="col-12 col-md-6 ">
                    <div class="header-text text-uppercase">
                        Advokasi
                    </div>
                    <div class="title-text mt-4">
                        Advokasi hadir untuk aktualisasi peran kami untuk mewujudkan kesejahteraan. Kami sangat membutuhkan saran, pendapat, dan kritik Anda sebagai alasan kami untuk terus tumbuh lebih tinggi, terus berkembang lebih baik, karena kami percaya KEMA FIT bukan hanya memerlukan #TitikTerang, lebih dari itu memerlukan rasa dibersamai, rasa dimiliki, rasa diperjuangkan, dengan Bantuan Anda mari bersama - sama merawat FIT tumbuh, menjadi sebuah pohon yang tidak hanya hidup, lebih dari itu, ia mampu menghasilkan buah, membagi kebahagiaan, membagikan senyuman kepada semua orang.

                    </div>

                    <div class="d-flex mt-4 gap-3 justify-content-center justify-content-md-start">
                        <a href="{{ route('advokasi') }}" class="btn btn-report text-uppercase rounded-pill px-5 py-3">
                            Lapor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end advokasi section -->

    <!-- medpart section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .medpart-banner .image-banner-medpart {
                width: 400px;
            }

            .medpart-banner .btn-report {
                background-color: var(--secondary-color);
                color: #ffffff;
                font-size: 16px;
            }

            @media (min-width:280px) and (max-width:576px) {
                .medpart-banner .image-banner-medpart {
                    width: 230px;
                    margin-top: 2rem;
                }

                .medpart-banner .btn-report {
                    font-size: 8px;
                }
            }
        </style>
        <div class="medpart-banner container-xxl  position-relative pb-5" style="font-family: 'Poppins', sans-serif">
            <div class="row justify-content-between p-4">
                <div class="col-12 col-md-6 text-end">
                    <div class="header-text text-uppercase">
                        Media Partner
                    </div>
                    <div class="title-text mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suscipit in facilisis morbi nunc nunc
                        dui.
                        Massa
                        massa purus
                        feugiat condimentum at. Suscipit egestas integer pharetra
                    </div>

                    <div class="d-none d-sm-flex mt-4 gap-3 float-end">
                        <a href="{{ route('medpart') }}" class="btn btn-report text-uppercase rounded-pill px-5 py-3">
                            lanjut
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 align-items-center text-center">
                    <img src="/frontend/images/medpart-banner.png" alt="medpart-banner" class="image-banner-medpart">

                    <div cllas="d-flex gap-3 mt-5 justify-content-center">
                        <a href="{{ route('medpart') }}"
                            class="btn btn-report rounded-pill text-uppercase py-3 px-5 mt-5 d-sm-none">
                            lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end medpart section -->
@endsection
