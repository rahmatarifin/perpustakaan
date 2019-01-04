
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
                            <a href="<?php echo base_url(); ?>peminjaman/add_pinjam">Tambah</a>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Kode Peminjaman</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggak Kembali</th>
                        <th>NIS</th>
                        <th>Kode Buku</th>
                        <th>Judul</th>                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php foreach($data as $pinjam): ?>
                        <td><?php echo $pinjam->id_transaksi;?></td>
                        <th><?php echo $pinjam->nis; ?></th>
                        <th><?php echo $pinjam->kode_buku; ?></th>
                        <td><?php echo $pinjam->judul; ?><td>                        
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