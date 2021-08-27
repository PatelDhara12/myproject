<?php

$server = "localhost";
$user = "admin";
$pass = "Admin@123";
$database = "db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
if($_POST["query"] != '') {
    $searchData = explode(",", $_POST["query"]);
    $searchValues = "'" . implode("', '", $searchData) . "'";
    $queryQuery = "
        SELECT movie_name, image 
        FROM movie
        WHERE city IN (".$searchValues.")";
} else {
    $queryQuery = "
    SELECT movie_name, image 
    FROM movie";
}
$resultset = mysqli_query($conn, $queryQuery) or die("database error:". mysqli_error($conn));
$totalRecord = mysqli_num_rows($resultset);
$htmlRows = '';
if($totalRecord) {
 while( $row = mysqli_fetch_assoc($resultset) ) {
  $htmlRows .= '
      <tr>
       <td>'.$row["movie_name"].'</td>
       <td>'.$row["image"].'</td>
       
  </tr>';
 }
} else {
    $htmlRows .= '
        <tr>
            <td colspan="5" align="center">No record found.</td>
        </tr>';
}
$data = array(
    "html" => $htmlRows     
);
echo json_encode($data);    
?>



