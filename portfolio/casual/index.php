<?php
include "../../backend/config/php/koneksi.php";
require '../../backend/config/php/backend.php';

$data = query("SELECT * FROM portfolio");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-compatible" content="ie=edge" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
  <title>portofolio</title>
</head>

<body id="home">
  <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm fixed-top">
    <div class="container">
      <a href="../../" class="navbar-brand">Gung Nanda</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#project">project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#soscialmedia">soscial media</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="jumbotron text-center">
    <img src="img/profil.jpeg" width="200" class="rounded-circle img-thumbnail" />
    <h1 class="display-4"></h1>
    <div data-aos="fade-right" data-aos-duration="5000" data-aos-duration="1500">
      <p class="lead">GAMER |PROGRAMER |TECHNICIAN |REBAHANERS</p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,288L60,277.3C120,267,240,245,360,240C480,235,600,245,720,261.3C840,277,960,299,1080,293.3C1200,288,1320,256,1380,240L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
  </section>
  <section id="about">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>ABOUT ME</h2>
          <br />
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-9" data-aos="fade-up" data-aos-offset="240" data-aos-duration="1500">
          <p>
            saya gung nanda,saya adalah pelajar yang suka tentang teknologi dan elektronika.saya sekarang kelas 12 SMK dan sekolah di SMK TI BALI GLOBAL,dan lulusan dari SMP Negri 2 Denpasar.saya pelajar yang biasa-biasa saja.
          </p>
          <br>
          <p>
            selain pelajar saya juga seorang programer dan web developer,bahasa program yang saya kuasai c++,php,java,python,C, dan javascript.dan bahasa yang lain saya sedang proses belajar.
          </p>
        </div>
        <br>
        <h4 data-aos="fade-up" data-aos-duration="1500" style="text-align:center; margin-bottom: 1cm;  margin-top: 1cm;">Gaya Kerja<h4>
            <div class="progress">
              <div class="progress-bar" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1500" role="progressbar" style="width: 60%" aria-valuenow="15" aria-valuemin="80" aria-valuemax="100">INDIVIDUAL</div>
              <div class="progress-bar bg-success" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">KLOMPOK</div>
            </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="1" d="M0,160L48,160C96,160,192,160,288,154.7C384,149,480,139,576,128C672,117,768,107,864,106.7C960,107,1056,117,1152,138.7C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="1" d="M0,320L40,288C80,256,160,192,240,165.3C320,139,400,149,480,176C560,203,640,245,720,240C800,235,880,181,960,176C1040,171,1120,213,1200,234.7C1280,256,1360,256,1400,256L1440,256L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
    </svg>
    <sectio id="project">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 style="text-align:center ;">PROJECT</h2>
          </div>
          <div class="row justify-content-center">
            <?php $i = 1; ?>
            <?php foreach ($data as $row) : ?>
              <div class="col-md-4 mb-3 mt-4" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1500">
                <div class="card" style="width: 18rem;">
                  <img style="margin: auto; max-width:200px ; max-width:200px ;" src="../../backend/admin/assets/img/<?= $row["gambar"] ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?= $row["nama"] ?></h5>
                    <p class="card-text"><?= $row["deskripsi"] ?></p>
                    <?php
                    if ($row["type"] == "Website") {
                      $l = $row["link"];
                      $class = "btn btn-outline-secondary";
                      $a = "<a href='https://$l' class='$class'>check </a>";
                      echo $a;
                    }
                    ?>
                  </div>
                </div>
              </div>
              <?php $i++; ?>
            <?php endforeach; ?>
          </div>
        </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#e2edff" fill-opacity="1" d="M0,96L40,85.3C80,75,160,53,240,80C320,107,400,181,480,192C560,203,640,149,720,117.3C800,85,880,75,960,106.7C1040,139,1120,213,1200,218.7C1280,224,1360,160,1400,128L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z" style="--darkreader-inline-fill:#d2cfcb;" data-darkreader-inline-fill=""></path>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#e2edff" fill-opacity="1" d="M0,224L40,213.3C80,203,160,181,240,181.3C320,181,400,203,480,197.3C560,192,640,160,720,144C800,128,880,128,960,112C1040,96,1120,64,1200,96C1280,128,1360,224,1400,272L1440,320L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#d2cfcb;"></path>
  </svg>
  <section id="soscialmedia">
    <div class="container">
      <div class="row">
        <div class="col mb-3 pt-3 mt-5">
          <h2 style="text-align:center; margin-bottom: 1cm;">Social Media </h2>
        </div>
      </div>
      <div class="row justify-content-evenly mb-9">
        <div class="col-md-4 mb-3" data-aos="fade-down" data-aos-delay="300">
          <div class="card">
            <img src="img/ig.jpeg" class="card-img-top" alt="project 1">
            <div class="card-body">
              <h5 class="card-title">INSTAGRAM</h5>
              <p class="card-text">boleh di follow</p>
              <a href="https://www.instagram.com/gn.nanda/" class="btn btn-primary">Follow</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-down" data-aos-delay="400">
          <div class="card">
            <img src="img/discord2.jpeg" class="card-img-top" alt="project 1">
            <div class="card-body">
              <h5 class="card-title">DISCORD</h5>
              <p class="card-text">join server discord saya di bawah</p>
              <a href="https://discord.io/sansroom" class="btn btn-primary">Join</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-down" data-aos-delay="500">
          <div class="card">
            <img src="img/github.jpeg" class="card-img-top" alt="project 1">
            <div class="card-body">
              <h5 class="card-title">Git Hub</h5>
              <p class="card-text">belum isi apa follow aja dulu </p>
              <a href="https://github.com/zeppyx13" class="btn btn-primary">Follow</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-down" data-aos-delay="300">>
          <div class="card">
            <img src="img/spotify.jpeg" class="card-img-top" alt="project 1">
            <div class="card-body">
              <h5 class="card-title">Spotify</h5>
              <p class="card-text">bisa di cek spotify di bawah siapa tau ada playlist cocok </p>
              <a href="https://open.spotify.com/user/3142s7ffzvd4k4q3auyf4ld5vsku?si=bz6egiT-TbaltYQqmYVISg&utm_source=copy-link&dl_branch=1" class="btn btn-primary">Listen</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-down" data-aos-delay="400">>
          <div class="card">
            <img src="img/steam.jpeg" class="card-img-top" alt="gambar 5">
            <div class="card-body">
              <h5 class="card-title">Steam</h5>
              <p class="card-text">Boleh di add</p>
              <a href="https://steamcommunity.com/id/zphyrus/" class="btn btn-primary">Add</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-down" data-aos-delay="500">>
          <div class="card">
            <img src="img/yt.jpeg" class="card-img-top" alt="gambar 6">
            <div class="card-body">
              <h5 class="card-title">Youtube</h5>
              <p class="card-text">Subcribe aja kalo mau walaupun gk isi apa</p>
              <a href="https://youtube.com/channel/UCNaRdGp2sf0VHM_xdAZsyyQ" class="btn btn-primary">Subcribe</a>
            </div>
          </div>
        </div>
      </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#e2edff" fill-opacity="1" d="M0,32L30,80C60,128,120,224,180,250.7C240,277,300,235,360,224C420,213,480,235,540,213.3C600,192,660,128,720,122.7C780,117,840,171,900,202.7C960,235,1020,245,1080,218.7C1140,192,1200,128,1260,101.3C1320,75,1380,85,1410,90.7L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z" style="--darkreader-inline-fill:#d2cfcb;" data-darkreader-inline-fill=""></path>
  </svg>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="plugins/jquery-2.2.4.min.js"></script>
  <script src="plugins/jquery.appear.min.js"></script>
  <script src="plugins/jquery.easypiechart.min.js"></script>
  <script>
    'use strict';

    var $window = $(window);

    function run() {
      var fName = arguments[0],
        aArgs = Array.prototype.slice.call(arguments, 1);
      try {
        fName.apply(window, aArgs);
      } catch (err) {

      }
    };

    function _chart() {
      $('.b-skills').appear(function() {
        setTimeout(function() {
          $('.chart').easyPieChart({
            easing: 'easeOutElastic',
            delay: 3000,
            barColor: '#369670',
            trackColor: '#fff',
            scaleColor: false,
            lineWidth: 21,
            trackWidth: 21,
            size: 250,
            lineCap: 'round',
            onStep: function(from, to, percent) {
              this.el.children[0].innerHTML = Math.round(percent);
            }
          });
        }, 150);
      });
    };


    $(document).ready(function() {

      run(_chart);


    });
  </script>
</body>

</html>