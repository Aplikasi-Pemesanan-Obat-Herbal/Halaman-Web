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

    <!-- Konten Tabel Barang -->
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Keterangan</th>
          <th>Harga</th>
          <th>Stock</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <!-- Baris data tabel barang -->
        <tr>
          <td>1</td>
          <td>Barang 1</td>
          <td>Keterangan Barang 1</td>
          <td>100000</td>
          <td>10</td>
          <td>
            <button onclick="hapusBarang(1)">Hapus</button>
            <button onclick="editBarang(1)">Edit</button>
            <button onclick="tambahBarang()">Tambah</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Barang 2</td>
          <td>Keterangan Barang 2</td>
          <td>200000</td>
          <td>5</td>
          <td>
            <button onclick="hapusBarang(2)">Hapus</button>
            <button onclick="editBarang(2)">Edit</button>
            <button onclick="tambahBarang()">Tambah</button>
          </td>
        </tr>
        <!-- tambahkan baris data lainnya sesuai kebutuhan -->
      </tbody>
    </table>
    <!-- Akhir Konten Tabel Barang -->
  </div>

  <script>
    function hapusBarang(id) {
      // Hapus baris dengan id tertentu dari tabel
      var row = document.getElementById(id);
      row.parentNode.removeChild(row);
    }

    function editBarang(id) {
      // Perintah untuk mengedit barang dengan id tertentu
      // Gantikan dengan logika atau fungsi yang sesuai dengan kebutuhan Anda
      console.log("Edit barang dengan ID: " + id);
    }

    function tambahBarang() {
      // Perintah untuk menambahkan barang baru
      // Gantikan dengan logika atau fungsi yang sesuai dengan kebutuhan Anda
      console.log("Tambah barang baru");
    }

    function search() {
      // Logika untuk melakukan pencarian
      var input = document.querySelector('.search-box input[type="text"]');
      var filter = input.value.toUpperCase();
      var table = document.querySelector('table');
      var rows = table.getElementsByTagName('tr');

      for (var i = 0; i < rows.length; i++) {
        var td = rows[i].getElementsByTagName('td')[1]; // Kolom Nama Barang

        if (td) {
          var txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            rows[i].style.display = '';
          } else {
            rows[i].style.display = 'none';
          }
        }
      }
    }

    function changeContent(content) {
      // Logika untuk mengganti konten pada halaman
      // Misalnya, menampilkan halaman dashboard atau data barang
      // Gantikan dengan logika atau fungsi yang sesuai dengan kebutuhan Anda
      console.log("Ganti konten menjadi: " + content);
    }
  </script>
</body>
</html>
