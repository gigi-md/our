<?php
   //generare aleator cifre litere
   //ciclu care parcurge fiecare litera
   // in ciclu random la urmatoriui elemente culoare, dimensiune, unghi, deplasarea(x,y);
   //mai suus de ciclu crearea imaginii
   //imaginea gata nu o salvam da o trimitem direct in brouser cu ajutorul instructiunii header
   //gen text
   $cod= substr(md5(rand()), 0,6);
   //cream sesiune pentru a verifica corectitudinea simbolurilor introduse
   session_start();
   $_SESSION['captcha']=$cod;
   // echo $cod;
   //cream img
   $image = imagecreatetruecolor(150, 50);
   
   //ciclu care pune textul in imagine
   for ($i=0; $i < 6; $i++) { 
//       echo $cod[$i]."<br>";
	   $color=imagecolorallocate($image, rand(180,255), rand(180,255), rand(180,255));
		//aplicam un text
		imagettftext($image, rand(15,25), rand(-10,10), 5+$i*20, 30, $color, "AppleGaramond.ttf", $cod[$i]);
   }
   //punem header
   header('Content-type: image/jpeg');
   //returnam in brouser imaginea returnata
      imagejpeg($image);
   
   //eliberez memoria
   imagedestroy($image); 
?>