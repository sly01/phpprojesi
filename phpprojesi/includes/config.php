<?php
  //Tanimlamalar Baslangic
  $db_adres	="localhost";
  $db_user	="root";
  $db_pass	="root";
  $db_tablo	="php_proje";
  //Tanimlamalar Sonuc
  

  $conn=mysql_connect($db_adres,$db_user,$db_pass);
  if(!$conn){
  die("Baglanti Hatasi:".mysql_error());
  }
  $db_select=mysql_select_db($db_tablo,$conn);
  if(!$db_select){
    die("Veritabani Hatasi:".mysql_error());
  }
  mysql_query("SET NAMES utf8");
?>