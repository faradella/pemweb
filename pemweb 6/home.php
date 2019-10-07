<?php 
  include ('conn.php'); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>HOME</title>
    <link rel = "icon" href = "picture/lambang.png" type = "image/x-icon"/>
    <link href="aset/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
    	body{
			background-color: pink;
			color :maroon;
		}
		.navbar{
        	background-color: rgba(0,0,0,0.4) !important;
      	}
      	.navbar-nav a{
      		color:white !important;
      	}
      	.jumbotron{
      		background-image: url(picture/back.jpg) !important;
      		height: 300px;
      	}
      	.data table tr td{
      		padding: 15px; 
      		border: 1px solid #e8a87c; 
      		border-collapse: collapse; 
      		border-spacing: 10px;
      	}
        .foto {
          float: right;
        }
    </style>
</head>
<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "form.php"; ?>">Form</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4" style="color: white">HALLO !!! </h1>
    </div>
  </div>
<div class="container">
    <div class="row">
      <div class="data">
      <div class="col-8">  
          <?php 
                    $query = "SELECT * FROM profil";
                    $result = mysqli_query(connection(),$query);
                   ?>

                  <?php while($data = mysqli_fetch_array($result)): ?>

                    <table>
                      <tr>
                        <td>Nama</td>
                        <td><?php echo $data['Nama'];  ?></td>
                      </tr>
                      <tr>
                        <td>NPM</td>
                        <td><?php echo $data['NPM'];  ?></td>
                      </tr>
                      <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td><?php echo $data['TTL'];  ?></td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td><?php echo $data['Alamat'];  ?></td>
                      </tr>
                      <tr>
                        <td>Universitas</td>
                        <td><?php echo $data['Universitas'];  ?></td>
                      </tr>
                      <tr>
                        <td>Hobby</td>
                        <td><?php echo $data['Hobby'];  ?></td>
                      </tr>
                      <tr>
                        <td>                      
                          <a href="<?php echo "update.php?NPM=".$data['NPM']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                          &nbsp;&nbsp;
                        </td>
                        <td>
                          <a href="<?php echo "delete.php?NPM=".$data['NPM']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                        </td>
                      </tr>
                    </table>

                  <?php endwhile ?>
        </div>  
      </div>
    </div>
<br>
    <div class="container">
      <div class="row">
        <div class="col-8">
        <table>
        <div>
          <tr style=" background-color: MediumAquaMarine; font-family: century gothic; color: darkred; border: 2px solid steelblue; border-collapse: collapse;" >
            <td style="texts background-color: sandybrown ;color: rebeccapurple; text-align: center; font-size: 20px"><b> TENTANG SAYA <br></b></td>
          </tr>
        </div>
        </div>
          <tr style=" background-color: PaleTurquoise; font-family: century gothic; color: darkred; border: 2px solid steelblue; border-collapse: collapse;">
            <td> <br> Saya Merupakan Mahasiswa Teknik Informatika Universitas Pembangunan "Veteran" Jawa Timur angkatan 2017, sebelum saya memasuki jenjang perkuliahan ini, saya menempuh pendidikan sekolah dasar di SD KHADIJAH 3 Suarabya pada tahun 2005 hingga 2011, kemudian melanjutkan pendidikan SMP di MTs Negeri 3 Surabaya pada tahun 2011 - 2014, dan SMA di MAN Kota Surabaya. Bukan hanya pendidikan disekolah saja yang saya lakukan tetapi pendidikan diluar sekolah yang disatu sisi dapat menyalurkan hobby saya yaitu mengikuti pelajaran/seminar bagaimana cara berbisnis (mulai atau mengembangkan) yang baik </td>
          </tr>
          </table>
      </div>
          <div class="col-4">
            <div class="foto">
            <img src="picture/ide.jpg"><br><br>
            </div>
          </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
        <div style=" position: static; text-align: center; margin-left: auto; margin-right: auto;margin-bottom: auto; margin-top: auto; left: 0; right: 0; top: 10px; bottom: 0;">
          <table style="width: 100% ; border: 3px solid red; border-collapse: collapse; border-spacing: 10px; margin-left: 10px; margin-top: 10px">
            <tr style=" background-color: MediumAquaMarine; font-family: century gothic; color: darkred; border: 2px solid steelblue; border-collapse: collapse;" >
              <td><b> DAN UNTUK IMPIAN SAYA SAAT INI </b></td>
                <td> => </td>
              <td> <img src="picture/wsd.jpg" style="height: 100px; margin-top: 10px;" style="" ; class="mx-auto d-block"></td>
            </tr>
            <tr style=" background-color:PowderBlue; font-family: century gothic; color: darkred; border: 2px solid steelblue; border-collapse: collapse;" > 
              <td><b> KEMUDIAN </b></td>
                <td> => </td>
              <td> <img src="picture/krj.jpg" style="height: 100px; margin-top: 10px;" style="" ; class="mx-auto d-block"></td>
            </tr>

            <tr style=" background-color: MediumAquaMarine; font-family: century gothic; color: darkred; border: 2px solid steelblue; border-collapse: collapse;">
              <td> <b>DAN YANG LAINNYA </b> </td>
                <td> => </td>
              <td><img src="picture/sp-sq.jpg" style="height: 100px; margin-top: 10px;" style="" ; class="mx-auto d-block"></td>
            </tr>
          </table>
        </div>          
        </div>
  </div>
</body>
</html>