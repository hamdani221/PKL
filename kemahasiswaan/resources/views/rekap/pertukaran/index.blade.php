@extends('layout.mastercode')
@section('content')
<section class="content-header">
        <div class="card">
            <div class="card-header">
                <a href="/rekpert/cetak" class="btn btn-primary float-right">cetak rekap</a>
                <h1>Rekap Data Perukaran Mahasiswa</h1>
            </div>
            <div class="clard-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>No Pengajuan</td>
                            <td>Nim</td>
                            <td>Nama Mahasiswa</td>
                            <td>Program Pertukaran Mahasiswa</td>
                            <td>Level</td>
                            <td>Status Kegiatan</td>
                            <td>Jumlah Mahasiswa</td>
                            <td>Tahun Kegiatan</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pmhs as $e=>$p)
                        <tr>
                            <td>{{$e+1}}</td>
                            <td>{{$p->id}}</td>
                            <td>{{$p->nim}}</td>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->nama_program}}</td>
                            <td>{{$p->level}}</td>
                            <td>{{$p->statusi}}</td>
                            <td>{{$p->jumlah_mahasiswa}}</td>
                            <td>{{$p->tahun_kegiatan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</section>
@endsection