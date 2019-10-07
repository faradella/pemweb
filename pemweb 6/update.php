<?php 
  include ('conn.php'); 

  $status = '';
  $result = '';
  
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['NPM'])) {
          
          $upd = $_GET['NPM'];
          $query = "SELECT * FROM profil WHERE NPM = '$upd'"; 

          
          $result = mysqli_query(connection(),$query);
      }  
  }


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $upd = $_POST['NPM'];
      $alamat = $_POST['Alamat'];
      
      $sql = "UPDATE profil SET Alamat='$alamat' WHERE NPM='$upd'";

      
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
      
      header('Location: home.php?status='.$status);
  }
  

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Form Data</title>
    <link rel = "icon" href = "picture/lambang.png" type = "image/x-icon"/>
    
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
          

          <h2 style="margin: 50px 0 30px 0;">Update Data</h2>
          <form action="update.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>

            <div class="form-group">
              <label>NPM</label>
              <input type="text" class="form-control" name="NPM" value="<?php echo $data['NPM'];  ?>" required="required">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="Alamat" value="<?php echo $data['Alamat'];  ?>" required="required">
            </div>
            <?php endwhile; ?>

            <button type="submit" class="btn btn-primary">Save</button>
          
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>