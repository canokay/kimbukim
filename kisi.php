<?php
	include "ayar.php";
	$sqlicerik=mysql_query("select * from icerik where durum=1");
	while($satir=mysql_fetch_array($sqlicerik))
	{
?>
<div id="icerikliste">		
<h1><?php echo $satir["baslik"];?></h1>
<p><?php echo substr($satir["icerik"],0,20);?></p>
<a href="oku.php?id=<?php echo $satir["id"];?>">Devamı</a>

</div>
<?php
}
?>