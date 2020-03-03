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
  	<?php foreach($data as $flm){ ?>
   <form action="<?php echo base_url('index.php/Film/update_proses_kelola'); ?>" method="POST" enctype="multipart/form-data"> <!-- base url hanya bisa di php -->
   		<div class="form-group">
        <label for="inputName3" class="col-sm-2 col-form-label">ID User</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="id" placeholder="ID" value="<?php echo $flm->id; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label for="inputName3" class="col-sm-2 col-form-label">Nama Film</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama" placeholder="Nama Film" value="<?php echo $flm->nama; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nim" placeholder="Password" value="<?php echo $flm->nim; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName3" class="col-sm-2 col-form-label">Role</label>
        <div class="col-sm-10">
         <select class="form-control" name="role">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>
    </div>
 <?php } ?>




  <div class="col-sm-6">
 <button type="submit" class="btn btn-warning">Update</button>
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














































