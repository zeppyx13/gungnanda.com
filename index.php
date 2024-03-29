<?php
include "backend/config/php/koneksi.php";
if (isset($_POST['tombol'])) {
  $Nama = $_POST['Nama'];
  $Email = $_POST['Email'];
  $Pesan = $_POST['Pesan'];
  $query = mysqli_query($koneksi, "INSERT INTO tanggapan(Nama,Email,Pesan) Values('$Nama','$Email','$Pesan')");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="official gung nanda website">
  <meta name="keywords" content="Gung Nanda personal website">
  <meta name="keywords" content="Portfolio Gung Nanda">
  <meta name="keywords" content="Gung Nanda blog">
  <meta name="keywords" content="Gung Nanda online profile">
  <meta name="keywords" content="Gung Nanda website">
  <meta name="keywords" content="gung nanda">
  <meta name="keywords" content="gung nanda portofolio">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>gungnanda</title>
</head>

<body id="home">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand">GungNanda</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#game">game</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">blog</a>
          </li>
          <li class="nav-item">
            <a type="button" class="tombol btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" data-aos-duration="700">
      <h1 class="display-4"><strong>WELCOME TO</strong> <br />MY WEBSITE<br /><a class="tombol btn-about btn btn-outline-primary" href="portfolio/formal/">about me</a></h1>
    </div>
  </div>
  <section id="portfolio">
    <div class=" container">
      <div class="row">
        <div class="col">
          <div class="header" data-aos="fade-up" data-aos-duration="600">My Portfolio</div>
        </div>
      </div>
      <div class="row" style="margin-top: 50px">
        <div class="col-md-5" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
          <img src="assets/img/portfolio.png" style="max-width: 300px; max-height: 300px" alt="" />
        </div>
        <div class="col-md-7 isi" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
          portfolio, which contains skills, experience, and all about me, this portfolio has 2, one is casual and one is formal. Where the formal portfolio contains things that are more formal and more professional, and the casual one contains things that are more relaxed.
          <br />
          <br />
          <br />
          <a class="tombol btn btn-secondary" href="portfolio/formal/">formal</a> | | <a class="tombol btn btn-secondary" href="portfolio/casual/">casual</a>
        </div>
      </div>
    </div>
  </section>
  <section id="game">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header" data-aos="fade-up" data-aos-duration="600">Game</div>
        </div>
      </div>
      <div class="row" style="margin-top: 50px">
        <div class="col-md-5" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
          <img src="assets/img/18961875.jpg" style="max-width: 300px; max-height: 300px" alt="game" class="gambargame" />
        </div>
        <div class="col-md-7 isi" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
          a game that I made from a website or application-based
          <br />
          <br />
          <br />
          <a class="tombol btn btn-game btn-secondary" href="game/whackamole/">Whack a mole</a> | | <a class="tombol btn btn-game btn-secondary" href="game/SnakeGame/">Snake Game</a>
        </div>
      </div>
    </div>
  </section>
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header" data-aos="fade-up" data-aos-duration="600">Blog</div>
        </div>
      </div>
      <div class="row" style="margin-top: 50px">
        <div class="col-md-5" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
          <img src="assets/img/Blogging.png" style="max-width: 300px; max-height: 300px" alt="game" class="gambargame" />
        </div>
        <div class="col-md-7 isi" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
          personal blog, personal writings and opinions that contain information and tips that I write on the blog
          <br />
          <br />
          <a id="glog" class="tombol btn btn-game btn-secondary" href="">My Blog</a>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label">Nama :</label>
              <input type="text" autocomplete="off" class="form-control" id="name" aria-describedby="name" name="Nama" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" autocomplete="off" class="form-control" id="Email" aria-describedby="email" name="Email" required>
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="Pesan" rows="3" name="Pesan" required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-modal btn-danger" data-bs-dismiss="modal"> <i class="bi bi-x-lg"></i> Batal</button>
            <button type="submit" class="btn btn-modal btn-secondary" name="tombol" id="liveToastBtn">Kirim <i class="bi bi-arrow-right"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <footer class="kaki">
    <p>&copy GungNanda2021 <a href="credits.html" style="margin-left: 85%;"><strong>Credits</strong></a> </p>
  </footer>
  <script>
    var toastTrigger = document.getElementById('liveToastBtn')
    var toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
      toastTrigger.addEventListener('click', function() {
        var toast = new bootstrap.Toast(toastLiveExample)

        toast.show()
      })
    }
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="config/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>