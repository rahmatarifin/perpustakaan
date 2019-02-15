
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
                            <li><a href="#">Pengembalian</a></li>
                            <li class="active">Detail Kembali</li>
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
                        <strong>Detail</strong> Pengembalian
                      </div>
                      <div class="card-body card-block">
                      <?php foreach ($join as $transaksi) { ?>
                        
              
                      <form action="<?php echo base_url(); ?>adm/update/" method="post">

                          <div class="row form-group">
                            <div class="col col-sm-3">
                              <label for="text-input" class=" form-control-label">Tanggal Pinjam</label>
                            </div>
                            <div class="col-12 col-sm-3">
                              <input type="text" name="tanggal_pinjam"  class="form-control" value="<?php echo $transaksi->tanggal_pinjam; ?>" >
                              <small class="form-text text-muted">Tanggal Peminjaman Buku</small>
                            </div>

                            <div class="col-12 col-sm-3">
                              <input type="text"  class="form-control" value="<?php 
                              $timezone = time()+ (60*60*7);
                              echo gmdate('Y-m-d G:i:s', $timezone); ?>" >
                              <small class="form-text text-muted">Tanggal Pengembalian Buku</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-sm-3">
                              <label for="text-input" class=" form-control-label">Kode transaksi</label>
                            </div>
                            <div class="col-12 col-md-6">
                              <input type="text" id="text-input" name="kode_transaksi" class="form-control" value="<?php echo $transaksi->kode_transaksi; ?>">
                              <small class="form-text text-muted">Kode Transaksi</small>
                            </div>
                          </div>


                          <div class="row form-group">
                            <div class="col col-sm-3">
                              <label for="text-input" class=" form-control-label">NIS</label>
                            </div>
                            <div class="col-12 col-sm-3">
                              <input type="text" id="text-input" name="nis" placeholder="Nomor Induk Siswa" class="form-control" value="<?php echo $transaksi->nis; ?>">
                              <small class="form-text text-muted">Nomor Induk Siswa</small>
                            </div>
                            <div class="col-12 col-md-6">
                              <input type="text" id="text-input" class="form-control" value="<?php echo $transaksi->nama_anggota; ?>">
                              <small class="form-text text-muted">Nama Anggota</small>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-sm-3">
                              <label for="text-input" class=" form-control-label">Kode Buku</label>
                            </div>                        
                            <div class="col-12 col-sm-3">
                              <input type="text" id="text-input" name="kode_buku" placeholder="kode buku" class="form-control" value="<?php echo $transaksi->kode_buku; ?>">
                              <small class="form-text text-muted">Kode Buku</small>
                            </div>                      
                            <div class="col-12 col-md-6">
                              <input type="text" id="text-input" class="form-control" value="<?php echo $transaksi->judul; ?>">
                              <small class="form-text text-muted">Judul Buku</small>
                            </div>
                          </div>
                          
                       	   <div class="row form-group">
                            <div class="col col-sm-3">
                              <label for="text-input" class=" form-control-label">Pengarang</label>
                            </div>                        
                            <div class="col-12 col-sm-6">
                              <input type="text" id="text-input" value="<?php echo $transaksi->pengarang; ?>" class="form-control">
                              <small class="form-text text-muted">Pengarang</small>
                            </div>                      
                       	  </div>

                       	   <div class="row form-group">
                            <div class="col col-sm-3">
                              <label for="text-input" class=" form-control-label">Penerbit</label>
                            </div>                        
                            <div class="col-12 col-sm-5">
                              <input type="text" id="text-input" value="<?php echo $transaksi->penerbit; ?>" class="form-control">
                              <small class="form-text text-muted">Penerbit</small>
                            </div>                      
                       	    <div class="col col-sm-2">
                              <label for="text-input" class=" form-control-label">Tahun Terbit</label>
                            </div>                        
                            <div class="col-12 col-sm-2">
                              <input type="text" id="text-input" value="<?php echo $transaksi->tahun_terbit; ?>" class="form-control">
                              <small class="form-text text-muted">Tahun Terbit</small>
                            </div>                      
                       	  </div>

                          <div class="row form-group">
                            <div class="col col-sm-3">
                              <label for="text-input" class=" form-control-label">ISBN</label>
                            </div>                        
                            <div class="col-12 col-sm-5">
                              <input type="text" id="text-input" value="<?php echo $transaksi->isbn; ?>" class="form-control">
                              <small class="form-text text-muted">ISBN</small>
                            </div>                      
                       	  
                            <div class="col col-sm-2">
                              <label for="text-input" class=" form-control-label">Denda</label>
                            </div>
                           

                            <div class="col-12 col-md-2">
                              <input type="text" id="text-input" name="denda" class="form-control" value="<?php echo $transaksi->denda; ?>">
                              <small class="form-text text-muted">denda</small>
                            </div>
                          </div>
                          

                        </div>

                        </form>            
                      <?php } ?>
                      </div>
                    </div>                   
                  </div>
                </div>
            </div><!-- .animated -->
        </div>