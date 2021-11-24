<?php

require 'baglan.php'; //admingiris.php sayfasını baglan.php sayfasına bağlıyoruz
include ("baglan.php");                    
$sorgu=$db->prepare('SELECT *FROM kullanicilar'); //veritabanından kullanicilar tablosunu çekiyoruz
$sorgu->execute(); 
$kullanici=$sorgu-> fetchAll(PDO::FETCH_OBJ); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barce Turizim Admin </title> <!-- sayfa başlığı  -->
    <link rel="stylesheet" href="style.css"> <!-- css dosyasının konumunu belirtiyoruz   -->
</head>
<body>

    <div class="conteiner">
        
        <div class="navbar">

            <div class="logo">
                
                <img src="logomm.png" alt="">    <!-- sayfa logosu --> 
                       
            </div>
            
            <ul>
                <li><a href="#" class="active" >Anasayfa</a></li>    <!--navbar tuşuları  -->
                <li><a href="kullanicilar.php">Kullanıcılar</a></li> <!--navbar tuşuları  -->
                <li><a href="araclar1.php">Araçlar</a></li>          <!--navbar tuşuları  -->
                <li><a href="rotasayfa.php">Rotalar</a></li>         <!--navbar tuşuları  -->
                <li><a href="biletadmin.php">Biletler</a></li>       <!--navbar tuşuları  -->
                <li><a href="giris.php">Çıkış Yap</a></li>           <!--navbar tuşuları  -->
            </ul>
            
        </div>
        
              
        </div>
        </div>
    </div>
    
</body>   
</html> 