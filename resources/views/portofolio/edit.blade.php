@extends('adminlte::page')

@section('title', 'Portofolio')

@section('content_header')
    {{-- <section class="content-header">
    </section> --}}
@stop

@section('content')

<section class="content p-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit @yield('title')</h3>
        </div>
        <div class="card-body">
            <form action="/profile" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="user_id">Nama MUA</label>
                            <input name="user_id" class="form-control" value="{{old('user_id')}}">
                            <div class="text-danger">
                                @error('user_id')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengalaman">Pengalaman</label>
                            <input name="pengalaman" class="form-control" value="{{old('pengalaman')}}">
                            <div class="text-danger">
                                @error('pengalaman')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kemampuan">Kemampuan</label>
                            <input name="kemampuan" class="form-control" value="{{old('kemampuan')}}">
                            <div class="text-danger">
                                @error('kemampuan')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="aktivitas_sekarang">Aktifitas Sekarang</label>
                            <input name="aktivitas_sekarang" class="form-control" value="{{old('aktivitas_sekarang')}}">
                            <div class="text-danger">
                                @error('aktivitas_sekarang')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gambar_utama" class="form-label">Gambar Utama</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="img-preview custom-file img-fluid">
                            <input type="file" class="custom-file-input form-control" id="gambar_utama" name="gambar_utama" onchange="previewImage()">
                            <label class="custom-file-label" for="gambar_utama">Pilih Gambar</label>
                            </div>
                            <div class="text-danger">
                                @error('gambar_utama')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Gambar Lainnya</label>
                            <img class="img-preview1 img-fluid mb-3 col-sm-5">
                            <div class="img-preview1 custom-file img-fluid">
                            <input type="file" class="custom-file-input form-control" id="gambar1" name="gambar1" onchange="previewImage1()">
                            <label class="custom-file-label" for="gambar1">Gambar 1</label>
                            </div>
                            <div class="text-danger">
                                @error('gambar1')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <img class="img-preview2 img-fluid mb-3 col-sm-5">
                            <div class="img-preview2 custom-file img-fluid">
                            <input type="file" class="custom-file-input form-control" id="gambar2" name="gambar2" onchange="previewImage()">
                            <label class="custom-file-label" for="gambar2">Gambar 2</label>
                            </div>
                            <div class="text-danger">
                                @error('gambar2')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <img class="img-preview3 img-fluid mb-3 col-sm-5">
                            <div class="img-preview3 custom-file img-fluid">
                            <input type="file" class="custom-file-input form-control" id="gambar3" name="gambar3" onchange="previewImage()">
                            <label class="custom-file-label" for="gambar3">Gambar 3</label>
                            </div>
                            <div class="text-danger">
                                @error('gambar3')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </div>
            </form>        
        </div>
    </div>
</section>

@stop


<script>
    function previewImage(){
        const image = document.querySelector('#gambar_utama');
        // const image2 = document.querySelector('#gambar2');
        // const image3 = document.querySelector('#gambar3');
        const imgPreview = document.querySelector('.img-preview');
        // const imgPreview2 = document.querySelector('.img-preview2');
        // const imgPreview3 = document.querySelector('.img-preview3');

        imgPreview.style.display = 'block';
        // imgPreview2.style.display = 'block';
        // imgPreview3.style.display = 'block';

        const oFReader = new FileReader();

        oFReader.readAsDataURL(image.files[0]);
        // oFReader.readAsDataURL(image2.files[0]);
        // oFReader.readAsDataURL(image3.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
            // imgPreview2.src = oFREvent.target.result;
            // imgPreview3.src = oFREvent.target.result;
        }
    // function previewImage1(){
    //     const image1 = document.querySelector('#gambar1');

    //     const imgPreview1 = document.querySelector('.img-preview1');

    //     imgPreview1.style.display = 'block';

    //     const oFReader = new FileReader();

    //     oFReader.readAsDataURL(image1.files[1]);

    //     oFReader.onload = function(oFREvent){
    //         imgPreview1.src = oFREvent.target.result;
    //     }
    // }
}
</script>


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script> console.log('Hi!'); </script>
    @section('plugins.Datatables', true)

@stop