<?php
include("konek.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MilkJars</title>

  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="./style.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar">
    <a href="#" class="logo">MilkJars</a>

    <ul>
      <li><a href="#home" onclick="changeColor(this)">Home</a></li>
      <li><a href="#aboutt" onclick="changeColor(this)">About</a></li>
      <li><a href="#menu" onclick="changeColor(this)">Products</a></li>
      <li><a href="#feedback" onclick="changeColor(this)">Feedback</a></li>

    </ul>
    <a href="login.php"><button class="lojinn">Login</button></a>
  </nav>
  <!-- Navbar End -->

  <script>
    function changeColor(link) {
      // Remove the 'active' class from all links
      var links = document.querySelectorAll('.navbar ul li a');
      links.forEach(function (element) {
        element.classList.remove('active');
      });

      // Add the 'active' class to the clicked link
      link.classList.add('active');
    }
  </script>

  <style>
    /* Add a style for the active class */
    .navbar ul li a.active {
      color: skyblue;
    }
  </style>

  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Nikmati Susu Produk kami</h1>
      <p>Minumlah Susu Sehat Pilihanmu!</p>
    </main>
  </section>
  <!-- Hero Section End -->

  <!-- About Section Start -->
  <section class="container-about" id="aboutt">
    <div class="about">
      <div class="content">
        <h2>About us!</h2>
        <h3>Mengapa Anda Memilih Produk Kami?</h3>
        <p>
          Susu Premium adalah Susu dengan grade atau kelas kedua dalam proses
          pembuatan. Susu premium memiliki kualitas di bawah susu
          specialty, namun lebih tinggi dibandingkan susu yang lain. Sesuai dengan namanya, Susu premium adalah Susu
          yang
          diperas, diolah dan juga diproses dengan olahan yang maksimal.
        </p>
      </div>

      <div class="about-img">
        <img src="./img/susubotol-removebg-preview (1).png" alt="Tentang kami" />
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Menu Section Card -->
  <section id="menu" class="menu">
    <h2>Menu kami</h2>
    <p>
      Pilih susu yang berkualitas seperti produk kami.
    </p>

    <div class="row">
      <div class="menu-card">
        <img src="./img/MIlk1-removebg-preview.png" alt="Milk" class="menu-card-img" />
        <h3 class="menu-card-title">Susu Chocolate</h3>
        <p class="menu-card-price">Rp 10.000</p>
        <p>Susu dengan rasa Chocolate yang sangat enak dan berkualitas.</p>
      </div>
      <div class="menu-card">
        <img src="./img/susubotol1-removebg-preview.png" alt="Milk" class="menu-card-img" />
        <h3 class="menu-card-title">Susu Strawbery</h3>
        <p class="menu-card-price">Rp 10.000</p>
        <p>Susu dengan rasa strawbery yang sangat enak dan berkualitas.</p>
      </div>
      <div class="menu-card">
        <img src="./img/Milk2-removebg-preview.png" alt="Milk" class="menu-card-img" />
        <h3 class="menu-card-title">Susu Jeruk</h3>
        <p class="menu-card-price">Rp 10.000</p>
        <p>Susu dengan rasa jeruk yang sangat enak dan berkualitas.</p>
      </div>
      <div class="menu-card">
        <img src="./img/Milk3-removebg-preview.png" alt="Milk" class="menu-card-img" />
        <h3 class="menu-card-title">Susu Kacang hijau</h3>
        <p class="menu-card-price">Rp 10.000</p>
        <p>Susu dengan rasa kacang hijau yang sangat enak dan berkualitas.</p>
      </div>
      <div class="menu-card">
        <img src="./img/Milk4-removebg-preview.png" alt="Milk" class="menu-card-img" />
        <h3 class="menu-card-title">Susu Original</h3>
        <p class="menu-card-price">Rp 10.000</p>
        <p>Susu dengan rasa original yang sangat enak dan berkualitas.</p>
      </div>
    </div>
  </section>


  <!-- komentar -->
  <section class="fed" id="feedback">
    <div class="feed">
      <form method="POST">
        <h1>Komentarmu</h1>
        <div class="id">
          <input type="text" name="nama" placeholder="Nama" />
          <input type="text" name="email" placeholder="email" />
          <i class="far fa-user"></i>
          <textarea cols="15" rows="5" name="komen" placeholder="Masukkan Komentar Mu.."></textarea>
          <button type="submit" name="submit">Kirim</button>
      </form>
    </div>
    </div>
  </section>
  <!-- end -->

  <?php
  include("konek.php");
  // Lakukan koneksi ke database
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $komen = $_POST['komen'];
    $email = $_POST['email'];

    // Lakukan validasi data jika diperlukan
  
    // Simpan komentar ke dalam database
    $sql = "INSERT INTO commet  (nama, komen,   email) VALUES ('$nama', '$komen', '$email')";
    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error" . $sql . "<br>" . $conn->error;
    }
  }
  ?>


  <!-- komentar end -->


  <!-- futter -->
  <footer class="footer-distributed">

    <div class="footer-left">
      <h3>Kerja<span>Project</span></h3>

      <p class="footer-links">
        <a href="#home">Home</a>
        |
        <a href="#aboutt">About</a>
        |
        <a href="#footter-distributed">Contact</a>
        |
        <a href="login.html">Login</a>
      </p>

      <p class="footer-company-name">Copyright © 2022 <strong>FristProject</strong>...</p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Azhar</span>
          Ajarr16</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>+62 08**2**167</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#">piwpiw@gmail.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the company</span>
        <strong>Azhar </strong> project company profile ini di buat dengan html, css, js,
        php and mysql.
      </p>
      <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
      </div>
    </div>
  </footer>

  <script>
    src = "style.js"
  </script>

