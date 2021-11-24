<?php // eğer sil tuşuna tıklanmışşa bilet tablosundan tc_no kolununa eşit olanı siler ve biletlerim.php sayfasına yönlendirir
if(isset($_GET["pid"]))
{
    include("baglan.php");
    $sorgu=$db->prepare('DELETE FROM bilet WHERE tc_no = ?');
    $sonuc=$sorgu->execute([$_GET["pid"]]); 
    if($sonuc){
        header("Location:biletlerim.php");
    }
    else {
        echo("Kayıt Silinemedi.");
    }
}







?>