
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
                            <li class="active">Tambah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Tambah</strong> Anggota
                      </div>
                      
                      <div class="card-body card-block">

                      	<form action="<?php echo base_url(); ?>adm/anggota_tambah/" method="post">

                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">NIS</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="text" id="text-input" name="nis" placeholder="Nomor induk siswa" class="form-control">
                            	<small class="form-text text-muted">Nomor induk Siswa</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">Nama</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="text" id="text-input" name="nama_anggota" placeholder="Nama siswa/anggota" class="form-control">
                            	<small class="form-text text-muted">Nama siswa </small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Jenis Kelamin</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="jk">
                                  <option value="#" align="center">----Pilih----</option>
                                  <option value="Laki-laki"> Laki-laki </option>
                                  <option value="Perempuan"> Perempuan </option>
                                </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">Alamat</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="text" id="text-input" name="alamat" placeholder="Alamat Siswa" class="form-control">
                            	<small class="form-text text-muted">Alamat Siswa</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Tempat/Tanggal Lahir</label>
                            </div>
                            <div class="col-12 col-md-4">
                              <input type="text" id="text-input" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
                              <small class="form-text text-muted">Tempat Lahir</small>
                            </div>
                            <div class="col-12 col-md-3">
                              <input type="date" id="text-input" name="tanggal_lahir" placeholder="tanggal Lahir" class="form-control">
                              <small class="form-text text-muted">Tanggal Lahir</small>
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