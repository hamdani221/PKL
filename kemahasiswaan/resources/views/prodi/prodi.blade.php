@extends('layout.mastercode')
@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Program Studi</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>Id Program Studi</td>
              <td>Nama Program Studi</td>
              <td>Jenjang</td>
            </tr>
          </thead>
          <tbody>
            @foreach($prodi as $p)
            <tr>
              <td>{{$p->id}}</td>
              <td>{{$p->nama}}</td>
              <td>{{$p->jenjang}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection