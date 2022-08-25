@extends('layouts.app')

@section('title', 'User Account')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="d-flex justify-content-between card-header pb-0">
                    <h6>Ormawa</h6>
                    <a href="{{ route('dashboard.ormawa.create') }}" class="btn btn-sm px-2 bg-gradient-primary ">
                        Add Ormawa
                    </a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Ormawa
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Link Url
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($ormawa as $key => $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    @if ($item->thumbnail != null)
                                                        <img class="avatar avatar-sm me-3"
                                                            src="{{ url(Storage::url($item->thumbnail)) }}"
                                                            alt="logo department" loading="lazy"
                                                            style="-o-object-fit: cover; object-fit: cover;">
                                                    @else
                                                        <img class="avatar avatar-sm me-3"
                                                            src="{{ url('https://via.placeholder.com/750x500') }}"
                                                            alt="placeholder" />
                                                    @endif
                                                    {{-- <img src="{{ asset('admin/assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user1"> --}}
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-start ">
                                            <span
                                                class="text-secondary text-xs font-weight-bold ps-3">{{ $item->url_instagram }}</span>
                                        </td>
                                        <td class="align-middle ">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('dashboard.ormawa.edit', $item->id) }}"
                                                    class=" btn text-secondary font-weight-bold text-xs mt-3"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                                <form action="{{ route('dashboard.ormawa.destroy', $item->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf

                                                    <button type="submit"
                                                        class=" btn text-danger font-weight-bold text-xs mt-3 show_confirm">
                                                        delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="12">
                                            <h5 class="d-flex justify-content-center text-center mt-4">
                                                Belum ada request yang diupload
                                            </h5>
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
