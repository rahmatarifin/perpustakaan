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
                            <li class="active">Buku</li>
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
                        <strong class="card-title">Data Buku</strong>
                            <a href="<?php echo base_url(); ?>adm/tambahbuku"><button type="button" class="btn btn-primary">Tambah</button></a>

                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th align="center">Kode Buku</th>
                        <th align="center">Judul</th>
                        <th align="center">Pengarang</th>
                        <th align="center" width="10">Tahun Terbit</th>
                        <th align="center">Penerbit</th>
                        <th align="center">ISBN</th>
                        <th align="center">Kategori</th>
                        <th colspan="2" align="center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php foreach($join as $buku): ?>
                        <td><?php echo $buku->kode_buku;?></td>
                        <td><?php echo $buku->judul; ?></td>
                        <td><?php echo $buku->pengarang; ?></td>
                        <td><?php echo $buku->tahun_terbit; ?></td>
                        <td><?php echo $buku->penerbit; ?></td>
                        <td><?php echo $buku->isbn; ?></td>
                        <td><?php echo $buku->jenis_kategori; ?></td>
                        
                        <td>
                            <a href="<?php echo base_url();?>adm/editbuku/<?php echo $buku->kode_buku; ?>"><i class="fa fa-pencil-square-o"></i></a>&nbsp; &nbsp;                            <a href="<?php echo base_url();?>adm/hapusbuku/<?php echo $buku->kode_buku;?>"><i class="fa fa-eraser"></i></a>
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