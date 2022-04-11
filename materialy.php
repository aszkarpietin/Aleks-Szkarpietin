<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Aleks Szkarpietin - Materiały</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table border frame="void" rules="cols" bgcolor="#1a2a36" width="100%" height="50" cellspacing="10">
<tr valign="middle" align="center">
	<td width="20%"><a href="index.html" class="menu">Strona Główna</a></td>
	<td width="20%"><a href="korepetycje.html" class="menu">Korepetycje</a></td>
	<td width="20%"><a href="materialy.php" class="menu">Materiały</a></td>
	<td width="20%"><a href="cv.html" class="menu">CV</a></td>
	<td width="20%"><a href="kontakt.html" class="menu">Kontakt</a></td>
</tr>
</table>
<?php if(empty($_SESSION['user'])) : ?>
	<p><center><form action="login.php" method="post">
	<input type="text" name="login" placeholder="Nazwa użytkownika" size="20" /><br />
	<input type="password" name="password" placeholder="Hasło" size="20" /><br />
	<button type="submit">Zaloguj</button>
	</form></center></p>
<?php else : ?>
	<p><h1>Witaj, <?=$_SESSION['user']?> <a href="logout.php">(Wyloguj)</a></h1>
	<h2>Materiały dla Ciebie:</h2>
	<ul>
	<li><a href="Tablica wzorow.pdf" target="_blank">Tablica maturalna wzorów matematycznych<a/></li>
	<li><a href="" target="_blank">Logarytmy - dodatkowe wzory</a></li>
	<li><a href="" target="_blank">Pochodne - dodatkowe wzory</a></li>
	</ul>
	</p>
<?php endif; ?>
</body>
</html>