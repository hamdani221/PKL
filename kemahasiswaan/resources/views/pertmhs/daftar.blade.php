@extends('layout.mastercode')

@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pendaftaran Kegiatan Pertukaran Mahasiswa</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h5>Daftar Kegiatan Pertukaran Mahasiswa</h5>
      </div>
      <div class="card-body">
        <a href="/pertmhs/create"><button type="button" class="btn btn-primary">
          Daftar
        </button></a>
      </div>
    </div>
  </section>
@endsection