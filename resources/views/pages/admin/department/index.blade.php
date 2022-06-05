@extends('layouts.app')

@section('title', 'Department')

@section('content')

<div class="row">
    <div class="col-8">
      <div class="card mb-4">
        <div class="d-flex justify-content-between card-header pb-0">
          <h6>Vokasi Store</h6>
          <a href="{{ route('dashboard.department.create') }}" class="btn bg-gradient-primary ">
            Add Department
          </a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Department</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Publish At</th>
                  <th class="text-center text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($department as $key => $item)
                <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                            @if ($item->thumbnail != NULL)
                                <img class="avatar avatar-sm me-3" src="{{ url(Storage::url($item->thumbnail)) }}" alt="logo department" loading="lazy">
                            @else
                                <img class="avatar avatar-sm me-3" src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" />
                            @endif
                          {{-- <img src="{{ asset('admin/assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user1"> --}}
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center ">
                      <span class="text-secondary text-xs font-weight-bold">2{{ $item->created_at }}</span>
                    </td>
                    <td class="align-middle  ">
                     <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('dashboard.department.edit', $item->id) }}" class=" btn text-secondary font-weight-bold text-xs mt-3" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
                        <form action="{{ route('dashboard.department.destroy', $item->id) }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class=" btn text-danger font-weight-bold text-xs mt-3" >
                                delete
                            </button>
                        </form>
                     </div>
                    </td>

                </tr>
                @empty

                @endforelse


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
