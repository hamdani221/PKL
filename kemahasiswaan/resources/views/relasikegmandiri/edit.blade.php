@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Lengkapi Data</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="content-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Kelengkapan Data</h3>
            </div>
            <div class="card-body">
                <form action="/mandiri/{{$mandiri->id}}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="container">
                        <div class="card-body">
                            <div class="form-group">
                                <label>ID Kegiatan</label><br>
                                <input type="text" class="form-control" name="id" value="{{$mandiri->id}}"
                                 disabled><br>
                                <label>NIM</label><br>
                                <input type="text" class="form-control" name="nim" value="{{$mandiri->nim}}" disabled><br>
                                <label>Nama Mahasiswa</label><br>
                                <input type="text" class="form-control" name="nama" value="{{$mandiri->nama}}" disabled><br>
                                <label>Kategori Kegiatan</label><br>
                                <select class="form-control" name="kategori_kegiatan" disabled>
                                    <option value="">Kategori Kegiatan</option>
                                    <option value="Provinsi" @if($mandiri->kategori_kegiatan == "provinsi") selected @endif>Provinsi</option>
                                    <option value="Wilayah" @if($mandiri->kategori_kegiatan == "wilayah") selected @endif>Wilayah</option>
                                    <option value="Nasional" @if($mandiri->kategori_kegiatan == "nasional") selected @endif>Nasional</option>
                                    <option value="nternasional" @if($mandiri->kategori_kegiatan == "internasional") selected @endif>Internasional</option>
                                </select><br>
                                <label>Tanggal Mulai</label><br>
                                <input type="text" class="form-control" name="tanggal_mulai" value="{{$mandiri->tanggal_mulai}}" disabled><br>
                                <label>Tanggal Selesai</label><br>
                                <input type="text" class="form-control" name="tanggal_selesai" value="{{$mandiri->tanggal_selesai}}" disabled><br>
                                <label>URL Kegiatan</label><br>
                                <textarea name="url_kegiatan" class="form-control" rows="5" disabled>{{$mandiri->url_kegiatan}}</textarea><br>
                                <label>Capaian Prestasi</label><br>
                                <select class="form-control" name="capaian_prestasi">
                                    <option value="">Capaian Prestasi</option>
                                    <option value="Juara 1">Juara 1</option>
                                    <option value="Juara 2">Juara 2</option>
                                    <option value="Juara 3">Juara 3</option>
                                    <option value="Peringkat 1">Peringkat 1</option>
                                    <option value="Peringkat 2">Peringkat 2</option>
                                    <option value="Peringkat 3">Peringkat 3</option>
                                    <option value="Juara Umum">Juara Umum</option>
                                    <option value="Lolos">Lolos</option>
                                </select>
                                <label>Sertifikat</label><br>
                                <input type="file" id="sertifikat" name="sertifikat"><br>
                                <label>Foto Penghargaan</label><br>
                                <input type="file" id="foto_penghargaan" name="foto_penghargaan"><br>
                                <label>Surat Tugas</label><br>
                                <input type="file" id="surat_tugas" name="surat_tugas"><br>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input class="btn btn-primary" type="submit" name="submit" value="update"><br>
                            <a href="/relmandiri" class="btn btn-primary float-right">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection