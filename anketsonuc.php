<meta charset="utf-8">
<?php 
include "ayar.php";
$sql=mysql_query("select * from anket where durum=1");
$satir=mysql_fetch_array($sql);

	$toplamoy=$satir["oy1"]+$satir["oy2"]+$satir["oy3"]+$satir["oy4"];

	@$oran1=round(($satir["oy1"]*100/$toplamoy),0);
	@$oran2=round(($satir["oy2"]*100/$toplamoy),0);
	@$oran3=round(($satir["oy3"]*100/$toplamoy),0);
	@$oran4=round(($satir["oy4"]*100/$toplamoy),0);
?>


<div id="anket-liste">

<table>
<p><?php echo $satir["soru"];?></p>	
<tr>
	<td><progress max="100" value="<?php echo $oran1; ?>"></progress></td>
	<td><?php echo $satir["cevap1"];?>-<?php echo $satir["oy1"]; ?></td>
</tr>
<tr>
	<td><progress max="100" value="<?php echo $oran2; ?>" ></progress></td>
	<td><?php echo $satir["cevap2"];?>-<?php echo $satir["oy2"]; ?></td>
</tr>
<tr>
	<td><progress max="100" value="<?php echo $oran3; ?>"></progress></td>
	<td><?php echo $satir["cevap3"];?>-<?php echo $satir["oy3"]; ?></td>
</tr>
<tr>
	<td><progress max="100" value="<?php echo $oran4; ?>"></progress></td>
	<td><?php echo $satir["cevap4"];?>-<?php echo $satir["oy4"]; ?></td>
</tr>
</table>

</div>