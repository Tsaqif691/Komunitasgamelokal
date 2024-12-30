<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas PBW</title>
  <link rel="icon" href="img/logo.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

  <!-- nav begin -->
  <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Komunitas Game Lokal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#schedule">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutme">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" target="_blank">Login</a>
          </li>
          <button type="button" class="btn btn-primary" id="dark" title="dark">
            <i class="bi bi-moon-fill"></i>
          </button>
          <button type="button" class="btn btn-warning" id="light" title="light">
            <i class="bi bi-sun-fill"></i>
          </button>
        </ul>
      </div>
    </div>
  </nav>
  <style>
    .navbar {
      background-color: #DFF2EB !important;
      padding: 15px;

    }

    .navbar-brand {
      font-weight: 700;
      margin-left: 25px;
    }
  </style>
  <!-- nav end -->
  <!-- hero begin -->
  <section id="hero" class="text-center bg-info-subtle text-sm-start">
    <div class="home">
      <div class="d-sm-flex flex-sm-row-reverse align-items-center">
        <img
          src="https://play-lh.googleusercontent.com/KEdFJrciQe0KqjtwkOAIh-ZNURHQoo2vNdB0RmzT85AlREJrOZxlRT68zusMgK0zJvw"
          class="img-fluid" width="400" />
        <div>
          <h1 class="fw-bold display-4">
            EXPLORE, FIND AND SUPPORT LOCAL GAMES
          </h1>
          <h4 class="lead display-6">
            Mendukung berkenalan dengan game-game lokal karya anak bangsa untuk bersaing di
            kancah internasional
          </h4>
          <h6>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </h6>
        </div>
      </div>
    </div>
  </section>
  <style>
    .home {
      padding: 100px;
      height: 700px;
    }
  </style>
  <!-- hero end -->
  <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
  <!-- gallery begin -->
  <section id="gallery" class="text-center bg-info-subtle">
    <div class="gallery">
      <h1 class="fw-bold display-4 pb-3">Gallery</h1>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/e54669105542489.5f7b8bdde4d25.jpg"
              class="d-block w-100" alt="Lokapala" />
          </div>
          <div class="carousel-item">
            <img src="https://image.api.playstation.com/vulcan/ap/rnd/202211/1607/EABYhb8aZrnHUvZpeuPUADQu.png"
              class="d-block w-100" alt="Aspacefortheunbound" />
          </div>
          <div class="carousel-item">
            <img
              src="https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/software/switch/70010000019679/d1982249b12181e2393293f1f86035e38897708cc04cc65746f623dca7961168"
              class="d-block w-100" alt="Coffetalk" />
          </div>
          <div class="carousel-item">
            <img src="https://www.humblegames.com/wp-content/uploads/2022/03/Coral-Island-Key-Art-1920x1080-1.png"
              class="d-block w-100" alt="Coralisland" />
          </div>
          <div class="carousel-item">
            <img src="https://gameblur.net/wp-content/uploads/2024/01/gameblur-dreadout-2-header.jpg"
              class="d-block w-100" alt="Dreadout" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <style>
    .gallery {
      padding: 60px;
    }
  </style>
  <!-- gallery end -->
  <!-- schedule begin -->
  <section id="schedule" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Schedule</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">SENIN</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Kecerdasan Buatan<br />07.00-09.30 | H.5.12
              </li>
              <li class="list-group-item">
                Rekayas Perangkat Lunak<br />09.30-12.00 | H.5.6
              </li>
              <li class="list-group-item">
                Sistem Operasi<br />12.30-15.00 | H.4.9
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">SELASA</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Basis Data<br />07.00-08.40 | H.4.1
              </li>
              <li class="list-group-item">
                Pendidikan kewarganegaraan<br />08.40-10.20 | Aula H7
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">RABU</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Basis Data<br />07.00-08.40 | D.3.M
              </li>
              <li class="list-group-item">
                Pemrograman Berbasis Web<br />10.20-12.00 | D.2.J
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">KAMIS</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Probabilitas dan Statistika<br />09.30-12.00 | H.4.12
              </li>
              <li class="list-group-item">
                Logika Informatika<br />12.30-15.00 | H.4.5
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">JUMAT</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">FREE</li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">SABTU</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">FREE</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- schedule end -->
  <!-- about me begin -->
  <section id="aboutme" class="text-center bg-info-subtle">
    <div class="about">
      <div class="d-sm-flex align-items-center justify-content-center">
        <div class="p-3">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhy2RH6tvVpZO5GVZTUQ3dacLo-F2sJXqpYA&s" class="rounded-circle border shadow" width="300" />
        </div>
        <div class="p-md-5 text-sm-start">
          <h3 class="lead">A11.2023.14899</h3>
          <h1 class="fw-bold">Mohammad Tsaqif Akmal</h1>
          Program Studi Teknik Informatika<br />
          <a href="https://dinus.ac.id/" class="fw-bold text-decoration-none">Universitas Dian Nuswantoro</a>
        </div>
      </div>
    </div>
  </section>
  <!-- about me end -->
  <!-- footer begin -->
  <footer id="footer" class="footer bg-body-tertiary text-center">
    <div class="icons">
      <a href="https://www.instagram.com/tsaqif_akmaaall/profilecard/?igsh=dW16cnN5MDBuYzV3"><i
          class="bi bi-instagram fs-3 fs-3 mx-2 text-dark"></i></a>
      <a href="https://youtube.com/@tsaqifakmal8522?si=-2wE3psoT2Q0BV0_"><i
          class="bi bi-youtube fs-3 fs-3 mx-2 text-dark"></i></a>
      <a href="https://wa.me/6289530552674"><i class="bi bi-whatsapp fs-3 fs-3 mx-2 text-dark"></i></a>
    </div>
    <div>Tsaqif Akmal &copy; 2024</div>
  </footer>
  <style>
    .footer {
      background-color: #DFF2EB !important;
      
    }
  </style>
  <!-- footer end -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script type="text/javascript">
    window.setTimeout("tampilWaktu()", 1000);

    function tampilWaktu() {
      var waktu = new Date();
      var bulan = waktu.getMonth() + 1;

      setTimeout("tampilWaktu()", 1000);
      document.getElementById("tanggal").innerHTML =
        waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
      document.getElementById("jam").innerHTML =
        waktu.getHours() +
        ":" +
        waktu.getMinutes() +
        ":" +
        waktu.getSeconds();
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript">
    document.getElementById("dark").onclick = function () {
      document.body.style.backgroundColor = "black";

      document
        .getElementById("hero")
        .classList.remove("bg-info-subtle", "text-black");
      document
        .getElementById("hero")
        .classList.add("bg-secondary", "text-white");

      document
        .getElementById("gallery")
        .classList.remove("bg-info-subtle", "text-black");
      document
        .getElementById("gallery")
        .classList.add("bg-secondary", "text-white");

      document
        .getElementById("aboutme")
        .classList.remove("bg-info-subtle", "text-black");
      document
        .getElementById("aboutme")
        .classList.add("bg-secondary", "text-white");

      document.getElementById("footer").classList.remove("text-black");
      document.getElementById("footer").classList.add("text-white");

      document.getElementById("article").classList.remove("text-black");
      document.getElementById("article").classList.add("text-white");

      document.getElementById("schedule").classList.remove("text-black");
      document.getElementById("schedule").classList.add("text-white");

      const collection = document.getElementsByClassName("card");
      for (let i = 0; i < collection.length; i++) {
        collection[i].classList.add("bg-secondary", "text-white");
      }

      const collection2 = document.getElementsByClassName("list-group-item");
      for (let i = 0; i < collection2.length; i++) {
        collection2[i].classList.add("bg-secondary", "text-white");
      }
    };

    document.getElementById("light").onclick = function () {
      document.body.style.backgroundColor = "white";

      document
        .getElementById("hero")
        .classList.remove("bg-secondary", "text-white");
      document
        .getElementById("hero")
        .classList.add("bg-info-subtle", "text-black");

      document
        .getElementById("gallery")
        .classList.remove("bg-secondary", "text-white");
      document
        .getElementById("gallery")
        .classList.add("bg-info-subtle", "text-black");

      document
        .getElementById("aboutme")
        .classList.remove("bg-secondary", "text-white");
      document
        .getElementById("aboutme")
        .classList.add("bg-info-subtle", "text-black");

      document.getElementById("footer").classList.remove("text-white");
      document.getElementById("footer").classList.add("text-black");

      document.getElementById("article").classList.remove("text-white");
      document.getElementById("article").classList.add("text-black");

      document.getElementById("schedule").classList.remove("text-white");
      document.getElementById("schedule").classList.add("text-black");

      const collection = document.getElementsByClassName("card");
      for (let i = 0; i < collection.length; i++) {
        collection[i].classList.remove("bg-secondary", "text-white");
      }

      const collection2 = document.getElementsByClassName("list-group-item");
      for (let i = 0; i < collection2.length; i++) {
        collection2[i].classList.remove("bg-secondary", "text-white");
      }
    };
  </script>
</body>

</html>