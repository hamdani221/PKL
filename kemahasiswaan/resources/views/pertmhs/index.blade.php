@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Kegiatan Pertukaran Mahasiswa</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="content">
        <div class="card">
            <div class="class-body">
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
                            <td>Status</td>
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
                            <td>@if($p->status==0)
                            pending
                            @elseif($p->status==1)
                            disetujui
                            @elseif($p->status==2)
                            ditolak
                            @endif</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </section>
@endsection