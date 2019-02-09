
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?php echo base_url();?>dasboad/">Dashboard</a></li>
                            <li class="active">Peminjaman</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                            <a href="<?php echo base_url(); ?>adm/tambahpinjam"><button class="btn btn-primary">Tambah</button></a>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th align="center">NIS</th>
                        <th>Kode Buku</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Denda</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php foreach($join as $pinjam): ?>
                        
                        <td><?php echo $pinjam->tanggal_pinjam; ?></td>
                        <td><?php echo $pinjam->tanggal_kembali; ?></td>
                        
                        <td><?php echo $pinjam->nis; ?></td>
                        <td><?php echo $pinjam->kode_buku; ?></td>
                        <td><?php echo $pinjam->nama_anggota; ?></td>
                        <td><?php echo $pinjam->jk; ?></td>
                        
                        <td><?php echo $pinjam->judul; ?></td>
                        <td><?php echo $pinjam->pengarang; ?></td>
                        <td><?php echo $pinjam->denda; ?></td>
                        <td><?php echo $pinjam->status; ?></td>
                        <td>
                            <a href="<?php base_url();?>adm/pengembalian/<?php echo $pinjam->kode_transaksi; ?>">
                                <i class="btn btn-primary">Kembali</i>
                            </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->