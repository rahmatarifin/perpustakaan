
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
                            <li class="active">Petugas</li>
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
                            <a href="<?php echo base_url(); ?>petugas/add_petugas/"><button class="btn btn-primary">Tambah</button></a>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th colspan="2">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php foreach($data as $petugas): ?>
                        <td><?php echo $petugas->id_petugas; ?></td>
                        <td><?php echo $petugas->nama_petugas; ?></td>
                        <td><?php echo $petugas->username; ?></td>
                        <td><?php echo $petugas->password; ?></td>
                        <td><?php echo $petugas->level; ?></td>
                        <td><a href="<?php echo base_url();?>petugas/edit/<?php echo $petugas->id_petugas; ?>"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="<?php echo base_url();?>petugas/hapus/<?php echo $petugas->id_petugas;?>"><i class="fa fa-eraser"></i></a></td>
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