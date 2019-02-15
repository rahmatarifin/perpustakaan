        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>adm/"><h4><strong>SIS</strong>PER</h4></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>adm/"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data Inventaris</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url(); ?>adm/anggota/"> <i class="menu-icon fa fa-users"></i>Anggota</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>petugas/"> <i class="menu-icon fa fa-user"></i>Petugas</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url(); ?>adm/buku"> <i class="menu-icon fa fa-book"></i>Buku</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adm/kategori"> <i class="menu-icon fa fa-book"></i>Kategori</a>
                    </li>

                    <h3 class="menu-title">Transaksi</h3><!-- /.menu-title -->

                    <li>
                        <a href="<?php echo base_url(); ?>adm/pinjam/"> <i class="menu-icon fa fa-tasks"></i>Transaksi</a>
                    </li>                    
                    <li>
                        <a href="<?php echo base_url(); ?>adm/data_pinjam/"> <i class="menu-icon fa fa-tasks"></i>Peminjaman</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adm/data_kembali/"> <i class="menu-icon fa fa-tasks"></i>Pengembalian</a>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="menu-icon fa fa-file"></i><a href="<?php echo base_url(); ?>lapporan23">Transaksi</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-file"></i><a href="<?php echo base_url(); ?>lapporan23/filter_pinjam">Peminjaman</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-file"></i><a href="<?php echo base_url(); ?>lapporan23/filter_kembali">Pengembalian & Denda</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-file"></i><a href="<?php echo base_url(); ?>lapporan23/la_anggota/" target="_blank">Anggota</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-file"></i><a href="<?php echo base_url(); ?>lapporan23/la_buku/" target="_blank">Buku</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->