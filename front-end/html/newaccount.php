<!DOCTYPE html>
<html>

  <?php 
    require 'head.html';
  ?>
  <style>
    #msg{
      text-align: center;
    }
    #message{
      display: inline-block;
      margin-left: auto;
      margin-right: auto;
      height: 4rem;
      width: auto;
      background-color: #fffff0;
      color: black;
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

      <!--SEARCH-->
      <div id="appendSearch"></div>
      <script>
        $(function(){
          $("#appendSearch").load("search.html");
        });
      </script>

    <div id="msg"><button id="message" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Login" onclick="document.getElementById('login-modal').style.display='block'" style="width:auto">
    Your account was created successfully! Please click here to log in.
    </button></div>

    
  </body>
</html>
