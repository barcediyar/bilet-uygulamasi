<?php
require 'baglan.php' // giris.php sayfasına baglan.php sayfasını baglıyoruz

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilet Sorgula</title> <!-- sayfa başlığı  -->
    <link rel="stylesheet" href="giris.css"> <!-- css dosyasınn adını belirtiyoruz  -->
</head>
<body>
    <section>
        <div class="conteiner">
            <div class="user siginBox">
                <div class="imgBox"><img src="biletsay.jpg" alt=""></div>
                <div class="formBox">
                    <form method="get" action="biletlerim1.php">
                        <h2>Bilet Sorgula</h2> <!--  başlık  -->
                        <input type="text" name ="tc_no" id="tc_no" placeholder="TC NO">               <!--  kullanıcıdan TC No girmesi için textbox oluşturuyoruz -->
                        <input type="submit" name="giris" value="Sorgula " >                                  <!--  Bilet Sorgula butonu ekliyoruz -->
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>