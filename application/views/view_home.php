
<!-- https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg -->
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">

		<title>CinemaTV</title>
	</head>
	<body>
		
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1F2533; color: white;">
			<div class="container">  
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">

					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li>
							<a class="navbar-brand" href="<?php echo base_url('index.php/Film');?>"  style="color: white; font-weight: bold;">CinemaTV</a>
						</li>


						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: white;">
								Kategori
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url('index.php/Film/kategori?kategori=Anime'); ?>">Anime</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>


					</ul>

				</div>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="list-style: none;">
					<li class="nav-item">
						<a class="nav-link" href="#"  style="color: white; font-size: 20px; border: 4px;">Hey, <?php echo $_SESSION['username']; ?>!</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('index.php/Mahasiswa/logout'); ?>"><button type="button" class="btn btn-outline-danger">LOGOUT</button></a>
					</li>
				</ul>
			</div>
		</nav>

		<hr>
		<div class="container">

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo base_url(); ?>/assets/images/gambar/gambar1.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Welcome to CinemaTV</h5>
							<p>Just a normal movie database</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo base_url(); ?>/assets/images/gambar/gambar0.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Dont forget to eat healty!</h5>
							<p>Cabbage boy</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo base_url(); ?>/assets/images/gambar/gambar3.jpg" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>1 2 3 Count on me</h5>
							<p>Listen up i will stand out by my own</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>

			<hr>
			<center>
				<div class="col-sm-6">
					<!-- <input type="" name="" value="MOVIE SELECTION" style="text-align: center; font-size: 40px; font-family: helvetica;  border-width: 0px;" readonly> -->
					<img src="<?php echo base_url(); ?>/assets/images/gambar/selection.gif">
				</div>
			</center>	
			<hr>

			<div class="row">
				<?php 

				$no = 1;
				foreach($data as $flm){ ?>

					<div class="col-sm-3">
						<div class="thumbnail">
							<a id="aa" href="">
								<img src="http://localhost/editci/assets/images/gambar/<?php echo $flm->gambar;?>" width="90%">
							</a>
						</div>
						<div class="judul" style="font-weight: bold;">
							<input type="text" name="judul" value="<?php echo $flm->nama_film; ?>" style="font-weight: bold; text-align: center; border-width: 0px;" readonly >
						</div>
						<div class="detail">
							<a href="<?php echo base_url('index.php/Film/update_mahasiswa?id_film=').$flm->id_film; ?>"><button type="button" class="btn btn-danger btn-lg btn-block ">DETAIL</button> 
							</a>

						</div>
					</div>

					<?php 
					$no++;
				} 

				?>
			</div>



		</div>




		<footer id="sticky-footer">
			<div class="container text-center" >
				<small>Copyright &copy; CinemaTV</small>
			</div>
		</footer>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>