<?php
//bu sayfada güncelleme işlemini veritabanından yaptırıyrouz
    require 'config.php';
    
    if(isset($_GET["submit"])){
        
        $rn=$_GET['rn'];
        $fn=$_GET['fn'];
        $ln=$_GET['ln'];
        $em=$_GET['em'];
        $db=$_GET['db'];



            $sql7 = "UPDATE bilet set koltuk='$em',tarih='$db' where tc_no='$rn'";
            $result1=mysqli_query($conn,$sql7);

            if ($result1) {
                echo "Kayıt Başarıyla gerçekleştirildi yölendiriliyorsunuz ";
                header('refresh:2; biletlerim.php');
            }else {
                echo "Bir Hata Oluştu Tekrar Kontrol edin";
            }
        }

            
        
    
?>