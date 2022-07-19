<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Akhir</title>
	<style>
	*{
		box-sizing: border-box;
	}

	body{
		font-family: arial;
		padding: 10px;
		background: lightblue;
	}

	/* Judul Web Site */
	.header{
		padding: 30px;
		text-align: center;
		background: whitesmoke;
	}

	.header1{
		font-size: 50px;
	}

	/* Style menu di bagian atas */
	.topnav{
		overflow: hidden;
		background-color: #333;
	}

	/* Style link dalam menu */
	.topnav a{
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	/* ubah warna saat kursor di atasnya */
	.topnav a:hover{
		background-color: #ddd;
		color: black;
	}

	
	/* Kolom kiri */
	.leftcolumn{
		float: left;
		width: 60%;
	}

	/* Kolom kanan */
	.rightcolumn{
		float: left;
		width: 40%;
		background-color: lightblue;
		padding-left: 20px;
	}

	/* Gambar palsu */
	.fakeimg{
		background-color: #f1f1f1;
		width: 100%;
		padding: 20px;
	}

	/* Tambahkan efek card pada artikel */
	.card{
		background-color: white;
		padding: 20px;
		margin-top: 20px;
	}

	/* Bersihkan sisa float */
	.row:after{
		content: "";
		display: table;
		clear: both;
	}

	/* Footer */
	.footer{
		padding: 20px;
		text-align: center;
		background-color: #ddd;
		margin-top: 25px;
	}

	/* Tata letak resposif - jika lebar browser kurang dari 800px, maka dua kolom tersebut berubah menjadi bertumpuk */
	@media screen and (max-width: 800px){
		.leftcolumn, .rightcolumn{
			width: 100%;
			padding: 0;
		}
	}

	/* Tata letak resposif - jika lebar browser kurang dari 400px, maka link akan bertumpuk */
	@media screen and (max-width: 400px){
		.topnav a{
			float: none;
			width: 100%;
		}
	}
</style>
</head>
<body>

<div class="header">
	<h1>Selamat Datang</h1>
</div>

<div class="topnav">
		<a href="kalkulator.html">Kalkulator</a>
		<a href="simpan.php">Isi Form</a>
		<a href="kalender.php">Kalender</a>
</div>


<div class="row">
	
	<div class="leftcolumn">
		<!-- Artikel ke 1 -->
		<div class="card">
			<?php 
				include("simpan.php");
			?>
		</div>
		<!-- Artikel ke 2 -->
		<div class="card">
				<?php 
					include("kalender.php");
					
				?>		
		</div>
	</div>

	<div class="rightcolumn">
		<div class="card">
			<?php 
				include("kalkulator.html");
			?>
		<br><br>	
		</div>
		<div class="card">
			
			<div class="fakeimg" style="height: 170px ;">
				<table>
					<tr>
						<td>Nama</td>
						<td> : </td>
						<td>Ferdinan Susanto</td>
					</tr>
					<tr>
						<td>NIM</td>
						<td> : </td>
						<td>2100018198</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td> : </td>
						<td>D</td>
					</tr>
					<tr>
						<td>Hobi</td>
						<td> : </td>
						<td>Nyanyi, Futsal, Basket, Makan, Komik, Anime</td>
					</tr>
				</table>
			</div>
					
		</div>



<div class="footer">
	<h3>Terima Kasih Telah Berkunjung</h3>
</div>
</body>
</html>