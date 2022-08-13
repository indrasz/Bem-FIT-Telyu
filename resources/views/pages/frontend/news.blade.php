@extends('layouts.frontend')

@section('title', ' Home')

@section('content')

    <!-- header news section -->
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
                    width: 200px;
                    margin-top: 2rem;
                }

                .header-kema-home .btn-medpart {
                    font-size: 12px;
                }
            }
        </style>

        <div class="header-kema-home container-xxl p-lg-4 position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="row justify-content-between p-5">
                <div class="col-12 col-md-6">
                    <div class="header-text">
                        Berita Nyata<span class="purple-text"> Dari</span> <br />
                        Sumber Terpercaya
                    </div>
                    <div class="title-text mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suscipit in facilisis morbi nunc nunc dui.
                        Massa massa purus
                        feugiat condimentum at. Suscipit egestas integer pharetra
                    </div>

                    <div class="d-flex mt-4 gap-3 d-none d-sm-flex">
                        <a class="btn btn-medpart rounded-pill px-4 py-3">
                            Let's Explore
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 text-center ">
                    <img src="/frontend/images/news-banner.png" alt="banner-home" class="image-banner-home">

                    <div class="d-flex justify-content-center mt-5 gap-2 d-sm-none d-md-none d-lg-none">
                        <a class="btn btn-medpart rounded-pill py-2">
                            Let's Explore
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end header news section -->

    <!-- header karya section -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .header-karya .headline {
                font: var(--title-text);
            }

            .header-karya .sub-headline {
                font: var(--body-text);
                color: #7882A4;
            }

            .header-karya img {
                border-radius: 16px;

            }
        </style>
        <div class="header-karya container-xxl  position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="headline d-flex justify-content-center text-center mb-2 px-3">
                Hot News
            </div>
            <div class="sub-headline d-flex justify-content-center text-center mb-3 mb-md-4 px-3">
                Berita yang sedang hangat diperbincangkan
            </div>
            <div class="row justify-content-center p-md-4 p-2">
                <img src="/frontend/images/banner-hot-news.png" alt="Banner home">
            </div>
        </div>
    </section>
    <!-- end header karya section -->

    <!-- new product section -->
    <section class="h-100 w-100 mt-5 mb-5" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .hot-news .headline {
                font: var(--title-text);
            }

            .hot-news .sub-headline {
                font: var(--body-text);
                color: #7882A4;
            }

            .hot-news .image-preview {
                border-radius: 16px;
                width: 350px;
                height: 500px;
                -o-object-fit: cover;
                object-fit: cover;
                background: linear-gradient(180deg, rgba(217, 217, 217, 0) 0%, rgba(0, 0, 0, 0.5) 100%);
            }

            @media (min-width:280px) and (max-width: 576px) {

                .hot-news img {
                    max-width: 200px;
                    max-height: 250px;
                }

            }
        </style>
        <div class="hot-news container-xxl px-3 mb-2 position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="headline d-flex justify-content-center text-center mb-2 px-3">
                Recommendation
            </div>
            <div class="sub-headline d-flex justify-content-center text-center mb-3 mb-md-4 px-3">
                Rekomendasi berita untuk anda seputar Telkom University
            </div>

            <div class="carousel gap-4" style="background: #ffffff !important;"
                data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true }'>

                <!-- Card Container 1 -->
                @forelse ($news as $new => $item)
                    <a href="{{ route('news-detail', $item->slug) }}">
                        <img src="{{ url(Storage::url($item->thumbnail)) }}" alt="preview" class="image-preview mx-3" />
                    </a>

                @empty
                    <div class="justify-content-center text-center">
                        Belum ada berita yang diupload
                    </div>
                @endforelse
                
            </div>
        </div>
    </section>
    <!-- end new product section -->


@endsection
