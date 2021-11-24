<?php

require 'baglan.php'; //aracekle.php sayfasına baglan.php sayfasını bağlıyoruz

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç ekle</title> <!-- sayfa başlığı  -->
    <link rel="stylesheet" href="kayitol.css"> <!-- css dosyasının konumu  -->
</head>
<body>
    <section>
        <div class="conteiner">
            <div class="user siginBox">
                <div class="imgBox"><img src="aracekle.jpg" alt=""></div>
                <div class="formBox">
                    <form method="post" action="aracekledb.php">
                        <h2>Araç Ekle</h2> <!-- başlık -->
                        <input type="text" name="koltuk_id" placeholder="Koltuk Sayısı"> <!-- adminden koltuk sayısı girilmesini isteyen textbox-->
                        <input type="text" name="rota_id" placeholder="Rota ID">         <!-- adminden rota ID girilmesini isteyen textbox-->
                        <input type="text" name="arac_id" placeholder="Araç ID">      
                        <input type="text" name="arac_marka" placeholder="Araç Markası"> <!-- adminden araç markasının girilmesini isteyen textbox-->
                        <input type="submit" name = "kayitol" value="Araç Ekle">         <!-- girilen verilerin kayıt etme tuşu-->
                    </form>
                </div>
            </div>
           
        </div>
    </section>

</body>
</html>