<meta charset="utf-8">
<?php 
include "ayar.php";

//oylama yapıldığında yapılacak işlemler
if(@$_POST["btn_oyla"]=="Oyla")
{
	$oyla=$_POST["oyla"];
	$sqloyla=mysql_query("update anket set $oyla=$oyla+1 where durum=1");
	if($sqloyla) echo "oyunuz alındı"; 
	else echo "hataa...";
}


$sqlanket=mysql_query("select * from anket where durum=1");
$satir=mysql_fetch_array($sqlanket);

?>


<div id="anketoyla">

<form action="" method="post">
<p><?php echo $satir["soru"]; ?></p>
<table>

<tr>
	<td><input type="radio" name="oyla" value="oy1"/>
	<?php echo $satir["cevap1"]; ?></td>
</tr>
<tr>
	<td><input type="radio" name="oyla" value="oy2"/>
    <?php echo $satir["cevap2"]; ?></td>
</tr>
<tr>
	<td><input type="radio" name="oyla" value="oy3"/>
    <?php echo $satir["cevap3"]; ?></td>
</tr>
<tr>
	<td><input type="radio" name="oyla" value="oy4"/>
    <?php echo $satir["cevap4"]; ?></td>
</tr>
<tr>
	<td><input type="submit" name="btn_oyla" value="Oyla">
    <a href="anketsonuc.php">Sonuçları Göster</a>
    </td>
</tr>
</table>

</form>

</div>