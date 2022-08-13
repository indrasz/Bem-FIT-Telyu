@extends('layouts.frontend')

@section('title', ' Home')

@section('content')

<!-- header bem kema section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">

    <style>

        .header-kema-home .image-banner-home{
            width: 350px;
        }

        .header-kema-home .btn-medpart{
            background-color: var(--secondary-color);
            color: #ffffff;
            font-size: 16px;
        }

        .header-kema-home .btn-video-profile{
            border: 1px solid var(--secondary-color);
            color: var(--secondary-color);
            font-size: 16px;
        }

        @media (min-width:280px) and (max-width:576px) {
            .header-kema-home .image-banner-home{
                width: 230px;
                margin-top: 2rem;
            }

            .header-kema-home .btn-medpart{
                font-size: 8px;
            }

            .header-kema-home .btn-video-profile{
                font-size: 8px;
            }

            .header-kema-home .btn-video-profile img{
                width: 10px;
            }
        }


    </style>
    <div class="header-kema-home container p-lg-4 position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="row justify-content-between p-5">
            <div class="col-12 col-md-6">
                <div class="header-text">
                    <span class="purple-text">BEM</span> KEMA FIT<br>
                    KABINET <span class="purple-text">TITIK TERANG</span>
                 </div>
                <div class="title-text mt-3">
                    BEM KEMA FIT tidak hanya sebuah organisasi, lebih dari itu ada tanggung jawab besar untuk meningkatkan taraf kesejahteraan mahasiswa. Untuk itu, Kami hadirkan Platform Advokasi Terpadu untuk menjadi wadah aktualisasi dari wajah #TitikTerang. Saluran aspirasi Anda sangat membantu kami untuk mewujudkannya.
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
       </div>
    </div>
</section>
<!-- end header bem kema section -->

<!-- visi bem section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
    <div class="visi-banner container  position-relative pb-5" style="font-family: 'Poppins', sans-serif">
        <style>
            .visi-banner .image-banner-visi{
                width: 325px;
            }

            .visi-banner .btn-report{
                background-color: var(--secondary-color);
                color: #ffffff;
                font-size: 16px;
                border-radius: 12px;
            }

            @media (min-width:280px) and (max-width:576px) {
                .visi-banner .image-banner-visi{
                    width: 200px;
                    margin-top: 2rem;
                }

                .visi-banner .btn-report{
                    font-size: 8px;
                }
            }
        </style>
        <div class="row justify-content-between p-4">

            <div class="col-12 col-md-6 text-center ps-lg-4">
                <img src="/frontend/images/bg-visi.png" alt="visi-banner" class="image-banner-visi">
            </div>

            <div class="col-12 col-md-6 mt-5">
                <div class="header-text text-uppercase">
                    Visi
                </div>
                <div class="title-text mt-4">
                    Mewujudkan KEMA FIT yang profesional dan berkolaborasi aktif dalam pengamalan Tri Dharma perguruan tinggi diikui pembenahan arah vokasi guna mewujidkan FIT yang lebih baik.
                </div>

                <div class="d-flex mt-4 gap-3 justify-content-center justify-content-md-start">
                    <button class="btn btn-report px-5 py-2">
                        See more
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end visi bem section -->

