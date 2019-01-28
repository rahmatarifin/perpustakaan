
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
                            <li><a href="#">Petugas</a></li>
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
                        <strong>Update</strong> Data Petugas
                      </div>
                      
                      <div class="card-body card-block">
                      <?php foreach ($data as $petugas) { ?>
                  
                      	<form action="<?php echo base_url(); ?>petugas/update/" method="post">

                        

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Kode petugas</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="kode_petugas" value="<?php echo $petugas->id_petugas; ?>" class="form-control">
                              <small class="form-text text-muted">Kode Petugas</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Nama</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="nama" value="<?php echo $petugas->nama_petugas; ?>" class="form-control">
                              <small class="form-text text-muted">Nama Petugas</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">Username</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="text" id="text-input" name="username" placeholder="Username" class="form-control" value="<?php echo $petugas->username; ?>">
                            	<small class="form-text text-muted">Nomor induk mahasiswa</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">Password</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="password" id="text-input" name="password" placeholder="Password" class="form-control" value="<?php echo $petugas->password; ?>">
                            	<small class="form-text text-muted">Password</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Level</label></div>
                            <div class="col-12 col-md-9">
                              <select name="level" id="select" class="form-control">
                                <option value="<?php echo $petugas->level; ?>"><?php echo $petugas->level; ?></option>
                                <option value="admin">admin</option>
                                <option value="petugas">petugas</option>
                              </select>
                              <small class="form-text text-muted">Status Petugas</small>
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