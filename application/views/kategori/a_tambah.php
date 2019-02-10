<div>
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
                            <li>Kategori</li>
                            <li class="active">Tambah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Tambah</strong> Kategori
                      </div>
                      
                      <div class="card-body card-block">

                      	<form action="<?php echo base_url(); ?>adm/kategori_tambah/" method="post">

                          
                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">Kategori</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="text" id="text-input" name="kategori" placeholder="judul buku" class="form-control">
                            	<small class="form-text text-muted">kategori buku </small>
                            </div>
                          </div>

                          <div class="card-footer">
                          	<button type="submit" class="btn btn-primary btn-sm">Submit </button>
                          </div>                        
                        </form>            
                      </div>
                    </div>                   
                  </div>
                </div>

            </div><!-- .animated -->
        </div>
	<pre>
		<div>
			<label>ID</label>
			<input type="text" name="idkategori" placeholder="ID Kategori">
		</div>
		<div>
			<label>Kategori</label>
			<input type="text" name="kategori" placeholder="Kategori">
		</div>
		<div>
			<input type="submit" value="Simpan">
		</div>
	</pre>
	<?php form_close(); ?>
</div>