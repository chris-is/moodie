<!--User Profile-->
<!DOCTYPE html>
<html>
    <?php
      require 'head.html';
      ?>
    <!--#include file="head.html" -->
    <link href="../css/profile.css" type="text/css" rel="stylesheet">
    <!--FONTS-->
  <body>
    <!--HEADER-->
    <div id="appendHeader"></div>
      <script>
        $(function(){
          $("#appendHeader").load("header.html");
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
      
    <div class="pic-wrapper"> <!--Just a frame-->
      <img src="" height="300" width="250">
    </div>

  <div class="pic">
      <form id="frm1" action="">
        <input type="file" name="pic" accept="image/*" onchange="previewFile()">
      </form>
  </div>

  <script>
    function previewFile()
    {
      var preview = document.querySelector('img');
      var file = document.querySelector('input[type=file]').files[0];
      var reader = new FileReader();
      reader.addEventListener("load", function () {
      preview.src = reader.result;
      },false);

      if(file)
      {
        reader.readAsDataURL(file);
      }
    }
  </script>

  <div class="btn-group">
    <button type="button" id ="info" class="btn btn-primary">Info</button>
    <button type="button" id ="reviews" class="btn btn-primary">Reviews</button>
    <button type="button" id ="friends" class="btn btn-primary">Friends</button>
    <button type="button" id ="list" class="btn btn-primary">List</button>
  </div>

  <!--Define content for each button-->


    <script>
      $(document).ready(function(){
        $("#info").click(function(){
          $(".info").toggle();
          $(".reviews, .friends, .list").hide();
        });
      });
    </script>

    <script>
      $(document).ready(function(){
        $("#reviews").click(function(){
          $(".reviews").toggle();
          $(".info, .friends, .list").hide();
        });
      });
    </script>

    <script>
      $(document).ready(function(){
        $("#friends").click(function(){
          $(".friends").toggle();
          $(".info, .reviews, .list").hide();
        });
      });
    </script>

    <script>
      $(document).ready(function(){
        $("#list").click(function(){
          $(".list").toggle();
          $(".info, .reviews, .friends").hide();
        });
      });
    </script>

    <div class="info">
      <!--PHP-->
      <div id="test" method="post">
        About:
        <input type="text" name="about">
      </div>
      <script>
        function post_ajax_data()
        {
        $.ajax({
        type:"POST",
        url:"/",
        data : ,
        dataType:"json",
        restful:true,
        contentType: 'application/json',
        cache:false,
        timeout:20000,
        async:true,
        beforeSend :function(data) { },
        success:function(data){
        success.call(this, data);
        },
        error:function(data){
        alert("Error In Connecting");
        }
        });
        }
      </script>
      <script>
       $(function () 
        {

          $.ajax({                                      
            url: 'profilebackend.php',       
            data: "hdgfhfg", 
            dataType: 'json',
            success: function(data)
            {
              var about = data[0];
              $('test').html("<b>id: </b>"+id+"<b> name: </b>"+about); 
            } 
          });
        }); 
      </script>
 
    </div>

    <div class="reviews">
      <!--All PHP-->
    </div>

    <div class="friends">
      <div class="content">
      <div class="content__container">
        <p class="content__container__text">
          Your
        </p>
        
        <ul class="content__container__list">
          <li class="content__container__list__item">Friends</li>
          <li class="content__container__list__item">Tomodachi</li>
          <li class="content__container__list__item">Amigos</li>
          <li class="content__container__list__item"></li>
        </ul>
      </div>
    </div>
    </div>

    <div class="list">
      <!--Mostly PHP-->
    </div>

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.html");
        });
      </script>

  </body>
</html>
