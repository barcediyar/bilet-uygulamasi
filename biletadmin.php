<?php

require 'baglan.php'; //baglan.php sayfasını biletadmin.php sayfasına bağlıyoruz
include ("baglan.php");
$sorgu=$db->prepare('SELECT *FROM bilet'); // veritabanından bilet tablosunu çekiyoruz
$sorgu->execute();
$kullanici=$sorgu-> fetchAll(PDO::FETCH_OBJ);

?>
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- css linkini sayfaya entegre ediyoruz -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Biletler</title> <!-- sayfa başlığı -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js">  </script> <!-- jquery dilini sayfaya bağlıyoruz -->
    <script type="text/javascript">  </script>  <!-- javascript dosaysını sayfaya bağlıyoruz -->
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
  </head>
<body><br>
    
</div class="form-group">
    <input type="text" name="search" id="search" class="form-control" placeholder="Filtrelemek için birşeyler yazın"> <!-- kullanıcının veri girmesi için textbox  -->
</div>
<br>
        
		 
<table class="table table-bordered table-striped table-dark"> <!-- tablo oluşturuyoruz ve alanlarını belirliyoruz -->
			
<tr>
			 
    <td>ID</td>			 
    <td>TC No</td>			 
    <td>Nereden</td>             
    <td>Nereye</td>             
    <td>Koltuk Numarası</td>            
    <td>Tarih</td>
    <td>Araç ID</td>
    <td>Rota ID</td>
    <td>Sil</td>
    <td>Düzenle</td>			 
</tr>
			 
			 
             
<?php
foreach($kullanici as $person){?><!-- kullanıcı değişkenini person diye değiştiryoruz -->
			 
			 
<tr>
    <!-- bilet tablonun kolonlarını çekiyoruz-->
			 
    <td><?= $person->id ?></td>
    <td><?= $person->tc_no ?></td>
    <td><?= $person->nereden ?></td>
    <td><?= $person->nereye ?></td>
    <td><?= $person->koltuk ?></td>
    <td><?= $person->tarih ?></td>
    <td><?= $person->arac_id ?></td>
    <td><?= $person->rota_id ?></td>
    <td><a href="biletsil.php?pid=<?= $person->id ?>" class="btn btn-danger">Sil</a></td>
    <td><a href="biletguncelle.php?rn=<?= $person->id ?>&fn=<?= $person->tc_no ?>&ln=<?= $person->nereden ?>&em=<?= $person->nereye ?>&me=<?= $person->koltuk ?>&db=<?= $person->tarih ?>" class="btn btn-primary">Güncelle</a></td>
</tr>
				 
	<?php } ?>
 
</table>
        
 
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>