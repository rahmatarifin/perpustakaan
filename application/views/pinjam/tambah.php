
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
                            <li class="active">Tambah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-9">
                    <div class="card">
                      <div class="card-header">
                        <strong>Tambah</strong> Peminjaman
                      </div>
                      
                      <div class="card-body card-block">

                      	<form action="<?php echo base_url(); ?>peminjaman/pinjam/" method="post">

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Tanggal Pinjam</label>
                            </div>
                            <div class="col-12 col-md-3">
                              <input type="text" id="text-input" name="id_transaksi" class="form-control" value="<?php echo date('Y-m-d G:i:s'); ?>" >
                              <small class="form-text text-muted">Tanggal Peminjaman Buku</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">Kode transaksi</label>
                            </div>
                            <div class="col-12 col-md-3">
                            	<input type="text" id="text-input" name="id_transaksi" class="form-control" value="<?php echo $kode_buku; ?>">
                            	<small class="form-text text-muted">Kode Transaksi</small>
                            </div>
                          </div>


                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">NIS</label>
                            </div>
                            <div class="col-12 col-md-3">
                              <input type="searc" id="text-input" name="nis" placeholder="Nomor Induk Siswa" class="form-control">
                              <small class="form-text text-muted">Nomor Induk Siswa</small>
                            </div>
                            
                            
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">Kode Buku</label>
                            </div>
                            <div class="col-12 col-md-3">
                            	<input type="text" id="text-input" name="kode_buku" placeholder="kode buku" class="form-control">
                            	<small class="form-text text-muted">Kode Buku</small>
                            </div>
                          
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="select" class=" form-control-label">Status</label>
                            </div>
                            <div class="col-12 col-md-3">
                              <select name="status" id="select" class="form-control">
                                <option value="#">Please select</option>
                                <option value="pinjam">pinjam</option>
                                <option value="kembali">kembali</option>
                              </select>
                              <small class="form-text text-muted">Status Transaksi</small>
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