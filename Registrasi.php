<!DOCTYPE html>
<html>
  <head>
    <title>Registrasi</title>
    <style>
      body {
        background-color: #a0a0a0;
      }
      
      form {
        background-color: 	#666666;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        max-width: 500px;
        margin: 50px auto;
      }
      
      label {
        display: block;
        margin-bottom: 8px;
      }
      
      input[type="text"],
      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }
      
      button {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
      }
      
      button:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <form>
      <center>
	  <h2 style="color: #FFF";> Registrasi </h2>
	  </center>
      <input type="text" id="nama_lengkap" name="nama_lengkap" required placeholder="Nama Lengkap" >
      
      <input type="email" id="email_username" name="email_username" required placeholder="Email/Username">

      <input type="password" id="password" name="password" required placeholder="Password">
 
      <input type="password" id="konfirmasi_password" name="konfirmasi_password" required placeholder="Konfirmasi Password">
      
      <button type="submit">Daftar</button>
	  <br>
	  <br>
      <button type="button">Masuk</button>
    </form>
  </body>
</html>