<!-- misi bem section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
    <style>
        .misi-banner .image-banner-misi{
            width: 400px;
        }
        .sub-header-text{
            font-size: 22px;
        }

        @media (min-width:280px) and (max-width:576px) {
            .misi-banner .image-banner-misi{
                width: 230px;
                margin-top: 2rem;
            }

            .misi-banner .btn-report{
                font-size: 8px;
            }
        }
    </style>
    <div class="misi-banner container-xxl position-relative pb-5" style="font-family: 'Poppins', sans-serif">
        <div class="row justify-content-between p-sm-4 p-1">
            <div class="col-12 col-md-6 p-sm-5 p-3">
                <div class=" header-text text-uppercase text-sm-start  text-center">
                    Misi
                    <div class="d-flex d-sm-none justify-content-center">
                        <img src="/frontend/images/bg-misi.png" alt="misi-banner" class="image-banner-misi d-block d-sm-none">
                    </div>

                </div>

                <div class="sub-header-text text-center text-sm-start mt-4" style="color: #6A3093;">
                    Misi 01
                    <div class="title-text mt-2" style="color: #7882A4;">
                        Membangun ruang internal BEM FIT yang harmonis dan sinergis diiringi semangat profesionalitas dan produktif.
                    </div>
                </div>

                <div class="sub-header-text text-center text-sm-start mt-4" style="color: #C8238B;">
                    Misi 02
                    <div class="title-text mt-2" style="color: #7882A4;">
                        menciptakan lingkungan harmonis dan kolaboratif antar mahasiswa, civitas akademik, dan seluruh KEMA FIT Telkom University.
                    </div>
                </div>

                <div class="sub-header-text text-center text-sm-start mt-4" style="color: #871A2F;">
                    Misi 03
                    <div class="title-text mt-2" style="color: #7882A4;">
                        Meningkatkan kualitas pelayanan dan advokasi untuk mencapai kesejahteraan mahasiswa FI telkom university.
                    </div>
                </div>

                <div class="sub-header-text text-center text-sm-start mt-4" style="color: #61CECB;">
                    Misi 04
                    <div class="title-text mt-2" style="color: #7882A4;">
                        Pemberdayaan dan perngembangan potensi minat bakat untuk skala nasional secara progresif dan apresiatif untuk seluruh mahasiswa FIT.
                    </div>
                </div>

                <div class="sub-header-text text-center text-sm-start mt-4" style="color: #A353EA;">
                    Misi 05
                    <div class="title-text mt-2" style="color: #7882A4;">
                        Mewujudkan gerapak bermoral Intelektual yang berdampak dalam mengawal isu-isu strategis.
                    </div>
                </div>


            </div>

            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center text-center">
                <img src="/frontend/images/bg-misi.png" alt="misi-banner" class="image-banner-misi d-none d-sm-block">

            </div>
        </div>
    </div>
</section>
<!-- end misi bem section -->

<!-- profile section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
    <style>
        .header-karya img{
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

<!-- insta feed section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
    <div class="insta-bem-fit container position-relative pb-sm-5 pb-1" style="font-family: 'Poppins', sans-serif">
        <!-- <div class="title-section justify-content-start text-start px-4">
            Instagram Feed
        </div> -->

        <div loading="lazy" data-mc-src="5782e99c-c420-40ee-9276-37b3f6be9822#instagram"></div>

    </div>
</section>
<!-- end insta feed section -->

<!-- advokasi section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
    <div class="advokasi-banner container  position-relative pb-5" style="font-family: 'Poppins', sans-serif">
        <style>
            .advokasi-banner .image-banner-advokasi{
                width: 400px;
            }

            .advokasi-banner .btn-report{
                background-color: var(--secondary-color);
                color: #ffffff;
                font-size: 16px;
            }

            @media (min-width:280px) and (max-width:576px) {
                .advokasi-banner .image-banner-advokasi{
                    width: 230px;
                    margin-top: 2rem;
                }

                .advokasi-banner .btn-report{
                    font-size: 8px;
                }
            }
        </style>
        <div class="row justify-content-between p-4">

            <div class="col-12 col-md-6 text-center ps-lg-4">
                <img src="/frontend/images/advokasi-banner.png" alt="advokasi-banner" class="image-banner-advokasi">
            </div>

            <div class="col-12 col-md-6 mt-5">
                <div class="header-text text-uppercase">
                    Advokasi
                </div>
                <div class="title-text mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suscipit in facilisis morbi nunc nunc dui. Massa
                    massa purus
                    feugiat condimentum at. Suscipit egestas integer pharetra
                </div>

                <div class="d-flex mt-4 gap-3 justify-content-center justify-content-md-start">
                    <button class="btn btn-report text-uppercase rounded-pill px-5 py-3">
                        Lapor
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end advokasi section -->


@endsection
