@extends('layouts.frontend')

@section('title', ' Home')

@section('content')

    <!-- detail news section -->
    <section class="h-100 w-100 mt-5 mb-5" style="box-sizing: border-box; background-color: #ffffff">
        <style>
            .detail-news .image-product {
                object-position: center;
                -o-object-position: center;
                object-fit: cover;
                border-radius: 0.5em;
                max-height: 450px;
                box-shadow: 45px 45px 31px -28px rgba(11, 93, 134, 0.15);
            }

            .detail-news .title {
                font: var(--header-text);
                color: #000000;
            }

            .detail-news .description p {
                font: var(--body-text);
                color: #7882A4;
                text-align: justify;
            }

            .detail-news .price {
                font: var(--header-text);
                color: #000000;
                font-size: 24px;
            }

            .detail-news .btn-see-more {
                background: var(--secondary-color);
                border-radius: 8px;
            }

            .detail-news .card-news {
                background-color: #ffffff;
                min-height: 240px;
                border-radius: 12px;
                background-position: center;
                background-size: cover;
            }

            .detail-news .btn-see-more {
                background: var(--secondary-color);
                border-radius: 15px;
            }

            .detail-news .title-news {
                max-width: 350px;
            }


            @media (min-width:280px) and (max-width: 576px) {

                .detail-news .title-news {
                    max-width: 300px;
                }

                .detail-news .image-product{
                    max-height: 320px;
                }

                .detail-news .description p {
                    /* position: relative; */
                    overflow-y: scroll;
                }

            }
        </style>
        <div class="detail-news container-xxl px-3 mb-2 " style="font-family: 'Poppins', sans-serif">
            <div class="row">
                <div class="col-12 col-md-8 p-3">
                    <img src="{{ url(Storage::url($new->thumbnail)) }}" alt="product image" class="image-product w-100 h-100">
                    <div class="title py-3 mt-3">
                        {{ $new->name }}
                    </div>
                    <div class="description text-justify text-wrap  mb-sm-0 mb-5">
                        <p>
                            {!! $new->description ?? '' !!}
                        </p>
                    </div>

                </div>
                <div class="col-12 col-md-4 p-4 text-center" style="background-color: #F9F9F9; border-radius: 12px;">
                    <div class="title pb-3 text-start" style="font: var(--subtitle-text);">
                        Berita lain
                    </div>

                    @forelse ($news as $new => $item)
                        <div class="d-flex align-items-start flex-column text-start card-news header-text text-truncate text-white w-100 p-3 mb-3"
                            style="background-image: url('{{ Storage::url($item->thumbnail) }}');">
                            <span class="d-inline-block text-truncate title-news mt-auto">
                                {{ $item->name }}
                            </span>
                            <div class="mt-2">
                                <a href="{{ route('news-detail', $item->slug) }}"
                                    class="btn btn-see-more py-2 px-5 text-white rounded-pill">Lihat Selengkapnya</a>
                            </div>
                        </div>

                    @empty
                        <div class="justify-content-center text-center">
                            Belum ada berita yang diupload
                        </div>
                    @endforelse


                    <a href="{{ route('news') }}" class="btn btn-see-more py-2 w-100 text-white ">Lihat Semua Berita</a>

                </div>
            </div>
        </div>
    </section>
    <!-- end detail news section -->


@endsection
