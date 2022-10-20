@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Kegiatan Praktek Kerja</h1>
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
                            <td>Nama Program</td>
                            <td>Jumlah Mahasiswa</td>
                            <td>Tahun Kegiatan</td>
                            <td>Surat Tugas</td>
                            <td>Status Pengajuan</td>
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
                            <td>@if($k->status==0)
                            pending
                            @elseif($k->status==1)
                            disetujui
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