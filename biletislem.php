<?php
ob_start();
session_start();

require 'baglan.php';

if (isset($_POST['giris'])) {  
    $tc_no = $_POST['tc_no']; //kullanıcıdan alınan bilgiler değişkene atılıyor

    if (!$tc_no) { //eğer kullanıcıdan alınan username boş ise hata mesajı verir
        echo "Kullanıcı Adınızı Griniz!";
    }
     else {
        $kullanıcı_sor = $db->prepare("SELECT * FROM bilet WHERE tc_no = '$tc_no'"); // veritabanından kullanicilar tablosuna kullanıcı adı ve şifre kontrol edilir
        $kullanıcı_sor->execute([
            $tc_no
            
        ]);
        $say = $kullanıcı_sor->rowCount();
        if ($say==1) {  //eğer girilen bilgi 1 dönüyorsa doğru denemektir bilgi mesajı verir ve usergiris.php sayfasına yönlendirir
            echo "Başarıyla Giriş Yaptınız Yönlendiriliyorsunuz";
            header('refresh:2; biletlerim1.php');
        }else {
            echo "Bir Hata Oluştu Tektara Kontrol edin";
        }
    }
}



?>