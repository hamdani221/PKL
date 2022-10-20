<!DOCTYPE html>
<html>

<head>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->

    <style>
        #example2 {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #example2 td,
        #example2 th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #example2 tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #example2 tr:hover {
            background-color: #ddd;
        }

        #example2 th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #0292eb;
            color: white;
        }
        .footer {
            position: fixed;
            bottom: 0;
            text-align: center;
            font-size: 11px;
            font-family: 'Times New Roman', Times, serif;
            
        }
    </style>
</head>

<body>
<img src="{{asset('gambar/cap.PNG')}}" class="float-left" width="333" height="85"> 
    <center>
        <h1>REKAP DATA PERTUKARAN MAHASISWA</h1>
        <h3>FAKULTAS TEKNIK</h3>
        <h3>UNIVERSITAS MUHAMMADIYAH BANJARMASIN</h3>
        <font style="font-size: 2;" >Jl. Gubernur Syarkawi/Lingkar Utara Desa Semangat Dalam Handil Bakti, Kecamatan Alalak, Kabupaten Barito Kuala.</font>
        <p>=======================================================================================================================</p>
    </center>
    <div style="width: 30%; text-align: left; float: left;"><span id="tanggalwaktu"></span></div><br><br>
    <table id="example2">
        <thead>
            <tr>
                <td>#</td>
                <td>No Pengajuan</td>
                <td>Nim</td>
                <td>Nama Mahasiswa</td>
                <td>Program Pertukaran Mahasiswa</td>
                <td>Level</td>
                <td>Status Kegiatan</td>
                <td>Jumlah Mahasiswa</td>
                <td>Tahun Kegiatan</td>
            </tr>
        </thead>
        <tbody>
            @foreach($pmhs as $e=>$p)
            <tr>
                <td>{{$e+1}}</td>
                <td>{{$p->id}}</td>
                <td>{{$p->nim}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->nama_program}}</td>
                <td>{{$p->level}}</td>
                <td>{{$p->statusi}}</td>
                <td>{{$p->jumlah_mahasiswa}}</td>
                <td>{{$p->tahun_kegiatan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="footer">
        <i>Jl. Gubernur Syarkawi/Lingkar Utara Desa Semangat Dalam Handil Bakti, Kecamatan Alalak, Kabupaten Barito Kuala</i>
        <i>Telp./Fax. (0511) 336 3002 • Email: ft@umbjm.ac.id • Website: ft.umbjm.ac.id</i>
    </div>
    <script src="{{asset ('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->

    <!-- DataTables  & Plugins -->
    <script src="{{asset ('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset ('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>

    <script>
        window.print();
    </script>
</body>

</html>