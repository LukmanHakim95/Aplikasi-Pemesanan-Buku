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
					<h3>
						Aplikasi Pemesanan Buku
					</h3>
					<table align="center" cellpadding="3" cellspacing="0" border="1">
						<tr class="top">
							<th class="1" width="40px">
								No.
							</th>
							<th class="2" width="220px">
								Judul Buku
							</th>
							<th class="3" width="70px">
								Jumlah
							</th>
							<th class="4" width="120px">
								Harga
							</th>
							<th class="5" width="100px">
								Action
							</th>
						</tr>
						<?php
							$que	=	mysql_query("SELECT * FROM Buku");
							
							while($arr	=	mysql_fetch_array($que)) {
						?>
						<tr class="mid">
							<td class="1">
								<?=$arr["id"]?>
							</td>
							<td class="2">
								<?=$arr["JudulBuku"]?>
							</td>
							<td class="3">
								<?=$arr["Jumlah"]?>
							</td>
							<td class="4">
								Rp. <?=$arr["Harga"]?>,00-	
							</td class="5">
							<td align="center">
								<a href="#">
									Detail
								</a>
									|
								<a href="#">
									Beli
								</a>
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
