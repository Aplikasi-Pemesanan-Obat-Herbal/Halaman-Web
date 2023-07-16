<!DOCTYPE html>
<html>
<head>
  <title>Istana Herbal</title>
  <link rel="icon" href="IMG/Logo1.png" type="IMG/Logo1.png">
  <style>
    body {
      background-color: #e0f4f4;
    }
    .welcome-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 500px;
    }
	
	.welcome-container2 {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 200px;
    }
    .welcome-image {
      width: 50%;
      margin-left: 50px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    }
    .container {
      width: 80%;
      margin: auto;
      padding:0px;
    }
    .menu {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
      align-items: center;
      background-color: #26a69a;
      color: white;
      padding: 10px;
    }
    .menu img {
      height: 50px;
      margin-right: 10px;
    }
    .menu a {
      color: white;
      text-decoration: none;
      padding: 10px;
      font-weight: bold;
    }
    .menu a:hover {
      background-color: white;
      color: #26a69a;
      border-radius: 5px;
      transition: all 0.5s ease;
    }
.product-container {
  display: flex;
  flex-direction: row;
  align-items: center;
  margin: 50px auto;
  max-width: 800px;
}


.product-container img {
    margin-left: auto;
    margin-right: auto;
}

  .product-image {
    position: relative;
    width: 300px;
    height: 300px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,.2);
  }

  .product-image img {
    display: block;
    margin: auto;
  }

  .product-image-left {
    float: left;
  }

  .product-image-right {
    float: right;
  }
    .product-image img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      transition: all .3s ease-in-out;
    }
    .product-image img.active {
      opacity: 1;
    }
    .product-image img:nth-of-type(2) {
      left: -100%;
    }
    .product-image img:nth-of-type(3) {
      left: 100%;
    }
    .product-details {
      margin-top: 20px;
      text-align: justify;
    }
    .product-details h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    .product-details p {
      font-size: 18px;
      line-height: 1.5;
margin-bottom: 10px;
}
.product-certificate {
display: flex;
align-items: center;
margin-top: 20px;
}
.product-certificate img {
width: 150px;
height: auto;
margin-right: 20px;
}
.product-certificate p {
font-size: 18px;
line-height: 1.5;
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
	<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .footer {
      background-color: #8bc34a;
      padding: 20px;
      color: #fff;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    .footer-item {
      text-align: center;
    }

    .footer-item h3 {
      margin: 0;
      font-size: 18px;
    }

    .footer-item p {
      margin: 10px 0;
      font-size: 14px;
    }
	</style>
</head>
</head>
<body>
<div class="container">
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
<br>
<div class="welcome-container">
<div class="welcome-text">
<h1>WELCOME OBAT HERBAL</h1>
<p style="text-align: justify;">Temukan solusi kesehatan yang alami dan aman dengan Obat Herbal Istana Herbal. 
Terbuat dari bahan-bahan alami pilihan yang berkualitas, Obat Herbal Istana Herbal 
membantu menjaga kesehatan tubuh secara menyeluruh, sehingga akan sangat membantu
dalam pengobatan menuju sehat, karena sehat tidak akan bisa dibeli maka jaga kesehatan anda.</p>
<button class="button"><a href="welcome.php">Selengkapnya</a></button>
</div>
<img src="IMG/dokter.png" alt="Gambar Welcome" class="welcome-image" style="height: auto;width: 300px;">
</div>
<br>

<div style="display: flex; justify-content: center; align-items: center; height: 10vh;">
  <div style="padding: 20px;">
    <img src="IMG/Obat1.png" alt="Obat Herbal X" class="welcome-image"  style="height: auto;width: 300px;">
	<div class="button-container3">
	<button class="button3">PRODUK TERBAIK</button>
	</div>
  </div>
  
  <div style="padding: 20px;">
    <img src="IMG/Obat2.jpeg" alt="Obat Herbal Y" class="welcome-image"  style="height: auto;width: 300px;">
	<div class="button-container3">
	<button class="button3">HARGA TERBAIK</button>
	</div>
  </div>
</div>
<br><br><br>
<div class="welcome-container">
<img src="IMG/Rak Obat.jpg" alt="Gambar Welcome" class="welcome-image">
<div class="welcome-text">
<h1 style=" text-align: right">PRODUK TERLENGKAP</h1>
<p style=" margin: 10px; text-align: right">Temukan segala kebutuhan herbal Anda di Toko Herbal Kami! Kami dengan bangga 
menghadirkan produk terlengkap untuk memenuhi kebutuhan kesehatan dan kesejahteraan Anda.</p>
 <div class="button-container2">
    <button class="button" style="margin-left: 430px"><a href="terlengkap.php">Selengkapnya</a></button>
  </div>
</div>

</div>

<div class="welcome-container2">
<div class="welcome-text">
<h1>TOKO BERSERTIFIKAT</h1>
<p style="text-align: justify;">Temukan solusi alami untuk kesehatan Anda di Toko Herbal Kami! Kami dengan bangga mengumumkan 
bahwa toko herbal kami telah bersertifikat, memberikan jaminan kualitas dan keaslian produk kami.</p>
<button class="button"><a href="sertifikat.php">Selengkapnya</a></button>
</div>
<img src="IMG/dokter.jpeg" alt="Gambar Welcome" class="welcome-image">
</div>
</div>
</div>
<br><br>
<div class="footer">
    <div class="footer-item">
      <h3>Tentang Kami</h3>
      <p>Informasi tentang Toko Obat Herbal Istana Herbal</p>
    </div>
    <div class="footer-item">
      <h3>Produk</h3>
      <p>Daftar produk yang tersedia di Toko Obat Herbal Istana Herbal</p>
    </div>
    <div class="footer-item">
      <h3>Kontak</h3>
      <p>Hubungi kami untuk informasi lebih lanjut</p>
    </div>
  </div>
</body>
</html>
