<?php
//kayıtol.php sayfasından alınan bilgiler veritabanına kaydedilir 
session_start();
require 'baglan.php';
if (isset($_POST['kayitol'])) {
    $username = $_POST['kullanici_adi'];
    $password = $_POST['passwd'];
    $email = $_POST['email'];
    //$password_again = $_POST['password_again'];
    if (!$username) {
        echo "Lütfen Kullanıcı Adınızı Girin";
    }elseif (!$password) {
        echo "lütfen şifrenizi giriniz";
    }elseif (!$email) {
        echo "Lütfen e-MAİL ADRESİNİZİ GİRİN";
    } else {
        $sorgu = $db->prepare('INSERT INTO kullanicilar SET user_name = ?, user_password = ?, email = ? ');
        $ekle = $sorgu->execute([
            $username, $password, $email
        ]);
        if ($ekle) {
            echo "Kayıt Başarıyla gerçekleştirildi yölendiriliyorsunuz ";
            header('refresh:2; giris.php');
        }else {
            echo "Bir Hata Oluştu Tektara Kontrol edin";
        }
    }
}
//eğer giriş sayfasında kullanıcının bilgileri doğruysa sayfaya giriş sağlayabilmesi için veritabanından sorgulama yapıyoruz
//eğer kullanıcı adı yerine admin şifre yerine 1234 yazılırsa admin olarak giriş yapmış olur.
$admin='admin';
$sifre=1234;
if (isset($_POST['giris'])) {
    $username = $_POST['kullanici_adi'];
    $password = $_POST['passwd'];
    
    $_SESSION['kullanici_adi'] = $_POST['kullanici_adi'];
    if (!$username) {
        echo "Kullanıcı Adınızı Griniz!";
    }elseif (!$password) {
        echo "Şifrenizi Giriniz!";
    }elseif ($username == $admin and $password == $sifre) {
        echo "Admin Olarak Giriş Yaptınız";
       header('refresh:2; admingiris.php');
    } else {
        $kullanıcı_sor = $db->prepare('SELECT * FROM kullanicilar WHERE user_name = ? and user_password = ?  ');
        $kullanıcı_sor->execute([
            $username , $password 
        ]);
        $say = $kullanıcı_sor->rowCount();
        if ($say==1) { 
           echo "Başarıyla Giriş Yaptınız Yönlendiriliyorsunuz";
          header('refresh:1; usergiris.php');
        }else {
            echo "Bir Hata Oluştu Tektara Kontrol edin";
        }
}
}
?>
