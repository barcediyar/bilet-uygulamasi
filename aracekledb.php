<?php
ob_start();
session_start();


require 'baglan.php'; //baglan.php sayfasını aracekledb.php sayfasına baglıyoruz

if (isset($_POST['kayitol'])) {  //eğer kayıtol tuşuna tıklanmışsa
    $koltuk_id = $_POST['koltuk_id']; //koltuk numarasının girildiği textboxun name si post metoduyla koltuk_id değişkenine atılır     
    $rota_id = $_POST['rota_id']; //rota ıd girildiği textboxun name si post metoduyla rota_id değişkenine atılır
    $arac_id = $_POST['arac_id'];
    $arac_marka = $_POST['arac_marka']; //araç markasının girildiği textboxun name si post metoduyla arac_marka değişkenine atılır
    
    if (!$koltuk_id) { //eğer koltuk id boş ise hata mesajı verir ekrana
        echo "<script> alert('Lütfen Koltuk Koltuk Numarası Girin !')</script>";

    }elseif (!$arac_marka) { // eğer araç markası boş ise hata mesajı veriri
        echo "<script> alert('Lütfen Araç Markasını Girin !')</script>";
    }elseif (!$rota_id) { //eğer rota ıd boş ise hata mesajı veriri
        echo "Lütfen Rota ID Girin !";
    } else {
        $sorgu = $db->prepare('INSERT INTO arac SET koltuk_sayisi = ?, marka = ?, rota_id = ?,arac_id=? '); // araç tablosuna textboxun içindeki veriler yazdırlır
        $ekle = $sorgu->execute([
            $koltuk_id, $arac_marka, $rota_id,$arac_id
        ]);
        if ($ekle) { //eğer kayıt başarılı ise bilgi mesajı verir 2 saniye bekletip araclar1.php sayfasına yönlendirir
           echo "Kayıt Başarılı Yönlendiriliyorsunuz"; 
            header('refresh:2; araclar1.php');
        }else { // eğer kayıt başaeılı değil ise hata mesajı verir
            echo "Bir Hata Oluştu Tektara Kontrol edin";
        }
    }

}

?>