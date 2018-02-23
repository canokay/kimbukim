<meta charset="utf-8">

<style>

#anket-liste{
	width:45%; height:auto; float:left; margin:20px 10px; padding:5px; background:#c3c3c3;   
}

#anket-liste table{
	margin:auto;
}

</style>

<?php 
//anket silme kodları başla
if(!empty($_GET["silinecek"]))
{
	$silinecek=$_GET["silinecek"];
	$sqlsil=mysql_query("delete from anket where id='$silinecek'");
	
	if($sqlsil)
	echo "<script>alert('Kayıt Silindi');</script>";
	else
	echo "<script>alert('Kayıt Silinmedi');</script>";
}
//anket silme kodları bitir

if(!empty($_GET["aktifyap"]))
{
	$aktifyap=$_GET["aktifyap"];
	$sqlaktif=mysql_query("update anket set durum=0 where  durum=1");
	@$sqlaktif2=mysql_query("update anket set durum=1 where id='$aktifyap'");
	if($sqlaktif2)
	echo "<script>alert('Aktif Oldu');</script>";
	
	else
	echo "<script>alert('Hata...');</script>";
}
?>




<?php 

$sql=mysql_query("select * from anket");
while($satir=mysql_fetch_array($sql))
{
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

<p><a href="admin.php?secim=anketduzenle&silinecek=<?php echo $satir["id"];?>">Sil<a></p>

<p><a href="admin.php?secim=anketduzenle&aktifyap=<?php echo $satir["id"];?>">Aktif Yap<a></p>


</div>

<?php 
}
?>

