@extends('layouts.app')
@section('title', 'SPK SAW | Perhitungan SAW')
@section('content')
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#listkriteria" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
            aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Tahap Analisa</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="listkriteria">
            <div class="card-body">
                @if (Session::has('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Info!</strong> {{ Session::get('msg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="table-responsive">
                    {{-- <form action="{{ route('penilaian.store') }}" method="post">
                        @csrf
                        <button class="btn btn-sm btn-primary float-right">Simpan</button>
                        <br><br> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Alternatif</th>
                                @foreach ($kriteria as $key => $value)
                                    <th>{{ $value->nama_kriteria }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($alternatif as $alt => $valt)
                                <tr>
                                    <td>{{ $valt->nama_alternatif }}</td>
                                    @if (count($valt->penilaian) > 0)
                                        @foreach ($valt->penilaian as $key => $value)
                                            <td>
                                                {{ $value->crips->bobot }}
                                            </td>
                                        @endforeach
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td>Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#normalisasi" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
            aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Normalisasi</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="normalisasi">
            <div class="card-body">
                @if (Session::has('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Info!</strong> {{ Session::get('msg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="table-responsive">
                    {{-- <form action="{{ route('penilaian.store') }}" method="post">
                        @csrf
                        <button class="btn btn-sm btn-primary float-right">Simpan</button>
                        <br><br> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Alternatif / Kriteria</th>
                                @foreach ($kriteria as $key => $value)
                                    <th>{{ $value->nama_kriteria }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($normalisasi as $key => $value)
                                <tr>
                                    <td>{{ $key }}</td>
                                    @foreach ($value as $key_1 => $value_1)
                                        <td>
                                            {{ $value_1 }}
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
