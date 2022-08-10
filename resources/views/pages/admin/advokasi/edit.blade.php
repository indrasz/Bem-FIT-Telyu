@extends('layouts.app')

@section('title', ' Creation')

@section('content')

<div class="row">
    <div class="card ">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h6 class="mb-0">Advokasi </h6>
                </div>
            </div>
        </div>
        <div class="card-body">

            <form action="{{ route('dashboard.advokasi.update', [$advokasi->id]) }}" method="post" >

                @method('PUT')
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="name">Name</label>
                            <input type="text" name="name" value="{{ $advokasi->name ?? '' }}" id="name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="email">Email</label>
                            <input type="text" name="email" value="{{ $advokasi->email ?? '' }}" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="category">Category</label>
                            <input type="text" name="category" value="{{ $advokasi->category ?? '' }}" id="category" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Message</label>
                            <textarea id="editor" name="message" class="form-control" >{{ $advokasi->message ?? '' }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status" required>
                              <option value="{{ $advokasi->status}}">{{ $advokasi->status }}</option>
                              <option value="PENDING">PENDING</option>
                              <option value="DITERIMA">DITERIMA</option>
                              <option value="DISETUJUI">DISETUJUI</option>
                              <option value="DITOLAK">DITOLAK</option>
                            </select>
                          </div>
                    </div>

                    <div class="col-md-12 text-end">
                        <button type="submit" class=" btn btn-sm bg-gradient-primary mb-0">Save</button>
                    </div>

                </div>

            </form>
            <hr class="horizontal dark my-4">

        </div>

    </div>
</div>

@endsection

