@extends('layouts.app')
@section('title', 'Halaman Admin')
@section('css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#tambahadmin" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Admin</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="tambahadmin">
                    <div class="card-body">
                        @if (Session::has('msg'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Info!</strong> {{ Session::get('msg') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nim</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                <small id="helpId" class="text-muted">Help text</small>
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                <small id="helpId" class="text-muted">Help text</small>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                <small id="helpId" class="text-muted">Help text</small>
                            </div>
                        </form>
                        <button class="btn btn-primary" type="submit">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
