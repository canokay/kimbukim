<?php
	include "../ayar.php";
	$sql=mysql_query("select * from uye");
	while($satir=mysql_fetch_array($sql))
	{
		
?>
<div id="uyelistele">
<form action="" method="post">
	<table>
    <tr>
    	<td>Kullanıcı Adı</td>
        <td><input type="text" name="kuladi" value="<?php echo $satir["kulad"];?>"/></td>
    </tr>
    <tr>
    	<td>Ad</td>
        <td><input type="text" name="ad" value="<?php echo $satir["ad"];?>"/></td>
    </tr>
    <tr>
    	<td>Soyad</td>
        <td><input type="text" name="soyad" value="<?php echo $satir["soyad"];?>"/></td>
    </tr>
    
    <tr>
    	<td><input type="submit" name="btnsil" value="Sil" /></td>
       	<td><input type="submit" name="btnduzenle" value="Düzenle" /></td></tr>
    </table>
</form>
</div>
<?php }
?>