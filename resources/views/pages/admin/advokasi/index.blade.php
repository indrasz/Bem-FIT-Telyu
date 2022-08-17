@extends('layouts.app')

@section('title', ' Advokasi')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Advokasi</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Category</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Employed</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($advokasi as $key => $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $item->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-lg font-weight-bold mb-0">{{ $item->category }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            @if ($item->status == 'PENDING')
                                                <span
                                                    class="badge badge-sm bg-gradient-primary text-uppercase">{{ $item->status }}</span>
                                            @elseif ($item->status == 'DITERIMA')
                                                <span
                                                    class="badge badge-sm bg-gradient-info text-uppercase">{{ $item->status }}</span>
                                            @elseif ($item->status == 'DISETUJUI')
                                                <span
                                                    class="badge badge-sm bg-gradient-success text-uppercase">{{ $item->status }}</span>
                                            @else
                                                <span
                                                    class="badge badge-sm bg-gradient-danger text-uppercase">{{ $item->status }}</span>
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $item->created_at }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('dashboard.advokasi.edit', $item->id) }}"
                                                    class=" btn text-secondary font-weight-bold text-xs mt-3">
                                                    Edit
                                                </a>
                                                <form action="{{ route('dashboard.advokasi.destroy', $item->id) }}"
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

@push('after-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
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
