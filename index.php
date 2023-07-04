<!DOCTYPE html>
<html>
<head>
  <title>Tampilan Menu Utama</title>
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
      text-align: right;
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
</head>
<body>
<div class="container">
<nav class="w-full h-28 shadow-lg fixed z-10">
        <div class="flex justify-left h-full px-10 items-center text-xl">
			<div class="logo-container">
							<img src="IMG/logo1.png" alt="Logo">
				</div>
			<ul class="flex space-x-5" style=" margin: 50px;">
                <li class="font-bold"><a href="#">Home</a></li>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </div>
    </nav>
<br>
<div class="welcome-container">
<div class="welcome-text">
<h1>WELCOME OBAT HERBAL</h1>
<p>Temukan solusi kesehatan yang alami dan aman dengan Obat Herbal X. Terbuat dari bahan-bahan alami pilihan yang berkualitas, Obat Herbal X membantu menjaga kesehatan tubuh secara menyeluruh.</p>
<button class="button">Selengkapnya</button>
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
<h1 style=" text-align: right">Selamat Datang di Obat Herbal X</h1>
<p style=" margin: 10px; text-align: right">Temukan solusi kesehatan yang alami dan aman dengan Obat Herbal X. Terbuat dari bahan-bahan alami pilihan yang berkualitas, Obat Herbal X membantu menjaga kesehatan tubuh secara menyeluruh.</p>
 <div class="button-container2">
 <center>
    <button class="button2" style>Selengkapnya</button>
	</center>
  </div>
</div>

</div>

<div class="welcome-container2">
<div class="welcome-text">
<h1>Selamat Datang di Obat Herbal X</h1>
<p>Temukan solusi kesehatan yang alami dan aman dengan Obat Herbal X. Terbuat dari bahan-bahan alami pilihan yang berkualitas, Obat Herbal X membantu menjaga kesehatan tubuh secara menyeluruh.</p>
<button class="button">Selengkapnya</button>
</div>
<img src="IMG/dokter.jpeg" alt="Gambar Welcome" class="welcome-image">
</div>
</div>
</div>
</body>
</html>