	<!DOCTYPE html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">

		<title>Detail Film</title>
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

		<form action="<?php echo base_url('index.php/Film/update_proses'); ?>" method="POST"> <!-- base url hanya bisa di php -->



			<?php foreach($data as $flm){ ?>
				<div class="container">
					<div class="row">
						
						<div class="col-sm-12">
							<iframe width="1100" height="500"
							src="<?php echo $flm->trailer;?>?autoplay=1" allow="autoplay;">

						</iframe> 
				</div>

				<div class="row">
					<div class="col-sm-3">
						<img src="http://localhost/editci/assets/images/gambar/<?php echo $flm->gambar;?>" width="100%">
					</div>
					<div class="col-sm-9">
						<table class="table">
							<thead class="thead-dark">
								<th colspan="3" style="text-align: center;">DESKRIPSI</th>
							</thead>
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td> <?php echo $flm->nama_film; ?></td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td>:</td>
								<td><?php echo $flm->kategori; ?></td>
							</tr>
							<tr>
								<td>Rating</td>
								<td>:</td>
								<td><?php echo $flm->rating; ?></td>
							</tr>
							<tr>
								<td>Rilis</td>
								<td>:</td>
								<td><?php echo $flm->tgl_rilis; ?></td>
							</tr>
							<tr>
								<td>Produksi</td>
								<td>:</td>
								<td><?php echo $flm->produksi; ?></td>
							</tr>
							<tr>
								<td>Durasi</td>
								<td>:</td>
								<td><?php echo $flm->durasi; ?></td>
							</tr>
							<tr>
								<td>Sinopsis</td>
								<td>:</td>
								<td><?php echo $flm->sinopsis; ?></td>
							</tr>
						</table>

					</div>
					
				</div>
			</div>
		<?php } ?>

		</div>
	</form>



	<footer id="sticky-footer">
    <div class="container text-center" >
      <small>Copyright &copy; CinemaTV</small>
    </div>
  </footer>

	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


















