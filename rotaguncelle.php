<?php

require 'baglan.php';//rota.php sayfasına baglan.php sayfasını bağlıyoruz
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
    <title>Rota Güncelle</title> <!-- sayfa başlığı  -->
    <link rel="stylesheet" href="kayitol.css"> <!-- css dosyasının konumu  -->
</head>
<body>
    <section>
        <div class="conteiner">
            <div class="user siginBox">
                <div class="imgBox"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192697.79327649932!2d28.872096739702062!3d41.005495809214985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1636974767737!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                <div class="formBox">
                    <form method="get" action="rotaguncelle2.php">
                        <h2>Rota Ekle</h2> <!-- başlık -->
                         ID: <input type="text" value ="<?php echo "$rn" ?>" name="rn" placeholder="Kullanıcı ID" readonly> 
                         Nerden:<input type="text" name="fn" value ="<?php echo "$fn" ?>" placeholder="Nereden"> <!-- adminden nereden gideceğini belirleyen textbox-->
                         Nereye:<input type="text" name="ln" value ="<?php echo "$ln" ?>" placeholder="Nereye">   <!-- adminden nereye gideceğini belirleyen textbox-->
                         Rota ID<input type="text" name="em" value ="<?php echo "$em" ?>" placeholder="Rota ID">   <!-- adminden nereye gideceğini belirleyen textbox-->
                        <input type="submit" name = "submit" value="Güncelle"> <!-- girilen verilerin kayıtetme tuşu-->
                    </form>
                </div>
            </div>
           
        </div>
    </section>

</body>
</html>