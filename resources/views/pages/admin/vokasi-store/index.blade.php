@extends('layouts.app')

@section('title', ' Vokasi Store')

@section('content')



<div class="row">
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-1">Vokasi Store</h6>
                <p class="text-sm">Architects design houses</p>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-12 col-md-9">
                        <div class="carousel gap-4" style="background: #ffffff !important;"
                        data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true }'>

                        @forelse ($vokasiStore as $key => $item)
                            <div class="col-xl-4 col-md-6 mb-xl-0 mb-4 me-3">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            @if (isset($item->gallery[0]->thumbnail) != null)
                                                <img src=" {{ url(Storage::url($item->gallery[0]->thumbnail)) }}" alt="img-blur-shadow" loading="lazy" class="img-fluid shadow border-radius-xl w-100" style="max-height: 200px; -o-object-fit: cover; object-fit: cover;">

                                            @else
                                                <img alt="img-blur-shadow" loading="lazy" class="img-fluid shadow border-radius-xl" src="{{ url('https://via.placeholder.com/750x500') }}" />
                                            @endif
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <p class="text-gradient text-dark mb-2 text-sm">Rp.{{ number_format($item->price )?? '' }}</p>
                                        <a href="javascript:;">
                                        <h5>
                                            {{ $item->name ?? '' }}
                                        </h5>
                                        </a>
                                        <span class="d-inline-block text-wrap text-truncate" style="max-width: 250px;max-height:80px;">
                                            {!! $item->description ?? '' !!}
                                        </span>
                                        <div class="d-flex d-sm-block text-start text-xl-center align-items-center mt-3">
                                            <a href="{{ route('dashboard.vokasi-store.edit', $item->id) }}" class="btn btn-outline-primary btn-sm mb-0 me-2 me-sm-0">Sunting Produk</a>

                                            <form action="{{ route('dashboard.vokasi-store.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger btn-sm mb-0 mt-0 mt-xl-3 show_confirm" >Hapus Produk</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="d-flex justify-content-center text-center">
                                Belum ada Product yang diupload
                            </div>
                        @endforelse


                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-xl-0 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="{{ route('dashboard.vokasi-store.create') }}">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Product </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('after-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });

</script>
@endpush

