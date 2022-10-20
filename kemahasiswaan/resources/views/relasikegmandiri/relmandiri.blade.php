@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Realisasi Kegiatan Mandiri</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>No Pengajuan</td>
                        <td>Nim</td>
                        <td>Nama</td>
                        <td>Kategori Kegiatan</td>
                        <td>Tanggal Mulai</td>
                        <td>Tanggal Selesai</td>
                        <td>URL Kegiatan</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($relman as $e=>$m)
                    <tr>
                        <td>{{$e+1}}</td>
                        <td>{{$m->id}}</td>
                        <td>{{$m->nim}}</td>
                        <td>{{$m->nama}}</td>
                        <td>{{$m->kategori_kegiatan}}</td>
                        <td>{{$m->tanggal_mulai}}</td>
                        <td>{{$m->tanggal_selesai}}</td>
                        <td>{{$m->url_kegiatan}}</td>
                        <td>@if($m->status==0)
                            pending
                            @elseif($m->status==1)
                            belum lengkap
                            @elseif($m->status==2)
                            lengkap
                            @endif</td>
                        <td>@if($m->status==1)
                            <a href="/mandiri/{{$m->id}}/edit"><button type="button" class="btn btn btn-primary">Tambahkan Data</button></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection