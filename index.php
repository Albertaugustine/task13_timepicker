<html>
  <head>
    <meta charset="utf-8" />
    <title>Timepicker example</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="main.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    
  </head>
  <body >
      <!--main container-->
        
        <!--time picker-->  
        <div class="jumbotron text-center">
        <h1>Type the time:</h1>
        </div>

        <div class="jumbotron text-center" ng-app="myApp" ng-controller="myCtrl">
          <label>Time:</label>
          <input type="time" ng-model="time" value="time" name="time" id="tm" ><br><br>
          <input type="submit" ng-click="insert()" onclick="myFunction()" value="Insert" name="submit">
          <p ng-bind="time"></p>
          <p id="demo">Last input is:</p>
        </div>
              
          <script>
          function myFunction() {
            var x = document.getElementById("tme").value;
            document.getElementById("demo").innerHTML = x;
          }
          </script>
        
        <script>
            var a= angular.module("myApp",[]);
            a.controller("myCtrl",function($scope,$http)
            {
              $scope.time="";
              alert($scope.time);
                $scope.insert= function(){
                  
                    $http.post(
                        "insert_dt.php",
                        {"time":$scope.time}
                    )
                }
            });
        </script>
  </body>
</html>