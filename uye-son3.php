<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>
<body>
<h1>Son Kaydolan 3 Üye</h1>
<?php
	include "ayar.php";
	$sql=mysql_query("select * from uye order by id DESC limit 0,3");

	echo "<table id='tablo'>";
	echo "<tr>";
	echo "<tr><td>Id</td><td>Ad</td><td>Soyad</td><td>Şifre</td><td>Doğum Tarihi</td><td>Cinsiyet</td><td>Öğrenim Durumu</td><td>Kayıt Tarihi</td></tr>";
	
	while($kayit=mysql_fetch_array($sql))
	{
	echo "<tr>";
	echo "<td>".$kayit["ID"]."</td>";
	echo "<td>".$kayit["ad"]."</td>";
	echo "<td>".$kayit["soyad"]."</td>";
	echo "<td>".$kayit["sifre"]."</td>";
	echo "<td>".$kayit["dogtarih"]."</td>";
	echo "<td>".$kayit["cinsiyet"]."</td>";
	echo "<td>".$kayit["ogretim"]."</td>";
	echo "<td>".$kayit["kayit_tarih"]."</td>";
	echo "</tr>";
	}
	echo "</table>";

	
?>
</body>
</html>