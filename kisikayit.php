<?php
if($_POST)
{
	include "ayar.php";
	//veya re1uire "ayar.php";
	/*require eğer veritabanına ulaşmazsa çalışmaz*/
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$doggun=$_POST["doggun"];
	$mail=$_POST["mail"];
	$sifre=$_POST["sifre"];
	$date=$_POST["date"];
	$cinsiyet=$_POST["cinsiyet"];
	$ogdurum=$_POST["ogdurum"];
	$tarih=date("d-m-Y");//bugünün tarihi
	
	
	$sql=mysql_query("insert into kisi(ad,soyad,eposta,sifre,dogtarih,cinsiyet,ogretim,kayit_tarih)	values('$ad','$soyad','$mail','$sifre','$date','$cinsiyet','$ogdurum','$tarih')");
	if($sql)
	{
		echo "Kayıt Eklendi";
	}
	else
	{
		echo "Kayıt Eklenme Hatası";
	}
}


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="" method="post">
<table>
<tr>
	<td>Ad: </td>
	<td><input type="text" name="ad" /> </td>
</tr>
<tr>
	<td>Soyad </td>
	<td><input type="text" name="soyad" /> </td>
</tr>
<tr>
	<td>Resim: </td>
	<td> </td>
</tr>
<tr>
	<td>Branş: </td>
	<td> </td>
</tr>
<tr>
	<td>Doğum Günü: </td>
	<td><input type="date" name="doggun"> </td>
</tr>
<tr>
	<td>Doğum Yeri: </td>
	<td> </td>
</tr>
<tr>
	<td>Ölüm Günü: </td>
	<td> </td>
</tr>
<tr>
	<td>Ölüm Yeri: </td>
	<td><input type="date" name="date"> </td>
</tr>
<tr>
	<td>Giriş Paragrafı: </td>
	<td><input type="text" name="giris"> </td>
</tr>
<tr>
	<td>Çocukluk: </td>
	<td><input type="text" name="cocukluk"> </td>
</tr>
<tr>
	<td>Gençlik: </td>
	<td><input type="text" name="genclik"> </td>
</tr>
<tr>
	<td>Olmasaydı: </td>
	<td><input type="text" name="olmasaydi"> </td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="btn" value="Kaydet" /> </td>
</tr>
</table>
</form>
</body>
</html>