</body>

</html>

<!-- 
    <!DOCTYPE html>
<html>

  <head>
    <title>Milk Bottle </title>

    Fonts
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    />

    Feather Icons
    <script src="https://unpkg.com/feather-icons"></script>

    My Style
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    Navbar start
    <nav class="navbar">
      <a href="#" class="navbar-logo">Milk<span>Bottle</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#products">Produk</a>
        <a href="#Feedback">Feedback</a>
      </div>

      <div class="navbar-extra">
        ></a>
        <a href="#" id="Milk"><i data-feather="Menu"></i></a>
      </div>

      shopping cart star

      <div class="shopping-cart">
        <div class="cart-item">
          <img src="gambar/SusuMurni.jpg" alt="Product 1" />
          <div class="item-detail">
            <h3>Product 1</h3>
            <div class="item-price">IDR 100k</div>
          </div>
          <i data-feather="trash-2" class="remove-item"></i>
        </div>
        <div class="cart-item">
          <img src="gambar/SusuMurni.jpg" alt="Product 1" />
          <div class="item-detail">
            <h3>Product 2</h3>
            <div class="item-price">IDR 120K</div>
          </div>
          <i data-feather="trash-2" class="remove-item"></i>
        </div>
        <div class="cart-item">
          <img src="gambar/SusuMurni.jpg" alt="Product 1" />
          <div class="item-detail">
            <h3>Product 3</h3>
            <div class="item-price">IDR 130K</div>
          </div>
          <i data-feather="trash-2" class="remove-item"></i>
        </div>
      </div>
    </nav>
    Navbar end

    Hero Section Start

    <section class="hero" id="home">
      <main class="content">
        <h1>Nikmati Lah Susu <span>Produk kami</span></h1>
        <p>Minumlah Susu Sehat Pilihanmu...</p>
        <a href="#" class="cta">Shop now</a>
      </main>
    </section>

    Hero Section end

    About Section Start
    <section id="about" class="about">
      <h2><span>Tentang </span>kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="gambar/susubotol.jpg" alt="Tentang kami" />
        </div>
        <div class="content">
          <h3>Mengapa Anda Memilih Produk Kami?</h3>
          <p>
            Susu Premium adalah Susu dengan grade atau kelas kedua dalam proses
            pembuatan.Susu premium memiliki kualitas di bawah susu
            specialty, namun lebih tinggi dibandingkan susu yang lain.
          </p>
          <p>
            Sesuai dengan namanya, Susu premium adalah Susu yang diperas, diolah
            dan juga diproses dengan olahan yang maksimal.
          </p>
        </div>
      </div>
    </section>
    About Section End

    Menu Section Start
    <section id="menu" class="menu">
      <h2><span>Menu </span>kami</h2>
      <p>
        Pilihlah Susu yang berkualitas seperti produk kami.
      </p>

      <div class="row">
        <div class="menu-card">
          <img src="gambar/Milk1.jpg" alt="Milk" class="menu-card-img" />
          <h3 class="menu-card-title">- Milk 1 -</h3>
          <p class="menu-card-price">IDR 10K</p>
        </div>

        <div class="menu-card">
          <img src="gambar/Milk2.jpg" alt="Milk" class="menu-card-img" />
          <h3 class="menu-card-title">- Milk 2 -</h3>
          <p class="menu-card-price">IDR 10K</p>
        </div>

        <div class="menu-card">
          <img src="gambar/Milk3.jpg" alt="Milk" class="menu-card-img" />
          <h3 class="menu-card-title">- MIlk 3 -</h3>
          <p class="menu-card-price">IDR 10K</p>
        </div>

        <div class="menu-card">
          <img src="gambar/MIlk4.jpg" alt="Milk" class="menu-card-img" />
          <h3 class="menu-card-title">- Milk 4 -</h3>
          <p class="menu-card-price">IDR 10K</p>
        </div>

      </div>
    </section>

    Menu Section End

    Product section start

    <section class="products" id="products">
      <h2><span>Produk Unggulan </span>kami</h2>
      <p>
        Ini adalah paket susu sapi murni tanpa ada campuran apapun.
      </p>

      <div class="row">
        <div class="product-card">
          <div class="product-icon">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="gambar/SusuMurni.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Milk Bens 1</h3>
            </div>
            <div class="product-price">IDR 30K <span>IDR 100K</span></div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icon">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="gambar/SusuMurni.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Milk Bens 2</h3>
            </div>
            <div class="product-price">IDR 50K <span>IDR 120K</span></div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icon">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="gambar/SusuMurni.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Milk Bens 3</h3>
            </div>
            <div class="product-price">IDR 60K <span>IDR 130K</span></div>
          </div>
        </div>
      </div>
    </section>

    Product section end

