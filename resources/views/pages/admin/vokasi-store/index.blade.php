@extends('layouts.app')

@section('title', ' Vokasi Store')

@section('content')

{{-- <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Vokasi Store</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="{{ asset('admin/assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user1">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">John Michael</h6>
                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Manager</p>
                    <p class="text-xs text-secondary mb-0">Organization</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Online</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                  </td>
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

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
                                                <img src=" {{ url(Storage::url($item->gallery[0]->thumbnail)) }}" alt="img-blur-shadow" loading="lazy" class=" mx-auto d-block shadow border-radius-xl w-100 h-100" style="max-height: 200px; -o-object-fit: cover; object-fit: cover;">

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
                                        <div class="mb-4 text-sm text-truncate h-100">
                                            {!! $item->description ?? '' !!}
                                        </div>
                                        <div class="d-flex d-sm-block text-start text-xl-center align-items-center">
                                            <a href="{{ route('dashboard.vokasi-store.edit', $item->id) }}" class="btn btn-outline-primary btn-sm mb-0 me-2 me-sm-0">Edit Product</a>

                                            <form action="{{ route('dashboard.vokasi-store.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger btn-sm mb-0 mt-0 mt-xl-3">Delete Product</button>
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
