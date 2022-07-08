@extends('layouts.frontend')

@section('title', ' Home')

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
            <img src="images/header-banner-medpart.png" alt="Banner home">
        </div>
    </div>
</section>
<!-- end header karya section -->

<!-- condition section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
    <div class="advokasi-banner container-xxl  position-relative pb-5" style="font-family: 'Poppins', sans-serif">
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
                <img src="images/bg-syarat.png" alt="advokasi-banner" class="image-banner-advokasi">
            </div>

            <div class="col-12 col-md-6 mt-5">
                <div class="header-text text-uppercase text-center">
                    Syarat
                </div>
                <div class="title-text mt-4" style="color: #7882A4;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suscipit in facilisis morbi nunc nunc dui. Massa
                    massa purus
                    feugiat condimentum at. Suscipit egestas integer pharetra
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end advokasi section -->

<!-- medpart section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
    <style>
        .medpart-banner .image-banner-medpart{
            width: 400px;
        }

        .medpart-banner .btn-report{
            background-color: var(--secondary-color);
            color: #ffffff;
            font-size: 16px;
        }

        @media (min-width:280px) and (max-width:576px) {
            .medpart-banner .image-banner-medpart{
                width: 230px;
                margin-top: 2rem;
            }

            .medpart-banner .btn-report{
                font-size: 8px;
            }
        }
    </style>
    <div class="medpart-banner container-xxl  position-relative pb-5" style="font-family: 'Poppins', sans-serif">
        <div class="row justify-content-between p-4">
            <div class="col-12 col-md-6 d-flex align-items-center text-end">
                <div class="header-text text-center text-uppercase">
                    Fee & Pembayaran

                <div class="title-text text-capitalize mt-4" style="color: #7882A4;" >
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suscipit in facilisis morbi nunc nunc dui.
                    Massa
                    massa purus
                    feugiat condimentum at. Suscipit egestas integer pharetra
                </div>
                </div>

            </div>

            <div class="col-12 col-md-6 align-items-center text-center">
                <img src="images/bg-fee.png" alt="medpart-banner" class="image-banner-medpart">
            </div>
        </div>
    </div>
</section>
<!-- end medpart section -->

@endsection
