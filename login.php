<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
body{
	background-image: url('gambar/bg14.JPG');
	background-size: cover;
	font-family: 'Poppins', sans-serif;;
}

h1{
	text-align: center;
	/*ketebalan font*/
    font-weight: 300;
    color: #006666;
}

.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
    text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}

label{
    font-size: 11pt;
    color:#006666;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #f1556a;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}


    </style>
</head>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<h1>Daftar Kehadiran Tamu</h1>
	<!-- cek pesan notifikasi -->
    <div class="kotak_login">
        <p class="tulisan_login"><b>Silahkan login</b></p>

	<form method="post" action="cek_login.php">
		<label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Masukkan username"></td>

        <label>Password</label>
		<input type="password" name="password" class="form_login" placeholder="Masukkan password"></td>
		
		<input type="submit" class="tombol_login" value="LOGIN"></td>
                    
        <br/>
        <br/>
        
    </form>
    
    
</body>
</html>