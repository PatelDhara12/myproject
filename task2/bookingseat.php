<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Movie Seat Booking</title>
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    
    <div class="movie-container">
      <label style="font-size: 1em;">Select movie:</label>
      <select id="movie">
        <option value="10">Shershaah</option>
        <option value="12">Mimi</option>
        <option value="8">Bhuj</option>
        <option value="8">Radhe</option>
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div id="seat" class="seat"></div>
        <small class="status" style="font-size: 1em;">N/A</small>
      </li>
      <li>
        <div id="seat" class="seat selected"></div>
        <small class="status" style="font-size: 1em;">Selected</small>
      </li>
      <li>
        <div id="seat" class="seat occupied"></div>
        <small class="status" style="font-size: 1em;">Occupied</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>

      <div class="row">
        <div id="seat" class="seat occupied"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
      </div>
      <div class="row">
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat occupied"></div>
        <div id="seat" class="seat occupied"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
      </div>
      <div class="row">
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat occupied"></div>
        <div id="seat" class="seat occupied"></div>
      </div>
      <div class="row">
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
      </div>
      <div class="row">
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat occupied"></div>
        <div id="seat" class="seat occupied"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
      </div>
      <div class="row">
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat"></div>
        <div id="seat" class="seat occupied"></div>
        <div id="seat" class="seat occupied"></div>
        <div id="seat" class="seat occupied"></div>
        <div id="seat" class="seat"></div>
      </div>
    </div>

    <p class="text" style="font-size: 1em;margin:0px 0px 15px 0px">
      You have selected <span id="count">0</span> seats for a price of $<span
        id="total"
        >0</span
      >
    </p>

    <a href="">
      <button class="btn-home">
        Payment
      </button>
    </a>
    

    <script>
     
      var count=0;
      var seats=document.getElementsByClassName("seat");
      for(var i=0;i<seats.length;i++){
        var item=seats[i];
        
        item.addEventListener("click",(event)=>{
          var price= document.getElementById("movie").value;

          if (!event.target.classList.contains('occupied') && !event.target.classList.contains('selected') ){
          count++;
          
          var total=count*price;
          event.target.classList.add("selected");
          document.getElementById("count").innerText=count;
          document.getElementById("total").innerText=total;

          }
        })
      }
    </script>
  </body>
</html>
