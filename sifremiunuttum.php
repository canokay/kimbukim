<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<?php
if($_POST)
{
	include "ayar.php";
	$eposta=$_POST["eposta"];
	$sql=mysql_query("select * from uye where eposta='$eposta' ");
	$adet=mysql_num_rows($sql);
	if($adet==1)
	{
		//mail(gidecekadres,başlık,mesaj)
		$baslik="Şifre Hatırlatma";
		$kayit=mysql_fetch_array($sql);
		$sifre=$kayit["sifre"];
		$mesaj="Unuttunuz Şifreniz=$sifre";
		mail($eposta,$baslik,$mesaj);
		echo "mail gönderildi";
	}
	else
	{
		echo "Böyle bir eposta yok";
	}
}
?>

</head>

<body>

<form action="" method="post">
E-posta Adresini Giriniz
<input type="text" name="eposta">
<input type="submit" name="btn" value="Gönder">

</form>

</body>
</html>