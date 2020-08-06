            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tambah Domain</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span> Data Domain <span class="fa-angle-right fa"></span> Tambah Domain
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Tambah</h3></div>
                    <div class="panel-body">
                      <form method="POST">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" placeholder="COM" required="" name="nama">
                          <span class="bar"></span>
                          <label>Nama Domain</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" placeholder="Rp 150.000" required="" name="harga">
                          <span class="bar"></span>
                          <label>Harga /tahun</label>
                        </div>
                        <div class ="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                        <option value="SALE">SALE</option>                        
                        <option value="SOLD">SOLD</option>                        
                        </select>
                      </div>                                                                        
                        <div class="col-md-6" style="margin-top:5px;">
                          <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-plus"></i> Simpan</button>
                        </div>
                      </form>
<!--================================ start ===============================-->
<!--======================================================================-->
                      <?php
                      if (isset($_POST['submit'])) 
                          {
                              if ($_POST) 
                              {

                                $insert = $rm->add_dom($_POST['nama'],$_POST['harga'],$_POST['status']);
                                echo "<script>alert('Berhasil');</script>";
                                echo "<script>window.location='?page=domain';</script>";
                              }
                              else
                              {
                                echo "<script>alert('Gagal');</script>";
                              }
                          }
                      ?>
<!--================================ end =================================-->
<!--======================================================================-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
<!-- start: Javascript -->
<script src="../asset/js/jquery.min.js"></script>
<!-- plugins -->
<script src="../asset/ckeditor/ckeditor.js"></script>
<!-- custom -->
<script src="../assets/back/js/main.js"></script>
<!-- end: Javascript -->
<script type='text/javascript'>
  var editor = CKEDITOR.replace('content1');
  CKFinder.setupCKEditor(editor, 'ckfinder/');    
  </script>
<!-- end: Javascript -->