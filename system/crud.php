<?php 

class CRUD extends database
{
    protected $db; //read database
    protected $database;
    protected $sql;

    function __construct()
    {
        $database = $this->DB();
        $this->db = $database;
    }

    public function login($username,$password)
    {
          $password=md5($password);
          $login = $this->db->prepare("SELECT * FROM tb_user WHERE username=:username");
          $login->bindParam(':username',$username);
          $login->execute();
          $data = $login->fetch(PDO::FETCH_ASSOC);
          if (COUNT($data['username']) == 1 && $password == $data['password']) 
          {
              $_SESSION['id_user'] = $data['id_user'];
              $_SESSION['username'] = $data['username'];
              $_SESSION['level'] = $data['level'];
              $_SESSION['nama'] = $data['nama'];
              $_SESSION['foto'] = $data['foto'];
              header("location:index.php");
              return true;
          }
          else 
          {
            echo "<script>alert('gagal');</script>";
            return false;
          }
    }
    public function logout()
    {
        session_destroy();
    }
    public function show_login()
    {
      $id = $_SESSION['id_user'];
      $sql = "SELECT *FROM tb_user WHERE id_user='$id'";
        $show = $this->db->query($sql);
        return $show;   
    }
    public function edit_foto($foto)
    {
      $id = $_SESSION['id_user'];
      $namagambar = $foto ['name'];
      $lokasigambar= $foto['tmp_name'];
      move_uploaded_file($lokasigambar, "../assets/upload/$namagambar");
      $sql = "UPDATE tb_user SET 
                          foto=:foto
                  WHERE id_user=:id";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(':foto', $namagambar, PDO::PARAM_STR);                    
                  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                  $stmt->execute();

                  if ($stmt) 
                  {
                    return true;
                  }
                  else
                  {
                    return false;
                  }
    }
    public function edit_profil($nama,$user) 
    {
      $sql = "SELECT *FROM tb_user WHERE username=:user #AND nama=:nama";
      $stmt = $this->db->prepare($sql);

      $stmt->bindParam(':user', $user);
      #$stmt->bindParam(':nama', $nama);
      $stmt->execute();

      $count = $stmt->rowCount();

    if($count == 0)
    { 
      try
      {          
          $id = $_SESSION['id_user'];
          $sql = "UPDATE tb_user SET 
                          nama=:nama,
                          username=:user
                  WHERE id_user=:id";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(':nama', $nama, PDO::PARAM_STR);                    
                  $stmt->bindParam(':user', $user, PDO::PARAM_STR);                    
                  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                  $stmt->execute();
        }      
      catch(PDOException $e) 
      {
        echo $e->getMessage();
      }
        if($stmt) 
        {
          echo "<script>alert('Selamat Anda berhasil');</script>";
          echo "<script>window.location='?page=profil';</script>";     
        }        
    }
    else
      {
        echo "<script>alert('Duplikat username');</script>";
      }
  }
    public function edit_pass($pass,$knf) 
    {
      $id = $_SESSION['id_user'];
      if ($pass == $knf) 
      {
        $pass = md5($pass);
        $sql = "UPDATE tb_user SET 
                    password=:pass
                    WHERE id_user=:id";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);                    
                  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                  $stmt->execute();                  
       echo "<script>alert('Berhasil, anda harus login kembali');</script>";                                     
       echo "<script>window.location='logout.php';</script>";
        return true;
      }        
      else
      {
        echo "<script>alert('Password tidak sama');</script>";
      }
    }

