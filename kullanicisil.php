<?php // eğer sil tuşuna tıklanmışşa kullanicilar tablosundan ıd kolununa eşit olanı siler ve kullanicilar.php sayfasına yönlendiri
if(isset($_GET["pid"]))
{
    include("baglan.php");
    $sorgu=$db->prepare('DELETE FROM kullanicilar WHERE user_id = ?');
    $sonuc=$sorgu->execute([$_GET["pid"]]); 
    if($sonuc){
        header("Location:kullanicilar.php");
    }
    else {
        echo("Kayıt Silinemedi.");
    }
}







?>