<?php
//bu sayfada güncelleme işlemini veritabanından yaptırıyrouz
    require 'config.php'; 
    
    if(isset($_GET["submit"])){
        $userid1=$_GET["rn"];
        $username1=$_GET["fn"];
        $userpass1=$_GET["ln"];
        $usermail1=$_GET["em"];
        $lm=$_GET["lm"];
        
        if (!$username1) {
            echo "Lütfen Kullanıcı Adınızı Girin";
        }elseif (!$userpass1) {
            echo "lütfen şifrenizi giriniz";
        }elseif (!$usermail1) {
            echo "Lütfen e-MAİL ADRESİNİZİ GİRİN";
        } else {
            $sql7 = "UPDATE arac set  arac_id='$username1' , koltuk_sayisi='$userpass1' ,  marka='$usermail1' , rota_id='$lm' where ıd='$userid1'";
            $result1=mysqli_query($conn,$sql7);

            if ($result1) {
                echo "Kayıt Başarıyla gerçekleştirildi yölendiriliyorsunuz ";
                header('refresh:2; araclar1.php');
            }else {
                echo "Bir Hata Oluştu Tektara Kontrol edin";
            }
        }

            
        }
    
?>