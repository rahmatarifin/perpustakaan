
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
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Cari </strong> Transaksi
                      </div>
                      
                      <div class="card-body card-block">

                        <form action="<?php echo base_url(); ?>peminjaman/cari_transaksi/" method="post">

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">NIS</label>
                            </div>
                            <div class="col-12 col-md-3">
                              <input type="text" id="text-input" name="nis" class="form-control" placeholder="Kode Buku" >
                              <small class="form-text text-muted">Nomor induk siswa</small>
                            </div>
                          </div>


                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Kode Buku</label>
                            </div>
                            <div class="col-12 col-md-3">
                              <input type="text" id="text-input" name="kode_buku" class="form-control" placeholder="Kode Buku" >
                              <small class="form-text text-muted">Kode Buku</small>
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