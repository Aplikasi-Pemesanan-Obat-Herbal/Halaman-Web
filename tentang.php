<!DOCTYPE html>
<html>
<head>
  <title>Tentang</title>
  <link rel="icon" href="IMG/Logo1.png" type="IMG/Logo1.png">
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
	.carousel-container {
            width: 500px;
            height: 300px;
            overflow: hidden;
            position: relative;
        }
        .carousel-slide {
            display: flex;
            width: 100%;
            height: 100%;
        }
        .carousel-item {
            flex: 0 0 100%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
        }
        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .carousel-navigation {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            width: 100%;
            z-index: 1;
        }
        .carousel-navigation button {
            background: none;
            border: none;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }
		 .carousel-container {
            position: relative;
            width: 500px;
            height: 300px;
            overflow: hidden;
        }

        .carousel-item {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .carousel-item.active {
            opacity: 1;
        }

        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background-color: #ccc;
            border: none;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }

        .carousel-button-prev {
            left: 10px;
        }

        .carousel-button-next {
            right: 10px;
        }
		body {
            background-color: #cde8d9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container2 {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }

        .content-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .content-item img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
<nav class="w-full h-28 shadow-lg fixed z-10">
        <div class="flex justify-left h-full px-10 items-center text-xl">
			<div class="logo-container">
							<img src="IMG/Logo1.png" alt="Logo">
				</div>
			<ul class="flex space-x-5" style=" margin: 50px;">
                <a href="index.php">Beranda</a></li>
                <li><a href="Produk.php">Produk</a></li>
                <li class="font-bold"><a href="tentang.php">Tentang</a></li>
                <li><a href="Kontak.php">Kontak</a></li>
            </ul>
        </div>
    </nav>
	<br><br><br><br><br><br>
	<center>
	 <div class="carousel-container">
        <div class="carousel-item active">
            <img src="IMG/Logo1.png" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="IMG/dokter.jpeg" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="IMG/Obat1.png" alt="Image 3">
        </div>
        <button class="carousel-button carousel-button-prev" onclick="prevSlide()">&#8249;</button>
        <button class="carousel-button carousel-button-next" onclick="nextSlide()">&#8250;</button>
    </div>
	</center>

    <script>
        var carouselItems = document.querySelectorAll('.carousel-item');
        var currentSlide = 0;

        function showSlide(slideIndex) {
            carouselItems.forEach(function(item) {
                item.classList.remove('active');
            });

            carouselItems[slideIndex].classList.add('active');
        }

        function prevSlide() {
            currentSlide--;
            if (currentSlide < 0) {
                currentSlide = carouselItems.length - 1;
            }
            showSlide(currentSlide);
        }

        function nextSlide() {
            currentSlide++;
            if (currentSlide >= carouselItems.length) {
                currentSlide = 0;
            }
            showSlide(currentSlide);
        }
    </script>
	 <div class="container2">
        <div class="	header">
        </div>
        <div class="content">
            <div class="content-item"><center>
                <img src="IMG/Logo1.png" alt="Gambar 1">
                <h2>Visi</h2>
                <p>Menjadi toko herbal terkemuka yang menyediakan produk berkualitas tinggi.</p></center>
            </div>
            <div class="content-item"><center>
                <img src="IMG/Logo1.png" alt="Gambar 2">
                <h2>Misi</h2>
                <p>Menyediakan produk herbal alami dengan harga terjangkau dan memberikan pelayanan terbaik kepada pelanggan.</p></center>
            </div>
            <div class="content-item"><center>
                <img src="IMG/Logo1.png" alt="Gambar 3">
                <h2>Moto</h2>
                <p>"Kesehatan alami untuk hidup yang lebih baik"</p></center>
            </div>
        </div>
    </div>
</body>
</html>