/    Footer Start

    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang kami</a>
        <a href="#menu">Menu</a>
        <a href="#Feedback">Feedback</a>
      </div>

      <div class="credit">
      </div>
    </footer>

    Footer End

    Feather Icons
    <script>
      feather.replace();
    </script>

    My JavaScript
    <script src="style.js"></script>

    feedback
    <link rel="stylesheet" href="feedback.css">
        <label for="nama">Nama Anda:</label>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">Alamat Email Anda:</label>
        <input type="email" id="email" name="email"><br>

        <label for="komentar">Komentar Anda:</label><br>
        <textarea id="komentar" name="komentar" rows="4" cols="50"></textarea><br>

        <input type="submit" value="Kirim">

  </body>
</html>

Style
:root {
  --primary: #f7ba1f;
  --bg: #010101;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
}
body {
  font-family: "Poppins", sans-serif;
  background-color: var(--bg);
  color: #fff;
}

html {
  scroll-behavior: smooth;
}

/*Navbar*/
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1.4rem 7%;
  background-color: rgba(1, 1, 1, 0.8);
  border-bottom: 1px solid #513c28;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
}
.navbar .navbar-logo {
  font-size: 2rem;
  font-weight: 700;
  color: #fff;
  font-style: italic;
}
.navbar .navbar-logo span {
  color: var(--primary);
}
.navbar .navbar-nav a {
  color: #fff;
  display: inline-block;
  font-size: 1.3rem;
  margin: 0 1rem;
}
.navbar .navbar-nav a:hover {
  color: var(--primary);
}
.navbar .navbar-nav a::after {
  content: "";
  display: block;
  padding-bottom: 0.5rem;
  border-bottom: 0.1rem solid var(--primary);
  transform: scaleX(0);
  transition: 0.2s linear;
}
.navbar .navbar-nav a:hover::after {
  transform: scaleX(0.5);
}
.navbar .navbar-extra a {
  color: #fff;
  margin: 0 0.5rem;
}
.navbar .navbar-extra a:hover {
  color: var(--primary);
}
#hamberger-menu {
  display: none;
}

