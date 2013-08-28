loca<?php require_once("includes/config.php"); ?>
<?php include("includes/headers.php"); ?>  

  <div id="main">
    <div id="icerik"> <h2>Mevcut Sayfalar</h2>
     <?php
      $sorgu=mysql_query("select * from sayfalar order by sira ASC");
	  while($bilgi=mysql_fetch_array($sorgu)){
			  echo "<li><a href=\"sayfa_guncelle?sayfa={$bilgi[id]}\">{$bilgi[isim]}</a></li>";
	  }
	  ?>
    </div>
    <div id="solmenu">
     <ul>
        <li><a href="yeni_sayfa.php">Yeni Sayfa Ekle</a></li>
        <li><a href="yeni_kullanici.php">Yeni Kullanıcı Ekle</a></li>
        <li><a href="logout.php">Çıkış</a></li>
      
      </ul>
    </div>
  </div>
<?php include("includes/footer.php");?> 