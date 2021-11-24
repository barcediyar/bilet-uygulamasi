<?php   // eğer sil tuşuna tıklanmışşa arac ndan ıd kolununa eşit olanı siler ve araclar1.php sayfasına yönlendirir
if(isset($_GET["pid"]))
{
    include("baglan.php");
    $sorgu=$db->prepare('DELETE FROM arac WHERE ıd = ?');
    $sonuc=$sorgu->execute([$_GET["pid"]]); 
    if($sonuc){
        header("Location:araclar1.php");
    }
    else {
        echo("Kayıt Silinemedi.");
    }
}







?>