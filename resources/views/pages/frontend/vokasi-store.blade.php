@extends('layouts.frontend')

@section('title', ' Home')

@section('content')

<!-- header vokasi store section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
    <style>
        .header-karya img{
            border-radius: 16px;

        }
    </style>
    <div class="header-karya container-xxl  position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="row justify-content-between p-md-4 p-2">
            <img src="images/vokasi-store-banner.png" alt="Banner Vokasi Store">
        </div>
    </div>
</section>
<!-- end header vokasi store section -->

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

        @media (min-width:280px) and (max-width: 576px){
            .hot-news-card {
                max-width: 250px;
            }
            .hot-news-card img{
                max-width: 250px;
                max-height: 200px;
            }

        }
    </style>
    <div class="hot-news container-xxl px-3 mb-2 position-relative"
        style="font-family: 'Poppins', sans-serif">
        <div class="headline mb-2 mb-md-4 px-3">
            New Product
        </div>

        <div class="carousel gap-4" style="background: #ffffff !important;"
            data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true }'>

            <!-- Card Container 1 -->

            <div class="box-border bg-white rounded-2xl hot-news-card mb-4">
                <div class="">
                    <div class="">
                        <img src="images/image-preview.png" alt="preview" class="image-preview"  />
                    </div>
                    <div class="px-4 mt-2">
                        <div class="title p-md-2 mt-3">title</div>
                        <div class="price p-md-2 ">Rp. 150K</div>
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

 <!-- new product section -->
 <section class="h-100 w-100 mb-5" style="box-sizing: border-box; background-color: #ffffff">
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

        @media (min-width:280px) and (max-width: 576px){
            .hot-news-card {
                max-width: 250px;
            }
            .hot-news-card img{
                max-width: 250px;
                max-height: 200px;
            }

        }
    </style>
    <div class="hot-news container-xxl px-3 pb-5 mb-4 position-relative"
        style="font-family: 'Poppins', sans-serif">
        <div class="headline mb-2 mb-md-4 px-3">
            Recommendation
        </div>

        <div class="carousel gap-4" style="background: #ffffff !important;"
            data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true }'>

            <!-- Card Container 1 -->

            <div class="box-border bg-white rounded-2xl hot-news-card mb-4">
                <div class="">
                    <div class="">
                        <img src="images/image-preview.png" alt="preview" class="image-preview"  />
                    </div>
                    <div class="px-4 mt-2">
                        <div class="title p-md-2 mt-3">title</div>
                        <div class="price p-md-2 ">Rp. 150K</div>
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