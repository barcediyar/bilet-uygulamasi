<?php

require 'baglan.php'; //kulliciekle.php sayfasına baglan.php sayfasını ekliyoruz
$rn=$_GET['rn'];
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$em=$_GET['em'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Güncelle</title> <!-- sayfa başlığı -->
    <link rel="stylesheet" href="kayitol.css"> <!-- css dosyasının konumu  -->
</head>
<body>
    <section>
        <div class="conteiner">
            <div class="user siginBox">
                <div class="imgBox"><img src="kullaniciekle.jpg" alt=""></div>
                <div class="formBox">
                    <form method="get" action="kullaniciguncelle2.php">
                        <h2>Güncelle</h2> <!-- başlık -->
                        Kullanıcı Id: <input type="text" value ="<?php echo "$rn" ?>" name="rn" placeholder="Kullanıcı ID" readonly> <!-- adminden kullanıcı adının girilmesini isteyen textbox-->
                        Kullanıcı Adı:<input type="text"  value ="<?php echo "$fn" ?>" name="fn" placeholder="Kullanıcı Adı">               <!-- adminden email girilmesini isteyen textbox-->
                        Şifre:<input type="text"value ="<?php echo "$ln" ?>" name="ln" placeholder="Şifre Oluştur">    <!-- adminden şifre girilmesini isteyen textbox-->
                        E-Mail:<input type="mail" value ="<?php echo "$em" ?>" name="em" placeholder="Mail Adresi">          <!-- adminden şifrenin tekrar girilmesini isteyen textbox-->
                        <input type="submit" name = "submit" value="Güncelle">              <!-- girilen verilerin kayıt etme tuşu-->
                    </form>
                </div>
            </div>
           
        </div>
    </section>

</body>
</html>