/*shopping cart*/
.shopping-cart {
  position: absolute;
  top: 100%;
  right: -100%;
  height: 100vh;
  width: 35rem;
  padding: 0 1.5rem;
  background-color: #fff;
  color: var(--bg);
  transition: 0.3s;
}

.shopping-cart .cart-item {
  margin: 2rem 0;
  display: flex;
  align-items: center;
  gap: 1.5rem;
  padding-bottom: 1rem;
  border-bottom: 1px dashed #000000;
  position: relative;
}

.shopping-cart img {
  height: 6rem;
  border-radius: 50%;
}

.shopping-cart h3 {
  font-size: 1.6rem;
  padding-bottom: 0.5rem;
}

.shopping-cart .item-price {
  font-size: 1.3rem;
}

.shopping-cart .remove-item {
  position: absolute;
  right: 1rem;
  cursor: pointer;
}

.shopping-cart .remove-item:hover {
  color: var(--primary);
}

.shopping-cart.active {
  right: 0;
}

/*Hero Section*/
.hero {
  min-height: 100vh;
  display: flex;
  align-items: center;
  background-image: url("gambar/susubotol.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
}

.hero::after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 30%;
  bottom: 0;
  background: linear-gradient(
    0deg,
    rgba(1, 1, 3, 1) 8%,
    rgba(225, 225, 225, 0) 50%
  );
}

.hero .content {
  padding: 1.4rem 7%;
  max-width: 60rem;
}

.hero .content h1 {
  font-size: 5em;
  color: #000000;
  text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
  line-height: 1.2;
}

.hero .content h1 span {
  color: var(--primary);
}

.hero .content p {
  font-size: 1.6rem;
  margin-top: 1rem;
  line-height: 1.4;
  font-weight: 100;
  text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
  line-height: 1.2;
  mix-blend-mode: difference;
}

.hero .content .cta {
  margin-top: 1rem;
  display: inline-block;
  padding: 1rem 3rem;
  font-size: 1.4rem;
  color: #000000;
  background-color: var(--primary);
  border-radius: 0.5rem;
  box-shadow: 1px, 1px, 3px rgba(1px, 1px, 3px, 0.5);
}

/*About Section*/

.about,
.menu,
.products {
  padding: 8rem 7% 1.4rem;
}

.about h2,
.menu h2,
.products h2,
.contact h2 {
  text-align: center;
  font-size: 2.6rem;
  margin-bottom: 3rem;
}

.about h2 span,
.menu h2 span,
.products h2 span,
.contact h2 span {
  color: var(--primary);
}

.about .row {
  display: flex;
}

.about .row .about-img {
  flex: 1 1 45rem;
}

.about .row .about-img img {
  width: 100%;
}

.about .row .content {
  flex: 1 1 35rem;
  padding: 0 1rem;
}

.about .row .content h3 {
  font-size: 1.8rem;
  margin-bottom: 1rem;
}

.about .row .content p {
  margin-bottom: 0.8rem;
  font-size: 1.3rem;
  font-weight: 100;
  line-height: 1.6;
}

/*Menu Section*/

.menu h2,
.products h2,
.contact h2 {
  margin-bottom: 1rem;
}

.menu p,
.products p,
.contact p {
  text-align: center;
  max-width: 30rem;
  margin: auto;
  font-weight: 100;
  line-height: 1.6;
}

.menu .row {
  display: flex;
  flex-wrap: wrap;
  margin-top: 5rem;
  justify-content: center;
}

.menu .row .menu-card {
  text-align: center;
  padding-bottom: 4rem;
}

.menu .row .menu-card img {
  border-radius: 100%;
  width: 80%;
}

.menu .row .menu-card .menu-card-title {
  margin-top: 1.5rem;
}

/*product section*/
.products .row {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  gap: 1.5rem;
  margin-top: 4rem;
}

.products .product-card {
  text-align: center;
  border: 1px solid #666;
  padding: 2rem;
}

.products .product-icon {
  display: flex;
  justify-content: center;
  gap: 0.5rem;
}

