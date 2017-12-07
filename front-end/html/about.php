<!DOCTYPE html>
<html>

  <?php 
    require 'head.html';
  ?>
  <style>
    #about{
      background-color: #262626;
      color: white;
      border-radius: 5px;
      margin-top: 65px;
      margin-left: 40px;
    }
    .footer{
      top: 300px;
    }
  </style>

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
        <div class="col-sm-1"></div>
        <div class="col-sm-6" id="about">
          ABC
        </div>
      </div>

     

      

      </div> <!--END CONTAINER-->

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>
  </body>
</html>
