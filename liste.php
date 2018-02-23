<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>
<body>
<h1>Üyeler</h1>
<?php
	include "ayar.php";
	$sql=mysql_query("select * from uye");
	
	echo "<div id='main'>";
	while($kayit=mysql_fetch_array($sql))
	{
	echo "<div id='listekutu'>";
	echo "<br>Id:".$kayit["ID"];
	echo "<br>Ad:".$kayit["ad"];
	echo "<br>Soyad:".$kayit["soyad"];
	echo "<br>Şifre:".$kayit["sifre"];
	echo "<br>Doğum Tarihi:".$kayit["dogtarih"];
	echo "<br>Cinsiyet:".$kayit["cinsiyet"];
	echo "<br>Öğretim Durumu:".$kayit["ogretim"];
	echo "<br>Kayıt Tarihi:".$kayit["kayit_tarih"];
	echo "<hr>";
	echo "</div>";
	}
	echo "</div>";
?>
</body>
</html>