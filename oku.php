<?php
	include "ayar.php";
	$id=$_GET["id"];
	$sqloku=mysql_query("select * from icerik where id=$id");
	$satir=mysql_fetch_array($sqloku);
?>
<div id="haberoku">
<h1><?php echo $satir["baslik"];?></h1>
<p><?php echo $satir["icerik"];?></p>

<p>
Kategori: <?php echo $satir["kategori"];?><br/>
Eklenme Tarih ve Saati:
<?php echo $satir["tarih"]. "" .echo $satir["saat"];?>
</p>