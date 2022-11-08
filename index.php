


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
            <?php
              include 'function.php';
              $artikel = mysqli_query($koneksi, "SELECT * from artikel"); ?>
              <?php foreach( $artikel as $art ) : ?>
              <a class="nav-link p-4" <a href="edit_artikel.php?id=<?php echo $art["id"]; ?>">Edit Artikel</a>
              <?php endforeach ; ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- HEADER IMAGE -->
  
    <header id="article-header" class="header-image text-white d-none d-md-block">
      <div class="header-overlay">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="display-1">Article</h1>
              <?php
              include 'function.php';
              $artikel = mysqli_query($koneksi, "SELECT * from artikel");
              foreach ($artikel as $art) {
                echo "<p>".$art['judul_artikel']."</p>";
              };
              ?>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- ARTICLE CONTAINER -->
    <section id="article">
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <!-- BREADCRUMB -->
            <nav>
              <ol class="breadcrumb bg-white ml-0 mt-4">
 
                <li class="breadcrumb-item">
                  <a href="blog.html" class="text-info">Blog</a>
                </li>
                <li class="breadcrumb-item active"></li>
              </ol>
            </nav>
            <hr>
              <div class="container">
            <!-- MAIN ARTICLE -->
            <article class="py-2">
            <?php
              include 'function.php';
              $artikel = mysqli_query($koneksi, "SELECT * from artikel");
              foreach ($artikel as $art) {
                echo "<h1>".$art['judul_artikel']."</h1>";
              };
              ?>

              <div class="text-muted">
                <?php
              include 'function.php';
              $artikel = mysqli_query($koneksi, "SELECT * from artikel");
              foreach ($artikel as $art) {
                echo "<small>".$art['nama_penulis']."</small>";
                echo "-";
                echo "<small>".$art['tanggal_publish']."</small>";
              };
              ?> 
              </div>
              <img src="img/full-image8.jpg" alt="" class="img-fluid p-4">
              <?php foreach ($artikel as $art) : ?>
              <p> <?php echo $art["artikel_satu"]; ?>
              </p>
    
              <p>
              <?php echo $art["artikel_dua"]; ?>
              </p>
              
              <p>
              <?php echo $art["artikel_tiga"]; ?>
              </p>

              <p>
              <?php echo $art["artikel_empat"]; ?>
              </p>
              <?php endforeach ; ?>
            </article>
            <hr>
              </div>

             <!-- AUTHOR -->
             <div class="media py-4">
              <img class="mr-3 img-thumbnail img-fluid" src="img/profil.jpg">
              <div class="media-body">
                <h3><a href="#" class="text-info">Kepin Permana</a></h3>
                Lulusan Teknik Informatika dari Universitas Muhammadiyah Tangerang
                <div class="pt-4">
                  <a href="#" class="text-info mr-2">
                    <i class="fab fa-facebook fa-2x"></i>
                  </a>
                  <a href="#" class="text-info mr-2">
                    <i class="fab fa-twitter fa-2x"></i>
                  </a>
                  <a href="#" class="text-info mr-2">
                    <i class="fab fa-instagram fa-2x"></i>
                  </a>
                  <a href="#" class="text-info mr-2">
                    <i class="fab fa-google-plus fa-2x"></i>
                  </a>
                  <a href="#" class="text-info mr-2">
                    <i class="fab fa-github fa-2x"></i>
                  </a>
                </div>
              </div>
            </div>

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
