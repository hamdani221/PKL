@extends('layout.mastercode')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Data Mahasiswa Fakultas Teknik</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-stripped">
                            <thead>
                                <tr data-widget="expandable-table">
                                    <th>Nim</th>
                                    <th>Nama</th>
                                    <th>prodi</th>
                                    <th>Jenis Kelamin</th>
                                    <th>agama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Status Mahasiswa</th>
                                    <th>No Handphone</th>
                                    <th>Dosen Pembimbing</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$d->nim}}</td>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->prodi}}</td>
                                    <td>{{$d->gender}}</td>
                                    <td>{{$d->agama}}</td>
                                    <td>{{$d->tempat}}</td>
                                    <td>{{$d->tanggal_lahir}}</td>
                                    <td>{{$d->status}}</td>
                                    <td>{{$d->nohp}}</td>
                                    <td>{{$d->dosenPA}}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection