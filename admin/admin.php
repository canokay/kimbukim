<?php
	session_start();
	include "../ayar.php";
	if(!isset($_SESSION["yonetici"]))
	{
		echo "<script>('Bu sayfayı görmeye yetkiniz yok.')</script>";
		header("Refresh:0;Location:index.php");	
	}
	else
	{	
	?>

<!doctype html>
<head>
<meta charset="utf-8">
<?php switch(@$_GET["secim"])
		{
			case "biliminsaniduzenle": echo "<title>Bilim İnsanı Düzenle - kimbu.kim</title>;";break;
			case "biliminsaniekle": echo "<title>Bilim İnsanı Ekle - kimbu.kim</title>;";break;
			case "kisiduzenle": echo "<title>Kişi Düzenle kimbu.kim</title>;";break;
			case "kisiekle": echo "<title>Kişi Ekle - kimbu.kim</title>;";break;
			case "uyeduzenle": echo "<title>Üye Düzenle - kimbu.kim</title>;";break;
			case "uyeekle":echo "<title>Üye Ekle - kimbu.kim</title>;";break;
			case "uyelistele":echo "<title>Üye Listele - kimbu.kim</title>;";break;
			case "anketduzenle": echo "<title>Anket Düzenle - kimbu.kim</title>;";break;
			case "anketekle":echo "<title>Anket Ekle - kimbu.kim</title>;";break;
			case "icerik":echo "<title>İçerik Ekle - kimbu.kim</title>;";break;
			default:echo "<title>kimbu.kim Admin - kimbu.kim</title>;";
		}?>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>

<body>
<div id="content">
	<div id="ust">
    <?php
		switch(@$_GET["secim"])
		{
			case "kisiduzenle": echo "<h1>Kişi Düzenle</h1>";break;
			case "kisiekle": echo "<h1>Kişi Ekle</h1>";break;
			case "biliminsaniduzenle": echo "<h1>Bilim İnsanı Düzenle</h1>";break;
			case "biliminsaniekle": echo "<h1>Bilim İnsanı Ekle</h1>";break;
			case "uyeduzenle": echo "<h1>Üye Düzenle</h1>";break;
			case "uyeekle":echo "<h1>Üye Ekle</h1>";break;
			case "uyelistele":echo "<h1>Üye Listele</h1>";break;
			case "anketekle": echo "<h1>Anket Ekle</h1>";break;
			case "anketduzenle": echo "<h1>Anket Düzenle</h1>";break;
			case "icerik": echo "<h1>İçerik Ekle</h1>";break;
			default: echo "<h1>Admin Giriş</h1>";
			
		}
	?>
    </div>
    <div id="solmenu">
<?php include "admin-header.php"; ?></div>
<div id="icerik">
	<?php
		switch(@$_GET["secim"])
		{
			case "kisiduzenle": include "kisiduzenle.php";break;
			case "kisiekle": include "kisiekle.php";break;
			case "biliminsaniduzenle": include "biliminsaniduzenle.php";break;
			case "biliminsaniekle": include "biliminsaniekle.php";break;
			case "uyeduzenle": include "uyeduzenle.php";break;
			case "uyeekle": include "uyeekle.php";break;
			case "uyelistele": include "uyelistele.php";break;
			case "anketekle": include "anketekle.php";break;
			case "anketduzenle": include "anketduzenle.php";break;
			case "icerik": include "icerik.php";break;
			case "exit": include "exit.php";break;
			
			
			default: include"durum.php";
		}
	?>
</div>

</div>
</body>
</html>

<?php
	}
?>