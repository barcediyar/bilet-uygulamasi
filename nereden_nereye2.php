<?php
//  1. listboxdan seçilen değere göre koşullu olarak rota id ile eşleştirme yapılıp nereye gidileceği tek satır halinde gösteriliyor.

   require('config.php');

$output='';
   $sql = "SELECT * FROM rota WHERE nereden = '".$_POST['rotaID']."' ORDER BY nereden"; 
echo ($sql);

 $result=mysqli_query($conn,$sql);    
 $output .='<option value=" " disabled selected></option>';
 while($row=mysqli_fetch_array($result)){
       $output.='<option value="'.$row["nereye"].'">'.$row["nereye"].'</option>';
 }
echo $output;
;

?>