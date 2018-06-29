<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
		margin: auto;
	}
	.a{
		background: red;
		height: 50px;
		width: 100%;
		display: inline-block;
	}
	ul{
		list-style: none;
	}
	li{
		text-decoration: none;
		display: inline-block;
		margin-left: 10px;
	}
	.b{
		margin-top: 50px;
	}
	.er{
		width: 100px;
	}

</style>
<body>
	<div class="a">
		<ul>
			<li>
				<a href="index.php">Beranda</a>
			</li>
			<li>
				<a href="qw.php">Tambah</a>
			</li>
			<li>
				<a href="">>Hapus</a>
			</li>
			<li>
				<a href="">Edit</a>
			</li>
		</ul>
	</div>
	<?php 
	?>
	<center>
		<form>
			<div class="b">
				Nomer Buku<br>
				<input type="text" name="no"></input><br>
				Nama Buku <br>	
				<input type="text" name="nama buku"></input><br><br>
				<input type="submit" value="buat" class="er"></input>
			</div>
		</form>
	</center>
</body>
</html>