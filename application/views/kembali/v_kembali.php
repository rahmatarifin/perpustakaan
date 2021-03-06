
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
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Pengembalian</li>
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
                            <a href="<?php echo base_url(); ?>pengembalian/add_kembali">Tambah</a>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Kode Peminjaman</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>NIS</th>
                        <th>Kode Buku</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Deskripsi</th>
                        <th>Denda</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php foreach($join as $pinjam): ?>
                        <td><?php echo $pinjam->id_transaksi;?></td>
                        <td><?php echo $pinjam->tanggal_pinjam; ?></td>
                        <td><?php echo $pinjam->tanggal_kembali; ?></td>
                        <td><?php echo $pinjam->nis; ?></td>
                        <td><?php echo $pinjam->kode_buku; ?></td>
                        <td><?php echo $pinjam->nama_anggota; ?></td>
                        <td><?php echo $pinjam->jk; ?></td>
                        <td><?php echo $pinjam->alamat; ?></td>
                        <td><?php echo $pinjam->judul; ?></td>
                        <td><?php echo $pinjam->pengarang; ?></td>
                        <td><?php echo $pinjam->description; ?></td>
                        <td><?php echo $pinjam->denda; ?></td>
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