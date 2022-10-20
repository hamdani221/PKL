@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Pengajuan Kegiatan Mandiri</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h1 class="card-title">Data Pengajuan</h1>
            </div>
            <div class="card-body">
                <form action="/valimandiri/{{$mandiri->id}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label>No Pengajuan</label>
                        <input type="text" class="form-control" name="id" value="{{$mandiri->id}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>NIM</label><br>
                        <input type="text" class="form-control" name="nim" value="{{$mandiri->nim}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nama Mahasiswa</label><br>
                        <input type="text" class="form-control" name="nama" value="{{$mandiri->nama}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Kategori Kegiatan</label><br>
                        <select class="form-control" name="kategori_kegiatan" disabled>
                            <option value="">Kategori Kegiatan</option>
                            <option value="provinsi" @if($mandiri->kategori_kegiatan == "provinsi") selected @endif>Provinsi</option>
                            <option value="wilayah" @if($mandiri->kategori_kegiatan == "wilayah") selected @endif>Wilayah</option>
                            <option value="nasional" @if($mandiri->kategori_kegiatan == "nasional") selected @endif>Nasional</option>
                            <option value="internasional" @if($mandiri->kategori_kegiatan == "internasional") selected @endif>Internasional</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label><br>
                        <input type="text" class="form-control" name="tanggal_mulai" value="{{$mandiri->tanggal_mulai}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label><br>
                        <input type="text" class="form-control" name="tanggal_selesai" value="{{$mandiri->tanggal_selesai}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>URL Kegiatan</label><br>
                        <textarea name="url_kegiatan" class="form-control" rows="5" disabled>{{$mandiri->url_kegiatan}}</textarea>
                    </div>
                    <div class="card-footer">
                        <input class="btn btn-primary" type="submit" name="submit" value="Validasi">
                        <a href="/valimandiri/{{$mandiri->id}}/tolak" class="btn btn-danger">Tolak</a>
                        <a href="/valimandiri" class="btn btn-primary float-right">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection