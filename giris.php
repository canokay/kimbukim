<?php
	session_start();
	if(@$_POST["btngiris"]=="Giriş")
		{
			include "ayar.php";
			$k=$_POST["kuladi"];
			$s=$_POST["sifre"];
			$sql=mysql_query("select * from uye where kulad='$k' and sifre='$s'");
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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>kimbu.kim Giriş</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>

<body>
<h1>Giriş Yap</h1>
 <form action="" method="post">
	<table id='tablo'>
    	<tr>
        	<td>Kullanıcı Adı: </td>
            <td><input type="text" name="kuladi"></td>
        </tr>
    	<tr>
        	<td>Şifre:</td>
            <td><input type="password" name="sifre" /></td>
        </tr>
    	<tr>
        	<td></td>
            <td><a href="#">Şifremi Unuttum</a></td>
        </tr>
    	<tr>
        	<td></td>
            <td><input type="submit" name="btngiris" value="Giriş" /></td>
        </tr>
	</table>
 </form>
</body>
</html>