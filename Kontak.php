<!DOCTYPE html>
<html>
<head>
<title>Kontak</title>
  <link rel="icon" href="IMG/Logo1.png" type="IMG/Logo1.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap');

    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #b7d5ac;
    }

    nav {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      height: 70px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
    }

    nav a {
      font-size: 18px;
      padding: 8px 12px;
      text-decoration: none;
      color: #000;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #007bff;
    }

    .container2 {
      background-color: #fff;
      padding: 20px;
      margin-top: 100px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .item img {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      transition: box-shadow 0.3s ease;
      width: 100%;
      height: auto;
    }

    .item:hover img {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .item::before {
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

    .item:hover::before {
      opacity: 1;
    }

    .item::after {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 50px;
      font-weight: bold;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .item:hover::after {
      opacity: 1;
    }

    .contact,
    .location,
    .social-media {
      margin-bottom: 20px;
      padding: 20px;
    }

    h2 {
      margin-bottom: 10px;
    }

    p {
      margin-bottom: 5px;
    }

    .social-icons a {
      color: #000;
      font-size: 24px;
      margin-right: 10px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #007bff;
    }
  </style>
</head>
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
<br>
<center>
  <div class="container2">
    <div class="contact">
      <h2>Kontak</h2>
      <p>Email: info@contoh.com</p>
      <p>Telepon: 123-456-7890</p>
    </div>
    <div class="location">
      <h2>Lokasi</h2>
      <p>Alamat: Jalan Contoh No. 123</p>
      <p>Kota: Contohville</p>
    </div>
    <div class="social-media">
      <h2>Media Sosial</h2>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
  
  
 </center>

</body>
</html>