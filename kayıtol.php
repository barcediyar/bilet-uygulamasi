<?php

require 'baglan.php'; //baglan.php sayfasını kayıtol.php sayfasına baglıyoruz

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt ol</title> <!--  sayfa başlığı -->
    <link rel="stylesheet" href="kayitol.css"> <!-- css dosyasınn adını belirtiyoruz  -->
</head>
<body>
    <section>
        <div class="conteiner">
            <div class="user siginBox">
                <div class="imgBox"><img src="2.jpg" alt=""></div>
                <div class="formBox">
                    <form method="post" action="islem.php">
                        <h2>Üyelik Oluştur</h2> <!-- başlık  -->
                        <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı">              <!--  kullanıcıdan kulanıcı adını girmesi için textbox oluşturuyoruz -->
                        <input type="email" name="email" placeholder="E-Mail">                            <!--  kullanıcıdan emailini girmesi için textbox oluşturuyoruz -->
                        <input type="password" name="passwd" placeholder="Şifre Oluştur">                 <!--  kullanıcıdan şifresini girmesi için textbox oluşturuyoruz -->
                        <input type="password" placeholder="Şifre Oluştur(tekrar)">                       <!--  kullanıcıdan şifresini tekrar girmesi için textbox oluşturuyoruz -->
                        <input type="submit" name = "kayitol" value="Kayıt Ol">                           <!--  giriş butonu ekliyoruz -->
                        <p class="signup">Hesabınız varmı? O zaman <a href="giris.php" >Giriş Yap</a></p> <!--  kullanıcın hesabı varsa giris.php sayfasına gönderiyoruz -->
                    </form>
                </div>
            </div>
           
        </div>
    </section>

</body>
</html>