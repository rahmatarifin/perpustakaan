
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
                            <a href="<?php base_url(); ?>tambahanggota/">Tambah</a>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead align="center">
                      <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th colspan="2">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php foreach($data as $anggota): ?>
                        <td><?php echo $anggota->nis; ?></td><td><?php echo $anggota->nama; ?></td>
                        <td><?php echo $anggota->alamat; ?></td>
                        <td><a href="<?php base_url();?>edit/<?php echo $anggota->nis; ?>"><i class="fa fa-pencil-square-o"></a></i></td>
                        <td><a href="<?php base_url();?>hapus/<?php echo $anggota->nis;?>"><i class="fa fa-eraser"></i></a></td>
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