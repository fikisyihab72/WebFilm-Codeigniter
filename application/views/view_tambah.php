<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">

  <title>Tambah Data</title>
</head>
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

<div class="container">




  <body>
    <form action="<?php echo base_url('index.php/Film/insert_mahasiswa') ?>" method="POST" enctype="multipart/form-data"> <!-- base url hanya bisa di php -->

      <div class="form-group">
        <label for="inputName3" class="col-sm-2 col-form-label">Nama Film</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama_film" placeholder="Nama Film">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName3" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-10">
         <select class="form-control" name="kategori">
          <option value="Anime">Anime</option>
          <option value="Action">Action</option>
          <option value="Thriller">Thriller</option>
          <option value="Documentary">Documentary</option>
          <option value="Comedy">Comedy</option>
          <option value="Short">Short</option>
          <option value="Horror">Horror</option>
          <option value="Indie">Indie</option>
          <option value="Romance">Romance</option>
          <option value="Sci-fi">Sci-fi</option>
          <option value="Superhero">Superhero</option>
          <option value="Adventure">Adventure</option>
          <option value="Drama">Drama</option>
          <option value="History">History</option>
          <option value="Fantasy">Fantasy</option>
          <option value="Sport">Sport</option>
          <option value="Epic">Epic</option>
          <option value="Biographical">Biographical</option>

        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputName3" class="col-sm-2 col-form-label">Rating</label>
      <div class="col-sm-10">
       <select class="form-control" name="rating">
        <option value="PG-13 - Teens 13 or older">PG-13 - Teens 13 or older</option>
        <option value=" R - 17+ (violence & profanity)"> R - 17+ (violence & profanity)</option>
        <option value="All Age">All Age</option>
        <option value="Kid">Kid</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputName3" class="col-sm-2 col-form-label">Tanggal Rilis</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="tgl_rilis">
    </div>
  </div>
  <div class="form-group">
    <label for="inputName3" class="col-sm-2 col-form-label">Produksi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="produksi" placeholder="Produksi">
    </div>
  </div>

  <div class="form-group">
    <label for="inputName3" class="col-sm-2 col-form-label">Sinopsis</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="sinopsis" placeholder="Masukan Sinopsis" required rows="8"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="inputName3" class="col-sm-2 col-form-label">Durasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="durasi" placeholder="(Menit)">
    </div>
  </div>
  <div class="form-group">
    <label for="inputName3" class="col-sm-2 col-form-label">Trailer</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="trailer" placeholder="Video Embed">
    </div>
  </div>

  <div class="form-group">
    <label for="inputName3" class="col-sm-2 col-form-label">Gambar</label>
    <div class="col-sm-10">
     <input type="file" name="fotopost">

   </div>
 </div>
 

 <div class="col-sm-6">
   <button type="submit" class="btn btn-success">Simpan</button>
 </div>






</form>



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