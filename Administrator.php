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

  <div class="content">
    <div class="search-box">
      <input type="text" placeholder="Cari...">
      <button onclick="search()">Search</button>
    </div>

    <div id="dynamic-content">
      <div class="box-container">
        <div class="box">
          <h2>Pemasukan Bulanan</h2>
          <div class="progress-bar">
            <div class="progress" style="width: 75%;"></div>
          </div>
          <p>Konten Pemasukan Bulanan...</p>
        </div>
        <div class="box">
          <h2>Pekerjaan</h2>
          <div class="progress-bar">
            <div class="progress" style="width: 50%;"></div>
          </div>
          <p>Konten Pekerjaan...</p>
        </div>
        <div class="box">
          <h2>Pesanan Terjeda</h2>
          <div class="progress-bar">
            <div class="progress" style="width: 20%;"></div>
          </div>
          <p>Konten Pesanan Terjeda...</p>
        </div>
      </div>
    </div>

    <div class="info-bar">
      Informasi Bar
    </div>
  </div>

  <script>
    // JavaScript untuk mengganti konten dinamis
    function changeContent(menu) {
      var dynamicContent = document.getElementById("dynamic-content");
      
      if (menu === "dashboard") {
        dynamicContent.innerHTML = `
          <div class="box-container">
            <div class="box">
              <h2>Pemasukan Bulanan</h2>
              <div class="progress-bar">
                <div class="progress" style="width: 75%;"></div>
</div>
<p>Konten Pemasukan Bulanan...</p>
</div>
<div class="box">
<h2>Pekerjaan</h2>
<div class="progress-bar">
<div class="progress" style="width: 50%;"></div>
</div>
<p>Konten Pekerjaan...</p>
</div>
<div class="box">
<h2>Pesanan Terjeda</h2>
<div class="progress-bar">
<div class="progress" style="width: 20%;"></div>
</div>
<p>Konten Pesanan Terjeda...</p>
</div>
</div>;       } else if (menu === "data-barang") {         dynamicContent.innerHTML = "<h2>Data Barang</h2><p>Konten Data Barang...</p>";       } else if (menu === "invoice") {         dynamicContent.innerHTML = 
<h2>Invoice</h2>
<div class="progress-bar">
<div class="progress" style="width: 90%;"></div>
</div>
<p>Konten Invoice...</p>`;
}
}

// JavaScript untuk tombol pencarian
function search() {
  var query = document.querySelector('.search-box input[type="text"]').value;
  // Lakukan logika pencarian atau tindakan lainnya sesuai kebutuhan aplikasi Anda
  console.log("Melakukan pencarian dengan query: " + query);
}
</script>
</body>
</html>