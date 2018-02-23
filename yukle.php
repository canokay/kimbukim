<?php
session_start();

echo '<meta charset="utf-8">'; 
if($_POST)
{
//seçien dosyanın adını almak için
$dosyaadi=$_FILES["dosya"]["name"];
echo "Dosya Adı=".$dosyaadi;

//seçilen dosyanını tipini almak için
$dosyatipi=$_FILES["dosya"]["type"];
echo "<br>Dosya Tipi=".$dosyatipi;

//seçilen dosyanın boyutunu almak için
$dosyaboyutu=$_FILES["dosya"]["size"];
echo "<br>Dosya Boyutu=".$dosyaboyutu;

//seçilen dosyanın geçici adresi
$dosyageciciadres=$_FILES["dosya"]["tmp_name"];
echo "<br>Dosya Geçici Adresi=".$dosyageciciadres;

if($dosyatipi=="image/jpeg" or $dosyatipi=="image/jpg" or $dosyatipi=="image/gif" or $dosyatipi=="image/png")
	{
		$yol="img/".$dosyaadi;
		include "ayar.php";
		move_uploaded_file($dosyageciciadres,$yol);
		$kim=$_SESSION["user"];
	$sql=mysql_query("update uye set resim='$yol' where ad='$kim'");
	header("Location:profil.php");
	}
	else{
		echo "<script>alert('Hatalı Dosya tipi')</script>";}
}
	else{
		echo "<script>alert('Hatalı Dosya tipi')</script>";
		header("refresh:1;url=giris.php");
	}
?>
