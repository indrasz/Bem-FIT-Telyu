@extends('layouts.frontend')

@section('title', ' Home')

@section('content')

    <!-- new product section -->
    <section class="h-100 w-100 mt-5 mb-5" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .detail-product .image-product {
                object-position: center;
                -o-object-position: center;
                object-fit: cover;
                border-radius: 0.5em;
                min-height: 700px;
            }

            .detail-product .title {
                font: var(--header-text);
                color: #000000;
            }

            .detail-product .description {
                font: var(--body-text);
                color: #7882A4;
                text-align: justify;
            }

            .detail-product .price {
                font: var(--header-text);
                color: #000000;
                font-size: 24px;
            }

            .detail-product .btn-see-more {
                background: var(--secondary-color);
                border-radius: 8px;
            }
        </style>
        <div class="detail-product container-xxl px-3 mb-2 position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="row">
                <div class="col-12 col-md-7 p-3">

                    @if (isset($product->gallery[0]->thumbnail) != null)
                        <img src=" {{ url(Storage::url($product->gallery[0]->thumbnail)) }}" alt="product image"
                            class="image-product w-100 h-100">
                    @else
                        <img src="{{ url('https://via.placeholder.com/750x500') }}" alt="product image"
                            class="image-product w-100 h-100">
                    @endif
                </div>
                <div class="col-12 col-md-5 p-3">
                    <div class="title py-3">
                        {{ $product->name }}
                    </div>
                    <div class="description py-3">
                        {!! $product->description !!}
                    </div>
                    <div class="price mt-2">
                        Rp. {{ number_format($product->price, 2, ',', '.') }}
                        <span class="float-end">
                            <a href="{{ $product->url }}" class="btn btn-see-more py-2 px-5 text-white" target="blank">see more</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end new product section -->

    <!-- new product section -->
    <section class="h-100 w-100 mb-5 py-5" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .new-product .headline {
                font: var(--title-text);
            }

            .new-product .new-product-card .image-preview {
                -o-object-fit: cover;
                object-fit: cover;
                border-radius: 16px 16px 0px 0px;
                max-width: 340px;
                height: 300px;
            }


            .new-product-card {
                background: #F9F9F9;
                box-shadow: 25px 27px 37px -9px rgba(106, 48, 147, 0.1);
                border-radius: 30px;
                max-width: 340px;
                margin: 0 12px;
            }

            .new-product-card .text-preview {
                max-height: 80px;
            }

            .new-product-card .title {
                font: var(--title-text);
                color: #000000;
            }

            .new-product-card .price {
                font: var(--body-text);
                color: #00C897;
                text-align: justify;
            }

            .new-product-card .btn-see-more {
                background: var(--secondary-color);
                border-radius: 8px;
            }

            @media (min-width:280px) and (max-width: 576px) {
                .new-product-card {
                    max-width: 250px;
                }

                .new-product-card .image-mobile-preview {
                    max-width: 250px;
                    max-height: 200px;
                }

            }
        </style>
        <div class="new-product container-xxl px-3 pb-5 mb-4 position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="headline mb-4 px-3">
                Our Product
            </div>

            <div class="carousel gap-4" style="background: #ffffff !important;"
                data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true }'>

                <!-- Card Container 1 -->

                @forelse ($products as $product => $item)
                    <div class="box-border bg-white rounded-2xl new-product-card mb-4">
                        <div class="">
                            @if (isset($item->gallery[0]->thumbnail) != null)
                                <img src=" {{ url(Storage::url($item->gallery[0]->thumbnail)) }}" alt="preview"
                                    class="d-none d-sm-block image-preview" />
                                <img src=" {{ url(Storage::url($item->gallery[0]->thumbnail)) }}" alt="preview"
                                    class="d-sm-none image-mobile-preview" />
                            @else
                                <img src="{{ url('https://via.placeholder.com/750x500') }}" alt="preview"
                                    class="d-none d-sm-block image-preview" />
                                <img src="{{ url('https://via.placeholder.com/750x500') }}" alt="preview"
                                    class="d-sm-none image-mobile-preview" />
                            @endif


                            <div class="px-2 mt-2">
                                <div class="title p-md-2 mt-3">{{ $item->name }}</div>
                                <div class="price text-preview p-md-2 text-wrap text-truncate mt-2 mt-sm-0">
                                    Rp. {{ number_format($item->price, 2, ',', '.') }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-3 pb-3">
                                <a href="{{ route('vokasi-store-detail', $item->slug) }}" class="btn btn-see-more py-2 px-5 text-white text-capitalize">see more</a>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="justify-content-center text-center">
                        Belum ada product yang diupload
                    </div>
                @endforelse



            </div>
        </div>
    </section>
    <!-- end new product section -->


@endsection
