<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @if (auth()->user()->level=="admin")
        <div class="image">
            <img src="{{asset('gambar/admin.png')}}" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block" style="font-family:'Times New Roman', Times, serif ;">{{auth()->user()->name}}</a>
        </div>
        @endif
        @if (auth()->user()->level=="user")
        <div class="image">
            <img src="{{asset('gambar/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
        @endif
    </div>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/beranda" class="nav-link">
                    <i class="nav-icon fa fa-home"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            @if (auth()->user()->level=="admin")
            <li class="nav-item">
                <a href="/data" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Tabel Data Mahasiswa
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-bookmark"></i>
                    <p>
                        Validasi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/valimandiri" class="nav-link">
                            <i class="nav-icon fa fa-file"></i>
                            <p>Kegiatan Mandiri</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/valpert" class="nav-link">
                            <i class="nav-icon fa fa-file"></i>
                            <p>Pertukaran Mahasiswa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/valpraktek" class="nav-link">
                            <i class="nav-icon fa fa-file"></i>
                            <p>Praktek Kerja</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file-export"></i>
                    <p>
                        Rekap Data
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/rekman" class="nav-link">
                            <i class="nav-icon fa fa-file"></i>
                            <p>Kegiatan Mandiri</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/rekpert" class="nav-link">
                            <i class="nav-icon fa fa-file"></i>
                            <p>Pertukaran Mahasiswa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/rekpra" class="nav-link">
                            <i class="nav-icon fa fa-file"></i>
                            <p>Praktek Kerja</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            @if (auth()->user()->level=="user")
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-users nav-icon"></i>
                    <p>
                        Kegiatan Mandiri
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/2" class="nav-link">
                            <i class="nav-icon fa fa-circle"></i>
                            <p>Formulir Pendaftaran</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/mandiri" class="nav-link">
                            <i class="nav-icon fa fa-circle"></i>
                            <p>Kegiatan Mandiri</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/relmandiri" class="nav-link">
                            <i class="nav-icon fa fa-circle"></i>
                            <p>Realisasi Kegiatan Mandiri</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/view" class="nav-link">
                            <i class="nav-icon fa fa-circle"></i>
                            <p>Rekap Data</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-users nav-icon"></i>
                    <p>
                        Pertukaran Mahasiswa
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/daftarprt" class="nav-link">
                            <i class="nav-icon fa fa-circle"></i>
                            <p>Formulir Pendaftaran</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pertmhs" class="nav-link">
                            <i class="nav-icon fa fa-circle"></i>
                            <p>Pengajuan Pertukaran Mahasiswa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pertmhs/view" class="nav-link">
                            <i class="nav-icon fa fa-circle"></i>
                            <p>Tabel Rekap</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-users nav-icon"></i>
                    <p>
                        Praktek Kerja
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/praktek" class="nav-link">
                            <i class="nav-icon fa fa-circle"></i>
                            <p>Formulir Pendaftaran</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/praktekkerja" class="nav-link">
                            <i class="nav-icon fa fa-circle"></i>
                            <p>Pengajuan Kegiatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/praktekkerja/view" class="nav-link">
                            <i class="nav-icon fa fa-circle"></i>
                            <p>Tabel Rekap</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
    </nav>
</div>