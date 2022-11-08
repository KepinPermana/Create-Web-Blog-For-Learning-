<?php
include 'function.php';
$id         = $_GET['id'];
$artikel  = mysqli_query($koneksi, "select * from artikel where id='$id'");
$art        = mysqli_fetch_array($artikel);

?>



<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <title>Blog-KepinPermana.com</title>
    <link rel="icon" href="" type="image/png">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!-- NAVBAR -->
    <nav id="main-navbar" class="navbar navbar-expand-md navbar-primary bg-primary py-0">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <span class="d-none" >Dunia Narasi</span>
         <!--<img src="img/ilkoom_logo.png" class="main-logo d-none d-md-inline"
          alt="ilkoom logo">
          <img src="img/ilkoom_logo.png" class="small-logo d-inline d-md-none"
          alt="ilkoom logo">-->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link p-4 active" href="index.php">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-4" href="edit_artikel.php">Dashboard Article</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   <!-- Form Input -->
   <div class="container mt-5 mb-5">
    <div class="card">
<h2 class="mt-3 ml-4">Form Ubah Data Article</h2>
<div class="card-body">
<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $art["id"]; ?>">
<div class="mb-3">
  <label for="judul_artikel" class="form-label">Judul Artikel</label>
  <input type="text" class="form-control" id="judul_artikel" placeholder="Judul Artikel" name="judul_artikel" value="<?php echo $art['judul_artikel'] ?>">
</div>
<div class="mb-3">
  <label for="nama_penulis" class="form-label">Nama Penulis</label>
  <input type="text" class="form-control" id="nama_penulis" placeholder="Nama Penulis" name="nama_penulis" value="<?php echo $art['nama_penulis'] ?>">
</div>
<div class="mb-3">
<label for="tanggal_publish">Tanggal Publish</label>
  <input type="date" class="form-control" id="tanggal_publish" name="tanggal_publish" value="<?php echo $art['tanggal_publish'] ?>">
</div>
<div class="form-floating">
  <textarea class="form-control" placeholder="Tulis Artikel" id="floatingTextarea2" style="height: 100px" 
  name="artikel_satu" value="<?php echo $art['artikel_satu']; ?>"><?php echo $art['artikel_satu']; ?></textarea>
</div>
<div class="form-floating mt-3">
  <textarea class="form-control" placeholder="Tulis Artikel" id="floatingTextarea2" style="height: 100px" 
  name="artikel_dua" value="<?php echo $art['artikel_dua']; ?>"><?php echo $art['artikel_dua']; ?></textarea>
</div>
<div class="form-floating mt-3">
  <textarea class="form-control" placeholder="Tulis Artikel" id="floatingTextarea2" style="height: 100px" 
  name="artikel_tiga" value="<?php echo $art['artikel_tiga']; ?>"><?php echo $art['artikel_tiga']; ?></textarea>
</div>
<div class="form-floating mt-3">
  <textarea class="form-control" placeholder="Tulis Artikel" id="floatingTextarea2" style="height: 100px" 
  name="artikel_empat" value="<?php echo $art['artikel_empat']; ?>"><?php echo $art['artikel_empat']; ?></textarea>
</div>
<div class="row mt-2">
  <div class="col-3">
    <button class="btn btn-primary" name="submit" type="submit">Ubah Data</button>
    <a href="index.php" class="btn btn-danger">Batal</a>
  </div>

</div>

</form>
</div>
    </div>
</div>
    <!-- ARTICLE CONTAINER -->
    <section id="article">
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <!-- BREADCRUMB -->
           

            <!-- MAIN ARTICLE -->
           

          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer id="main-footer" class="text-white bg-primary py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-3 text-center text-md-left">
              <h5>Detail</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Aperiam cumque, esse modi maxime veniam nulla delectus dolorem
            </p>
          </div>

          <div class="col-md-3 text-center">
            <h5>Community</h5>
            <ul class="list-unstyled">
                <li><a href="#" class="text-white">Activity</a></li>
                <li><a href="#" class="text-white">Members</a></li>
                <li><a href="#" class="text-white">Groups</a></li>
                <li><a href="#" class="text-white">Forums</a></li>
            </ul>
          </div>

          <div class="col-md-3 text-center">
            <h5>Our Services</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Our mission</a></li>
              <li><a href="#" class="text-white">Help/Contact Us</a></li>
              <li><a href="#" class="text-white">Privacy Policy</a></li>
              <li><a href="#" class="text-white">Cookie Policy</a></li>
              <li><a href="#" class="text-white">Terms & Conditions</a></li>
            </ul>
          </div>

          <div class="col-md-3 text-center text-md-left">
            <h5>Hubungi Kami</h5>
            <div class="text-nowrap"><i class="fas fa-envelope fa-fw mr-3"></i>
              kepinpermana98@gmail.com</div>
            <div class="text-nowrap"><i class="fas fa-phone fa-fw mr-3"></i>
              (62) 8561723050</div>
            <div class="text-nowrap"><i class="fas fa-globe fa-fw mr-3"></i>
              www.kepin.com</div>
          </div>
        </div>

        <div class="row mt-3 mt-md-0">
          <div class="col-md-3 mr-md-auto text-center text-md-left">
            <small>&copy; Kepin Permana 2020</small>
          </div>
          <div class="col-md-3 text-center text-md-left">
            <div>
              <a href="#" class="text-white mr-2">
                <i class="fab fa-facebook fa-lg"></i>
              </a>
              <a href="#" class="text-white mr-2">
                <i class="fab fa-twitter fa-lg"></i>
              </a>
              <a href="#" class="text-white mr-2">
                <i class="fab fa-instagram fa-lg"></i>
              </a>
              <a href="#" class="text-white mr-2">
                <i class="fab fa-google-plus fa-lg"></i>
              </a>
              <a href="#" class="text-white mr-2">
                <i class="fab fa-github fa-lg"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </footer>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
      // kode JavaScript disini...
    </script>
  </body>
</html>
