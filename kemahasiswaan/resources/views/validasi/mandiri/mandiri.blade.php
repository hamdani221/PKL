@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Validasi Kegiatan Mandiri</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pengajuan kegiatan Mandiri</h3>
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
                    @foreach ($mandiri as $e=>$m)
                    <tr>
                        <td>{{$e+1}}</td>
                        <td>{{$m->id}}</td>
                        <td>{{$m->nim}}</td>
                        <td>{{$m->nama}}</td>
                        <td>@if($m->status==0)
                            pending
                            @elseif($m->status==1)
                            disetujui
                            @endif
                        </td>
                        <td><a href="/valimandiri/{{$m->id}}/setuju" class="btn btn-primary btn-block">Cek Pengajuan</a>                         
                        </td>
                        @endforeach
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection