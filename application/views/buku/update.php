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
                              <label for="text-input" class=" form-control-label">Tahun Terbit</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <select name="tahun_terbit" id="select" class="form-control">
                              <option selected="selected" value="<?php echo $buku->tahun_terbit; ?>"><?php echo $buku->tahun_terbit; ?></option>
                                <?php for($i=date('Y'); $i>=date('Y')-32; $i-=1){
                                  echo "<option value='$i'>$i</option>";
                                }
                                ?>
                              </select>
                              <small class="form-text text-muted">Tahun Terbit</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Penerbit</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="penerbit" value="<?php echo $buku->penerbit; ?>" class="form-control">
                              <small class="form-text text-muted">Penerbit</small>
                            </div>
                          </div>


                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">ISBN</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="isbn" value="<?php echo $buku->isbn; ?>" class="form-control">
                              <small class="form-text text-muted">ISBN</small>
                            </div>
                          </div>

                         <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Kategori</label></div>
                            <div class="col-12 col-md-9">
                              <select name="kode_kategori" id="select" class="form-control">
                              <option value="<?php echo $buku->kode_kategori; ?>"><?php echo $kategori->jenis_kategori; ?></option>
                                <?php foreach ($dd_kategori as $kategori) {
                                echo '<option value="'.$kategori->kode_kategori.'">'.$kategori->jenis_kategori.'</option>';
                                }?>
                                
                              </select>
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