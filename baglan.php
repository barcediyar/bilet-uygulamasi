<?php
//veritabanı bağlantısı
try {
    $db = new PDO("mysql:host=postgres://frmwjesjegeklp:16279ce623c043d3ab6659e7288a95ce056bceb56f6cd2288a0c765b683c15de@ec2-34-224-117-67.compute-1.amazonaws.com:5432/d89brndrjplt3u; dbname=kayit; charset=utf8", 'root', '');
    //echo "veritabanı bağlantısı başarılı";

} 
catch(Exception $e){
    echo $e->getMessage();
}

?>
