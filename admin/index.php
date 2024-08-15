<?php  
session_start();
$userid = $_SESSION['userid'];
include'../config/koneksi.php';
if ($_SESSION['status'] != 'login') {
  echo "<script>
  alert('Anda belum Login!')
  location.href='../index.php';
  </script>";
}


?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title>dashboard | galery foto</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand text-light" href="index.php"> <strong>Selamat Datang <?php echo $_SESSION['username'] ?></strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNav">
      <ul class="navbar-nav me-auto">
         <a href="home.php" class="nav-link text-light"><strong>Home</strong></a>        
        <a href="album.php" class="nav-link text-light"><strong>Album</strong></a>
         <a href="foto.php" class="nav-link text-light"><strong>Foto</strong></a>
        <li class="nav-item">
          
        </li>
      </ul>

      
      <a href="../config/aksi_logout.php" class="btn btn-danger m-1">Keluar</a>
    </div>
  </div>
</nav>

<div class="container mt-2">
  <div class="row">
    <?php  
    $query = mysqli_query($koneksi, "SELECT * FROM foto");
while($data = mysqli_fetch_array($query)) {
 ?>
<div class="col-md-3 mt-2">
      <div class="card">
        <img style="height: 12rem;" src="../assets/img/<?php echo $data['lokasifile'] ?>" class="card-img-top" title="<?php echo $data['judulfoto'] ?>">
        <div class="card-footer text-center">
          
          <?php 
          $fotoid = $data['fotoid'];
          $ceksuka = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");
          if (mysqli_num_rows($ceksuka) == 1) { ?>
            <a href="../config/proses_like.php?fotoid=<?php echo $data['fotoid'] ?>" type="submit" name="batalsuka"><i class="fa fa-heart m-1"></i></a> 
          <?php }else{ ?>
            <a href="../config/proses_like.php?fotoid=<?php echo $data['fotoid'] ?>" type="submit" name="suka"><i class="fa-regular fa-heart m-1"></i></a> 
          <?php }
          $like = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE fotoid='$fotoid'");
          echo mysqli_num_rows($like). ' Suka';
           ?>
          <a href=""><i class="fa-regular fa-comment"></i></a> 3 Komentar
        </div>
      </div>
    </div>
  <?php } ?>

  </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
<p>&copy; GALERY FOTO | ARIEL ZUHRIADI</p>
</footer>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>