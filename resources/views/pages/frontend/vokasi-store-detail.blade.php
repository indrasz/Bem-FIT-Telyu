@extends('layouts.frontend')

@section('title', ' Home')

@section('content')

<!-- new product section -->
<section class="h-100 w-100 mt-5 mb-5" style="box-sizing: border-box; background-color: #ffffff">
    <style>
        .detail-product .image-product{
            object-position: center;
            -o-object-position: center;
            border-radius: 0.5em;
            min-height: 700px;
        }
        .detail-product .title{
            font: var(--header-text);
            color: #000000;
        }

        .detail-product .description{
            font: var(--body-text);
            color: #7882A4;
            text-align: justify;
        }

        .detail-product .price{
            font: var(--header-text);
            color: #000000;
            font-size: 24px;
        }
        .detail-product .btn-see-more{
            background: var(--secondary-color);
            border-radius: 8px;
        }

    </style>
    <div class="detail-product container-xxl px-3 mb-2 position-relative"
        style="font-family: 'Poppins', sans-serif">
        <div class="row">
            <div class="col-12 col-md-7 p-3">
                <img src="/frontend/images/image-product.png" alt="product image" class="image-product w-100 h-100">
            </div>
            <div class="col-12 col-md-5 p-3">
                <div class="title py-3">
                    Baju Kemeja Pria
                </div>
                <div class="description py-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis sollicitudin potenti mattis feugiat risus sed vestibulum vitae adipiscing. Ipsum nisl dolor massa sodales in. Arcu ut dolor magna varius amet. Feugiat ac turpis massa lectus. Pharetra pulvinar diam, aenean pulvinar. Aliquet erat ut mi, lacinia diam mi auctor bibendum. Ac amet, faucibus a nullam morbi pellentesque augue. Nisl cras bibendum sagittis vel.
                </div>
                <div class="price">
                    Rp 130K
                    <span class="float-end">
                        <a href="#" class="btn btn-see-more py-2 px-5 text-white ">see more</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end new product section -->

<!-- new product section -->
<section class="h-100 w-100 mt-5 mb-5" style="box-sizing: border-box; background-color: #ffffff">
    <style>

        .hot-news .headline{
           font: var(--title-text);
        }

        .hot-news .hot-news-card .image-preview{
            -o-object-fit: cover;
            object-fit: cover;
        }

        .hot-news .hot-news-card img {
            border-radius: 16px 16px 0px 0px;
            width: 250px;
            height: 200px;
        }

        .hot-news-card {
            background: #F9F9F9;
            box-shadow: 25px 27px 37px -9px rgba(106, 48, 147, 0.1);
            border-radius: 30px;
            max-width: 300px;
            margin: 0 12px;
        }

        .hot-news-card .text-preview {
            max-height: 88px;
        }

        .hot-news-card .title{
            font : var(--title-text);
            color: #000000;
        }

        .hot-news-card .price{
            font : var(--body-text);
            color: #00C897;
            text-align: justify;
        }

        .hot-news-card .btn-see-more{
            background: var(--secondary-color);
            border-radius: 8px;
        }

        /* @media (min-width:280px) and (max-width: 576px){
            .hot-news-card {
                max-width: 250px;
            }
            .hot-news-card img{
                max-width: 250px;
                max-height: 200px;
            }

        } */
    </style>
    <div class="hot-news container-xxl px-3 mb-2 position-relative"
        style="font-family: 'Poppins', sans-serif">
        <div class="headline mb-4 px-3">
            New Product
        </div>

        <div class="carousel gap-4" style="background: #ffffff !important;"
            data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true }'>

            <!-- Card Container 1 -->

            <div class="box-border bg-white rounded-2xl hot-news-card mb-4">
                <div class="">
                    <div class="">
                        <img src="/frontend/images/image-preview.png" alt="preview" class="image-preview"  />
                    </div>
                    <div class="px-4 mt-2">
                        <div class="title p-md-2 mt-3">title</div>
                        <div class="price p-md-2 mt-3">Rp. 150K</div>
                    </div>
                   <div class="d-flex justify-content-center align-content-center mt-3 pb-3">
                        <a href="#" class="btn btn-see-more py-2 px-5 text-white ">see more</a>
                   </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- end new product section -->


@endsection
