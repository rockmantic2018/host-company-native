<?php
if(isset($_GET['aksi']))
{
    if($_GET['aksi']=='hapus')
    {
        $id = $_GET['id'];
        $del = $rm->del_dom($id);
        echo "<script>alert('Berhasil');</script>";
        echo "<script>window.location='?page=domain';</script>";

    }
}
?>
            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Domain</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span> Data Domain
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Domain</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tbody>
                  <?php
                    $no=1;                                         
                    $ready = $rm->show_dom();
                    while($data = $ready->fetch(PDO::FETCH_OBJ))
                      {
                    ?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $data->nama_domain;?></td>
                            <td><?php echo $data->harga;?></td>
                            <td><?php echo $data->stok;?></td>
                            <td><center>
                              <a href="?page=domain-edit&id=<?php echo $data->id_domain;?>">
                                  <button class=" btn btn-circle btn-mn btn-info" value="primary">
                                    <span class="fa fa-pencil"></span>
                                  </button>
                                </a>
                                <a href="?page=domain&aksi=hapus&id=<?php echo $data->id_domain;?>"> 
                                  <button class=" btn btn-circle btn-mn btn-danger" value="primary">
                                    <span class="fa fa-trash"></span>
                                  </button>
                                </a>
                            </center></td>
                        </tr>
                        <?php
                        $no++;
                    }
                  ?>
                      </tbody>
                        </table>
                        <div class="col-md-3">
                                <a href="?page=domain-add">
                                  <button class="btn btn-info">Tambah</button>
                                </a>
                            </div>

                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->

<!-- start: Javascript -->
<script src="../assets/back/js/jquery.min.js"></script>
<!-- plugins -->
<script src="../assets/back/js/plugins/jquery.datatables.min.js"></script>
<script src="../assets/back/js/plugins/datatables.bootstrap.min.js"></script>
<!-- custom -->
<script src="../assets/back/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->