    public function show_dom()
    {
        $sql = "SELECT `id_domain`,`nama_domain`, `harga`, `stok` FROM `tb_domain` ORDER BY id_domain DESC";
        $show = $this->db->query($sql);
        return $show;
    }
    public function detail($id)
    {
        $sql = "SELECT *FROM tb_domain WHERE id_domain='$id'";
        $show = $this->db->query($sql);
        return $show;   
    }
    public function edit_dom($id,$nama,$harga,$status) 
    {
            $sql = "UPDATE tb_domain SET 
                    nama_domain=:nama,
                    harga=:harga,
                    stok=:status
                    WHERE id_domain=:id";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(':nama', $nama, PDO::PARAM_STR);                    
                  $stmt->bindParam(':harga', $harga, PDO::PARAM_STR);                    
                  $stmt->bindParam(':status', $status, PDO::PARAM_STR);  
                  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                  if ($stmt->execute()) 
                  {
                    return TRUE;
                  }
                  else
                  {
                    return FALSE;
                  }
    }
    public function add_dom($nama,$harga,$status) 
    {        
         $sql = "INSERT INTO tb_domain SET 
                                nama_domain=:nama,
                                harga=:harga,
                                stok=:status";                                

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nama', $nama, PDO::PARAM_STR);  
        $stmt->bindParam(':harga', $harga, PDO::PARAM_STR);  
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);  

