<?php
include '../../backend/config/php/koneksi.php';
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
    <a href="https://gungnanda.com/" class="logo">Portfolio</a>
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
        download my <a href="#" download="">CV</a>
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
        <p>although this is not a programming language, but this is an important skill for programmers to have.</p>
      </div>
      <div class="skill">
        <i class="bx bxl-javascript"></i>
        <h2>JavaScript</h2>
        <p>javascript programming language. I'm new to this language and not very proficient in using the syntax to the fullest.</p>
      </div>
      <div class="skill">
        <i class="bx bx-code-alt"></i>
        <h2>C++</h2>
        <p>
          language C + +. This language is a language, my basic as a programmer, this language I use most often and I understand the most from other programming languages. I use it to create Arduino projects and make calculations system.
        </p>
      </div>
      <div class="skill">
        <i class="bx bx-coffee"></i>
        <h2>Java</h2>
        <p>Java language, I use it as a medium for learning from school and I'm new here. I also use this language as the language I use to continue learning the programming language from C++</p>
      </div>
      <div class="skill">
        <i class="bx bxl-php"></i>
        <h2>PHP</h2>
        <p>PHP language, I use this language as a web developing language. I usually use this language as logic on a website</p>
      </div>
      <div class="skill">
        <i class='bx bxl-python'></i>
        <h2>Python</h2>
        <p>Pythone, I use this language as for a backend system for application</p>
      </div>
    </div>
  </section>
  <section class="portfolio" id="portfolio">
    <div class="heading">
      <h2>Portfolio</h2>
      <span>Recent Work</span>
    </div>
    <div class="portfolio-container">
      <div class="box">
        <div class="box-img">
          <img src="./img/finalsimbol.png" alt="padangsambian" />
        </div>
        <div class="content">
          <a href="https://gungnanda.com/padangsambian"><i class="bi bi-link-45deg"></i></a>
          <h3>Web desa padangsambian</h3>
        </div>
      </div>
      <div class="box">
        <div class="box-img">
          <img src="./img/penyiram tanaman otomatis.png" alt="penyiram tanaman" />
        </div>
        <div class="content">
          <h3>automatic plant sprinkler</h3>
        </div>
      </div>
      <div class="box">
        <div class="box-img">
          <img src="./img/tongsampah.png" alt="tongsampah" />
        </div>
        <div class="content">
          <h3>automatic trashbin</h3>
        </div>
      </div>
      <div class="box">
        <div class="box-img">
          <img src="./img/rfid dor.png" alt="portfolio1" />
        </div>
        <div class="content">
          <h3>Doorlock RFID</h3>
        </div>
      </div>
      <div class="box">
        <div class="box-img">
          <img src="./img/mobil.png" alt="mobil" />
        </div>
        <div class="content">
          <h3>ultrasonic car</h3>
        </div>
      </div>
      <div class="box">
        <div class="box-img">
          <img src="./img/powersupplay1.png" alt="portfolio2" />
        </div>
        <div class="content">
          <h3>powersuply 1</h3>
        </div>
      </div>
      <div class="box">
        <div class="box-img">
          <img src="./img/powersupplay2.png" alt="Suhu & Jemuran otomatis" />
        </div>
        <div class="content">
          <h3>powersuply 2</h3>
        </div>
      </div>
      <div class="box">
        <div class="box-img">
          <img src="./img/powersupplay3.png" alt="RFID" />
        </div>
        <div class="content">
          <h3>powersuply 3</h3>
        </div>
      </div>
      <div class="box">
        <div class="box-img">
          <img src="./img/web2.png" alt="Robot Bluetooth" />
        </div>
        <div class="content">
          <h3>Portofolio</h3>
        </div>
      </div>
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