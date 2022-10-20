@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <a href="/rekpra/cetak" class="btn btn-primary float-right">cetak rekap</a>
                <h1>Rekap Data Praktek Kerja</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>No Pengajuan</td>
                            <td>Nim</td>
                            <td>Nama Mahasiswa</td>
                            <td>Nama Program</td>
                            <td>Jumlah Mahasiswa</td>
                            <td>Tahun Kegiatan</td>
                            <td>Surat Tugas</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($praktek as $e=>$k)
                        <tr>
                            <td>{{$e+1}}</td>
                            <td>{{$k->id}}</td>
                            <td>{{$k->nim}}</td>
                            <td>{{$k->nama}}</td>
                            <td>{{$k->nama_program}}</td>
                            <td>{{$k->jumlah_mahasiswa}}</td>
                            <td>{{$k->tahun_kegiatan}}</td>
                            <td>{{$k->surat_tugas}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection