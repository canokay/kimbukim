<?php session_start();
	include "ayar.php";
    $kimbu=$_SESSION["ara"];	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $kimbu;?> - Kimbukim</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/user-style.css">
<link rel="stylesheet" type="text/css" href="css/input-focus.css">
<link rel="stylesheet" type="text/css" href="css/bilim.css">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
<link rel="canonical" href="http://www.kimbu.kim/profil.php">
</head>

<body>

    <h1> <?php echo $kimbu;?> </h1>
   <?php echo $kimbu;?>
   <?php 
include "ayar.php";
$id=$_GET["id"];
$sqloku=mysql_query("select * from icerik where baslik='$kimbu'");
$satir=mysql_fetch_array($sqloku);
?>

<div id="kapayici_bilim">

<div id="sol_bilim">
	<div id="bilim_resim"></div>
</div>

<div id="sag_bilim"><br>

	<div id="bilim_isim">
<h2><?php echo $satir["baslik"];?></h2></div>
    <div id="bilim_biyografi">
<p>Kategori: <?php echo $satir["kategori"];?></p></div>
    <div id="bilim_kategori">
	<p>Hayatı ve Buluşları:<?php echo $satir["icerik"];?></p></div>
    <div id="bilim_bulusları">
	<p>Tarih:<?php echo $satir["tarih"];?></p></div>
    
</div>

</div>



   <?php include 'footer.php';?>
</body>
</html>