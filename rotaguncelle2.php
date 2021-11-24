<?php
//bu sayfada güncelleme işlemini veritabanından yaptırıyrouz
    require 'config.php';
    
    if(isset($_GET["submit"])){
        $userid1=$_GET["rn"];
        $username1=$_GET["em"];
        $userpass1=$_GET["fn"];
        $usermail1=$_GET["ln"];
        if (!$username1) {
            echo "Lütfen Kullanıcı Adınızı Girin";
        }elseif (!$userpass1) {
            echo "lütfen şifrenizi giriniz";
        }elseif (!$usermail1) {
            echo "Lütfen e-MAİL ADRESİNİZİ GİRİN";
        } else {
            $sql7 = "UPDATE rota set  rota_id='$username1', nereden='$userpass1', nereye='$usermail1' where ıd='$userid1'";
            $result1=mysqli_query($conn,$sql7);

            if ($result1) {
                echo "Kayıt Başarıyla gerçekleştirildi yölendiriliyorsunuz ";
                header('refresh:2; rotasayfa.php');
            }else {
                echo "Bir Hata Oluştu Tektara Kontrol edin";
            }
        }

            
        }
    
?>