@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="card">
        <div class="card-header">
            <h1>Data Pengajuan kegiatan Mandiri</h1>
        </div>
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
                        <td>Capaian Prestasi</td>
                        <td>Sertifikat</td>
                        <td>Foto Penghargaan</td>
                        <td>Surat Tugas</td>
                        <td>Status</td>
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
                        <td> 
                            <a href="{{asset('img/'.$m->foto_penghargaan) }}" target="_blank">lihat gambar</a>
                        </td>
                        <td><a href="{{asset('doc/'.$m->surat_tugas) }}" target="_blank">lihat surat</a></td></td>
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