            if ($stmt->execute()) 
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }  

    }
    public function del_dom($id) 
    {
        $sql = "DELETE FROM tb_domain WHERE id_domain=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);   
        if ($stmt->execute()) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function add_host($plan,$disk,$transfer,$sub,$db,$harga,$ket) 
    {        
         $sql = "INSERT INTO tb_hosting SET 
                                plan=:plan,
                                disk_space=:disk,
                                transfer=:transfer,
                                subdomain=:sub,
                                db=:db,
                                harga=:harga,
                                ktr=:ket";                                

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':plan', $plan, PDO::PARAM_STR);
        $stmt->bindParam(':disk', $disk, PDO::PARAM_STR);
        $stmt->bindParam(':transfer', $transfer, PDO::PARAM_STR);
        $stmt->bindParam(':sub', $sub, PDO::PARAM_STR);
        $stmt->bindParam(':db', $db, PDO::PARAM_STR);
        $stmt->bindParam(':harga', $harga, PDO::PARAM_STR);
        $stmt->bindParam(':ket', $ket, PDO::PARAM_STR);

            if ($stmt->execute()) 
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }  

    }

    public function show_host()
    {
        $sql = "SELECT * FROM `tb_hosting` ORDER BY id_hosting ASC";
        $show = $this->db->query($sql);
        return $show;
    }
    public function del_host($id) 
    {
        $sql = "DELETE FROM tb_hosting WHERE id_hosting=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);   
        if ($stmt->execute()) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function detail_host($id)
    {
        $sql = "SELECT *FROM tb_hosting WHERE id_hosting='$id'";
        $show = $this->db->query($sql);
        return $show;   
    }
    public function edit_host($id,$plan,$disk,$transfer,$sub,$db,$harga,$ket) 
    {
            $sql = "UPDATE tb_hosting SET 
                    plan=:plan,
                                disk_space=:disk,
                                transfer=:transfer,
                                subdomain=:sub,
                                db=:db,
                                harga=:harga,
                                ktr=:ket
                    WHERE id_hosting=:id";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(':plan', $plan, PDO::PARAM_STR);
                  $stmt->bindParam(':disk', $disk, PDO::PARAM_STR);
                  $stmt->bindParam(':transfer', $transfer, PDO::PARAM_STR);
                  $stmt->bindParam(':sub', $sub, PDO::PARAM_STR);
                  $stmt->bindParam(':db', $db, PDO::PARAM_STR);
                  $stmt->bindParam(':harga', $harga, PDO::PARAM_STR);
                  $stmt->bindParam(':ket', $ket, PDO::PARAM_STR);
                  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                  if ($stmt->execute()) 
                  {
                    return TRUE;
                  }
                  else
                  {
                    return FALSE;
                  }
    }
    public function show_testi()
    {
        $sql = "SELECT `nama`, `isi` FROM `tb_testi` ORDER BY id_testi DESC LIMIT 3";
        $show = $this->db->query($sql);
        return $show;
    }
    public function show_about()
    {
        $sql = "SELECT `ktr` FROM `tb_about` WHERE id_about='1'";
        $show = $this->db->query($sql);
        return $show;
    }    
    public function web()
    {
        $sql = "SELECT *FROM tb_web WHERE id_web='1'";
        $show = $this->db->query($sql);
        return $show;   
    }
    public function edit_web($title,$hp,$email,$alamat,$about) 
    {
        $sql = "UPDATE tb_web SET 
                        title_web=:title,
                        hp=:hp,
                        email=:email,
                        alamat=:alamat,
                        about=:about
                        WHERE id_web='1'";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(':title', $title, PDO::PARAM_STR);  
                  $stmt->bindParam(':hp', $hp, PDO::PARAM_STR);  
                  $stmt->bindParam(':email', $email, PDO::PARAM_STR);  
                  $stmt->bindParam(':alamat', $alamat, PDO::PARAM_STR);  
                  $stmt->bindParam(':about', $about, PDO::PARAM_STR);  
                  if ($stmt->execute()) 
                  {
                    return TRUE;
                  }else
                  {
                    return FALSE;
                  }
    }    
    
    public function pengunjung($ip,$tanggal,$waktu)
    {
      $sql = "SELECT *FROM tb_user WHERE username=:user";
      $stmt = $this->db->prepare($sql);

      $stmt->bindParam(':user', $user);
      $stmt->execute();

      $count = $stmt->rowCount();

    if($count == 0)
    { 
      // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
      $sql = "SELECT * FROM tb_pengunjung WHERE ip=:ip AND tanggal=:tanggal";
      $stmt = $this->db->prepare($sql);
      $stmt->bindParam(':ip', $ip);
      $stmt->bindParam(':tanggal', $tanggal);
      $stmt->execute();
      $count = $stmt->rowCount();
 
       // Kalau belum ada, simpan data user tersebut ke database
       if($count == 0)
       {
        $sql = "INSERT INTO tb_pengunjung SET 
                                ip=:ip,
                                tanggal=:tanggal,
                                hits='1',
                                online=:online";                                
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ip', $ip, PDO::PARAM_STR);  
        $stmt->bindParam(':tanggal', $tanggal, PDO::PARAM_STR);  
        $stmt->bindParam(':online', $waktu, PDO::PARAM_STR);  
        if ($stmt->execute()) 
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }  
       }
       // Jika sudah ada, update
       else
       {
        $sql = "UPDATE tb_pengunjung SET 
                          hits=(hits+1),
                          online=:online,
                          tanggal=:tanggal
                  WHERE ip=:ip";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(':online', $waktu, PDO::PARAM_STR);                    
                  $stmt->bindParam(':tanggal', $tanggal, PDO::PARAM_STR);                    
                  $stmt->bindParam(':ip', $ip, PDO::PARAM_INT);
                  $stmt->execute();
       }
    }
  }
  public function total_visit()
  {

    $sql = "SELECT SUM(hits) FROM tb_pengunjung";
    $stmt = $this->db->query($sql);
    $count = $stmt->fetchColumn();
    return $count;    
  }
  public function total_on()
  {
    $bataswaktu       = time() - 300;
    $sql = "SELECT * FROM tb_pengunjung WHERE online > '$bataswaktu'";
    $stmt = $this->db->query($sql);
    $count = $stmt->rowCount();
    return $count;     
  }
  public function total_dom()
  {
    $sql = "SELECT * FROM tb_domain";
    $stmt = $this->db->query($sql);
    $count = $stmt->rowCount();
    return $count;     
  }

    
#########################################################################
    public function query($sql) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function xss_cleaner($input_str) {
        $return_str = str_replace( array('<','>',"'",'"',')','('), array('&lt;','&gt;','&apos;','&#x22;','&#x29;','&#x28;'), $input_str );
        $return_str = str_ireplace( '%3Cscript', '', $return_str );
        return $return_str;
    }
}
$rm = new CRUD();
?>