<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('asset/img/icon.PNG') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
        <span class="brand-text font-weight-light">SMK Nurul Imam</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://png.pngtree.com/png-vector/20190321/ourmid/pngtree-vector-users-icon-png-image_856952.jpg" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ url('app/') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if(Auth()->check())
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Akademik
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @role(['member', 'admin'])
                        <li class="nav-item">
                            <a href="{{ route('apps-teacher') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Guru</p>
                            </a>
                        </li>
                        @endrole @role('admin')
                        <li class="nav-item">
                            <a href="{{ route('apps-subject') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pelajaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('apps-rpp') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-size: 12px;">
                                    Rencana pelaksana pembelajaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('app/programs') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Program Unggulan</p>
                            </a>
                        </li>
                        @endrole
                    </ul>
                </li>
                @endif @if(Auth()->check()) @role(['admin', 'member'])
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Kesiswaan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-student') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Siswa Reguler</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-student-inklusi') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Siswa inklusi</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-student-beasiswa') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Siswa beasiswa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole @endif @role(['member', 'admin'])
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Humas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    @role(['admin','member'])
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-company') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kerja Sama Industri</p>
                            </a>
                        </li>
                    </ul>
                    @endrole
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-about') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Masuk</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-about') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole @role('admin')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Program Keahlian
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jadwal Praktikum</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @endrole @role('admin')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Keuangan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-about') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Penerimaan Masuk</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-about') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pengeluaran</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-about') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Brs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            News
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    @role('member')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-about') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Topic News</p>
                            </a>
                        </li>
                    </ul>
                    @endrole @role('admin')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-study') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Studys</p>
                            </a>
                        </li>
                    </ul>
                    @endrole
                </li>
                @if(Auth::check())
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Setup
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    @role('admin')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-status-student') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Status</p>
                            </a>
                        </li>
                    </ul>

                    @endrole @role('admin')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-subject') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subject List</p>
                            </a>
                        </li>
                    </ul>

                    @endrole @role('member')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-notifications') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Send Notification</p>
                            </a>
                        </li>
                    </ul>
                    @endrole @role(['admin', 'member'])
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('apps-users') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                    @endrole
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>