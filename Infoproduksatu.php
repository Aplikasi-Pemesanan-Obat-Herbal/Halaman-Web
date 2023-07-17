<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
            border-radius: 10px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }

        .product-image img {
            width: 100%;
            height: auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .product-details {
            display: flex;
            flex-direction: column;
        }

        .product-name {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .product-price {
            font-size: 18px;
            margin-bottom: 10px;
            color: #555;
        }

        .product-description p {
            margin-bottom: 10px;
        }

        .product-rating {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            color: #333;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .stars {
            color: gold;
        }

        .product-shipping, .product-warranty {
            margin-bottom: 10px;
        }

        .product-shipping h3, .product-warranty h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .product-shipping ul, .product-warranty p {
            margin-left: 20px;
        }

        .product-order {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .product-order label {
            margin-right: 10px;
        }

        .product-order input {
            width: 50px;
            padding: 5px;
        }

        .product-order button {
            padding: 5px 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .product-order button:hover {
            background-color: #45a049;
        }

        .my-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            margin-top: 10px;
        }

        .my-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="grid">
            <div class="product-image">
                <img src="IMG/Obat2.jpeg" alt="Gambar Produk">
            </div>
            <div class="product-details">
                <h2 class="product-name">Nama Produk</h2>
                <div class="product-price">Harga: Rp100.000</div>
                <div class="product-description">
                    <p>Penjelasan Produk</p>
                </div>
                <div class="product-rating">
                    <h3>Rating:</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="product-shipping">
                    <h3>Pilihan Pengiriman:</h3>
                    <ul>
                        <li>Pengiriman Reguler - Rp10.000</li>
                        <li>Pengiriman Express - Rp20.000</li>
                    </ul>
                </div>
                <div class="product-warranty">
                    <h3>Info Garansi:</h3>
                    <p>Garansi 1 tahun</p>
                </div>
                <div class="product-order">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" id="jumlah" min="1" value="1">
                    <button id="pesan">Pesan</button>
                </div>
            </div>
        </div>
        <button class="my-button"><a href="Produk.php">Kembali</a></button>
    </div>

</body>
</html>
