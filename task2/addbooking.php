<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Movie Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="style.css"/>
  <script type="text/javascript">
         $(function () {
             $('#datetimepicker2').datetimepicker({
                 locale: 'ru'

             });

         });
        
      </script>


</head>
<body  onload="onLoaderFunc()">

<div class="container">
  <h2>Add Booking Seat</h2>
  <form action="" method="post">
  
  <div class="seatStructure">
<center>
<table id="seatsBlock">
 <p id="notification"></p>
  <tr>
    <td colspan="14"><div class="screen">SCREEN</div></td>
    <td rowspan="20">
      <div class="smallBox greenBox">Selected Seat</div> <br/>
      <div class="smallBox redBox">Reserved Seat</div><br/>
      <div class="smallBox emptyBox">Empty Seat</div><br/>
    </td>
    
    <br/>
  </tr>
  
  <tr>
    <td></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td></td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
</tr>
  
<tr>
    <td>A</td>
    <td><input type="checkbox" class="seats" value="A1"></td>
    <td><input type="checkbox" class="seats" value="A2"></td>
    <td><input type="checkbox" class="seats" value="A3"></td>
    <td><input type="checkbox" class="seats" value="A4"></td>
    <td><input type="checkbox" class="seats" value="A5"></td>
    <td class="seatGap"></td>
    <td><input type="checkbox" class="seats" value="A6"></td>
    <td><input type="checkbox" class="seats" value="A7"></td>
    <td><input type="checkbox" class="seats" value="A8"></td>
    <td><input type="checkbox" class="seats" value="A9"></td>
    <td><input type="checkbox" class="seats" value="A10"></td>
    <td><input type="checkbox" class="seats" value="A11"></td>
    <td><input type="checkbox" class="seats" value="A12"></td>
  </tr>
  
  <tr>
    <td>B</td>
    <td><input type="checkbox" class="seats" value="B1"></td>
    <td><input type="checkbox" class="seats" value="B2"></td>
    <td><input type="checkbox" class="seats" value="B3"></td>
    <td><input type="checkbox" class="seats" value="B4"></td>
    <td><input type="checkbox" class="seats" value="B5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" value="B6"></td>
    <td><input type="checkbox" class="seats" value="B7"></td>
    <td><input type="checkbox" class="seats" value="B8"></td>
    <td><input type="checkbox" class="seats" value="B9"></td>
    <td><input type="checkbox" class="seats" value="B10"></td>
    <td><input type="checkbox" class="seats" value="B11"></td>
    <td><input type="checkbox" class="seats" value="B12"></td>
  </tr>
  
  <tr>
    <td>C</td>
    <td><input type="checkbox" class="seats" value="C1"></td>
    <td><input type="checkbox" class="seats" value="C2"></td>
    <td><input type="checkbox" class="seats" value="C3"></td>
    <td><input type="checkbox" class="seats" value="C4"></td>
    <td><input type="checkbox" class="seats" value="C5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" value="C6"></td>
    <td><input type="checkbox" class="seats" value="C7"></td>
    <td><input type="checkbox" class="seats" value="C8"></td>
    <td><input type="checkbox" class="seats" value="C9"></td>
    <td><input type="checkbox" class="seats" value="C10"></td>
    <td><input type="checkbox" class="seats" value="C11"></td>
    <td><input type="checkbox" class="seats" value="C12"></td>
</tr>
  
<tr>
    <td>D</td>
    <td><input type="checkbox" class="seats" value="D1"></td>
    <td><input type="checkbox" class="seats" value="D2"></td>
    <td><input type="checkbox" class="seats" value="D3"></td>
    <td><input type="checkbox" class="seats" value="D4"></td>
    <td><input type="checkbox" class="seats" value="D5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" value="D6"></td>
    <td><input type="checkbox" class="seats" value="D7"></td>
    <td><input type="checkbox" class="seats" value="D8"></td>
    <td><input type="checkbox" class="seats" value="D9"></td>
    <td><input type="checkbox" class="seats" value="D10"></td>
    <td><input type="checkbox" class="seats" value="D11"></td>
    <td><input type="checkbox" class="seats" value="D12"></td>
</tr>
  
<tr>
    <td>E</td>
    <td><input type="checkbox" class="seats" value="E1"></td>
    <td><input type="checkbox" class="seats" value="E2"></td>
    <td><input type="checkbox" class="seats" value="E3"></td>
    <td><input type="checkbox" class="seats" value="E4"></td>
    <td><input type="checkbox" class="seats" value="E5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" value="E6"></td>
    <td><input type="checkbox" class="seats" value="E7"></td>
    <td><input type="checkbox" class="seats" value="E8"></td>
    <td><input type="checkbox" class="seats" value="E9"></td>
    <td><input type="checkbox" class="seats" value="E10"></td>
    <td><input type="checkbox" class="seats" value="E11"></td>
    <td><input type="checkbox" class="seats" value="E12"></td>
</tr>
  
<tr class="seatVGap"></tr>
  

</table>
<br/><button onclick="updateTextArea()">Confirm Selection</button>
</center>
</div>
  </form>
</div>
<!-- <script src="js/seats.js"></script> -->
</body>
</html> 