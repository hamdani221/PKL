@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Validasi Pertukaran Mahasiswa</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Data Pengajuan kegiatan Pertukaran Mahasiswa</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>No Pengajuan</td>
                        <td>Nim</td>
                        <td>Nama</td>
                        <td>status</td>
                        <td>aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pertukaran as $e=>$p)
                    <tr>
                        <td>{{$e+1}}</td>
                        <td>{{$p->id}}</td>
                        <td>{{$p->nim}}</td>
                        <td>{{$p->nama}}</td>
                        <td>@if($p->status==0)
                            pending
                            @elseif($p->status==1)
                            disetujui
                            @endif</td>
                        <td>@if($p->status==0)
                            <a href="/valpert/{{$p->id}}/edit" class="btn btn-primary btn-block">Cek Pengajuan</a>
                            @endif
                        </td>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection