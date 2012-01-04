<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/design.css" />
		<title>
			Sign In
		</title>
		<body>
			<form method="post" action="../system/SignIn.php">
				<table align="center" cellpadding="0" cellspacing="0">
					<tr class="top">
						<th colspan="2" class="top">
							Sign In
						</th>
					</tr>
					<tr class="mid">
						<td colspan="2" class="mid">
							<input type="text" placeholder="Username" name="username" class="input" />
						</td>
					</tr>
					<tr class="mid">
						<td colspan="2" class="mid">
							<input type="password" placeholder="Password" name="password" class="input" />
						</td>
					</tr>
					<tr class="bottom">
						<td class="left">
							<a href="../index.php">
								<img src="../images/icon-back.png" />
							</a>
						</td>
						<td class="right">
							<input type="submit" value="Sign In" name="submit" class="button" />
						</td>
					</tr>
				</table>
			</form>
		</body>
	</head>
</html>
