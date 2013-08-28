<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php");?>
<?php include("includes/headers.php"); ?>  
  <div id="main">
    <div id="icerik"> 
     <?php
	 if($_GET[sayfa]){
	   $sorgu=mysql_query("select * from sayfalar where id='$_GET[sayfa]'");
	   $bilgi=mysql_fetch_array($sorgu);
	   
	   echo "<h2>{$bilgi[isim]}</h2>";
	   echo "<p>{$bilgi[icerik]}</p>";
	 }
	 else{
	 echo "<h2>Anasayfa</h2>";
	   echo "<p>Sitemize Hosgeldiniz</p>";
	 
	 }
	 
	 ?>
    
    </div>
    <div id="solmenu">
    <?php
    menu_olustur($_GET[sayfa]);
    ?>
	</div>
  </div>
<?php include("includes/footer.php");?> 