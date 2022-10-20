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
            <form action="/valpert/{{$pertukaran->id}}" method="POST">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>No Pengajuan</label>
                        <input name="id" value="{{$pertukaran->id}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nim</label>
                        <input type="text" class="form-control" placeholder="Masukan NIM" name="nim" value="{{$pertukaran->nim}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" value="{{$pertukaran->nama}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Program Pertukaran Mahasiswa</label>
                        <input type="text" class="form-control" placeholder="Program Pertukaran Mahasiswa" name="nama_program" value="{{$pertukaran->nama_program}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Pilih Level</label>
                        <select class="form-control" name="level" disabled>
                            <option>pilih level</option>
                            <option value="Nasional" @if($pertukaran->level=="Nasional") selected @endif>Nasional</option>
                            <option value="Internasional" @if($pertukaran->level=="Internasional") selected @endif>Internasional</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Staus</label>
                        <select class="form-control" name="statusi" disabled>
                            <option>pilih status</option>
                            <option value="SK" @if($pertukaran->level=="SKS") selected @endif>SKS</option>
                            <option value="Non SKS" @if($pertukaran->level=="Non SKS") selected @endif>Non SKS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Mahaiswa</label>
                        <input type="text" class="form-control" placeholder="Jumlah Mahasiswwa" name="jumlah_mahasiswa" value="{{$pertukaran->jumlah_mahasiswa}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tahun Kegiatan</label>
                        <input type="text" class="form-control" name="tahun_kegiatan" value="{{$pertukaran->tahun_kegiatan}}" disabled>
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <input class="btn btn-primary" type="submit" name="submit" value="validasi">
            <a href="/valpert/{{$pertukaran->id}}/tolak" class="btn btn-danger">Tolak</a>
            <a href="/valpert" class="btn btn-primary float-right">Batal</a>
        </div>
        </form>
    </div>
    </div>
</section>
@endsection