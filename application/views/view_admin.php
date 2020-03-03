<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">

  <title>Admin</title>
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
            <a class="navbar-brand" href="<?php echo base_url('index.php/Film/admin');?>"  style="color: white; font-weight: bold;">ADMIN PANEL</a>
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

<div class="container-fluid">
    <a href="<?php echo base_url('index.php/Film/tambah'); ?>"><button type="button" class="btn btn-outline-success" >TAMBAH DATA FILM</button></a>
    <a href="<?php echo base_url('index.php/Film/kelola'); ?>"><button type="button" class="btn btn-outline-dark" >KELOLA DATA PENGGUNA</button></a>
  
 <table class="table table-striped" style="text-align: center;">
  <thead class="thead-dark">
    <th>No</th>
    <th>Nama Film</th>
    <th>Kategori</th>
    <th>Rating</th>
    <th>Tanggal Rilis</th>
    <th>Produksi</th>
    <th>Sinopsis</th>
    <th>Durasi</th>
    <th>Trailer</th>
    <th>Gambar</th>
    <th>Aksi</th>
  </thead> 

  <?php 

  $no = 1;
  foreach($data as $flm){ ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $flm->nama_film; ?></td>
    <td><?php echo $flm->kategori; ?></td>
    <td><?php echo $flm->rating; ?></td>
    <td><?php echo $flm->tgl_rilis; ?></td>
    <td><?php echo $flm->produksi; ?></td>
    <td><?php echo $flm->sinopsis; ?></td>
    <td><?php echo $flm->durasi; ?></td>
    <td><?php echo $flm->trailer; ?></td>
    <td><img src="http://localhost/editci/assets/images/gambar/<?php echo $flm->gambar;?>" width="105px" height="152px"></td>
    <td>
      
      <a href="<?php echo base_url('index.php/Film/update_mahasiswa2?id_film=').$flm->id_film; ?>"><button type="button" class="btn btn-warning">EDIT</button></a>
      <a href="<?php echo base_url('index.php/Film/delete_mahasiswa?id_film=').$flm->id_film; ?>"><button type="button" class="btn btn-danger">DELETE</button></a>
    </td>
  </tr>

  <?php 
  $no++;
} 

?>



</table>
</div>



<footer id="sticky-footer">
    <div class="container text-center" >
      <small>Copyright &copy; CinemaTV</small>
    </div>
  </footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>