<?php


require 'baglan.php'; //index.php sayfasını baglan.php sayfasına bağlıyoruz

$sorgu=$db->prepare("SELECT nereden,nereye,marka,koltuk_sayisi FROM rota left JOIN arac on rota.rota_id=arac.rota_id group by nereden asc"); //veritabanından rota ve araç tablosunu çekiyoruz
$sorgu->execute();
$kullanici=$sorgu-> fetchAll(PDO::FETCH_OBJ);
$conn=mysqli_connect('localhost','root','','kayit');
//$query = $db->prepare("SELECT * FROM rota");
//$numrows = mysqli_affected_rows($query);
$satir = ("SELECT count(*) FROM rota");
//$numrows = mysqli_affected_rows("");
$satir3=0;
$query5="SELECT nereden from rota";
$result6=mysqli_query($conn,$query5);
while($row3=mysqli_fetch_array($result6)){
    $satir2=$row3["nereden"];
    $satir3=$satir3+1;
}

$query="SELECT rota_id,nereden, COUNT(*),count(bilet.rota_id)as'koltuksayi' from bilet group by nereden order by nereden asc";
$result5=mysqli_query($conn,$query);
while($row1=mysqli_fetch_array($result5)){
    "rota id=".$row1["rota_id"].'</br>'.'nereden= '.$row1["nereden"].'</br>'.'kaç bilet= '.$row1["COUNT(*)"].'<BR/></br>';
    $rotaidlp[]=$row1["rota_id"];
    $biletsayilp[]=$row1["COUNT(*)"];
    $neredenlp[]=$row1["nereden"];
    $kalankoltuk[]=46-$row1["COUNT(*)"];
    
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barce Turizm </title> <!-- sayfa başlığı -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js">  </script> <!-- jquery dilini sayfaya bağlıyoruz -->
    <script type="text/javascript">  </script>  <!-- javascript dosaysını sayfaya bağlıyoruz -->
    <link rel="stylesheet" href="style.css"> <!-- css dosyasının konumunu belirtiyoruz -->
    <script>            
    // burada filtreleme işlemi yapıyoruz 
        $(document).ready(function() {
            $("#search").keyup(function() {

                var data = this.value.split(" ");
                var table = $(".table").find("tr");
                if(this.value == "")
                {
                    table.show();
                    return;
                }               
                table.hide();
                table.filter(function (i, v) {
                    var $t = $(this);
                    for(var d = 0; d < data.length; ++d)
                    {
                        if($t.is(":contains('" + data[d] + "')"))
                        {
                            return true;
                        }
                    }
                    return false;
                }).show();

             });

  
        });
    </script>    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- css bağlantısı -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body> 
    <div class="conteiner">
        <div class="navbar">
            <div class="logo">
                <img src="logomm.png" alt="">   <!-- sayfa logosu -->
            </div>
            <ul>
                <li><a href="usergiris.php"class="active">Anasayfa</a></li> <!-- navbar tuşarı-->
                <li><a href="biletsatinal.php">Satın Al</a></li>     <!-- navbar tuşarı-->
                <li><a href="biletlerim.php">Biletlerim</a></li>                      <!-- navbar tuşarı-->
                <li><a href="giris.php">Çıkış</a></li>                 <!-- navbar tuşarı-->
            </ul>
        </div>
    </div>
    <div class="container">
	  <div class="row justify-content-center">
		<div class="col">
            <br><br><br><br>
            <h1>SEFER VE ARAÇ BİLGİLERİ</h1> <!-- büyük başlık -->
            
        </div class="form-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Nereden Gideceğinizi Yazınız.."> <!-- kullanıcının veri girmesi için textbox  -->
        </div>
        
		 <table class="table table-bordered table-striped table-dark"> <!-- tablo oluşturuyoruz ve alanlarını belirliyoruz -->
			<tr>
			 <td>NEREDEN</td>
			 <td>NEREYE</td>
             <td>Boş Koltuk Sayısı</td>
             <td>Marka</td>

			 </tr>
			 
			 <?php
            $koltuknr=46;
           
            $query1="SELECT rota_id,nereden, COUNT(*) from rota group by nereden order by nereden asc";
            $result1=mysqli_query($conn,$query1);
            while($row2=mysqli_fetch_array($result1)){
                $neredenlp2[]=$row2["nereden"];
            }
            $query="SELECT rota_id,nereden, COUNT(*),count(bilet.rota_id)as'koltuksayi' from bilet group by nereden order by nereden asc";
            $result5=mysqli_query($conn,$query);
            while($row1=mysqli_fetch_array($result5)){
                "rota id=".$row1["rota_id"].'</br>'.'nereden= '.$row1["nereden"].'</br>'.'kaç bilet= '.$row1["COUNT(*)"].'<BR/></br>';
                $rotaidlp[]=$row1["rota_id"];
                $biletsayilp[]=$row1["COUNT(*)"];
                $neredenlp[]=$row1["nereden"];
                $kalankoltuk[]=46-$row1["COUNT(*)"];
                
                
            }



			 foreach($kullanici as $person ){ ?> <!-- kullanıcı değişkenini person diye değiştiryoruz -->			 
                 <tr>                    
                <td><?= $person->nereden ?></td>   <!-- rota tablosunun nereden kolonu-->
                <td><?= $person->nereye ?></td>    <!-- rota tablosunun nereye kolonu -->
                <td><?php for($i=0;$i<$satir3;$i++){
                    
                    if(($person->nereden==$neredenlp2[$i]) && ($kalankoltuk[$i]==46)){
               
                        echo("boş araç"); 
                    } elseif($person->nereden==$neredenlp[$i]){
                    
                        echo($kalankoltuk[$i]);
                       $kalankoltuk[$i]=46;     
                    }
                
                } ?></td> <!-- araç tablosunun koltuk numarası-->
                <td><?= $person->marka ?></td>     <!-- araç tablosnun araç markası-->
			    </tr>				 
			 <?php  }?>
			</table>  
		  </div>  
	  </div>
	  </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>   
</html> 