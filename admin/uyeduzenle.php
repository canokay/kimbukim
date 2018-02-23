<?php
	include "../ayar.php";
//kayıt silme kodu başlangıcı
	if(@$_POST["btnsil"]=="Sil")
	{
		$id=$_POST["id"];
		$sqlsil=mysql_query("delete from uye where ID='$id'");
		if($sqlsil) echo "<script>alert('Kayıt Silindi')</script>"; else echo "<script>alert('Silinme Hatası')</script>";
	}
//kayıt silme kod bitişi

//kayıt düzenle kod başlangıcı
	if(@$_POST["btnduzenle"]=="Düzenle")
	{
		$id=$_POST["id"];
		$kulad=$_POST["kuladi"];
		$ad=$_POST["ad"];
		$soyad=$_POST["soyad"];
		$sifre=$_POST["sifre"];
		$sqlduzenle=mysql_query("update uye 
		set kulad='$kulad',ad='$ad', soyad='$soyad', sifre='$sifre' where ID='$id'");
		if($sqlduzenle) echo "<script>alert('Kayıt Değiştirildi.')</script>"; else echo "<script>alert('Düzenleme Hatası')</script>";
	}



//kayıt düzenle kod bitişi

	$sql=mysql_query("select * from uye");
	while($satir=mysql_fetch_array($sql))
	{
		
?>
<div id="uyelistele">
<form action="" method="post">
	<table>
    <tr>
        <td colspan="2"><input type="hidden" name="id" value="<?php echo $satir["ID"];?>"/></td>
    </tr>
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
    	<td>Şifre</td>
        <td><input type="text" name="soyad" value="<?php echo $satir["sifre"];?>"/></td>
    </tr>
    
    <tr>
    	<td><input type="submit" name="btnsil" value="Sil" /></td>
       	<td><input type="submit" name="btnduzenle" value="Düzenle" /></td></tr>
    </table>
</form>
</div>
<?php }
?>