<?php
 function menu_olustur($sayfa){
     echo "<ul>";
	 if($sayfa){
     echo "<li><a href=\"icerik.php\">Anasayfa</a></li>";
	 }
	 else{
		 echo "<li><a class=\"aktifMenu\" href=\"icerik.php\">Anasayfa</a></li>";
	 }
	 $sorgu=mysql_query("select * from sayfalar order by sira ASC");
	  while($bilgi=mysql_fetch_array($sorgu)){
		  if($sayfa == $bilgi[id]){
	     
		 echo "<li><a class=\"aktifMenu\" href=\"$PHP_SELF?sayfa={$bilgi[id]}\">{$bilgi[isim]}</a></li>";
		  
		  }
		  else{
			  echo "<li><a href=\"$PHP_SELF?sayfa={$bilgi[id]}\">{$bilgi[isim]}</a></li>";
		  }
	  }
	 
   echo  "</ul>";
 }
  ?>