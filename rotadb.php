<?php
ob_start();
session_start();


require 'baglan.php'; //baglan.php sayfasını rotadb.php sayfasına baglıyoruz

if (isset($_POST['kayitol'])) {
    $nereden = $_POST['nereden']; //adminden alınan bilgiler değişkene atılıyor
    $nereye = $_POST['nereye'];   //adminden alınan bilgiler değişkene atılıyor
   
    $rota_id = $_POST['rota_id'];
  
    if (!$nereden) { //eğer kullanıcıdan alınan nereden bilgisi boş ise hata mesajı verir
        echo "Lütfen Rotayı Girin";

    }elseif (!$nereye) { //eğer kullanıcıdan alınan nereye bilgisi boş ise hata mesajı verir
        echo "Lütfen araç markasını GİRİN";
    } else {
        $sorgu = $db->prepare('INSERT INTO rota SET nereden = ?, nereye = ?, rota_id = ?');// veritabanından rota tablosuna nereden ve nereye bilgileri kaydedilir
        $ekle = $sorgu->execute([
            $nereden, $nereye,$rota_id
        ]);
        if ($ekle) { //eğer istenilenler yapılırsa bilgi mesajı verilir ve deneme.php sayfasına atılır
            echo "Kayıt Başarıyla gerçekleştirildi yölendiriliyorsunuz ";
            header('refresh:2; rotasayfa.php'); // iki saniye bekledikten sonra rotasayfa.php sayfasına yönlendirir
        }else {
            echo "Bir Hata Oluştu Tektara Kontrol edin";
        }
    }

}

?>