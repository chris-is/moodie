<!--User Profile-->
<!DOCTYPE html>
<html>
    <?php
      require 'head.html';
      ?> 

    <link href="../css/profile.css" type="text/css" rel="stylesheet">
    <!--FONTS-->
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
    
    <div class="row" id="profilename">
      <?php
        require '../../back-end/database.php';
        $db = getDB();
        session_start();
        $sid = $_SESSION['sid'];
        $query = "SELECT * from Users where sid=?";
        $stmt = $db->prepare($query);
        $stmt->execute([$sid]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $user['username'];
        echo "'s profile";
      ?>
    </div>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <div id="wrapper">
      <form id="uploadForm" method="POST" action="" enctype="multipart/form-data">
        <input type="file" id="upload_file" name="upload_file"/>
        <input type='submit'  name = 'submit_image' value="Upload Image"/>
      </form>
    </div>
      <script>
        /*$(document).ready(function() {
          //var form = $('form')[0];
          var form = $('#uploadimage')[0];
          //var formData = new FormData(form);
          //var formData = $('.uploadimage :input').serialize();
          $(form).submit(function(e) {

          formData = new FormData(form);
             formData.append("CustomField", "This is some extra data, testing");
          //formData.append("", imgFile.files[0]);

          e.preventDefault();
          console.log("ASDASD");
          console.log(formData);
          

            $.ajax({
              url: "http://localhost/COMP307/back-end/dp",
              type: "POST",
              data:$('input').serialize(),
              contentType: false,
              processData: false,
              success: function(data)
              {
                alert(data);
              },
              error: function(data)
              {
                alert("shame");
              }
            });
          });
        });*/

        $(document).ready(function (e){
        $("#uploadForm").on('submit',(function(e){
        e.preventDefault();
        $.ajax({
        url: "http://localhost/COMP307/back-end/dp",
        type: "POST",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data){
          alert(data);
        },
        error: function(){}           
        });
        }));
        });
      </script>

  <!--<div class="pic">
      <form id="frm1" action="">
        <input id="dp" type="file" name="pic" accept="image/*" onchange="previewFile()">
      </form>
  </div>-->
  <!--<script>
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

        $(document).ready(function(){
          var base_url="http://localhost/COMP307/";
          var url = base_url+'backend/dp';
          url=base_url+'back-end/about';
            $.ajax({
              type: "POST",
              url: url,
              data:file,
              success:function(data){
            }
          });
         });
    }
  </script>-->

  <div class="btn-group">
    <button type="button" id ="info" class="btn btn-primary">Info</button>
    <button type="button" id ="reviews" class="btn btn-primary">Reviews</button>
    <button type="button" id ="friends" class="btn btn-primary">Friends</button>
    <button type="button" id ="list" class="btn btn-primary">List</button>
  </div>

  <!--Define content for each button-->

  <!-- Start with hidden divs -->
    <script>
      $(document).ready(function(){
        $(".info, .reviews, .friends, .list").hide();
      });
    </script>

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
      <div>
        About: <br>
        <textarea id="update" maxlength="250" class="stupdatebox"></textarea>
        <input type="submit" value="POST" class="stpostbutton">
      </div>
      
      <div id="mainContent"></div>
      <div id="secContent"></div>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="../js/ajaxGetPost.js"></script>
      
      <script>
/*<<<<<<< HEAD
        $(document).ready(function()
        {
          /*$(".info").on("click",".stpostbutton",function()
          {
            $("#mainContent").prepend("<p>HELLO TESTIIIING</p>");
          });*/
         /*var base_url="http://localhost/COMP307/";
          var url,encodedata;
          $("#update").focus();

          $(".info").on("click",".stpostbutton",function()
          {

          var update=$('#update').val();
          var precode = {"about":update};
          var encode=JSON.stringify(precode);
          //$("#mainContent").prepend("<p>Daaaaama</p>");
          url=base_url+'back-end/about';


          $.ajax({
          type:"POST",
          url:url,
          data:encode,
          success:function(data){
            //alert(encode);
          },
          error:function(data){
          alert("Error In Connecting");
          }
          });


=======*/
        $(document).ready(function() {
          var base_url="http://localhost/COMP307/";
          var url = base_url+'back-end/about';
          $.ajax({
            type:"GET",
            url:url,
            success:function(data){
              data = data.replace(/\n/g, "<br />");
              $("#mainContent").html("");
              $("#mainContent").prepend(data);
            }
          });
        });
      </script>

      <script>
        $(document).ready(function(){
          var base_url="http://localhost/COMP307/";
          var url;
          $(".info").on("click",".stpostbutton",function(){
            var update=$('#update').val();
            var postdata = "about="+update;
            url=base_url+'back-end/about';
            $.ajax({
              type: "POST",
              url: url,
              data:postdata,
              success:function(data){
                $.ajax({
                type:"GET",
                url:url,
                success:function(data){
                  $("#mainContent").html("");
                  data = data.replace(/\n/g, "<br />");
                  $("#mainContent").prepend(data);
                }
              });
            },
            error:function(data){
              alert("Error In Connecting");
            }
          });
          });
        });
      </script>

    </div>

    <div class="reviews">
      <div id="reviewList"></div>
      <script>
        $(document).ready(function() {
          var base_url="http://localhost/COMP307/";
          var url = base_url+'back-end/reviews';
          $.ajax({
            type:"GET",
            url:url,
            success:function(data){
              $("#reviewList").html("");
              $("#reviewList").prepend(data);
            }
          });
        });
      </script>
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
          $("#appendFooter").load("footer.php");
        });
      </script>

  </body>
</html>
