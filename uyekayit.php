<?php
if($_POST)
{
	include "ayar.php";
	//veya re1uire "ayar.php";
	/*require eğer veritabanına ulaşmazsa çalışmaz*/
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$mail=$_POST["mail"];
	$sifre=$_POST["sifre"];
	$date=$_POST["date"];
	$cinsiyet=$_POST["cinsiyet"];
	$ogdurum=$_POST["ogdurum"];
	$tarih=date("d-m-Y");//bugünün tarihi
	
	
	$sql=mysql_query("insert into uye(ad,soyad,eposta,sifre,dogtarih,cinsiyet,ogretim,kayit_tarih)	values('$ad','$soyad','$mail','$sifre','$date','$cinsiyet','$ogdurum','$tarih')");
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
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div id="kayit">
	<form action="" method="post">
    	<table>
        	<tr>
            	<td>Adınız:</td>
                <td><input type="text" name="ad" /></td>
            </tr>
        	<tr>
            	<td>Soyadınız:</td>
                <td><input type="text" name="soyad" /></td>
            </tr>
        	<tr>
            	<td>E-Posta Adresiniz:</td>
                <td><input type="text" name="mail" /></td>
            </tr>
        	<tr>
            	<td>Şifreniz:</td>
                <td><input type="password" name="sifre" /></td>
            </tr>
        	<tr>
            	<td>Doğum Tarihi:</td>
                <td>
                    <input type="date" name="date">
                </td>
            </tr>
            <tr>
            	<td>Eğitim Durumu:</td>
                <td><select name="ogdurum">
                		<option>İlkokul</option>
                        <option>Lise</option>
                        <option>Lisans</option>
                        <option>Doktora</option>
                    </select>
                </td>
            </tr>
        	<tr>
            	<td>Cinsiyetiniz:</td>
                <td>Erkek <input type="radio" name="cinsiyet" value="erkek">
 Kadın <input type="radio" name="cinsiyet" value="kadin"></td>
            </tr>
        	<tr>
            	<td></td>
                <td><input type="submit" name="btn" value="Kaydet" /></td>
            </tr>	
		</table>
    </form>
</div>
</body>
</html>