<?php
	include("configuration/configuration.php");
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>
			Aplikasi Pemesanan Buku
		</title>
	</head>
	<body>
		<table height="100%" align="center">
			<tr height="80%" width="100%">
				<td valign="top">
					<h5 align="right">
						<a href="form/login.php">
							Login
						</a>
					</h6>
					<table align="center" cellpadding="3" cellspacing="0" border="0" class="con">
						<tr class="top">
							<th width="40px" class="colLeft">
								No.
							</th>
							<th width="220px" class="col">
								Judul Buku
							</th>
							<th width="70px" class="col">
								Jumlah
							</th>
							<th width="120px" class="col">
								Harga
							</th>
							<th width="100px" class="colRight">
								Action
							</th>
						</tr>
						<?php
							$que	=	mysql_query("SELECT * FROM Buku");
							
							while($arr	=	mysql_fetch_array($que)) {
						?>
						<tr class="mid">
							<td class="rec">
								<?=$arr["id"]?>
							</td>
							<td class="rec">
								<?=$arr["JudulBuku"]?>
							</td>
							<td class="rec">
								<?=$arr["Jumlah"]?>
							</td>
							<td class="rec">
								Rp. <?=$arr["Harga"]?>,00-	
							</td class="5">
							<td align="center" class="rec">
								<?php
									echo 
									"
								<a href='form/detail.php?id=$arr[id]'>
									Detail
								</a>
									|
								<a href='form/beli.php?id=$arr[id]'>
									Beli
								</a>
								";
								?>
								<!--
									|
								<a href="#">
									Edit
								</a>
									|	
								<a href="#">
									Delete
								</a>
								-->	
							</td>
						</tr>
						<?php
						}
						?>
					</table>
				</td>
			</tr>
			<tr width="100%">
				<td>
					<hr />
						<h6>
							Test &copy;	
						</h6>
				</td>
			</tr>
		</table>
	</body>
</html>
