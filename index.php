<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand text-light" href="index.php">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body bg-light">
					<div class="text-center">
						<h5>Login Aplikasi</h5>
					</div>
					<form action="config/aksi_login.php" method="POST">
						<label class="form-label">Username</label>
						<input type="text" name="username" class="form-control" required>
						<label class="form-label">Password</label>
						<input type="password" name="password" class="form-control" required>
						<div class="d-grid mt-2">
							<button class="btn btn-primary" type="submit" name="kirim">MASUK</button>
						</div>
					</form>
					<hr>
					<p>Belum punya akun? <a href="register.php">Daftar disini!</a></p>
				</div>				
			</div>
		</div>
	</div>
</div>
<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
<p>&copy; GALERY FOTO | ARIEL ZUHRIADI</p>
</footer>


<script type="text/javascript"src="assets/js/bootstrap.min.js"></script>
</body>
</html>