            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tambah Hosting</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span> Data Hosting <span class="fa-angle-right fa"></span> Tambah Hosting
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
                          <input type="text" class="form-text" required="" name="plan">
                          <span class="bar"></span>
                          <label>Plan Paket</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required="" name="disk">
                          <span class="bar"></span>
                          <label>Bandwith / Space (GB)</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required="" name="sub">
                          <span class="bar"></span>
                          <label>Subdomain</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required="" name="transfer">
                          <span class="bar"></span>
                          <label>Transfer</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required="" name="db">
                          <span class="bar"></span>
                          <label>Jumlah Database</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required="" name="harga">
                          <span class="bar"></span>
                          <label>Harga /bulan  (Rp)</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required="" name="ket">
                          <span class="bar"></span>
                          <label>Keterangan</label>
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

                                $insert = $rm->add_host($_POST['plan'],$_POST['disk'],$_POST['transfer'],$_POST['sub'],$_POST['db'],$_POST['harga'],$_POST['ket']);
                                echo "<script>alert('Berhasil');</script>";
                                echo "<script>window.location='?page=hosting';</script>";
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