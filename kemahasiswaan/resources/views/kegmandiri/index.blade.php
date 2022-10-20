@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Kegiatan Mandiri</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3>Data Pengajuan kegiatan Mandiri</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No Pengajuan</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Kategori Kegiatan</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>URL Kegiatan</th>
                        <th>Status</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mandiri as $e=>$m)
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
                            disetujui
                            @elseif($m->status==3)
                            Ditolak
                            @endif
                        </td>
                        <td>@if($m->status==3)
                            <button class="btn btn-primary" disabled>cetak surat</button>
                            @elseif($m->status==1)
                            <a href="/mandiri/{{$m->id}}/surat" class="btn btn-primary">cetak surat</a>
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