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

  <?php
    require '../../back-end/database.php';
    $db = getDB();
    session_start();
    $sid = $_SESSION['sid'];

    $query = "SELECT * from Users where sid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$sid]);
    $userdata = $stmt->fetch(PDO::FETCH_ASSOC);
    $currentuser = $userdata['username'];
    $currentstatus = $userdata['status'];
    
    $user = $_REQUEST['user'];
    if($user !== $currentuser & $currentstatus == 0) : ?>
    <div class="row">
      <button style="text-align: center;" id="sign-up-banner">You don't have persmission to view this page. Please sign up or log in in order to view this person's profile!</button>
    </div>

  <?php 
  else : ?>

    <div class="row" id="profilename">
      <?php
        echo $user;
        echo "'s profile";
      ?>
    </div>

<<<<<<< HEAD

    <div id="wrapper">
      <form id="uploadForm" method="POST" action="" enctype="multipart/form-data">
        <input type="file" id="upload_file" name="upload_file"/>
        <input type="submit" value="Upload" class="submit"/>
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




  <!--CURRENTLY NOT BEING USED, POTENTIALLY USED LATER-->

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

=======
>>>>>>> master
  <div class="btn-group">
    <button type="button" id ="info" class="btn btn-primary">Info</button>
    <button type="button" id ="reviews" class="btn btn-primary">Reviews</button>
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
        $("#list").click(function(){
          $(".list").toggle();
          $(".info, .reviews, .friends").hide();
        });
      });
    </script>

    <script>
      $(document).ready(function() {
        $("#editbtn").click(function(){
          $("#editbox").toggle();
        });
      });
    </script>

    <div class="info">
      <!--PHP-->

      About:
      <button type="button" id="editbtn" class="btn">
      <i class="fa fa-pencil" aria-hidden="true"></i>
      </button>
      <div id="mainContent"></div>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<<<<<<< HEAD
      
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
          //$("#mainContent").prepend("<p>Dzzzzama</p>");
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
=======

      <?php if($user == $currentuser & $currentstatus ==1):?>
      <br>
      <div id="editbox">
        <textarea id="update" maxlength="500" class="stupdatebox"></textarea>
        <input type="submit" value="POST" class="stpostbutton">
      </div>
      <?php endif;?>
      <!--GET USER INFO FROM DATABASE WHEN THEY LOG IN-->
      <script>
>>>>>>> master
        $(document).ready(function() {
          var base_url="http://localhost/COMP307/";
          var url = base_url+'back-end/about-get';
          var temp = window.location.search.substring(1);
          var parts = temp.split("=",2);
          var user = parts[1];
          var postdata = "user=" + user;
          $.ajax({
            type:"POST",
            url:url,
            data:postdata,
            success:function(data){
              $("#mainContent").html("");
              $("#mainContent").prepend(data);
            }
          });
        });
      </script>
      <!--SEND USER INFO TO DATABASE AND THEN DISPLAY THE CHANGES-->
      <script>
        $(document).ready(function(){
          var base_url="http://localhost/COMP307/";
          var url;
          $(".info").on("click",".stpostbutton",function(){
            var update=$('#update').val();

          var temp = window.location.search.substring(1);
          var parts = temp.split("=",2);
          var user = parts[1];
          var postdata = "about="+update+"&user="+user;
          url=base_url+'back-end/about-post';
            //These variables are for getting info.
          url2=base_url+'back-end/about-get';
          postdata2 = "user=" + user;
            $.ajax({
              type: "POST",
              url: url,
              data:postdata,
              success:function(data){
                $('input[type=text], textarea').val('');
                $.ajax({
                type:"POST",
                url:url2,
                data: postdata2,
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
    <!--DISPLAY ALL MOVIES THE USER HAS RATED-->
    <div class="reviews">
      <div id="reviewList"></div>
      <script>
        $(document).ready(function() {
          var base_url="http://localhost/COMP307/";
          var url = base_url+'back-end/reviews';
          var temp = window.location.search.substring(1);
          var parts = temp.split("=",2);
          var user = parts[1];
          var postdata ="user="+user;
          $.ajax({
            type:"POST",
            url:url,
            data:postdata,
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

        </ul>
      </div>
    </div>
    </div>

    <!--DISPLAY THE LIST OF THE USER-->
    <div class="list" style="overflow-y: scroll;">
      <div class="list2">
        <ul id="dynamic-list"></ul>
        <?php if($user == $currentuser & $currentstatus ==1):?>
        <input type="text" id="candidate"/>
        <button id="add" onclick="addItem()"><div id="text">Add</div></button>
        <button id="remove" onclick="removeItem()"><div id="text">Remove</div></button>
        <button id="submit" onclick="submitItem()"><div id="text">Submit</div></button>
        <?php endif;?>
      </div>
      
      <div id="listContent"></div>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      
      <script>
          var base_url="http://localhost/COMP307/";
          var url = base_url+'back-end/list-get';
          var temp = window.location.search.substring(1);
          var parts = temp.split("=",2);
          var user = parts[1];
          var postdata ="user="+user;
          $.ajax({
            type:"POST",
            dataType:"json",
            url:url,
            data:postdata,
            success:function(data){
            $.each(data, function(index) {
            var ul = document.getElementById("dynamic-list");
            var candidate = data[index];
            var li = document.createElement("li");
            li.setAttribute('id',candidate);
            li.appendChild(document.createTextNode(candidate));
            ul.appendChild(li);
            array.push(candidate);
            });
            }
          });
      </script>

      <script>
        var array = [];
        function addItem(){
            var ul = document.getElementById("dynamic-list");
            var candidate = document.getElementById("candidate");
            var li = document.createElement("li");
            alert(candidate.value);
            if(candidate.value!=""){
            li.setAttribute('id',candidate.value);
            li.appendChild(document.createTextNode(candidate.value));
            ul.appendChild(li);
            array.push(candidate.value);
          }
        }

        function removeItem(){
            var ul = document.getElementById("dynamic-list");
            var candidate = document.getElementById("candidate");
            var item = document.getElementById(candidate.value);
            ul.removeChild(item);
            array.splice(array.indexOf(candidate.value),1);
        }
        function submitItem(){
            var base_url="http://localhost/COMP307/";
            var url = base_url+'back-end/list';
            var temp = window.location.search.substring(1);
            var parts = temp.split("=",2);
            var user = parts[1];
            var postdata = "list="+array+"&user="+user;
            $.ajax({
              type:"POST",
              url:url,
              data: postdata,
              success:function(data){
              }
            });
        }
      </script>
      
    </div>

    <?php endif; ?>

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>

  </body>
</html>
