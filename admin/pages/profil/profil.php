<div id="content" class="profile-v1">
             <div class="col-md-12 col-sm-12 profile-v1-wrapper">
                <div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
                    <div class="profile-v1-pp">
                      <img src="../assets/upload/<?php echo $aa->foto ?>"/>
                      <h2><?php echo $aa->nama; ?></h2>                      
                    </div>

                    <div class="col-md-12 profile-v1-cover">
                      <img src="../assets/back/img/bg1.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                      <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
                          <h1> 1</h1>
                          <p>Item</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">
                           <h1>2</h1>
                           <p>Item</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
                          <h1>3</h1>
                          <p>Item</p>
                        </div>
                    </div>
                </div>
             </div>
             <div class="col-md-12 col-sm-12 profile-v1-body">
                <div class="col-md-7">                   
                    <div class="panel box-v3">
                      <div class="panel-heading bg-white border-none">
                                  <h4>Info Profil :</h4>
                                </div>
                      <form method="POST" enctype="multipart/form-data">
                                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" required="" name="user" value="<?php echo $aa->username;?>">
                                    <span class="bar"></span>
                                    <label>Username</label>
                                  </div>
                                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" required="" name="nama" value="<?php echo $aa->nama;?>">
                                    <span class="bar"></span>
                                    <label>Nama</label>
                                  </div>                                  
                                  <button class="btn btn-success" name="p" >Update</button>
                                </form>
                                <?php
                      if (isset($_POST['p'])) 
                          {
                              if ($_POST) 
                              {
                                $insert = $rm->edit_profil($_POST['nama'],$_POST['user']);
                              }
                              else
                              {
                                echo "<script>alert('Gagal');</script>";
                              }
                          }
                      ?>
                              </div>
            </div>
                <div class="col-md-5">
                     <div class="panel box-v3">
                                <div class="panel-heading bg-white border-none">
                                  <h4>Ganti Password : </h4>
                                </div>
                                <form method="POST" enctype="multipart/form-data">
                                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="password" class="form-text" required="" name="pass">
                                    <span class="bar"></span>
                                    <label>Password Baru</label>
                                  </div>
                                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="password" class="form-text" required="" name="knf">
                                    <span class="bar"></span>
                                    <label>Konfirmasi Password</label>
                                  </div>
                                <button class="btn btn-success" name="s">Update</button>
                                </form>
                                <?php
                                if (isset($_POST['s'])) 
                          {
                              if ($_POST) 
                              {
                                $insert = $rm->edit_pass($_POST['pass'],$_POST['knf']);                                
                              }                              
                          }
                                ?>
                                  </div>
                                </div>

                              <div class="col-md-12">
                                <div class="panel box-v3">
                                  <div class="panel-heading bg-white border-none">
                                  <h4>Ganti Foto : </h4>
                                </div>
                                <form method="POST" enctype="multipart/form-data">
                                <div class="panel-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="input-group fileupload-v1">
                                        <input type="file" class="fileupload-v1-file hidden" name="foto">
                                        <input type="text" class="form-control fileupload-v1-path" placeholder="Pilih Foto Profil..." disabled="">
                                        <span class="input-group-btn">
                                          <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
                                        </span>
                                      </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                                  </div><!-- /.row -->
                                  </div>
                                  <button class="btn btn-success" name="f" >Update</button>
                                </form>
                                <?php
                                if (isset($_POST['f'])) 
                          {
                              if ($_POST) 
                              {
                                $insert = $rm->edit_foto($_FILES['foto']);                                
                              }                              
                          }
                                ?>
                              </div>
                            </div>

                              </div>
                </div>
             </div>
           
          </div>

<script src="../assets/back/js/jquery.min.js"></script>          