<?php
//require "baglan.php"; //baglan.php sayfasını biletsatinal.php sayfasına bağlıyoruz
//include "biletdb.php";
$mysqli=new mysqli('localhost','root','','kayit'); //sqle bağlanmak için giriş bilgilerini yazıyoruz
$resultset =$mysqli->query("SELECT * FROM rota"); // rota tablosunu sayfaya çekiyoruz
//$resultset1=$mysqli->query("SELECT * FROM rota"); // rota tablosunu sayfaya çekiyoruz

$color1 ="lightblue"; // kolon rengi 
$color2="yellow"; // kolon rengi
$color =$color1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervasyon</title> <!-- sayfa başlığı  -->
    <link rel="stylesheet" href="kayitol.css"> <!-- css dosyasını çekiyoruz -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script>
        
                            $(document).ready(function(){ /* nereden seçeneği işaretlendiğinde event tetiklenerek nereye gidileceği 2. boxda gösteriliyor*/
                                $("#nereden").change(function(){
                                    var degisim_id=$(this).val();
                                    $.ajax({
                                        url:"nereden_nereye2.php",
                                        method:"POST",
                                        data:{rotaID:degisim_id},
                                        success:function(data){
                                            $("#nereye").html(data);
                                          
                                        }
                                    })
                                })
                            })
</script>

</head>
<body>
    <section>
        <div class="conteiner">
            <div class="user siginBox">
                <div class="imgBox"><img src="koltuk.gif" alt=""></div> <!-- fotoğraf ekleme -->
                <div class="formBox">
                    <form method="POST" action="giris.php"> <!-- buradaki forma girilen veriler post methodu ile gönderilir -->
                        <h2>Bilet Rezervasyon</h2> <!-- başlık  -->
                        <input type="text" name="kullanici_adi" placeholder="TC No" >  <!-- kullanıcı adının girileceği textbox -->
                        Nereden:
                        <select name ="nereden"  class="form-control" id="nereden">  <!-- veritabaınından nereden kolonu buradaki listbox a çekilir-->   
                        <option value="djqwkhdkqwjd"></option> <?php                      
                           require_once('config.php');
                           $sql="SELECT * from rota order by nereden";
                           $result=mysqli_query($conn,$sql);
                           while($row=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?= $row['nereden'];?>"><?= $row['nereden']; ?></option>
                            <?php } ?>
                        </select><br>
                        <br>
                            <div class="form-group">
                <label for="title">Nereye:</label>
                <select name="nereye" class="form-control" id ="nereye" style="width:80px">
                <option value="" disabled selected></option>
                </select>
            </div>       
            <br>
                        Koltuk No.:
                        <select name="koltuk">  <!-- koltuk numarasını seçmesi için listbox ve içine yazılan veriler for dongüsü ile 40 kere yazıdırılmıştır-->
                         <option>   
                             <?php
                                for($i =0;$i<=40;$i++)
                                {
                                    echo"<option name='$i'>$i</option>";
                                }
                             ?>
                         </option>
                        </select>
                        
                        <input type="text" name="tarih" placeholder="Tarih gg/aa/yyyy"> <!-- tarih in girileceği textbox-->
                        <input type="submit" name = "kayitol" value="Bilet Al"> <!-- ENTER BUTONU-->                       
                    </form>
                </div>
            </div>
           
        </div>
    </section>

</body>
</html>