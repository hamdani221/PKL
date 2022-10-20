@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Validasi Praktek Kerja</h1><br>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Data Pengajuan kegiatan Praktek Kerja</h1>
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
                    @foreach ($praktek as $e=>$p)
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
                        <td>
                            <a href="/valpraktek/{{$p->id}}/edit" class="btn btn-primary btn-block">cek detail</a>
                        </td>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection