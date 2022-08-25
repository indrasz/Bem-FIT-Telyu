@extends('layouts.app')

@section('title', 'Ormawa')

@section('content')

    <div class="row">
        <div class="card mb-4">
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Detail Ormawa</h6>
                <form action="{{ route('dashboard.ormawa.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4 imgUp">
                                        <div class="imagePreview rounded-3"
                                            style="background-image: url('{{ asset('admin/assets/img/dragdrop2.png') }}')">
                                        </div>
                                        <label class="btn bg-gradient-success">
                                            Upload
                                            <input type="file" name="thumbnail" class="uploadFile img"
                                                value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                        </label>
                                        </label>
                                    </div>
                                </div><!-- row -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Nama Berita">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="url_instagram">Link Instagram</label>
                                <input type="text" name="url_instagram" id="url_instagram" class="form-control"
                                    placeholder="Link Instgram Ormawa">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="vision">Visi</label>
                                <input type="text" name="vision[]" id="vision" class="form-control"
                                    placeholder="Visi Ormawa">
                                <div id="newVision"></div>
                                <i class="fa fa-plus visionAdd btn bg-gradient-primary rounded-2 mt-2">
                                    tambah visi
                                </i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="mission">Misi</label>
                                <input type="text" name="mission[]" id="mission" class="form-control"
                                    placeholder="Misi Ormawa">
                                <div id="newMission"></div>
                                <i class="fa fa-plus missionAdd btn bg-gradient-primary rounded-2 mt-2">
                                    tambah misi
                                </i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="description">Description</label>
                                <textarea id="editor" name="description" class="form-control" placeholder="A few words about this Ormawa ..."></textarea>
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
            width: 400px;
            height: 250px;
            background-position: center;
            background-color: #fff;
            background-size: contain;
            background-repeat: no-repeat;
            display: inline-block;
        }

        .btn-primary {
            display: block;
            border-radius: 0px;
            box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, 0.2);
            margin-top: -5px;
        }

        .imgUp {
            margin-bottom: 15px;
        }

        .del {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            color: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.2);
            text-align: center;
            line-height: 30px;
            margin-top: 0px;
            cursor: pointer;
            font-size: 9px;
        }
    </style>
@endpush

@push('after-script')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    <script>
        $(".visionAdd").click(function() {
            $(this).closest(".row").find('.visionAdd').before(
                '<div class="d-flex gap-2"><input type="text" name="vision[]" id="vision" class="form-control mt-1 mb-1" placeholder="Visi Ormawa"><i class="fa fa-times del bg-danger mt-2 mx-2"></i></div>'
            );
        });
        $(".missionAdd").click(function() {
            $(this).closest(".row").find('.missionAdd').before(
                '<div class="d-flex gap-2"><input type="text" name="mission[]" id="mission" class="form-control mt-1 mb-1" placeholder="Misi Ormawa"><i class="fa fa-times del bg-danger mt-2 mx-2"></i></div>'
            );
        });
        $(document).on("click", "i.del", function() {
            $(this).parent().remove();
        });
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
