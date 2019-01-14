<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>


  <body>
   <div class="bg"></div>

  
 
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Piłka-Blog piłkarski</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Strona główna</a></li>
      
       
 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logowaniezapis.php"><span class="glyphicon glyphicon-user"></span> Zaloguj się</a></li>
     
    </ul>
  </div>


</nav>
 


 

    <a href="weszlo.com" class="btn btn-warning">Sprawdz podobne blogi</a>
  
  <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="aa.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Real</h5>
	  
      <p class="card-text">Madryt.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Dodano 3 min.temu</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="aa.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">FC</h5>
      <p class="card-text">Barcelona.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Dodano 2 min. temu</small>
    </div>
  </div>
  
</div>
  
 


 <div ng-app="myApp" ng-controller="myCtrl">

   <a  class="btn btn-warning">Wybierz</a>

<select ng-model="druzyny" ng-options="y.brand for (x, y) in cars">
</select>

<h1>Wybrales druzyne : {{druzyny.brand}}</h1>
<h2>miasto: {{druzyny.miasto}}</h2>
<h3>rokzalozenia: {{druzyny.rokzalozenia}}</h3>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.cars = {
        car01 : {brand : "Real", miasto : "Madryt", rokzalozenia : "1924"},
        car02 : {brand : "Fc", miasto : "Barcelona", rokzalozenia : "1933"},

    }
});
</script>
 <div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
   
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="real.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="fcbarca.jpg" alt="Chicago" style="width:100%;">
      </div>
    
    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

 <div class="container">
  
                
  <ul class="pager">
   
    <li><a href="#">Początek strony</a></li>
  </ul>
</div>

<div class="footer">
 
    <div class="icon-bar">
  <center> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div> </center>
</div>



  
  </body>
</html>