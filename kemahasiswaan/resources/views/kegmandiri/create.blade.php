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
                <h1 class="card-title">Formulir Pengajuan Kegiatan Mandiri</h1>
            </div>
            <div class="card-body">
                <form action="/mandiri/store" method="POST">
                    @csrf
                    <div class="container">
                        <div class="form-group">
                            <label>ID Kegiatan</label><br>
                            <input type="text" class="form-control" name="id" value="{{$m}}" disabled><br>
                            <label>NIM</label><br>
                            <input type="text" class="form-control" name="nim"><br>
                            <label>Nama Mahasiswa</label><br>
                            <input type="text" class="form-control" name="nama"><br>
                            <label>Kategori Kegiatan</label><br>
                            <select class="form-control" name="kategori_kegiatan">
                                <option value="">Kategori Kegiatan</option>
                                <option value="Provinsi">Provinsi</option>
                                <option value="Wilayah">Wilayah</option>
                                <option value="Nasional">Nasional</option>
                                <option value="Internasional">Internasional</option>
                            </select><br>
                            <div class="row">
                            <div class="form-group">
                                <label>Tanggal Mulai</label><br>
                                <input type="date" class="form-control" name="tanggal_mulai">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Selesai</label><br>
                                <input type="date" class="form-control" name="tanggal_selesai">
                            </div>
                            </div>
                            <label>URL Kegiatan</label><br>
                            <input type="text" name="url_kegiatan" class="form-control" rows="5"><br>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input class="btn btn-primary" type="submit" name="submit" value="save">
                        <a href="/2" class="btn btn-primary float-right">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection