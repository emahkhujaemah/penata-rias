@extends('adminlte::page')

@section('title', 'Portofolio')

@section('content_header')
    {{-- <section class="content-header">
    </section> --}}
@stop

@section('content')

<section class="content p-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit @yield('title')</h3>
                </div>
                <div class="card-body">
                    <form action="/lokasi/{{$lokasi->id}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('put')
                        
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <input name="lokasi" class="form-control" value="{{old('lokasi', $lokasi->lokasi)}}">
                                    <div class="text-danger">
                                        @error('lokasi')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input name="keterangan" class="form-control" value="{{old('keterangan', $lokasi->keterangan)}}">
                                    <div class="text-danger">
                                        @error('keterangan')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            
                        <div class="box-footer">
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form> 
                </div>
            </div>       
        </div>
    </div>
</section>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script> console.log('Hi!'); </script>
    @section('plugins.Datatables', true)

@stop