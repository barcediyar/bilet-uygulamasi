<?php

require 'baglan.php'; //aracekle.php sayfasına baglan.php sayfasını bağlıyoruz
$rn=$_GET['rn'];
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$lm=$_GET['lm'];
$em=$_GET['em'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Güncelle</title> <!-- sayfa başlığı  -->
    <link rel="stylesheet" href="kayitol.css"> <!-- css dosyasının konumu  -->
</head>
<body>
    <section>
        <div class="conteiner">
            <div class="user siginBox">
                <div class="imgBox"><img src="aracekle.jpg" alt=""></div>
                <div class="formBox">
                    <form method="get" action="aracguncelle2.php">
                        <h2>Araç Ekle</h2> <!-- başlık -->
                        Kullanıcı Id: <input type="text" value ="<?php echo "$rn" ?>" name="rn" placeholder="Kullanıcı ID" readonly>
                        Koltuk No:<input type="text" value="<?php echo "$ln" ?>"name="ln" placeholder="Koltuk Sayısı"> <!-- adminden koltuk sayısı girilmesini isteyen textbox-->
                        Rota ID:<input type="text" value="<?php echo "$lm" ?>" name="lm" placeholder="Rota ID">         <!-- adminden rota ID girilmesini isteyen textbox-->
                        Araç ID:<input type="text" value="<?php echo "$fn" ?>" name="fn" placeholder="Araç ID"> 
                        Araç Markası:<input type="text" value="<?php echo "$em" ?>" name="em" placeholder="Araç Markası"> <!-- adminden araç markasının girilmesini isteyen textbox-->
                        <input type="submit" name = "submit" value="Güncelle">         <!-- girilen verilerin kayıt etme tuşu-->
                    </form>
                </div>
            </div>
           
        </div>
    </section>

</body>
</html>