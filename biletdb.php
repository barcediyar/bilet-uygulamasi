<!-- bu sayfada kayıt oluşturuken alınan bilgileri veritabanına kaydetmeye yarar
 ve alanlar boş bırakılınca hata mesajı verir. -->
			 
<!-- kullanıcı kayıt olduktan sonra giriş yapmak isterse 
veritabanından kullanıcı adı ve şifresi doğrulanırsa giriş yapabilir yoksa hata
mesajı alır -->

<!-- eğer giriş sayfasının kullanıcı adı yerine admin şifre yerine 1234 yazılırsa
admin olarak giriş yapar  -->
			 
			 


<?php
ob_start();
session_start();

require 'baglan.php';
require 'config.php';

if (isset($_POST['kayitol'])) {
    $username = $_POST['kullanici_adi'];
    $nereden = $_POST['nereden'];
    $nereye = $_POST['nereye'];
    $koltuk = $_POST['koltuk'];
    $tarih = $_POST['tarih'];
        
    require_once('config.php');
    $sql="SELECT rota_id from rota where nereye='$nereye'";
    $result=mysqli_query($conn,$sql);   
    while($row=mysqli_fetch_array($result)){
        $rotaid=$row['rota_id'];
    $sql2="SELECT arac_id from arac where rota_id='$rotaid'";
    $result1=mysqli_query($conn,$sql2);
    while($row1=mysqli_fetch_array($result1)){
        $aracid=$row1['arac_id'];          
      }
    if (!$username) {
        echo "Lütfen TC no Girin";

    }elseif (!$tarih) {
        echo "lütfen tarih giriniz";
    }elseif (!$nereden) {
            echo "lütfen gideceğiniz yeri seçin";
    }elseif (!$nereye) {
        echo "Lütfen gideceğiniz yeri seçin";
    }elseif(!$koltuk){
        echo "Lütfen Koltuk Numarası Giriniz";
    } else {
        $sorgu = $db->prepare('INSERT INTO bilet SET tc_no = ?, nereden = ?, nereye = ?, 
        koltuk = ?, tarih = ?,rota_id= ?, arac_id= ?');
        $ekle = $sorgu->execute([
            $username, $nereden, $nereye, $koltuk, $tarih,$rotaid, $aracid
        ]);
        if ($ekle) {
            echo "Kayıt Başarıyla gerçekleştirildi yölendiriliyorsunuz ";
            header('refresh:2; usergiris.php');
        }else {
            echo "Bir Hata Oluştu Tektar Kontrol edin";
        }
    }

}
}
?>