<?php // eğer sil tuşuna tıklanmışşa bilet tablosundan ıd kolununa eşit olanı siler ve araclar1.php sayfasına yönlendirir
if(isset($_GET["pid"]))
{
    include("baglan.php");
    $sorgu=$db->prepare('DELETE FROM bilet WHERE id = ?');
    $sonuc=$sorgu->execute([$_GET["pid"]]); 
    if($sonuc){
        header("Location:biletadmin.php");
    }
    else {
        echo("Kayıt Silinemedi.");
    }
}







?>