<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $Nama = $_POST['Nama'];
      $NPM = $_POST['NPM'];
      $TTL = $_POST['ttl'];
      $Alamat = $_POST['alamat'];
      $Universitas = $_POST['univ'];
      $Hobby = $_POST['Hobby'];
      //query SQL
      $query = "INSERT INTO profil (Nama, NPM, TTL, Alamat, Universitas, Hobby) VALUES('$Nama','$NPM','$TTL','$Alamat','$Universitas','Hobby')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form Data</title>
    <link rel = "icon" href = "picture/lambang.png" type = "image/x-icon"/>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow">
    <a class="navbar-brand" href="#"></a>
  </nav>

    
  <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "data.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "form.php"; ?>">Tambah Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "home.php"; ?>">Home</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert"> berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert"> gagal disimpan</div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Form Mahasiswa</h2>
          <form action="form.php" method="POST">
            
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama" name="Nama" required="required">
            </div>
            <div class="form-group">
              <label>NPM</label>
              <input type="text" class="form-control" placeholder="NPM" name="NPM" required="required">
            </div>
            <div class="form-group">
              <label>Tempat Tanggal Lahir</label>
              <input type="text" class="form-control" placeholder="TTL" name="ttl" required="required">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" placeholder="alamat" name="alamat" required="required"></textarea>
            </div>
            <div class="form-group">
              <label>Universitas</label>
              <input type="text" class="form-control" placeholder="Universitas" name="univ" required="required">
            </div>
            <div class="form-group">
              <label>Hobby</label>
              <input type="text" class="form-control" placeholder="Hobby" name="Hobby" required="required">
            </div>

            <button type="submit" class="btn btn-primary" style="margin-bottom: 20px; margin-top: 20px;">Submit</button>

          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>