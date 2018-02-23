<?php
if($_POST)
{
	include "ayar.php";
	//veya re1uire "ayar.php";
	/*require eğer veritabanına ulaşmazsa çalışmaz*/
	$mail=$_POST["mail"];
	$konu=$_POST["konu"];
	$mail=$_POST["mail"];
	$konubaslik=$_POST["konubaslik"];
	$mesaj=$_POST["mesaj"];
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
    	<td>E Posta:</td>
        <td><input type="text" name="mail"></td>
    </tr>
	<tr>
    	<td>Konu:</td>
        <td><select name="konu">
        		<option>İletişim</option>
                <option>Kişi İletişim</option>
            </select>
        </td>
    </tr>
	<tr>
    	<td>Konu Başlık:</td>
        <td><input type="text" name="konubaslik"></td>
    </tr>
	<tr>
    	<td>Mesaj:</td>
        <td><input type="text" name="mesaj"></td>
    </tr>
	<tr>
    	<td></td>
        <td><input type="submit" value="Gönder"></td>
    </tr>
</table>
</form>

</body>
</html>