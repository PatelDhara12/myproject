<?php 

$server = "localhost";
$user = "admin";
$pass = "Admin@123";
$database = "db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  
  <link href="css/bootstrap-select.min.css" rel="stylesheet" />
  <script src="js/bootstrap-select.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center"></h2><br />
   
   <select name="multiSelectSearch" id="multiSelectSearch" multiple class="form-control selectpicker" title="Live data search by location...">
    <?php
   
    $sql_query = "SELECT DISTINCT city FROM movie";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
    while( $row = mysqli_fetch_assoc($resultset) ) {
        echo '<option value="'.$row["city"].'">'.$row["city"].'</option>'; 
    }
    ?>
</select>
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <th>Movie Name</th>
            <th>image</th>
              
            </tr>
        </thead>
        <tbody> 
        </tbody>
    </table>
</div>
 </body>
</html>


<script>
$(document).ready(function() {
    listRecords();
    $('#multiSelectSearch').change(function() {
        console.log($('#multiSelectSearch').val());
        $('#city').val($('#multiSelectSearch').val());
        var searchQuery = $('#city').val();
        listRecords(searchQuery);
    });
});
function listRecords(searchQuery='') {
    $.ajax({
        url:"tha.php",
        method:"POST",
        dataType: "json",
        data:{query:searchQuery},
        success:function(response) {
            $('tbody').html(response.html);
        }
    });
}
</script>