<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BD Farm | Pertanian dan Pangan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">BD<span>Farm</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#products">Produk</a>
        <a href="#menu">Lainnya</a>
        <a href="#contact">Kontak</a>
        <a href="./admin_panel/admin.php">Admin</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- Search Form start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- Search Form end -->

      <!-- Shopping Cart start -->
      <div class="shopping-cart">
        <div class="cart-item">
          <img src="img/products/3.jpg" alt="Product 1" />
          <div class="item-detail">
            <h3>Anggur</h3>
            <div class="item-price">IDR 35K</div>
          </div>
          <i data-feather="trash-2" class="remove-item"></i>
        </div>
        <div class="cart-item">
          <img src="img/products/1.jpg" alt="Product 1" />
          <div class="item-detail">
            <h3>Daging Sapi</h3>
            <div class="item-price">IDR 179K</div>
          </div>
          <i data-feather="trash-2" class="remove-item"></i>
        </div>
        <div class="cart-item">
          <img src="img/products/2.jpg" alt="Product 1" />
          <div class="item-detail">
            <h3>Salad</h3>
            <div class="item-price">IDR 29K</div>
          </div>
          <i data-feather="trash-2" class="remove-item"></i>
        </div>
      </div>
      <!-- Shopping Cart end -->
    </nav>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <div class="mask-container">
        <main class="content">
          <h1>Pangan yang baik untuk Anda dan Bumi</h1>
        </main>
      </div>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/header1.jpg" alt="About Us" />
        </div>
        <div class="content">
          <h3>Kenapa memilih produk kami?</h3>
          <p>karena produk pangan nabati dan hewani pertanian Kami menggunakan bahan-bahan berkualitas tinggi dari petani lokal dan menerapkan proses produksi yang ramah lingkungan. sehingga menjamin kualitas rasa dan kesehatan</p>
          <p>Produk kami juga terkenal akan gizi dan rasanya yang terkenal hingga ke mancanegara</p>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    <!-- Products Section start -->
    <section class="products" id="products">
      <h2><span>Produk Unggulan</span> Kami</h2>

      <div class="row">
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/3.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Anggur</h3>
            <div class="product-price">IDR 35K</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/1.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Daging Sapi</h3>
            <div class="product-price">IDR 179k/kg <span>IDR 199K/kg</span></div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/29.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Salad</h3>
            <div class="product-price">IDR 29k/porsi</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Products Section end -->
    <!-- Menu Section start -->
    <section id="menu" class="menu">
      <h2><span>Produk</span>Lainnya</h2>
      <p>Produk-produk dari pertanian kami lainnya berdasarkan kategori produk</p>

      <div class="row">
        <div class="menu-card">
          <img src="img/menu/4.jpg" alt="Nabati" class="menu-card-img" />
          <h3 class="menu-card-title">- Nabati-</h3>
          <p class="menu-card-price">Bahan pangan yang berasal dari tumbuhan seperti buah, sayuran, dan kacang-kacangan</p>
          <a href="nabati.php">Lihat Selengkapnya</a>
        </div>
        <div class="menu-card">
          <img src="img/menu/6.jpg" alt="Hewani" class="menu-card-img" />
          <h3 class="menu-card-title">- Hewani -</h3>
          <p class="menu-card-price">Bahan pangan yang berasal dari hewan seperti daging, susu, dan telur</p>
          <a href="hewani.php">Lihat Selengkapnya</a>
        </div>
        <div class="menu-card">
          <img src="img/menu/5.jpg" alt="Freshfood" class="menu-card-img" />
          <h3 class="menu-card-title">- Cooked Fresh Food -</h3>
          <p class="menu-card-price">Makanan yang dimasak secara langsung dari hasil pertanian kami, menggunakan bahan berkualitas</p>
          <a href="cooked.php">Lihat Selengkapnya</a>
        </div>
      </div>
    </section>
    <!-- Menu Section end -->
    <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.0992860385973!2d114.93739577505642!3d-8.192752891838936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd19a7218293d5f%3A0x14f491b7b75bd60d!2sPolsek%20Seririt!5e0!3m2!1sid!2sid!4v1705889833590!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <button type="submit" class="btn">kirim pesan</button>
        </form>
      </div>
    </section>
    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Lainnya</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">BudiDarma</a>. | &copy; 2024.</p>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Modal Box Item Detail start -->
    <div class="modal" id="item-detail-modal">
      <div class="modal-container">
        <a href="#" class="close-icon"><i data-feather="x"></i></a>
        <div class="modal-content">
          <img src="img/products/3.jpg" alt="Product 1" />
          <div class="product-content">
            <h3>Anggur</h3>
            <p>
              Rasa anggur sangat bervariasi, tergantung pada varietas, kematangan, dan cara pengolahannya. Secara umum, anggur memiliki rasa yang manis, asam, dan sedikit pahit. Rasa manisnya berasal dari gula alami yang terkandung dalam
              buah anggur. Rasa asamnya berasal dari asam tartarat dan asam sitrat. Rasa pahitnya berasal dari senyawa tannin. Manfaat anggur juga sangat beragam. Anggur merupakan sumber vitamin, mineral, dan antioksidan yang baik.
            </p>
            <div class="product-price">IDR 35K</div>
            <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Box Item Detail end -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
