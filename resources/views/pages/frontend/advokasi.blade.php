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
    <div class="header-karya container-fluid  position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="row justify-content-between p-md-4 ">
            <img src="images/header-banner-advokasi.png" alt="Banner home">
        </div>
    </div>
</section>
<!-- end header karya section -->

<!-- kema fit information section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">

    <style>

        .college-information{
            font: 600 16px Poppins, sans-serif;
        }

        .college-information .college-total{
            font: 500 24px Poppins, sans-serif;
        }

    </style>

    <div class="kema-fit-information container-xxl p-3 mb-4 position-relative" style="font-family: 'Poppins', sans-serif">

        <!-- web view -->
        <div class="d-sm-flex flex-row gap-5 text-center justify-content-center d-none d-sm-block">
            <div class="college-information p-3">
                <div class="college-total mb-3">
                    845
                </div>
                <img src="images/ic-received.png" alt="college-logo" width="70" class="college-image ">
                <div class="mt-3 text-uppercase ">
                    diterima
                </div>
            </div>
            <div class="college-information p-3">
                <div class="college-total mb-3">
                    150
                </div>
                <img src="images/ic-pending.png" alt="ormawa-logo" width="70" class="college-image">
                <div class="mt-3 text-uppercase">
                    pending
                </div>
            </div>
            <div class="college-information p-3">
                <div class="college-total mb-3 ">
                    640
                </div>
                <img src="images/ic-approved.png" alt="prodi-logo" width="70" class="d-none d-sm-block college-image">
                <div class="mt-3 text-uppercase">
                    disetujui
                </div>
            </div>
            <div class="college-information p-3">
                <div class="college-total mb-3 ">
                    55
                </div>
                <img src="images/ic-rejected.png" alt="prodi-logo" width="70" class="d-none d-sm-block college-image">
                <div class="mt-3 text-uppercase">
                    ditolak
                </div>
            </div>
        </div>
        <!-- web view -->

        <div class="d-sm-flex flex-row gap-5 text-center justify-content-center d-sm-none d-md-none d-lg-none">
            <div class="college-information p-3">
                <div class="college-total mb-3">
                        3500
                </div>
                <img src="images/ic-received.png" alt="college-logo" width="70" class="college-image ">
                <div class="mt-3 text-uppercase ">
                    Mahasiswa <br> Aktif
                </div>
            </div>
            <div class="college-information p-3">
                <div class="college-total mb-3">
                    14
                </div>
                <img src="images/ic-pending.png" alt="ormawa-logo" width="70" class="college-image">
                <div class="mt-3 text-uppercase">
                    Ormawa
                </div>
            </div>
            <div class="college-information p-3">
                <div class="college-total mb-3 ">
                    12
                </div>
                <img src="images/ic-approved.png" alt="prodi-logo" width="70" class="college-image">
                <div class="mt-3 text-uppercase">
                    Prodi
                </div>
            </div>

            <div class="college-information p-3">
                <div class="college-total mb-3 ">
                    12
                </div>
                <img src="images/ic-rejected.png" alt="prodi-logo" width="70" class="college-image">
                <div class="mt-3 text-uppercase">
                    Prodi
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
                <img src="images/advokasi-banner.png" alt="advokasi-banner" class="image-banner-advokasi">
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

            </div>
        </div>
    </div>
</section>
<!-- end advokasi section -->

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
        <div class="d-flex flex-row justify-content-center p-4">

            <div class="col-12 col-md-5 text-start w-lg-50">
                <div id="div1" class="hide">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama anda">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email anda">
                    </div>
                </div>

                <div class="d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onclick="show2();" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Kirim dengan data pribadi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onclick="show1();" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Kirim tidak dengan data pribadi
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- end advokasi section -->


@endsection
