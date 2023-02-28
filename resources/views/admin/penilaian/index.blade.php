@extends('layouts.app')
@section('title', 'SPK SAW | Kriteria')
@section('content')
@section('title', 'SPK SAW | Kriteria')
@section('content')
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#listkriteria" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
            aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Penilaian Alternatif</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="listkriteria">
            <div class="card-body">
                <div class="table-responsive">
                    <form action="" method="post">
                        <button class="btn btn-sm btn-primary float-right">Simpan</button>
                        <br><br>
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
                                            {{--  --}}
                                        @else
                                            @foreach ($kriteria as $key => $value)
                                                <td>
                                                    {{--  --}}
                                                    <select name="crips_id[]" class="form-control">
                                                        {{--  --}}
                                                        @foreach ($value->crips as $k_1 => $v_1)
                                                            <option value="{{ $v_1->id }}">
                                                                {{ $v_1->nama_crips }}</option>
                                                        @endforeach
                                                    </select>
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
                    </form>
                </div>
            </div>
        </div>
    @stop
@endsection
