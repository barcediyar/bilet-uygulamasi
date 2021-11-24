<?php
//bu sayfada güncelleme işlemini veritabanından yaptırıyrouz
    require 'config.php';
    
    if(isset($_GET["submit"])){
        $userid1=$_GET["rn"];
        $username1=$_GET["fn"];
        $userpass1=$_GET["ln"];
        $usermail1=$_GET["em"];
        if (!$username1) {
            echo "Lütfen Kullanıcı Adınızı Girin";
        }elseif (!$userpass1) {
            echo "lütfen şifrenizi giriniz";
        }elseif (!$usermail1) {
            echo "Lütfen e-MAİL ADRESİNİZİ GİRİN";
        } else {
            $sql7 = "UPDATE kullanicilar set  user_name='$username1', user_password='$userpass1', email='$usermail1' where user_id='$userid1'";
            $result1=mysqli_query($conn,$sql7);

            if ($result1) {
                echo "Kayıt Başarıyla gerçekleştirildi yölendiriliyorsunuz ";
                header('refresh:2; kullanicilar.php');
            }else {
                echo "Bir Hata Oluştu Tektara Kontrol edin";
            }
        }

            
        }
    
?>