.products .product-icon a {
  width: 4rem;
  height: 4rem;
  color: #fff;
  margin: 0.3rem;
  border: 1px solid #ffffff;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.products .product-icon a:hover {
  color: var(--primary);
  border: 1px solid var(--primary);
}

.products .product-image {
  padding: 1rem 0;
}

.products .product-image img {
  height: 25rem;
}

.products .product-content h3 {
  font-size: 2rem;
}

.products .product-star {
  font-size: 1.7rem;
  padding: 0.8rem;
  color: var(--primary);
}

.products .product-star .star-full {
  fill: var(--primary);
}

.products .product-price {
  font-size: 1.3rem;
  font-weight: bold;
}

.products .product-price span {
  text-decoration: line-through;
  font-weight: lighter;
  font-size: 1rem;
}

/*Footer*/

footer {
  background-color: var(--primary);
  text-align : center;
  padding: 1rem 0 3rem;
  margin-top: 3rem;
}

footer .socials {
  padding: 1rem 0;
}

footer .socials a {
  color: #fff;
  margin: 1rem;
}

footer .socials a:hover,
footer .links a:hover {
  color: var(--bg);
}

footer .links {
  margin-bottom: 1.4rem;
}

footer .links a {
  color: #fff;
  padding: 0.7rem 1rem;
}

footer .credit {
  font-size: 0.8rem;
}

footer .credit a {
  color: var(--bg);
  font-weight: 700;
}

/*Modal Box*/
.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.7);
}

.modal-container {
  position: relative;
  background-color: #fefefe;
  color: var(--bg);
  margin: 15% auto;
  padding: 1.2rem;
  border: 1px solid #666;
  width: 80%;
}

.modal-container .close-icon {
  position: absolute;
  right: 1rem;
}

.modal-content {
  display: flex;
  flex-wrap: nowrap;
}

.modal-content img {
  height: 16rem;
  margin-right: 2rem;
  margin-bottom: 2rem;
}

.modal-content p {
  font-size: 1.2rem;
  line-height: 1.8rem;
  margin-top: 1.2rem;
}

.modal-content a {
  display: flex;
  gap: 1rem;
  width: 12rem;
  background-color: var(--primary);
  color: #fff;
  margin-top: 1rem;
  padding: 1rem 1.6rem;
}

/*Media Queries*/
@media (max-width: 1366px) {
  html {
    font-size: 75%;
  }
}

/*tablet*/
@media (max-width: 768px) {
  html {
    font-size: 62.5%;
  }

  #hamberger-menu {
    display: inline-block;
  }

  .navbar .navbar-nav {
    position: absolute;
    top: 100%;
    right: -100%;
    background-color: #fff;
    width: 30rem;
    height: 100vh;
    transition: 0.3s;
  }

  .navbar .navbar-nav.active {
    right: 0;
  }

  .navbar .navbar-nav a {
    color: var(--bg);
    display: block;
    margin: 1.5rem;
    padding: 0.5rem;
    font-size: 2rem;
  }

  .navbar .navbar-nav a::after {
    transform-origin: 0 0;
  }

  .navbar .navbar-nav a:hover::after {
    transform: scaleX(0.2);
  }

  .navbar .search-form {
    width: 90%;
    right: 2rem;
  }

  .about .row {
    flex-wrap: wrap;
  }

  .about .row .about-img img {
    height: 24rem;
    object-fit: cover;
    object-position: center;
  }

  .about .row .content {
    padding: 0;
  }

  .about .row .content h3 {
    margin-top: 1rem;
    font-size: 2rem;
  }

  .about .row .content p {
    font-size: 1.6rem;
  }

  .menu p {
    font-size: 1.2rem;
  }

  .contack .row {
    flex-wrap: wrap;
  }

  .contack .row .map {
    height: 30rem;
  }

  .contack .row form {
    padding-top: 0;
  }

  .modal-content {
    flex-wrap: wrap;
  }
}
/*mobile phone*/
@media (max-width: 450px) {
  html {
    font-size: 55%;
  }
}
/* Reset beberapa tampilan bawaan browser */
body, h1, p, label, input, textarea, form {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    text-align: center;
}

h1 {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

p {
    margin: 20px;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #555;
}

 -->