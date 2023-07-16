<!DOCTYPE html>
<html>
<head>
 <title>Istana Herbal</title>
  <link rel="icon" href="IMG/Logo1.png" type="IMG/Logo1.png">
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
	.grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
}

.grid-item {
  position: relative;
  overflow: hidden;
}

.grid-item img {
  width: 100%;
  height: auto;
  transition: transform 0.3s ease;
}

.grid-item:hover img {
  transform: scale(1.1);
}

.grid-item::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.grid-item:hover::before {
  opacity: 1;
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
  <h1>WELCOME OBAT HERBAL</h1>
  <br>
  <p style="text-align: justify;">
  Ingin menemukan solusi kesehatan yang alami dan aman? Temukan jawabannya di Obat 
  Herbal Istana Herbal! Kami dengan bangga mempersembahkan produk herbal terbaik yang 
  dirancang untuk membantu Anda mencapai kesehatan optimal secara alami.
  </p>
  <br>
  <p style="text-align: justify;">
  Produk kami diproduksi dengan standar kualitas yang tinggi dan melalui proses seleksi 
  ketat untuk memastikan keaslian dan efektivitasnya. Kami hanya menggunakan bahan-bahan 
  alami yang terpilih dengan cermat.
  </p>

<div class="container">
  <h1>Mengapa Anda harus memilih Toko Herbal Kami?</h1>
  <p>Temukan solusi alami untuk kesehatan Anda di Toko Herbal Kami! Kami dengan bangga mengumumkan bahwa toko herbal kami telah bersertifikat, memberikan jaminan kualitas dan keamanan produk kami.</p>
</div>
  
<div class="grid-container">
    <div class="grid-item">
      <img src="IMG/welcome.jpg" alt="Gambar 1">
    </div>
    <div class="grid-item">
      <img src="IMG/welcome.jpg" alt="Gambar 2">
    </div>
    <div class="grid-item">
      <img src="IMG/welcome.jpg" alt="Gambar 3">
    </div>
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
