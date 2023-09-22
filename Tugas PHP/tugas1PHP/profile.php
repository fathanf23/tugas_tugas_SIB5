<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Profile</title>

	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>
<?php
	$nama = "Mochammad Fathan Fadillah";
	$alamat = "Kuningan Jawa Barat";
	$kampus = "Universitas Kuningan";
	$umur = 20;

?>
<body 
style="background: url('background.jpg') no-repeat center center fixed;
background-size: cover;
color: #D0E7D2;
padding: 20px;  ">

	<div class="container-fluid" >
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1 style=" text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); padding: 20px;
					border-radius: 50px 0; margin-right: 87%;
					box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
					background-color: rgba(70, 33, 105, 0.5);">
						Profile
					</h1>
					<br>
				</div>
			</div>
		</div>
		<div style="background-color: rgba(70, 33, 105, 0.5); border-radius: 10px; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);">
			<div class="col-md-12">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="profile.php">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="portofolio.php">Portofolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="contact.php">Contact</a>
					</li>

				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img alt="Bootstrap Image Preview" src="saya.jpg" class="rounded" width="50%" style="margin-left: 100px;
			margin-top: 30px;
			border-radius: 50%;
			box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
			">
			</div>
			<div style="
			background-color: rgba(70, 33, 105, 0.5); 
			margin-top: 20px; 
			border-radius: 0 70px; 
			margin-bottom: 70px; 
			box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.5);
			padding: 20px;
			"
				class="col-md-6">
				<p style="margin-top: 20px; ">
					Nama saya <strong><?= $nama?></strong>. Saya berusia <?= $umur?><small>th</small>, saya berasal
					dari kota <?= $alamat?>,
					saya saat ini menjenjang pendidikan di <?= $kampus?>,
					minat saya mengikuti program SIB5 Fullstack Developer Web ini agar saya mendapatkan lebih banyak
					pengalaman dan ilmu yang berguna bagi saya di masa depan.
					<br>
					<br>
					<br>
				<p style=""><em>"Semua orang itu jenius. Tetapi jika Anda menilai ikan dengan kemampuannya untuk
						memanjat
						pohon, percayalah itu adalah bodoh."</em>
				</p>
				<p style="margin-left: 5px;"><em><strong>~Albert Einstein~</strong></em></p>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>