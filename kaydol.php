<?php
	session_start();
	if(@$_POST["btngiris"]=="Giriş")
		{
			include "ayar.php";
			$k=$_POST["girisad"];
			$s=$_POST["girisparola"];
			$sql=mysql_query("select * from uye where ad='$k' and sifre='$s'");
			//mysql_num_rows($sql) sql çekilen kayıt sayısını ver
			$adet=mysql_num_rows($sql);
			if($adet==0)
			{
				echo "<script>('Hatalı Giriş yaptınız. Lütfen tekrar deneyin.')</script>";
			}
			else{
				$_SESSION["user"]=$k;
				header("Location:profil.php");
			}
			
		}

?>

<?php
if($_POST["btn"]=="Kaydet")
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
<title>kimbu.kim Kaydol</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/user-style.css">
<link rel="stylesheet" type="text/css" href="css/input-focus.css">
</head>
<body>
<div id="kayit">
<form action="" method="post">
 		<table id="login-tablo">
        	<tr>
            	<td>Kullanıcı Adı:</td>
                <td><input type="text" name="girisad"></td>
            </tr>
            <tr>
            	<td>Şifre</td>
                <td><input type="text" name="girisparola"></td>
            </tr>
            <tr>
            	<td></td>
                <td><input type="submit" name="btngiris" value="Giriş" /></td>
            </tr>
            <tr>
            	<td></td>
                <td><a href="#">Şifremi Unuttum</a></td>
            </tr>
        </table>
    	<table id="register-tablo">
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
   
<footer>
    	<div id="footer">
        	 <ul>
    	<li><a href="index.php">Anasayfa</a></li>
        <li> <a href="#">Hakkında</a></li>
        <li> <a href="#">İletişim</a></li>
        <li> <a href="kaydol.php">Kayıt Ol</a></li>
        <li> <a href="#">Giriş Yap</a></li>
    </ul>
        </div>
    </footer>

</body>
</html>