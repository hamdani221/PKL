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
                <form action="/valpraktek/{{$praktek->id}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label>No Pengajuan</label>
                        <input name="id" class="form-control" value="{{$praktek->id}}" disabled>
                    </div>
                    <div class="form-group">
                            <label>Nim</label>
                            <input type="text" class="form-control" placeholder="Masukan NIM" name="nim" value="{{$praktek->nim}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" value="{{$praktek->nama}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nama Program</label>
                            <input type="text" class="form-control" placeholder="Nama Program" name="nama_program" value="{{$praktek->nama_program}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Mahaiswa</label>
                            <input type="text" class="form-control" placeholder="Jumlah Mahasiswwa" name="jumlah_mahasiswa" value="{{$praktek->jumlah_mahasiswa}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Tahun Kegiatan</label>
                            <input type="date" class="form-control" name="tahun_kegiatan" value="{{$praktek->tahun_kegiatan}}" disabled>
                        </div>
                        <div class="card-footer">
                        <input class="btn btn-primary" type="submit" name="submit" value="validasi">
                        <a href="/valpraktek/{{$praktek->id}}/tolak" class="btn btn-danger">Tolak</a>
                        <a href="/valpraktek" class="btn btn-primary float-right">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection