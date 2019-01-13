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
                            <li>Anggota</li>
                            <li class="active">Update</li>
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
                        <strong>Update</strong> Buku
                      </div>
                      
                      <div class="card-body card-block">
                      <?php foreach($data as $buku){ ?>
                      	<form action="<?php echo base_url(); ?>buku_/update/" method="post">

                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">Kode Buku</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="text" id="text-input" name="judul" value="<?php echo $buku->kode_buku; ?>" class="form-control">
                            	<small class="form-text text-muted">Kode Buku</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">Judul</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="text" id="text-input" name="judul" value="<?php echo $buku->judul; ?>" class="form-control">
                            	<small class="form-text text-muted">judul buku </small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Pengarang</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="pengarang" value="<?php echo $buku->pengarang; ?>" class="form-control">
                              <small class="form-text text-muted">Pengarang buku</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Deskripsi</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="description" value="<?php echo $buku->description; ?>" class="form-control">
                              <small class="form-text text-muted">Deskripsi buku</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                            <div class="col-12 col-md-9">
                              <select name="kode_kategori" id="select" class="form-control">
                                <?php foreach ($dd_kategori as $kategori) {
                                echo '<option value="'.$kategori->kode_kategori.'">'.$kategori->kategori.'</option>';
                                }?>
                                
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Jumlah</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="jumlah" value="<?php echo $buku->jumlah; ?>" class="form-control">
                              <small class="form-text text-muted">Jumlah buku</small>
                            </div>
                          </div>


                          <div class="card-footer">
                          	<button type="submit" class="btn btn-primary btn-sm">Submit </button>
                          </div>  

                        </form>
                        <?php } ?>
                      </div>
                    </div>                   
                  </div>
                </div>

            </div><!-- .animated -->
        </div>