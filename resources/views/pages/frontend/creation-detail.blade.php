@extends('layouts.frontend')

@section('title', ' Home')

@section('content')

<!-- detail creation section -->
<section class="h-100 w-100 mt-5 mb-5" style="box-sizing: border-box; background-color: #ffffff">
    <style>
        .detail-news .image-product{
            object-position: center;
            -o-object-position: center;
            object-fit: cover;
            border-radius: 0.5em;
            max-height: 450px;
            box-shadow: 45px 45px 31px -28px rgba(11, 93, 134, 0.15);
        }
        .detail-news .title{
            font: var(--header-text);
            color: #000000;
        }

        .detail-news .description{
            font: var(--body-text);
            color: #7882A4;
            text-align: justify;
        }

        .detail-news .price{
            font: var(--header-text);
            color: #000000;
            font-size: 24px;
        }
        .detail-news .btn-see-more{
            background: var(--secondary-color);
            border-radius: 8px;
        }

        .detail-news .card-news{
            background-color: #ffffff;
            min-height: 240px;
            border-radius: 12px;
            background-position: center;
            background-size: cover;
        }
        .detail-news .btn-see-more{
            background: var(--secondary-color);
            border-radius: 15px;
        }

        .detail-news .title-news{
            max-width: 350px;
        }


        @media (min-width:280px) and (max-width: 576px){

            .detail-news .title-news{
                max-width: 300px;
            }

        }

    </style>
    <div class="detail-news container-xxl px-3 mb-2 position-relative"
        style="font-family: 'Poppins', sans-serif">
        <div class="row">
            <div class="col-12 col-md-8 p-3">
                <img src="/frontend/images/image-product.png" alt="product image" class="image-product w-100 h-100">
                <div class="title py-3 mt-3">
                    Baju Kemeja Pria
                </div>
                <div class="description py-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis sollicitudin potenti mattis feugiat risus sed vestibulum vitae adipiscing. Ipsum nisl dolor massa sodales in. Arcu ut dolor magna varius amet. Feugiat ac turpis massa lectus. Pharetra pulvinar diam, aenean pulvinar. Aliquet erat ut mi, lacinia diam mi auctor bibendum. Ac amet, faucibus a nullam morbi pellentesque augue. Nisl cras bibendum sagittis vel.
                </div>

            </div>
            <div class="col-12 col-md-4 p-4 text-center" style="background-color: #F9F9F9; border-radius: 12px;">
                <div class="title pb-3 text-start" style="font: var(--subtitle-text);">
                    Berita lain
                </div>

                <div class="d-flex align-items-start flex-column text-start card-news header-text text-truncate text-white w-100 p-3 mb-3" style="background-image: url('images/image-product.png');">
                    <span class="d-inline-block text-truncate title-news mt-auto" >
                        Praeterea iter est quasdam res quas ex communi.
                    </span>
                    <div class="mt-2">
                        <a href="#" class="btn btn-see-more py-2 px-5 text-white rounded-pill">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="d-flex align-items-start flex-column text-start card-news header-text text-truncate text-white w-100 p-3 mb-3" style="background-image: url('images/image-product.png');">
                    <span class="d-inline-block text-truncate title-news mt-auto" >
                        Praeterea iter est quasdam res quas ex communi.
                    </span>
                    <div class="mt-2">
                        <a href="#" class="btn btn-see-more py-2 px-5 text-white rounded-pill">Lihat Selengkapnya</a>
                    </div>
                </div>

                <div class="d-flex align-items-start flex-column text-start card-news header-text text-truncate text-white w-100 p-3 mb-3" style="background-image: url('images/image-product.png');">
                    <span class="d-inline-block text-truncate title-news mt-auto" >
                        Praeterea iter est quasdam res quas ex communi.
                    </span>
                    <div class="mt-2">
                        <a href="#" class="btn btn-see-more py-2 px-5 text-white rounded-pill">Lihat Selengkapnya</a>
                    </div>
                </div>
                <a href="#" class="btn btn-see-more py-2 w-100 text-white ">Lihat Semua Berita</a>

            </div>
        </div>
    </div>
</section>
<!-- end detail creation section -->



@endsection
