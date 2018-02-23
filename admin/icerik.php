<?php
if(@$_POST["btn"]=="Ekle")
{
	$baslik=$_POST["baslik"];
	$kategori=$_POST["kategori"];
	$icerik=$_POST["icerik"];
	$tarih=date("d-m-y");
	$saat=date("h:i:s");
	$sqlekle=mysql_query("insert into icerik(baslik,kategori,icerik,tarih,saat)values('$baslik','$kategori','$icerik','$tarih','$saat')");
	if(
	$sqlekle) 
	{
		echo "Kayıt Eklendi";
	}
	else
	{
	 	echo "Kayıt Eklenmedi";
	}
		
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<form method="post" action="">

<table>
<tr>
	<td>Başlık</td>
	<td><input type="text" name="baslik"></td>
</tr>
<tr>
	<td>Kategori</td>
	<td><select name="kategori"><option>Fizik</option><option>Kimya</option><option>Biyoloji</option><option>Matematik</option><option>Geometri</option></select></td>
</tr>
<tr>
    <td>İçerik</td>
	<td><textarea rows="20" cols="50" name="icerik"></textarea></td>
</tr>
<tr>
<td colspan=""><input type="submit" name="btn" value="Ekle"</td>
</tr>

</table>

</form>

</body>
</html>