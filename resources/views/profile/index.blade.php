@extends('adminlte::page')

@section('title', 'Profil')

@section('content_header')
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
    </section> --}}
@stop

@section('content')

<section class="content">

    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Success:</h4>
                {{session('pesan')}}
            </div>     
        @endif

        <!-- /.card -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tabel @yield('title')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </div>
            </div>
        </div>
        </section>
        <div class="card">
            <div class="card-body">
            <div class="mb-3">
                <a href="/profile/create" class="btn btn-primary btn-sm me-5"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama MUA</th>
                    <th>Nama Pemilik</th>
                    <th>Alamat</th>
                    <th>Whatapps</th>
                    <th>Sosial Media</th>
                    <th>Profil Bio</th>
                    <th>Tempat Kerja</th>
                    <th>Status</th>
                    <th>Foto Profil</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ($profile->skip(1) as $profil)
                        <td>{{$loop->iteration}} </td>
                        <td>{{$profil->name}}</td>
                        <td>{{$profil->nama_pemilik}}</td>
                        <td>{{$profil->alamat}}</td>
                        <td>{{$profil->whatsapp}}</td>
                        <td>{{$profil->sosial_media}}</td>
                        <td>{{$profil->profil_bio}}</td>
                        <td>{{$profil->tempat_kerja}}</td>
                        <td>{{$profil->status}}</td>
                        <td>
                            <img src="{{asset('storage/' . $profil->foto_profil)}}" class="img-fluid" height="50px" alt="{{ $profil->foto_profil }}">
                        </td>
                        <td >    
                            <a href="/profile/{{$profil->id}}" class="btn btn-sm btn-success" ><i class="fas fa-eye"></i></a>
                            <a href="/profile/{{$profil->id}}/edit" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i><a>
                             
                            <form method="post" action="/profile/{{$profil->id}}" class="form-inline">
                                @csrf
                                @method('delete') 
                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                <div class="modal fade" id="delete">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title">{{$profil->name}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah Anda Yakin Menghapus Data Ini....???&hellip;</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                                                    <button type="button" class="btn btn-outline-light">Yes</button>
                                            </div>
                                        </div>
                                    </div>                                
                                </div> 
                            </form>
                        </td>                  
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
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