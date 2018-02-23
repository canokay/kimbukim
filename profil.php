<?php
 session_start();
	if(!$_SESSION)
	 {
		 echo "<script>alert('Hatalı Giriş')</script>";
		 header("refresh:1;url=giris.php");
	 }
    else{
			
	}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/user-style.css">
<link rel="stylesheet" type="text/css" href="css/input-focus.css">
</head>

<body>
<h1>Profil</h1>
	<?php
		include "ayar.php";
		$kim=$_SESSION["user"];	
		$sql=mysql_query("select * from uye where ad='$kim'");
		$kayit=mysql_fetch_array($sql);
	?>
    <form action="" method="post">
    	<table id="tablo">
        	<tr>
            	<td>Adı:</td>
                <td><input type="text" name="adi" value="<?php echo $kayit['ad'];?>"> </td>
           </tr>
        	<tr>
            	<td>Soyad:</td>
                <td><input type="text" name="adi" value="<?php echo $kayit["soyad"];?>"></td>
           </tr>
        </table>
</form>
        <div id="resim">
        <img src="<?php echo $kayit["resim"];?>" width="150px" height="125px">
        <form action="yukle.php" method="post" enctype="multipart/form-data">
        <br><input type="file" name="dosya"><br>
        <input type="submit" name="btnyukle" value="Profil Resmi Değiştir">
	</form>
    </div>
</body>
</html>