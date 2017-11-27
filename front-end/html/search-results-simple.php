<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  require '../../vendor/autoload.php';
  $app = new \Slim\App;
  $app->post('/', function($request, $response) {
?>


<html>
  
  <?php 
    require 'head.html';
  ?>
  <link href="../css/search-results.css" type="text/css" rel="stylesheet">

  <body>
    <!--HEADER-->
    <div id="appendHeader"></div>
      <script>
        $(function(){
          $("#appendHeader").load("header.php");
        });
      </script>

    <!--BODY-->
    <div class="container-fluid">

      <!--SEARCH-->
      <div id="appendSearch"></div>
      <script>
        $(function(){
          $("#appendSearch").load("search.html");
        });
      </script>

      <div class="row">
        <div id="result-msg">
          Your search for ___ returned the following results:
        </div>
      </div>

      <?php
        
          $userquery = $request->getParam('query');
          echo $userquery;


        });

        $app->run();

      ?>

      <script type="text/javascript">
        $(document).ready(function(){
          /*var base_url="http://localhost/COMP307/";
          var url = base_url+'back-end/search-simple';
          $.ajax({
            type:"GET",
            url:url,
            success:function(data){
              alert(data);
            }
          });*/



        });
      </script>

      <div class="row">
        <div id="image" class="col-sm-5">
          <img width=50% height=50% src="../img/nagoya2.jpg" alt="First slide">
        </div>
        <div id="description" class="col-sm-7">
          Description
        </div>
      </div>


    </div>

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>

  </body>
</html>
