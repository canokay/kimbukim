<style>
#liste{
	width:40%;
	height:150px;
	margin:15px;
	padding:15px;
	background:#c3c3c3;
	float:left;
	border-radius:10px;
}
#numara{
	clear:both;
	width:80%;
	height:20px;
	margin:0 auto;
	padding:10px;
}
</style>
<meta charset="utf-8">
<?php
include "../ayar.php";
$sql=mysql_query("select * from uye");
//sayfalama üst kısım başla
$kayitsayisi=mysql_num_rows($sql);
//mysql_num_rows: sqlden kaç tane sonuç sayısı
$kacar=3; //bir sayfada kaç adet kayıt sayısı
if(!empty($_GET["baslangic"]))
{ $baslangic=$_GET["baslangic"];}
else{ $baslangic=0;}
$sql=mysql_query("select * from uye limit $baslangic,$kacar");
//sayfalama üst kısmı bitir
while(@$satir=mysql_fetch_array($sql))
{
?>
<div id="liste">
	<p><?php echo $satir["kulad"];?></p>
	<p><?php echo $satir["ad"];?></p>
	<p><?php echo $satir["soyad"];?></p>
</div>

<?php
}
//sayfalama alt başla
$sayfasayisi=ceil($kayitsayisi/$kacar);
for($i=1;$i<=$sayfasayisi;$i++)
{
	$baslangic=$kacar*$i-$kacar;
	echo "<a href='admin.php?secim=uyelistele&baslangic=$baslangic'>$i</a>";	
}
echo "</div>";
//sayfalama alt bitir
?>