<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<?php 
if ($_POST)
{
    $soru=$_POST["soru"];
    $cevap1=$_POST["cevap1"];
    $cevap2=$_POST["cevap2"];
    $cevap3=$_POST["cevap3"];
    $cevap4=$_POST["cevap4"];
    $durum=$_POST["durum"];	
    if($durum=="on")
    {
        $durum=1;
        $sqldurum=mysql_query("update anket set durum=0 where durum=1");
    }
    else
    {
        $durum=0;
    }


    $sqldanketekle=mysql_query("insert into anket (soru,cevap1,cevap2,cevap3,cevap4,durum) values ('$soru','$cevap1','$cevap2','$cevap3','$cevap4','$durum')");
    if($sqldanketekle)
        echo "Anket Eklendi"; 
    else echo "Anket Eklenemedi";


}

?>

</head>
<body>
	<div id="kayit">
<form action="" method="post">
 		
    	<table id="register-tablo">
        	<tr>
            	<td>Soru:</td>
                <td><input type="text" name="soru" /></td>
            </tr>
        	<tr>
            	<td>Cevap1:</td>
                <td><input type="text" name="cevap1" /></td>
            </tr>
        	<tr>
            	<td>Cevap2:</td>
                <td><input type="text" name="cevap2" /></td>
            </tr>
        	<tr>
            	<td>Cevap3:</td>
                <td><input type="text" name="cevap3" /></td>
            </tr>
            <tr>
                <td>Cevap3:</td>
                <td><input type="text" name="cevap4" /></td>
            </tr>
            <tr>
            	<td>Anket Aktif olsun mu?:</td>
                <td><input type="checkbox" name="durum" /></td>
            </tr>
            <tr>
            	<td></td>
                <td><input type="submit" name="btn" value="Kaydet" /></td>
            </tr>		
		</table>
    </form>
</div>
</body>
</html>