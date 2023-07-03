<!DOCTYPE html>
<html>
<head>
  <title>Menu Administrator</title>
  <style>
    /* CSS untuk styling */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .sidebar {
      width: 200px;
      height: 100vh;
      background: #008000;
      color: #fff;
      float: left;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .sidebar ul li {
      padding: 10px;
      cursor: pointer;
    }

    .content {
      margin-left: 200px;
      padding: 20px;
    }

    .search-box {
      margin-top: 20px;
      display: flex;
      align-items: center;
    }

    .search-box input[type="text"] {
      width: 200px;
      padding: 8px;
      font-size: 16px;
    }

    .search-box button {
      padding: 8px 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    .info-bar {
      background: #f1f1f1;
      padding: 10px;
      margin-top: 20px;
      text-align: center;
    }

    .logo {
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }

    .admin-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .box-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .box {
      width: calc(33.33% - 10px);
      background-color: #f1f1f1;
      padding: 20px;
      border-radius: 8px;
    }

    .progress-bar {
      width: 100%;
      height: 18px;
      background-color: #ddd;
      border-radius: 8px;
      overflow: hidden;
    }

    .progress {
      height: 100%;
      background-color: #4CAF50;
    }

    /* CSS untuk warna tabel konten */
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
      background-color: #f1f1f1;
    }

    tr:hover {
      background-color: #e2f2e2;
    }

    /* CSS untuk form edit data barang */
    .form-container {
      width: 800px;
      margin: 20px auto;
      padding: 80px;
      background-color: #00000;
      border-radius: 10;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="number"] {
      width: 100%;
      padding: 8px;
      font-size: 16px;
    }

    .form-group button {
      padding: 8px 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
	.form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
  }

  .form-group input[type="text"],
  .form-group input[type="number"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 6px;
    border: 1px solid #ccc;
  }

  button[type="submit"] {
    padding: 10px 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: #45a049;
  }
  </style>
</head>
<body>
  <div class="sidebar">
    <img src="IMG/Logo1.png" alt="Logo" class="logo">
    <ul>
      <li onclick="changeContent('dashboard')">Dashboard</li>
      <li onclick="changeContent('data-barang')">Data Barang</li>
      <li onclick="changeContent('invoice')">Invoice</li>
    </ul>
  </div>

  <div id="edit-form-container" class="form-container">
  <h2>Edit Data Barang</h2>
  <form id="edit-form" method="post" action="update_barang.php">
    <div class="form-group">
      <label for="edit-nama-barang">Nama Barang:</label>
      <input type="text" id="edit-nama-barang" name="nama_barang" required>
    </div>
    <div class="form-group">
      <label for="edit-keterangan">Keterangan:</label>
      <input type="text" id="edit-keterangan" name="keterangan" required>
    </div>
    <div class="form-group">
      <label for="edit-harga">Harga:</label>
      <input type="number" id="edit-harga" name="harga" required>
    </div>
    <div class="form-group">
      <label for="edit-stock">Stock:</label>
      <input type="number" id="edit-stock" name="stock" required>
    </div>
    <button type="submit">Simpan</button>
  </form>
</div>


<script>
</script>
</body>
</html>