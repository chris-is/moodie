<?php

  $userquery = "";
  if( isset($_POST["query"]) ){
     $userquery = $_POST["query"];
  }

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
          Your search for <?php echo $userquery; ?> returned the following results:
        </div>
      </div>



      

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
