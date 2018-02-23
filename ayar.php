<?php
//sınav sorusu 2. dönem 2 ve 3. sınav geçen yıl
//Bağlantı yapılacak sunucu adı:
	$sunucuadi="localhost";

//sunucuya bağlantı için gerekli kullanıcı adı:
	$sunucukuladi="root";

//sunucuya bağlantı için gerekli şifre:
	$sunucusifre="";

//sunucuya çalışacağımız veritabanı
	$veritabani="kimbu";	

//veritabanının bulunduğu sunucuya bağlantı komutu;
mysql_connect($sunucuadi,$sunucukuladi,$sunucusifre) or die("Sunucuya Bağlanamadı:(");

//databaseyi seçiyoruz
mysql_select_db($veritabani) or die("Sunucuya Bağlanamadı:(");
//veya mysql_select_db("kimbu")

//türkçe karakter için
mysql_query("set names 'utf8'");


?>