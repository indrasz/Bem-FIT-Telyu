@extends('layouts.app')

@section('title', ' Vokasi Store')

@section('content')

<div class="row">
    <div class="card mb-4">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h6 class="mb-0">Edit Product </h6>
                </div>
                {{-- <div class="col-4 text-end">
                    <a href="#!" class="btn btn-sm bg-gradient-primary mb-0">Settings</a>
                </div> --}}
            </div>
        </div>
        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Detail Product</h6>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                @forelse ($thumbnail_product as $thumbnail_item)

                                    <div class="col-sm-4 imgUp">
                                        <div class="imagePreview" style="background-image: url({{ Storage::url($thumbnail_item->thumbnail) }})"></div>

                                        <div class="d-flex gap-2">
                                            <form action="{{ route('dashboard.vokasi-store-gallery.update', $thumbnail_item->id) }}" method="POST"  enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf


                                                <button type="submit" class="btn bg-gradient-success ">
                                                    Update
                                                </button>

                                                <label class="btn bg-gradient-secondary">
                                                    ganti
                                                    <input type="file" name="{{ 'thumbnails['.$thumbnail_item->id.']' }}" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                                </label>

                                            </form>

                                            <form action="{{ route('dashboard.vokasi-store-gallery.destroy', $thumbnail_item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input hidden type="file" name="{{ 'thumbnails['.$thumbnail_item->id.']' }}" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">

                                                <button type="submit" class="btn bg-gradient-danger ">
                                                    {{-- <i class="fa fa-trash delete bg-danger mx-2"></i> --}}
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>


                                @empty

                                @endforelse
                                <!-- col-2 -->

                            </div><!-- row -->
                        </div>
                    </div>
                </div>

            <form action="{{ route('dashboard.vokasi-store.update', [$vokasiStore->id]) }}" method="POST" enctype="multipart/form-data">
                {{-- {{ route('dashboard.vokasi-store.update', [$vokasiStore->id]) }} --}}

                @method('PUT')
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <!-- col-2 -->
                                <i class="fa fa-plus imgAdd btn btn-secondary rounded">
                                    tambah gambar
                                </i>
                            </div>

                            </div><!-- row -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="product-name">Name</label>
                            <input type="text" name="name" id="product-name" class="form-control" value="{{ $vokasiStore->name ?? '' }}" placeholder="Nama Produk">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="product-price">Price</label>
                            <input type="number" name="price" id="product-price" class="form-control" value="{{ $vokasiStore->price ?? '' }}" placeholder="Harga Produk">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" for="product-link">URL Link</label>
                            <input type="text" name="url" id="product-link" class="form-control" value="{{ $vokasiStore->url ?? '' }}" placeholder="Link URL Product">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Description</label>
                            <textarea id="editor" name="description" class="form-control" placeholder="A few words about this product ...">{{ $vokasiStore->description ?? '' }}</textarea>
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
            background-image: url('{{ asset('admin/assets/img/dragdrop2.png') }}');
            background-color:#fff;
            background-size: contain;
            background-repeat:no-repeat;
            display: inline-block;
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
        .delete{
            width:30px;
            height:30px;
            border-radius:50%;
            color:#fff;
            box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
            text-align:center;
            line-height:30px;
            margin-top:0px;
            cursor:pointer;
            font-size:16px;
        }
    </style>
@endpush

@push('after-script')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>

    <script type="text/javascript">
        $("#addThumbnailRow").click(function() {
            var html = '';
            html +=
                ' <input type="file" accept="image/*" id="product-thumbnail" class="form-control mt-1" placeholder="Thumbnail"> '
            $('#newThumbnailRow').append(html);
        });
    </script>
    <script>
        $(".imgAdd").click(function(){
        $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-4 imgUp"><div class="imagePreview"></div><label class="btn btn-success">Upload<input type="file" name="thumbnail[]" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del bg-danger mx-2"></i></div>');
        });
        $(document).on("click", "i.del" , function() {
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
