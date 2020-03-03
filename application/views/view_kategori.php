<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">

  <title>Kategori</title>
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

<div class="container">


 <table class="table table-striped" style="text-align: left;">
  <thead class="thead-dark">
    <th>No</th>
    <th colspan="3">DESKRIPSI</th>

    


  </thead> 

  <?php 

  $no = 1;
  foreach($data as $flm){ ?>
  <tr>
    <td id="tableNomor"><?php echo $no; ?></td>
    <td><img src="http://localhost/editci/assets/images/gambar/<?php echo $flm->gambar;?>" width="105px" height="152px"></td>
    <td>
      <div id="judulKategori">
        <?php echo $flm->nama_film; ?>
      </div>
      <div id="isiKategori">
        <?php echo $flm->kategori; ?>
        <br>
        <?php echo $flm->rating; ?>
        <br>
        <?php echo $flm->tgl_rilis; ?>
        <br>
        <?php echo $flm->produksi; ?>
        <br>
        <?php echo $flm->durasi; ?>
        
      </div>
      
    </td>
    <td>
     
      <div class="detail" style="vertical-align: middle;">
            <a href="<?php echo base_url('index.php/Film/update_mahasiswa?id_film=').$flm->id_film; ?>"><button type="button" class="btn btn-outline-info">DETAIL</button> 
</a>
            
          </div>
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