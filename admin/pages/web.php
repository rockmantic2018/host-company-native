<?php
$detail = $rm->web();
$edit = $detail->fetch(PDO::FETCH_OBJ);
?>
            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Setting Web</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span> Web
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Update</h3></div>
                    <div class="panel-body">
                      <form method="POST" enctype="multipart/form-data">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required="" name="title" value="<?php echo $edit->title_web;?>">
                          <span class="bar"></span>
                          <label>Meta Title Web</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required="" name="hp" value="<?php echo $edit->hp;?>">
                          <span class="bar"></span>
                          <label>No HP</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required="" name="email" value="<?php echo $edit->email;?>">
                          <span class="bar"></span>
                          <label>Email</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required="" name="alamat" value="<?php echo $edit->alamat;?>">
                          <span class="bar"></span>
                          <label>Alamat</label>
                        </div>                        
                        <div class="panel">
                              <label>Tentang Perusahaan</label>
                            <div class="panel-body" >
                                <textarea rows="15" name="about"  id="content1"><?php echo $edit->about;?></textarea>
                            </div>
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

                                $insert = $rm->edit_web($_POST['title'],$_POST['hp'],$_POST['email'],$_POST['alamat'],$_POST['about']);
                                echo "<script>alert('Berhasil');</script>";
                                echo "<script>window.location='?page=web';</script>";
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
<script src="../assets/back/js/jquery.min.js"></script>
<!-- plugins -->
<script src="../assets/back/ckeditor/ckeditor.js"></script>
<!-- custom -->
<script src="../assets/back/js/main.js"></script>
<!-- end: Javascript -->
<script type='text/javascript'>
  var editor = CKEDITOR.replace('content1');
  CKFinder.setupCKEditor(editor, 'ckfinder/');    
  </script>
<!-- end: Javascript -->