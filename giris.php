<?php
require 'baglan.php' // giris.php sayfasına baglan.php sayfasını baglıyoruz

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title> <!-- sayfa başlığı  -->
    <link rel="stylesheet" href="giris.css"> <!-- css dosyasınn adını belirtiyoruz  -->
</head>
<body>
    <section>
        <div class="conteiner">
            <div class="user siginBox">
                <div class="imgBox"><img src="3.jpg" alt=""></div>
                <div class="formBox">
                    <form method="post" action="islem.php">
                        <h2>Giriş Yap</h2> <!--  başlık  -->
                        <input type="text" name ="kullanici_adi" placeholder="Kullanıcı Adı">               <!--  kullanıcıdan kulanıcı adını girmesi için textbox oluşturuyoruz -->
                        <input type="password" name ="passwd" placeholder="Şifre">                          <!--  kullanıcıdan şifresini girmesi için textbox oluşturuyoruz  -->
                        <input type="submit" name="giris" value="Giriş" >                                   <!--  giriş butonu ekliyoruz -->
                        <p class="signup">Hesabınız yokmu? Hemen <a href="kayıtol.php" >Kayıt Ol</a></p>    <!--  kullanıcın hesabı yoksa kayıtol.php sayfasına gönderiyoruz -->
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>