@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="row">
    <div class="card mb-4">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h6 class="mb-0">Add Profile </h6>
                </div>
                {{-- <div class="col-4 text-end">
                    <a href="#!" class="btn btn-sm bg-gradient-primary mb-0">Settings</a>
                </div> --}}
            </div>
        </div>
        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Department Profile</h6>
            <form action="{{ route('dashboard.profile.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-5">
                        <div class="form-group">
                             <div class="row">
                                <div class="col-sm-10 imgUp">
                                    <div class="imagePreview rounded-3" style="background-image: url('{{ asset('admin/assets/img/dragdrop.png') }}')"></div>
                                    <label class="btn bg-gradient-success">
                                        Upload
                                        <input type="file" name="thumbnail" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </label>
                                </div>
                            </div><!-- row -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="product-name">Name</label>
                            <input type="text" name="name" id="product-name" class="form-control" placeholder="Nama Anggota">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="product-name">Position</label>
                            <input type="text" name="position" id="product-name" class="form-control" placeholder="Jabatan Anggota">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="product-name">Department</label>
                            <select id="departments_id" name="departments_id" autocomplete="departments_id" class="form-control" required>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
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

@push('after-style')

    <style>
        .imagePreview {
            width: 100%;
            height: 300px;
            background-position: center;
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
        }
        .btn-primary{
            display:block;
            border-radius:0px;
            box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
            margin-top:-5px;
        }
        .imgUp{
            margin-bottom:15px;
        }
        .del{
            width:30px;
            height:30px;
            border-radius:50%;
            color:#fff;
            box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
            text-align:center;
            line-height:30px;
            margin-top:0px;
            cursor:pointer;
            font-size:9px;
        }
    </style>
@endpush

@push('after-script')
    <script>
        $(function() {
            $(document).on("change",".uploadFile", function()
            {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                    }
                }

            });
        });
    </script>
@endpush
