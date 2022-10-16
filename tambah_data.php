<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Silahkan Masukkan Data Tamu</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
      body{
        background-image: url(../images/download.JPG);
        background-size:cover;
        background-attachment: fixed;
      }
      p{
        color:white;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;   
    }
    .left{
    float: left;
    padding-left: 455px;
    display: block;
    
    }
    
		body {
			background-image: url('gambar/bg7.JPG');
			background-size: cover;
		}
	
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Data</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Lengkap</label>
          <input type="text" name="nama_lengkap" autofocus="" required="" />
        </div>
        <div>
          <label>Nomor Telepon</label>
         <input type="text" name="nomor_hp" required="" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" />
        </div>
        <div>
          <label>Pesan</label>
         <input type="text" name="pesan" />
        </div>
        <div>
          <label>Foto</label>
         <input type="file" name="foto" required="" />
        </div>
        <div>
         <button type="submit">Simpan Data</button>
        </div>
        </section>
      </form>

      <ul class="left">
          <a href="landing-page.php">Kembali</a>
      </ul>
  </body>
</html>