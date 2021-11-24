<?php
ob_start();
session_start();

// kullaniciekle.php sayfasından alınan bilgileri veritabanına kayıtetmek için kullandıgımız kodlar 
require 'baglan.php';

if (isset($_POST['kayitol'])) {
    $username = $_POST['kullanici_adi']; //kullanıcıdan alınan bilgiler değişkene atılıyor
    $password = $_POST['passwd'];        //kullanıcıdan alınan bilgiler değişkene atılıyor   
    $email = $_POST['email'];            //kullanıcıdan alınan bilgiler değişkene atılıyor   
    if (!$username) { //eğer kullanıcıdan alınan username boş ise hata mesajı verir
        echo "Lütfen Kullanıcı Adınızı Girin";

    }elseif (!$password) { //eğer kullanıcıdan alınan şifre boş ise hata mesajı verir
        echo "lütfen şifrenizi giriniz"; 
    }elseif (!$email) { //eğer kullanıcıdan alınan email boş ise hata mesajı verir
        echo "Lütfen e-MAİL ADRESİNİZİ GİRİN";
    } else {
        $sorgu = $db->prepare('INSERT INTO kullanicilar SET user_name = ?, user_password = ?, email = ? '); // veritabanından kullanicilar tablosuna kullanıcı adı ve şifre kaydedilir
        $ekle = $sorgu->execute([
            $username, $password, $email
        ]);
        if ($ekle) { //eğer istenilenler yapılırsa bilgi mesajı verilir ve deneme.php sayfasına atılır
            echo "Kayıt Başarıyla gerçekleştirildi yölendiriliyorsunuz ";
            header('refresh:2; kullanicilar.php'); // iki saniye bekledikten sonra deneme.php sayfasına yönlendirir
        }else {
            echo "Bir Hata Oluştu Tektara Kontrol edin";
        }
    }

}

?>