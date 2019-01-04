
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
                            <li class="active">Anggota</li>
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
                            <a href="<?php echo base_url(); ?>buku_/tambahbuku">Tambah</a>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
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
                      <?php foreach($data as $buku): ?>
                        <td><?php echo $buku->kode_buku;?></td>
                        <td><?php echo $buku->judul; ?><td>
                        <td><?php echo $buku->pengarang; ?></td>
                        <td><?php echo $buku->description; ?></td>
                        <td>
                            <a href="<?php base_url();?>buku_/edit/<?php echo $buku->kode_buku; ?>"><i class="fa fa-pencil-square-o"></i></a>
                        </td>
                        <td>
                            <a href="<?php base_url();?>buku_/hapus/<?php echo $buku->kode_buku;?>"><i class="fa fa-eraser"></i></a>
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