<?php //sql bağlantısını yapıyoruz
$conn=mysqli_connect('localhost','root','','kayit');
if(!$conn){
    die("Database'e bağlanamadı:".mysqli_connect_error());
}
?>