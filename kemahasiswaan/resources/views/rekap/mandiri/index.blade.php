@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="card">
        <div class="card-header">
            <a href="/rekman/cetak" class="btn btn-primary float-right">cetak rekap</a>
            <h1>Data Pengajuan kegiatan Mandiri</h1>
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
                        <th>Capaian Prestasi</th>
                        <th>Sertifikat</th>
                        <th>Foto Penghargaan</th>
                        <th>Surat Tugas</th>
                        <th>status</th>
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
                        <td>{{$m->capaian_prestasi}}</td>
                        <td><a href="{{asset('img/'.$m->sertifikat) }}" target="_blank">lihat gambar</a></td>
                        <td><a href="{{asset('img/'.$m->foto_penghargaan) }}" target="_blank">lihat gambar</a></td>
                        <td><a href="{{asset('doc/'.$m->surat_tugas) }}" target="_blank">lihat surat</a></td>
                        <td>@if($m->status==0)
                            pending
                            @elseif($m->status==1)
                            belum lengkap
                            @elseif($m->status==2)
                            lengkap
                            @endif</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection