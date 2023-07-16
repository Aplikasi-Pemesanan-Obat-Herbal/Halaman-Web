<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
    
    .container.show {
      opacity: 1;
      transform: translateY(0);
    }
    
    h1 {
      text-align: center;
      color: #333;
    }
    
    p {
      color: #666;
    }
    
    .grid-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 20px;
      margin-top: 20px;
    }
    
    .grid-item {
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 10px;
    }
    
    .grid-item img {
      max-width: 100%;
      height: auto;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    
    .grid-item img:hover {
      transform: scale(1.05);
    }
  </style>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap');

        * {
            font-family: 'poppins';
        }

    .logo-container {
      width: 80px;
      height: 80px;
    }
    
    .logo-container img {
      width: 100%;
      height: auto;
    }

.button {
      background-color: green;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
    }

.button-container2 {
      text-align: left;
    }

.button2 {
      background-color: green;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
    }

.button3 {
      background-color: #a0a0a0;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
    }

    .button-container3 {
      text-align: center;
      margin-top: 20px;
    }
    </style>
</head>
<body>
<nav class="w-full h-28 shadow-lg fixed z-10">
        <div class="flex justify-left h-full px-10 items-center text-xl">
<div class="logo-container">
<img src="IMG/Logo1.png" alt="Logo">
</div>
<ul class="flex space-x-5" style=" margin: 50px;">
                <li class="font-bold"><a href="index.php">Beranda</a></li>
                <li><a href="Produk.php">Produk</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="Kontak.php">Kontak</a></li>
            </ul>
        </div>
    </nav>
<br><br><br><br><br>
  <div class="container">
  <h1>Mengapa Anda harus memilih Toko Herbal Kami</h1>
  <br><p style="text-align: justify;">
1. Produk Terlengkap: Kami menyediakan berbagai macam produk herbal dari berbagai merek dan kategori. Mulai dari suplemen herbal, 
teh herbal, minyak esensial, ramuan tradisional, dan banyak lagi.</p>
<p style="text-align: justify;">
2. Dengan memiliki beragam produk, kami memastikan bahwa Anda dapat menemukan semua yang Anda butuhkan untuk memenuhi kebutuhan 
kesehatan dan kesejahteraan Anda di satu tempat.</p>
<p style="text-align: justify;">3. Kualitas Produk yang Tinggi: Kami hanya menyediakan produk herbal berkualitas tinggi yang telah melalui 
proses seleksi dan pengujian yang ketat.</p>
<p style="text-align: justify;">4. Ahli Herbal Terpercaya: Tim kami terdiri dari ahli herbal yang berpengalaman dan siap memberikan saran yang tepat 
untuk kebutuhan kesehatan Anda.</p>
<p style="text-align: justify;">5. Layanan Pelanggan Terbaik: Kami berkomitmen untuk memberikan layanan pelanggan yang ramah, responsif, dan profesional.</p>

<div class="grid-container">
  <div class="grid-item">
  <center>
    <img src="IMG/Logo1.png" alt="Produk 1">
    <h3>Produk 1</h3>
    <p>Deskripsi produk 1.</p>  </center>
    <div class="button-container2">
      <a href="#" class="button">Beli Sekarang</a>
    </div>
  </div>
  <div class="grid-item">
   <center>
    <img src="IMG/Logo1.png" alt="Produk 2">
    <h3>Produk 2</h3>
    <p>Deskripsi produk 2.</p></center>
    <div class="button-container2">
      <a href="#" class="button">Beli Sekarang</a>
    </div>
  </div>
  <div class="grid-item">
   <center>
    <img src="IMG/Logo1.png" alt="Produk 3"> </center>
    <h3>Produk 3</h3>
    <p>Deskripsi produk 3.</p></center>
    <div class="button-container2">
      <a href="#" class="button">Beli Sekarang</a>
    </div>
  </div>
  <div class="grid-item">
     <center><img src="IMG/Logo1.png" alt="Produk 4">
    <h3>Produk 4</h3>
    <p>Deskripsi produk 4.</p></enter>
    <div class="button-container2">
      <a href="#" class="button">Beli Sekarang</a>
    </div>
  </div>
</div>

<div class="button-container3">
  <a href="Produk.php" class="button2">Lihat Semua Produk</a>
</div>
</div>

<script>
  window.addEventListener('DOMContentLoaded', function() {
    var container = document.querySelector('.container');
    container.classList.add('show');
  });
</script>
</body>
</html>
