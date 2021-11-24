<!DOCTYPE html>
<html>
<head>
    <title>PHP - How to make dependent dropdown list using jquery Ajax?</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>
<body>


<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Select State and get bellow Related nereye</div>
      <div class="panel-body">
            <div class="form-group">
                <label for="title">Select State:</label>
                <select name="state" class="form-control">
                    <option value="">--- Select State ---</option>


                    <?php
                        require('baglan.php');
                        $sql = "SELECT * FROM rota"; 
                        $result = $mysqli->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo "<option value='".$row['id']."'>".$row['name']."</option>";
                        }
                    ?>


                </select>
            </div>


            <div class="form-group">
                <label for="title">Select nereye:</label>
                <select name="nereye" class="form-control" style="width:350px">
                </select>
            </div>


      </div>
    </div>
</div>


<script>
$( "select[name='rota']" ).change(function () {
    var stateID = $(this).val();


    if(rotaID) {


        $.ajax({
            url: "nereden_nereye2.php",
            dataType: 'Json',
            data: {'id':rotaID},
            success: function(data) {
                $('select[name="nereye"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="nereye"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });


    }else{
        $('select[name="nereye"]').empty();
    }
});
</script>


</body>
</html>