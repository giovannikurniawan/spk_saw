@extends('layouts.app')
@section('title.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#tambahkriteria" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Kriteria</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="tambahkriteria">
                    <div class="card-body">
                        <form action="{{ route('kriteria.index') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Kriteria</label>
                                <input type="text"
                                    class="form-control @erorr('nama_kriteria')
is-invalid
@enderorr"
                                    name="nama_kriteria">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
