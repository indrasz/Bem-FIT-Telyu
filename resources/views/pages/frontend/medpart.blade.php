@extends('layouts.frontend')

@section('title', ' Media Partner')

@section('content')

 <!-- header karya section -->
 <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
    <style>
        .header-karya img{
            border-radius: 16px;

        }
    </style>
    <div class="header-karya container-xxl  position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="row justify-content-between p-md-4 p-2">
            <img src="/frontend/images/header-banner-medpart.png" alt="Banner home">
        </div>
    </div>
</section>
<!-- end header karya section -->

<section class="plans-light position-relative">

    <style scoped>
        * {
            font-family: 'Inter', sans-serif !important;
        }

        body .plans-light {
            background: #f2f6ff;
            padding-top: 100px;
            padding-bottom: 100px;
            z-index: 1 !important;
            position: relative;
        }

        body .plans-light .headline {
            font-family: 'Red Hat Display', sans-serif;
            font-weight: 700;
            font-size: 60px;
            line-height: 140%;
            text-align: center;
            color: #16171C;
        }

        @media screen and (max-width: 768px) {
            body .plans-light .headline {
                font-size: 40px;
                line-height: 60px !important;
            }
        }

        body .plans-light .adv-explanationss {
            font-weight: 400;
            font-size: 16px;
            line-height: 160%;
            text-align: center;
            color: #ffff;
            margin-top: 32px;
        }

        body .plans-light .offer {
            margin-top: 90px;
        }

        body .plans-light .offer .free {
            padding: 40px 32px;
            width: 297px;
            background: #FFFFFF;
            border-radius: 12px;
        }

        body .plans-light .offer .free .text-free {
            font-family: Inter;
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            color: #16171C;
        }

        body .plans-light .offer .free .price {
            margin-top: 20px;
            font-weight: 600;
            font-size: 32px;
            line-height: 160%;
            color: #16171C;
        }

        body .plans-light .offer .free .price .normal-text {
            font-weight: 400;
            font-size: 16px;
        }

        body .plans-light .offer .free .the-adv-of-trhi {
            margin-top: 8px;
            font-weight: 400;
            font-size: 14px;
            line-height: 160%;
            text-align: center;
            color: #8D8F98;
        }

        body .plans-light .offer .free .features .detail {
            font-weight: 400;
            font-size: 16px;
            line-height: 160%;
            color: #494C57;
            margin-top: 20px;
        }

        body .plans-light .offer .free .btn-free {
            margin-top: 72px;
            padding: 8px;
            background: #FAFAFD !important;
            border-radius: 60px;
            font-weight: 700;
            font-size: 16px;
            color: #494C57;
            width: 100%;
        }

        body .plans-light .offer .professional {
            padding: 40px 32px;
            background-color: #c8238b;
            border-radius: 12px;
            width: 297px;
        }

        body .plans-light .offer .professional .title {
            padding: 4px 12px;
            width: 102px;
            background: #F2FF57;
            border-radius: 4px;
            font-weight: 700;
            font-size: 12px;
            color: #494C57;
            margin-top: -52px !important;
        }

        body .plans-light .offer .professional .text-pro {
            margin-top: 27px;
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            color: #FFFFFF;
        }

        body .plans-light .offer .professional .price {
            margin-top: 20px;
            font-weight: 600;
            font-size: 32px;
            line-height: 160%;
            color: #FFFFFF;
        }

        body .plans-light .offer .professional .price .normal-text {
            font-weight: 400;
            font-size: 16px;
        }

        body .plans-light .offer .professional .the-adv-of-trhi {
            margin-top: 8px;
            font-weight: 400;
            font-size: 14px;
            line-height: 160%;
            text-align: center;
            color: #FFFFFF;
        }



        body .plans-light .offer .professional .features .detail {
            font-weight: 400;
            font-size: 16px;
            line-height: 160%;
            color: #FFFFFF;
            margin-top: 20px;
        }

        body .plans-light .offer .professional .btn-free {
            margin-top: 72px;
            padding: 8px;
            color: #FFFFFF;
            border-radius: 60px;
            font-weight: 700;
            font-size: 16px;
            line-height: 160%;
            background: #00B67A;
            width: 100%;
        }

        body .font-red-hat-display {
            font-family: 'Red Hat Display', sans-serif !important;
        }

        body .cl-light-blue {
            color: #6a3093;
        }
    </style>
    <div class="container">
        <div class="headline">
            Paket kerja sama <br class="d-none d-md-block"> Khusus <span
                class="cl-light-blue font-red-hat-display">Ormawa FIT</span>
        </div>
        <div class="row mx-0 text-center d-flex justify-content-center offer">
            <div class="free mb-5 mb-md-0 me-md-5">
                <div class="text-free">
                    Free
                </div>
                <div class="row mx-0 features text-start">
                    <div class="col-12 px-0 detail">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/arrow-down-circle-dark.svg"
                            alt="arrow" class="img-fluid">
                        1x Feed Instagram
                    </div>
                    <div class="col-12 px-0 detail">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/arrow-down-circle-dark.svg"
                            alt="arrow" class="img-fluid">
                        2x Story Instagram
                    </div>
                    <div class="col-12 px-0 detail">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/arrow-down-circle-dark.svg"
                            alt="arrow" class="img-fluid">
                        1x Channel Telegram
                    </div>
                    <div class="col-12 px-0 detail">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/arrow-down-circle-dark.svg"
                            alt="arrow" class="img-fluid">
                        1x Artikel Website
                    </div>

                </div>
            </div>
            <div class="professional mb-5 mb-md-0">
                <div class="title mx-auto">
                    Most Popular
                </div>
                <div class="text-pro">
                    Professional
                </div>
                <div class="row mx-0 features text-start">
                    <div class="col-12 px-0 detail">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/arrow-down-circle-light.svg"
                            alt="arrow" class="img-fluid">
                        Follow Instagram
                    </div>
                    <div class="col-12 px-0 detail">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/arrow-down-circle-light.svg"
                            alt="arrow" class="img-fluid">
                        Follow OA Line/Spotify (optional)
                    </div>
                    <div class="col-12 px-0 detail">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/arrow-down-circle-light.svg"
                            alt="arrow" class="img-fluid">
                        Subscribe Youtube
                    </div>
                    <div class="col-12 px-0 detail">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/arrow-down-circle-light.svg"
                            alt="arrow" class="img-fluid">
                        Join Telegram
                    </div>
                    <div class="col-12 px-0 detail">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/arrow-down-circle-light.svg"
                            alt="arrow" class="img-fluid">
                        Follow Linkedin
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h-100 w-100" style="box-sizing: border-box; background-color: #f2f6ff">
    <style scoped>
        .content-3-7 .btn:focus,
        .content-3-7 .btn:active {
            outline: none !important;
        }

        .content-3-7 {
            padding: 5rem 2rem 7rem;
        }

        .content-3-7 .title-text {
            font: 800 1.875rem/2.25rem Poppins, sans-serif;
            letter-spacing: 0.05em;
            margin-bottom: 0.75rem;
            color: #2e3a53;
        }

        .content-3-7 .caption-text {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            letter-spacing: 0.025em;
            color: #8e8fad;
            margin-bottom: 0;
        }

        .content-3-7 .card-item {
            transition: 0.4s;
            top: 0px;
            left: 0px;
            padding: 1rem 0;
        }

        .content-3-7 .card-item:hover {
            top: -3px;
            left: -3px;
            transition: 0.4s;
        }

        .content-3-7 .card-item-outline {
            border: 1px solid #e5ebf9;
            padding: 2rem 2.75rem;
            border-radius: 1rem;
        }

        .content-3-7 .price-title {
            font: 500 1.25rem/1.75rem Poppins, sans-serif;
            color: #141c2e;
            letter-spacing: 0.025em;
            margin-bottom: 0.75rem;
        }

        .content-3-7 .price-value {
            font: 500 2.25rem/2.5rem Poppins, sans-serif;
            letter-spacing: 0.025em;
            margin-bottom: 0.75rem;
            color: #2e3a53;
        }

        .content-3-7 .price-duration {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            margin: 0.625rem;
            color: #9e9e9e;
        }

        .content-3-7 .price-caption {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            letter-spacing: 0.025em;
            margin-bottom: 2.5rem;
            color: #c3c3c8;
        }

        .content-3-7 .price-list .check {
            font: 400 0.875rem/1.25rem Poppins, sans-serif;
            color: #2e3a53;
            letter-spacing: 0.025em;
            margin-bottom: 1.75rem;
        }

        .content-3-7 .price-list .no-check {
            font: 400 0.875rem/1.25rem Poppins, sans-serif;
            color: #e1e1e1;
            letter-spacing: 0.025em;
            margin-bottom: 1.75rem;
        }

        .content-3-7 .span-icon {
            width: 1rem;
            height: 1rem;
            margin-right: 0.75rem;
        }

        .content-3-7 .btn-outline {
            border: 1px solid #2ec49c;
            color: #2ec49c;
            padding-top: 1rem;
            padding-bottom: 1rem;
            font-weight: 500;
            letter-spacing: 0.025em;
            border-radius: 0.5rem;
        }

        .content-3-7 .btn-outline:hover {
            background-color: #2ec49c;
            color: #ffffff;
        }

        .content-3-7 .btn-fill {
            background-image: linear-gradient(rgba(91, 203, 173, 1),
                    rgba(39, 194, 153, 1));
            padding-top: 1rem;
            padding-bottom: 1rem;
            font-weight: 500;
            letter-spacing: 0.025em;
            border-radius: 0.5rem;
        }

        .content-3-7 .btn-fill:hover {
            background-image: linear-gradient(#29b18d, #29b18d);
        }

        @media (min-width: 576px) {
            .content-3-7 .title-text {
                font: 800 2.25rem/2.5rem Poppins, sans-serif;
            }

            .content-3-7 .card-item {
                padding: 1rem;
            }
        }

        @media (min-width: 768px) {
            .content-3-7 {
                padding-left: 3.5rem;
                padding-right: 3.5rem;
            }
        }

        @media (min-width: 992px) {
            .content-3-7 .caption-text {
                width: 66.666667%;
            }

            .content-3-7 .card-item {
                width: 33.333333%;
            }
        }

        @media (min-width: 1200px) {
            .content-3-7 {
                padding-left: 9rem;
                padding-right: 9rem;
            }
        }
    </style>

    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative">
        <div class="container mx-auto">
            <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                <h2 class="title-text text-center">Paket Kerjasama</h2>
                <p class="caption-text mx-auto">
                    Choose one of our friendly pricing that suitable<br />
                    for your business to grow bigger
                </p>
            </div>
            <div class="d-flex flex-wrap">
                <div class="mx-auto card-item position-relative">
                    <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
                        <h2 class="price-title">Basic</h2>
                        <h2 class="price-value d-flex align-items-center">
                            <span>25K</span>
                        </h2>
                        <div class="price-list">
                            <p class="d-flex align-items-center check">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>1x Feed Instagram
                            </p>
                            <p class="d-flex align-items-center check">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>1x Story Instagram
                            </p>
                            <p class="d-flex align-items-center check">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>1x Channel Telegram
                            </p>
                        </div>
                        <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                            Choose Plan
                        </button>
                    </div>
                </div>
                <div class="mx-auto card-item position-relative">
                    <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden">
                        <h2 class="price-title">Standard</h2>
                        <h2 class="price-value d-flex align-items-center">
                            <span>40K</span>
                        </h2>
                        <div class="price-list">
                            <p class="d-flex align-items-center check">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>1x Feed Instagram
                            </p>
                            <p class="d-flex align-items-center check">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>3x Story Instagram
                            </p>
                            <p class="d-flex align-items-center check">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>2x Channel Telegram
                            </p>
                            <p class="d-flex align-items-center check">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>1x Keep HIghlight (Keep 7 hari)
                            </p>
                        </div>
                        <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                            Choose Plan
                        </button>
                    </div>
                </div>
                <div class="mx-auto card-item position-relative">
                    <div class="card-item-outline d-flex flex-column position-relative overflow-hidden"
                        style="background-color: #2e3a53">
                        <h2 class="price-title text-white">Premium</h2>
                        <h2 class="price-value d-flex align-items-center text-white">
                            <span>80K</span>
                        </h2>

                        <div class="price-list">
                            <p class="d-flex align-items-center check text-white">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>2x Feed Instagram
                            </p>
                            <p class="d-flex align-items-center check text-white">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>5x Story Instagram
                            </p>
                            <p class="d-flex align-items-center check text-white">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>3x Channel Telegram
                            </p>
                            <p class="d-flex align-items-center check text-white">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>1x Keep Highlight (Keep 14 hari)
                            </p>
                            <p class="d-flex align-items-center check text-white">
                                <span
                                    class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <img class="img-fluid"
                                        src="/frontend/images/check.png"
                                        alt="" /> </span>1x Post Story Fungsionaris BEM Range (70 - 80 Akun)
                            </p>
                        </div>
                        <button
                            class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                            Choose Plan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
