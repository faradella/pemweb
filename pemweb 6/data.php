<?php 
  include ('conn.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Data Diri</title>
    <link rel = "icon" href = "picture/lambang.png" type = "image/x-icon"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <br>
    <link href="aset/css/bootstrap.min.css" rel="stylesheet">
    <link href="aset/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow">
    <a class="navbar-brand" href="#">
    </a>
  </nav>

  <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "data.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "form.php"; ?>">Tambah Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "home.php"; ?>">Home</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <h2 style="margin: 50px 0 30px 0;">Data Web</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NPM</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>universitas</th>
                  <th>Hobby</th>
                </tr>
              </thead>
              
              <tbody>
                <?php 
                  $query = "SELECT * FROM profil";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['Nama'];  ?></td>
                    <td><?php echo $data['NPM'];  ?></td>
                    <td><?php echo $data['TTL'];  ?></td>
                    <td><?php echo $data['Alamat'];  ?></td>
                    <td><?php echo $data['Universitas'];  ?></td>
                    <td><?php echo $data['Hobby'];  ?></td>
                      <tr>
                        <td>                      
                          <a href="<?php echo "update.php?NPM=".$data['NPM']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                          &nbsp;&nbsp;
                        </td>
                        <td>
                          <a href="<?php echo "delete.php?NPM=".$data['NPM']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                        </td>
                      </tr>
                 <?php endwhile ?>

              </tbody>
            </table>

          </div>
        </main>
      </div>
    </div>

    <script src="aset/js/jquery.js"></script>
    <script src="aset/js/bootstrap.js"></script>
  </body>
</html>

