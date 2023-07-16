<!DOCTYPE html>
<html>
<head>
    <title>Produk Obat Herbal</title>
	<link rel="icon" href="IMG/Logo1.png" type="IMG/Logo1.png">
    <style>
        body {
            background-color: #eaf2e8;
            font-family: Arial, sans-serif;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 10px;
            padding: 20px;
        }

        .product-box {
            background-color: #fff;
            padding: 80px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .product-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .product-name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .product-price {
            color: #888;
            margin-bottom: 10px;
        }

        .info-button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .info-button:hover {
            background-color: #45a049;
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-input {
            padding: 8px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .search-button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-button:hover {
            background-color: #45a049;
        }
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
<body>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<nav class="w-full h-28 shadow-lg fixed z-10">
    <div class="flex justify-left h-full px-10 items-center text-xl">
        <div class="logo-container">
            <img src="IMG/Logo1.png" alt="Logo">
        </div>
        <ul class="flex space-x-5" style="margin: 50px;">
            <li><a href="index.php">Beranda</a></li>
            <li class="font-bold"><a href="#">Produk</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="Kontak.php">Kontak</a></li>
        </ul>
    </div>
</nav>
<br><br><br><br><br>
    <div class="search-container">
        <input type="text" class="search-input" placeholder="Cari produk...">
        <button class="search-button">Cari</button>
    </div>
	<center>
    <div class="container">
        <div class="product-box">
            <img class="product-image" src="IMG/Logo1.png" alt="Obat A">
            <div class="product-name">Obat A</div>
            <div class="product-price">Harga: Rp100.000</div>
            <button class="info-button"><a href="Infoproduksatu.php">Info Produk</a></button>
        </div>
        <div class="product-box">
            <img class="product-image" src="IMG/Logo1.png" alt="Obat B">
            <div class="product-name">Obat B</div>
            <div class="product-price">Harga: Rp150.000</div>
            <button class="info-button" onclick="showInfo('Obat B')">Info Produk</button>
        </div>
        <div class="product-box">
            <img class="product-image" src="IMG/Logo1.png" alt="Obat C">
            <div class="product-name">Obat C</div>
            <div class="product-price">Harga: Rp120.000</div>
            <button class="info-button" onclick="showInfo('Obat C')">Info Produk</button>
        </div>
		<div class="product-box">
            <img class="product-image" src="IMG/Logo1.png" alt="Obat C">
            <div class="product-name">Obat C</div>
            <div class="product-price">Harga: Rp120.000</div>
            <button class="info-button" onclick="showInfo('Obat C')">Info Produk</button>
        </div>
		<div class="product-box">
            <img class="product-image" src="IMG/Logo1.png" alt="Obat C">
            <div class="product-name">Obat C</div>
            <div class="product-price">Harga: Rp120.000</div>
            <button class="info-button" onclick="showInfo('Obat C')">Info Produk</button>
        </div>
		<div class="product-box">
            <img class="product-image" src="IMG/Logo1.png" alt="Obat C">
            <div class="product-name">Obat C</div>
            <div class="product-price">Harga: Rp120.000</div>
            <button class="info-button" onclick="showInfo('Obat C')">Info Produk</button>
        </div>
        <!-- Tambahkan lebih banyak kotak produk di sini -->
    </div>
	</center>
    <script>
        function showInfo(productName) {
            alert("Info " + productName);
        }
    </script>
</body>
</html>