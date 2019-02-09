
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
                            <li><a href="#">Laporan</a></li>
                            <li class="active">filter</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-xs-6 col-sm-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Filter</strong> Laporan Transaksi
                      </div>
                      
                      <div class="card-body card-block">

                      	<form action="<?php echo base_url(); ?>lapporan23/la_transaksi/" method="post" target="_blank">

                          <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="text-input" class=" form-control-label">Tanggal Awal</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="date" id="text-input" name="tgl_awal" class="form-control">
                            	<small class="form-text text-muted">Tanggal Awal</small>
                            </div>
                          </div>


                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Tanggal Akhir</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="date" id="text-input" name="tgl_akhir" class="form-control">
                              <small class="form-text text-muted">Tanggal Akhir</small>
                            </div>
                          </div>

                          
                          <div class="card-footer">
                          	<button type="submit" class="btn btn-primary btn-sm">Submit </button>
                          </div>                        
                        </form>            
                      </div>
                    </div>                   
                  </div>
                  <div class="col-xs-6 col-sm-6">
                   <div class="card">
                      <div class="card-header">
                        <strong>Filter</strong> Laporan Transaksi
                      </div>
                      
                      <div class="card-body card-block">

                        <form action="<?php echo base_url(); ?>lapporan23/by_nis/" method="post" target="_blank">

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">NIS</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="nis" class="form-control" placeholder="Nomor Induk Siswa">
                              <small class="form-text text-muted">Nomor Induk Siswa</small>
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

                  <!--<div class="col-lg-6">-->
               
               