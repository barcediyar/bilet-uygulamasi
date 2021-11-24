<?php // eğer sil tuşuna tıklanmışşa rota tablosundan ıd kolununa eşit olanı siler ve rotasayfa.php sayfasına yönlendirir
if(isset($_GET["pid"]))
{
    include("baglan.php");
    $sorgu=$db->prepare('DELETE FROM rota WHERE ıd = ?');
    $sonuc=$sorgu->execute([$_GET["pid"]]); 
    if($sonuc){
        header("Location:rotasayfa.php");
    }
    else {
        echo("Kayıt Silinemedi.");
    }
}







?>