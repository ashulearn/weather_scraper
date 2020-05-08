<?php

if($_GET["city"])
{
    $forecast= file_get_contents("http://completewebdevelopercourse.com/locations/".$_GET['city']."");
      $pagearray= explode('<a class="forecast-magellan-target" name="forecast-part-0"><div data-magellan-destination="forecast-part-0"></div></a><p class="summary"><b>',$forecast);
      
      $secondarray = explode('</span></span></span></p><div class="forecast-cont"><div class="units-cont">',$pagearray[1]);
      $weather = $secondarray[0];
}




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>weather scraper</title>

    <style type="text/css">

          html { 
            background: url(background.jpeg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
          }

          body {
            background : none;
          }
          .container {
            text-align: center;
            margin-top: 150px;
            
            width: 450px;
            
          }
          #city {
            padding : "20px";
          }


        </style>

  </head>
  <body >
        <div class="container">

        <h1>What's the weather !</h1>
        
        <form>
          <div class="form-group">
            <label for="city"><strong>Enter the name of city</strong></label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Eg - London,tokyo">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
        <div style="margin : 10px;">
          <?php
          if($weather)
          {
            echo '<div class="alert alert-primary" role="alert">'.$weather.'</div>';
          }
          ?>
        </div>

        </div>
        
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>