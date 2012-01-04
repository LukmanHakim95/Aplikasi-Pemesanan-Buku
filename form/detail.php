<?php
	include("../configuration/configuration.php");
	$id		=	$_GET['id'];
	$que	=	mysql_query("SELECT * FROM Buku WHERE id='$id'");	
	$arr	=	mysql_fetch_array($que);
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/detail.css" />
		<title>
			Detail Buku
		</title>
	</head>
	<body>
		<table align="center" cellspacing="0" cellpadding="3" border="0">
			<tr class="top">
				<th colspan="2" class="title" align="center">
					Detail Buku
				</th>
			</tr>
			<tr class="mid">
				<td class="Right">
					id
				</td>
				<td class="Left">
					<?=$arr['id']?>
				</td>
			</tr>
			<tr class="mid">
				<td class="Right">
					Judul Buku
				</td>
				<td class="Left">
					<?=$arr['JudulBuku']?>
				</td>
			</tr>
			<tr class="mid">	
				<td class="Right">
					Jumlah
				</td>
				<td class="Left">
					<?=$arr['Jumlah']?>
				</td>
			</tr>
			<tr class="mid">
				<td class="Right">
					Pengarang
				</td>
				<td class="Left">
					<?=$arr['Pengarang']?>
				</td>
			</tr>
			<tr class="mid">
				<td class="Right">
					Penerbit
				</td>
				<td class="Left">
					<?=$arr['Penerbit']?>
				</td>
			</tr>
			<tr class="mid">
				<td class="Right">
					Kota Terbit
				</td>
				<td class="Left">
					<?=$arr['KotaTerbit']?>
				</td>
			</tr>
			<tr class="mid">
				<td class="Right">
					Tahun Terbit
				</td>
				<td class="Left">
					<?=$arr['TahunTerbit']?>
				</td>
			</tr>
			<tr class="mid">
				<td class="Right">
					Harga
				</td>
				<td class="Left">
					Rp.<?=$arr['Harga']?>,00-
				</td>
			</tr>
			<tr class="mid">
				<td class="Right">
					Deskripsi
				</td>
				<td class="Left">
					<?=$arr['Deskripsi']?>
				</td>
			</tr>
			<tr class="mid">
				<td class="Right">
					Sampul
				</td>
				<td class="Left">
					<img src="../images/<?=$arr['id']?>" />
				</td>
			</tr>
			<tr class="bottom"> 
				<td colspan="2" class="bottom" align="center">
					<a href="../index.php">
						<img src="../images/icon-back.png" title="Back" />
					</a>
				</td>
			</tr>
		</table>
	</body>
</html>
