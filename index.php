<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- CSS ges -->
    <link rel="stylesheet" href="style.css" />

    <title>Portofolio</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" style="background-color: #194350">
      <div class="container">
        <a class="navbar-brand text-white" href="#">Felisiana Ardelia Azzahra</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="index.php?tab=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?tab=about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?tab=gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?tab=contact">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>        
    </nav>      
    <!-- Akhir Navbar -->

    <!-- Pengkondisian -->
    <?php 
          if(isset($_GET['tab'])){
            $tab = $_GET['tab'];
        
            switch ($tab) {
              case 'home':
                include "home.php";
                break;
              case 'about':
                include "about.php";
                break;
              case 'gallery':
                include "gallery.html";
                break;			
              case 'contact':
                include "contact.html";
                break;			
            }
          }else{
            include "home.php";
          }
        ?>

    <!-- Footer -->
    
    <footer class="text-center pb-3" style="background-color: #194350">
      <p class="text-white mt-3 mx-auto">Created by adwl</p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
