<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                    <a href="<?php base_url(); ?>tambahbuku/">Tambah Buku</a>
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered" border="1"  >
                    <thead>
                      <tr>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Deskripsi</th>
                        <th colspan="2">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php foreach($data as $row): ?>
                        <td><?php echo $row->kode_buku; ?></td>
                        <td><?php echo $row->judul; ?></td>
                        <td><?php echo $row->pengarang; ?></td>
                        <td><?php echo $row->description; ?></td>
                        <td><a href="<?php base_url(); ?>buku_/edit/">Edit</a></td>
                        <td><a href="<?php base_url();?>buku_/hapus/">Hapus</a></td><br />
                    <?php endforeach; ?>

                      </tr>
                      
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->