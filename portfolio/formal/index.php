<?php
include "../../backend/config/php/koneksi.php";
require '../../backend/config/php/backend.php';
if (isset($_POST['tombol'])) {
  $Nama = $_POST['Nama'];
  $Email = $_POST['Email'];
  $Pesan = $_POST['Pesan'];
  $query = mysqli_query($koneksi, "INSERT INTO tanggapan(Nama,Email,Pesan) Values('$Nama','$Email','$Pesan')");
}
$work = query("SELECT * FROM portfolio");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <title>Portfolio</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>

<body>
  <header>
    <a href="../../" class="logo">PORTFOLIO</a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact</a></li>
      <div class="bx bx-moon" id="darkmode"></div>
    </ul>
  </header>
  <section class="home" id="home">
    <div class="social"></div>
    <div class="home-img">
      <img style="border-radius: 100%" src="img/gnanda.jpg" alt="profile" />
    </div>
    <div class="home-text">
      <span class="hello">Hello, I'm</span>
      <h1>Gung Nanda</h1>
      <div class="wrapper">
        <div class="static-text">I'm a</div>
        <ul class="dynamic-text">
          <li><span>Web Developer</span></li>
          <li><span>Arduino Programer</span></li>
          <li><span>Student</span></li>
          <li><span>internet enthusiastic</span></li>
        </ul>
      </div>
      <p>welcome to my portfolio website,enjoy.<br>
        download my <strong><a style="color:grey;" href="" download="pdf/cv v1.pdf">CV Here</a></strong>
      </p>
    </div>
  </section>
  <section class="about" id="about">
    <div class="heading">
      <h2>About</h2>
      <span>Introduction</span>
    </div>
    <div class="about-container">
      <div class="about-img">
        <p style="text-align:end ; margin-top:15px;">
          I'm Gung Nanda, I'm a student and a technology enthusiast. <br />
          I'm a student at SMK TI Bali Global Denpasar, <br />
          and a graduate of SMPN 2 Denpasar. <br />
          i'm from Indonesia,Denpasar,Bali.
        </p>
        <img src="#" alt="" />
      </div>
      <div class="about-text">
        <div class="information">
          <div class="info-box">
            <i class="bx bxs-user"></i>
            <span>A A Made Ananda Bisma Prabskara</span>
          </div>
          <div class="info-box">
            <i class="bx bxs-phone"></i>
            <span>+6287-861-866-327</span>
          </div>
          <div class="info-box">
            <i class="bx bxs-envelope"></i>
            <span>contact@gungnanda.com</span>
          </div>
        </div>
        <div class="social-media">
          <button class="instagram">
            <a href="https://www.instagram.com/gn.nanda/"><i class="bi bi-instagram"></i></a>
          </button>
          <button class="twitter">
            <a href="https://discord.io/sansroom"><i class="bx bxl-discord-alt"></i></a>
          </button>
          <button class="github">
            <a href="https://github.com/zeppyx13"><i class="bi bi-github"></i></a>
          </button>
          <button class="devianart">
            <a href="#"><i class="bi bi-vector-pen"></i></a>
          </button>
        </div>
      </div>
    </div>
  </section>
  <section class="skills" id="skills">
    <div class="heading">
      <h1>Skills</h1>
      <span>My Skills</span>
    </div>
    <div class="skills-container">
      <div class="skill">
        <i class="bx bxl-html5"></i>
        <h2>HTML5</h2>
        <p>although this is not a programming language, but this is an important skill for programmers to have.</p>
      </div>
      <div class="skill">
        <i class="bx bxl-css3"></i>
        <h2>CSS3</h2>
        <p>I use CSS to style my website. I'm not very proficient in this language because I'm not good at designing a website</p>
      </div>
      <div class="skill">
        <i class="bx bxl-javascript"></i>
        <h2>JavaScript</h2>
        <p>javascript programming language. I use languages to develop a website, one of which is for the Document Object Model (DOM) and make a website using React JS</p>
      </div>
      <div class="skill">
        <i class='bx bx-code-alt'></i>
        <h2>C</h2>
        <p>
          C language, I use this language for the purposes of my electronics projects such as Arduino and IOT
        </p>
      </div>
      <div class="skill">
        <i class='bx bxl-c-plus-plus'></i>
        <h2>C++</h2>
        <p>
          C++ language. I use this language to create simple desktop Applications, such as complex calculation applications and games.
        </p>
      </div>
      <div class="skill">
        <i class="bx bx-coffee"></i>
        <h2>Java</h2>
        <p>Java language, I use it as a medium for learning from school and I'm new here. I also use this language as the language I use to continue learning the new programming language</p>
      </div>
      <div class="skill">
        <i class="bx bxl-php"></i>
        <h2>PHP</h2>
        <p>PHP language, I use this language as the development language of most of my websites, usually use this language as logic on my website. Apart from that, I use this language for frame work such as Laravel and Codeigniter.</p>
      </div>
      <div class="skill">
        <i class='bx bxs-data'></i>
        <h2>SQL</h2>
        <p> Structured Query Language<br> or SQL, as a website developer I use SQL as a database. In this case the DBMS that I often use is MYSQL</p>
      </div>
      <div class="skill">
        <i class='bx bxl-python'></i>
        <h2>Python</h2>
        <p>Python, I use this language as a backend system for the applications I make, besides that I use python for data processing purposes.</p>
      </div>
    </div>
  </section>
  <section class="portfolio" id="portfolio">
    <div class="heading">
      <h2>Portfolio</h2>
      <span>Recent Work</span>
    </div>
    <div class="portfolio-container">
      <?php $i = 1; ?>
      <?php foreach ($work as $row) : ?>
        <div class="box">
          <div class="box-img">
            <img src="../../backend/admin/assets/img/<?= $row["gambar"] ?>" alt="gmbr" />
          </div>
          <div class="content">
            <a class="link" href="https://<?= $row["link"] ?>">
              <?php
              if ($row["type"] == "Website") {
                echo "<i class='bi bi-link-45deg'></i>";
              }
              ?>
            </a>
            <h3><?= $row["nama"] ?></h3>
          </div>
        </div>
        <?php $i++; ?>
      <?php endforeach; ?>
    </div>
  </section>
  <section class="contact" id="contact">
    <div class="heading">
      <h2>Contact</h2>
      <span>Connect With Me</span>
    </div>
    <div class="contact-form">
      <form action="" method="POST">
        <input type="text" name="Nama" placeholder="Your Name" id="Nama" required autocomplete="off" />
        <input type="email" name="Email" id="Email" placeholder="Enter Your Mail" required autocomplete="off" />
        <textarea name="Pesan" id="Pesan" cols="30" rows="10" placeholder="Write Message Here..." required autocomplete="off"></textarea>
        <input type="submit" name="tombol" value="Send" class="send-btn" />
      </form>
    </div>
  </section>
  <div class="copyright">
    <p>@GungNanda</p>
    <p>designed and creat by <a style="color:white ;" href="https://github.com/AdityaFitrianaNS/myportfolio1.github.io">AdityaFitrianaNS</a></p>
  </div>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="main.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>