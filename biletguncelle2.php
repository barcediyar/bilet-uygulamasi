<?php
//bu sayfada güncelleme işlemini veritabanından yaptırıyrouz
    require 'config.php';
    
    if(isset($_GET["submit"])){
        
        $rn=$_GET['rn'];
        $fn=$_GET['fn'];
        $ln=$_GET['ln'];
        $em=$_GET['em'];
        $me=$_GET['me'];
        $db=$_GET['db'];
   //     $dz=$_GET['dz'];
     //   $dm=$_GET['dm'];
$dz="15";
$dm="25";


            $sql7 = "UPDATE bilet set  id='$rn', tc_no='$fn', nereden='$ln', nereye='$em' , rota_id='$dz', arac_id='$dm',koltuk='$me',tarih='$db' where id='$rn'";
            $result1=mysqli_query($conn,$sql7);

            if ($result1) {
                echo "Kayıt Başarıyla gerçekleştirildi yölendiriliyorsunuz ";
                header('refresh:2; biletadmin.php');
            }else {
                echo "Bir Hata Oluştu Tekrar Kontrol edin";
            }
        }

            
        
    
?>