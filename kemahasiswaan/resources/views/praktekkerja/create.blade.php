@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Formulir Pengajuan Praktek Kerja</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h1 class="card-title">Formulir Pengajuan Praktek Kerja</h1>
            </div>
            <div class="card-body">
                <form action="/praktekkerja/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>No Pengajuan</label>
                        <input name="id" class="form-control" value="{{$p}}" disabled>
                    </div>
                    <div class="form-group">
                            <label>Nim</label>
                            <input type="text" class="form-control" placeholder="Masukan NIM" name="nim"></input>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Nama Program</label>
                            <input type="text" class="form-control" placeholder="Nama Program" name="nama_program">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Mahaiswa</label>
                            <input type="text" class="form-control" placeholder="Jumlah Mahasiswwa" name="jumlah_mahasiswa">
                        </div>
                        <div class="form-group">
                            <label>Tahun Kegiatan</label>
                            <input class="form-control" type="date" name="tahun_kegiatan">
                        </div>
                        <div class="card-footer">
                        <input class="btn btn-primary" type="submit" name="submit" value="save">
                        <a href="/praktek" class="btn btn-primary float-right">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection