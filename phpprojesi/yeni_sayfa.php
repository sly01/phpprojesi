<?php require_once("includes/config.php"); ?>
<?php include("includes/headers.php"); ?>  

<?php
   if($_GET[kayit]==1){
	   
	   if(!isset($_POST[isim]) || empty($_POST[isim])){
	    $hata="Lutfen boslukları doldurunuz.";
	   }
	   if(!isset($_POST[sira]) || empty($_POST[sira])){
	    $hata="Lutfen bosluklari doldurunuz.";
	   }
	   if(!$hata){
	mysql_query("insert into sayfalar (isim,sira,durum,icerik) values('$_POST[isim]','$_POST[sira]','$_POST[durum]','$_POST[icerik]')");   
	   $mesaj="Kayitlar başarıyla girilmiştir.";
	   }
   }

?>

  <div id="main">
    <div id="icerik"> <h2>Yeni Sayfa</h2>
     <form name="yeni_sayfa" action="yeni_sayfa.php?kayit=1" method="post">
     <?php
	   if($hata){
	     echo "<p>{$hata}</p>";
	   }
	   if(!$hata){
	     echo "<p>{$mesaj}</p>";
	   }
	 ?>
     <p> İsim :<br/>
      <input type="text" name="isim" />
     </p>
      <p>Sıra :<br/>
       <input type="text" name="sira" />
      </p>
      <p>
        <input type="checkbox" name="durum" value="0" /> Pasif
        <input type="checkbox" name="durum" value="1" /> Aktif
      </p>
      <p>
      İcerik: <br/>
      <textarea name="icerik" cols="50" rows="10"></textarea>
      </p>
      <p>
      <input type="submit" value="Gönder" />
      </p>
      </form>
      <div class="clearfix"></div>
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