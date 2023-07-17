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
	
    .logo {
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }
	table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

thead {
  background-color: #247719;
  color: #fff;
}

tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

tbody tr:hover {
  background-color: #cce5ff;
}

  </style>

  <script>
    function changeContent(contentId) {
      var allContent = document.getElementsByClassName("content");
      for (var i = 0; i < allContent.length; i++) {
        allContent[i].style.display = "none";
      }
      document.getElementById(contentId).style.display = "block";

      if (contentId === 'invoice') {
        // Ambil data invoice dari sumber data (misalnya API)

        // Contoh data invoice dalam bentuk array
        var invoices = [
          { invoiceNo: 'INV001', customerName: 'John Doe', date: '2023-07-01', total: 500 },
          { invoiceNo: 'INV002', customerName: 'Jane Smith', date: '2023-07-02', total: 800 },
          { invoiceNo: 'INV003', customerName: 'Mike Johnson', date: '2023-07-03', total: 700 }
        ];

        var invoiceTable = document.getElementById("invoice-data");
        invoiceTable.innerHTML = ""; // Hapus konten sebelumnya

        for (var i = 0; i < invoices.length; i++) {
          var row = invoiceTable.insertRow(i);
          var cell1 = row.insertCell(0);
          var cell2 = row.insertCell(1);
          var cell3 = row.insertCell(2);
          var cell4 = row.insertCell(3);
          var cell5 = row.insertCell(4);

          cell1.innerHTML = invoices[i].invoiceNo;
          cell2.innerHTML = invoices[i].customerName;
          cell3.innerHTML = invoices[i].date;
          cell4.innerHTML = invoices[i].total;

          var viewButton = document.createElement("button");
          viewButton.innerText = "View";
          (function(index) {
            viewButton.addEventListener("click", function() {
              // Handle view action here
              var invoiceNo = invoices[index].invoiceNo;
              // Perform any logic or redirect to a specific page to view the invoice details
              alert("View Invoice: " + invoiceNo); // Example: Displaying an alert with invoice number
            });
          })(i);
          cell5.appendChild(viewButton);
        }
      }
    }
  </script>
</head>
<body>
  <div class="sidebar">
    <img src="IMG/Logo1.png" alt="Logo" class="logo">
    <ul>
      <li><a href="Administrator.php" style="color:white;">Dashboard</a></li>
      <li><a href="DataBarang.php" style="color:white;">Data Barang</li></a>
      <li><a href="Invoice.php" style="color:white;">Invoice</li><a/>
    </ul>
  </div>

  <div id="invoice" class="content">
    <h2>Invoice Penjualan Obat Herbal</h2>
    <div id="invoice-content" class="invoice-content">
      <!-- Konten Invoice Penjualan Obat Herbal -->
      <table>
        <thead>
          <tr>
            <th>No. Invoice</th>
            <th>Nama Customer</th>
            <th>Tanggal</th>
            <th>Total Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="invoice-data">
          <!-- Data invoice akan ditambahkan menggunakan JavaScript -->
        </tbody>
      </table>
    </div>
  </div>

<script>
// Ambil data invoice dari sumber data (misalnya API)
// Contoh data invoice dalam bentuk array
var invoices = [
  { invoiceNo: 'INV001', customerName: 'John Doe', date: '2023-07-01', total: 500 },
  { invoiceNo: 'INV002', customerName: 'Jane Smith', date: '2023-07-02', total: 800 },
  { invoiceNo: 'INV003', customerName: 'Mike Johnson', date: '2023-07-03', total: 700 }
];

var invoiceTable = document.getElementById("invoice-data");
invoiceTable.innerHTML = ""; // Hapus konten sebelumnya

for (var i = 0; i < invoices.length; i++) {
  var row = invoiceTable.insertRow(i);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);

  cell1.innerHTML = invoices[i].invoiceNo;
  cell2.innerHTML = invoices[i].customerName;
  cell3.innerHTML = invoices[i].date;
  cell4.innerHTML = invoices[i].total;

  var viewButton = document.createElement("button");
  viewButton.innerText = "View";
  (function(index) {
    viewButton.addEventListener("click", function() {
      // Handle view action here
      var invoiceNo = invoices[index].invoiceNo;
      // Perform any logic or redirect to a specific page to view the invoice details
      alert("View Invoice: " + invoiceNo); // Example: Displaying an alert with invoice number
    });
  })(i);
  cell5.appendChild(viewButton);
}
</script>
</body>
</html>
