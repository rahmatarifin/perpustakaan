
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
                        <strong>Update</strong> Data Kategori
                      </div>
                      
                      <div class="card-body card-block">
                      <?php foreach ($data as $kategori) { ?>
                  
                      	<form action="<?php echo base_url(); ?>kategori/update/" method="post">

                        

                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Kategori</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="kategori" value="<?php echo $kategori->kategori; ?>" class="form-control">
                              <small class="form-text text-muted">Kategori buku</small>
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
