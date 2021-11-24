<?php

require 'baglan.php'; //kulliciekle.php sayfasına baglan.php sayfasını ekliyoruz

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı ekle</title> <!-- sayfa başlığı -->
    <link rel="stylesheet" href="kayitol.css"> <!-- css dosyasının konumu  -->
</head>
<body>
    <section>
        <div class="conteiner">
            <div class="user siginBox">
                <div class="imgBox"><img src="kullaniciekle.jpg" alt=""></div>
                <div class="formBox">
                    <form method="post" action="kullaniciekledb.php">
                        <h2>Kullanıcı Ekle</h2> <!-- başlık -->
                        <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı"> <!-- adminden kullanıcı adının girilmesini isteyen textbox-->
                        <input type="email" name="email" placeholder="E-Mail">               <!-- adminden email girilmesini isteyen textbox-->
                        <input type="password" name="passwd" placeholder="Şifre Oluştur">    <!-- adminden şifre girilmesini isteyen textbox-->
                        <input type="password" placeholder="Şifre Oluştur(tekrar)">          <!-- adminden şifrenin tekrar girilmesini isteyen textbox-->
                        <input type="submit" name = "kayitol" value="Kayıt Et">              <!-- girilen verilerin kayıt etme tuşu-->
                    </form>
                </div>
            </div>
           
        </div>
    </section>

</body>
</html>