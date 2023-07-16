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
    }
    
    .grid-item img {
      max-width: 100%;
      height: auto;
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
      width: 80px; /* Ukuran lebar container */
      height: 80px; /* Ukuran tinggi container */
    }
    
    .logo-container img {
      width: 100%; /* Ukuran lebar logo sesuai dengan container */
      height: auto; /* Tinggi logo akan disesuaikan secara proporsional */
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
    <h1>Toko Herbal Bersertifikat</h1>
    <p>Temukan solusi alami untuk kesehatan Anda di Toko Herbal Kami! Kami dengan bangga mengumumkan bahwa toko herbal kami telah bersertifikat, memberikan jaminan kualitas dan keaslian produk kami.</p>
    <p>Mengapa memilih Toko Herbal Bersertifikat kami?</p>
    <ul>
      <li>Produk Berkualitas: Kami menyediakan produk herbal berkualitas tinggi yang telah melalui proses sertifikasi yang ketat.</li>
      <li>Keaslian Terjamin: Kami menjamin keaslian semua produk herbal yang kami jual, sehingga Anda dapat membeli dengan percaya diri.</li>
      <li>Ahli Herbal Terlatih: Tim kami terdiri dari ahli herbal yang berpengalaman dan siap memberikan saran yang tepat untuk kebutuhan kesehatan Anda.</li>
      <li>Layanan Pelanggan Terbaik: Kami berkomitmen untuk memberikan layanan pelanggan yang ramah, responsif, dan profesional.</li>
    </ul>
    <p>Kunjungi toko kami sekarang dan temukan berbagai macam produk herbal yang dapat membantu meningkatkan kesehatan dan kesejahteraan Anda. Dapatkan manfaat alami dari produk herbal berkualitas tinggi yang telah bersertifikat.</p>
    <p>Toko Herbal Bersertifikat - Solusi alami untuk kesehatan Anda!</p>
    <p>Hubungi kami di [nomor telepon] atau kunjungi situs web kami di [alamat situs web] untuk informasi lebih lanjut.</p>
    <p><em>Disclaimer: Pastikan untuk selalu berkonsultasi dengan profesional kesehatan sebelum mengonsumsi produk herbal.</em></p>
    
    <div class="grid-container">
      <div class="grid-item">
        <img src="IMG/sertifkat.jpg" alt="Sertifikat 1">
      </div>
      <div class="grid-item">
        <img src="IMG/sertifkat.jpg" alt="Sertifikat 2">
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
