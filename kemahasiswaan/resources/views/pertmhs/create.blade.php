@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Formulir Pengajuan Pertukaran Mahasiswa</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Formulir Pengajuan</h3>
            </div>
            <form action="/pertmhs/store" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>No Pengajuan : </label>
                        <b>{{$m}}</b>
                    </div>
                    <div class="form-group">
                        <label>Nim</label>
                        <input type="text" class="form-control" placeholder="Masukan NIM" name="nim">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Program Pertukaran Mahasiswa</label>
                        <input type="text" class="form-control" placeholder="Program Pertukaran Mahasiswa" name="nama_program">
                    </div>
                    <div class="form-group">
                        <label>Pilih Level</label>
                        <select class="form-control" name="level">
                            <option>pilih level</option>
                            <option value="Nasional">Nasional</option>
                            <option value="Internasional">Internasional</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Staus</label>
                        <select class="form-control" name="statusi">
                            <option>pilih status</option>
                            <option value="SK">SKS</option>
                            <option value="Non SKS">Non SKS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Mahaiswa</label>
                        <input type="text" class="form-control" placeholder="Jumlah Mahasiswwa" name="jumlah_mahasiswa">
                    </div>
                    <div class="form-group">
                        <label>Tahun Kegiatan</label>
                        <input type="text" class="form-control" name="tahun_kegiatan">
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <input class="btn btn-primary" type="submit" name="submit" value="save">
            <a href="/daftarprt" class="btn btn-primary float-right">Batal</a>
        </div>
        </form>
    </div>
    </div>
</section>
@endsection