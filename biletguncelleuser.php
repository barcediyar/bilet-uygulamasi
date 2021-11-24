<?php
//require "baglan.php"; //baglan.php sayfasını biletsatinal.php sayfasına bağlıyoruz
//include "biletdb.php";
//$mysqli=new mysqli('localhost','root','','kayit'); //sqle bağlanmak için giriş bilgilerini yazıyoruz
//$resultset =$mysqli->query("SELECT * FROM rota"); // rota tablosunu sayfaya çekiyoruz
//$resultset1=$mysqli->query("SELECT * FROM rota"); // rota tablosunu sayfaya çekiyoruz
$color1 ="lightblue"; // kolon rengi 
$color2="yellow"; // kolon rengi
$color =$color1;
$rn=$_GET['rn'];
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$em=$_GET['em'];
$db=$_GET['db'];
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
                                    var course_id=$(this).val();
                                    $.ajax({
                                        url:"nereden_nereye2.php",
                                        method:"POST",
                                        data:{courseID:course_id},
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
                    <form method="get" action="biletguncelleuser2.php"> <!-- buradaki forma girilen veriler post methodu ile gönderilir -->
                        <h2>Bilet Güncelle</h2> <!-- başlık  -->
                        TC No:<input type="text" name="rn" placeholder="TC No"name ="rn" value="<?php echo "$rn" ?>" readonly>  <!-- kullanıcı adının girileceği textbox -->
                        Nereden:<!-- kullanıcı adının girileceği textbox -->
                        <input type="text"name ="fn"   id="fn" value="<?php echo "$fn" ?>" readonly>   <!-- veritabaınından nereden kolonu buradaki listbox a çekilir-->
                        <br>            
                        Nereye:
                        <input type="text"name ="ln"   id="ln" value="<?php echo "$ln" ?>" readonly> <!-- kullanıcıdan nereye gidileceği hakkında bilgi alınır -->
                        <div class="form-group"></div>
            
                        
                        Koltuk No:
                    

                        <br>
                        <select name="em" value= <?php echo"$em"?>>  <!-- koltuk numarasını seçmesi için listbox ve içine yazılan veriler for dongüsü ile 40 kere yazıdırılmıştır-->
                        <option value="asd" selected><?php echo"$em"?></option>
                        <option>   
                             <?php
                                for($i =1;$i<=40;$i++)
                                {
                                    echo"<option name='$i'>$i</option>";
                                }
                             ?>
                         </option>
                        </select>
                        <br>
           
                        Tarih:
                        
                        Tarih:<input type="text" name="db" value=<?php echo"$db" ?> placeholder="Tarih gg/aa/yyyy"> <!-- tarih in girileceği textbox-->
                        <input type="submit" name = "submit" value="Bileti Güncelle"> <!-- ENTER BUTONU-->
                        
                    </form>
                </div>
            </div>
           
        </div>
    </section>

</body>
</html>