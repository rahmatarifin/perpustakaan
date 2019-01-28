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
                        <strong class="card-title">Data Kategori</strong>
                            <a href="<?php echo base_url(); ?>adm/tambahkategori"><button type="button" class="btn btn-primary">Tambah</button></a>

                        </div>
                        <div class="card-body">
                        	<table id="bootstrap-data-table" class="table table-striped table-bordered">
                        		<thead>
                        			<tr>
                        				<td width="10">ID</td>
                        				<td>Kategori</td>
                        				<td width="10" align="center" colspan="2" width="15%">aksi</td>
                        			</tr>
                        		</thead>
                        		<tbody>
                        			<tr>
                        			<?php foreach($data as $kategori): ?>
                        				<td><?php echo $kategori->kode_kategori; ?></td>
                        				<td><?php echo $kategori->kategori; ?></td>
                        				<td align="center"><a href="<?php echo base_url();?>adm/editkategori/<?php echo $kategori->kode_kategori; ?>"><i class="fa fa-pencil-square-o"></i></a><a href="<?php echo base_url(); ?>adm/hapuskategori/<?php echo $kategori->kode_kategori; ?>"><i class="fa fa-eraser"></i></a></td>
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