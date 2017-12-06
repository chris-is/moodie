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

    <?php if($user == $currentuser & $currentstatus == 1): ?>
      <div style="color:white;">does this show up?</div>
    <?php endif; ?>

    <div id="reviewTest" style="color:white;">df</div>
      <script>
        $(document).ready(function() {
          var base_url="http://localhost/COMP307/";
          var url = base_url+'back-end/reviews';
          $.ajax({
            type:"GET",
            url:url,
            dataType: 'json',
            success:function(data){
              console.log(data);

              for(var i=0; i<10; i++){
                var movieid = data[i][0];
                var name = data[i][1];
                var link = "/COMP307/front-end/html/movie.php?"+movieid;
                var review = "<a href=\""+link+"\">"+name+"</a>"
                $("#reviewTest").append(review);
              }

            }
          });
        });
      </script>

      <div id="wrapper">
        
        <div id="uploadForm" enctype="multipart/form-data">
          <input type="file" id="upload_file" name="upload_file"/>
          <input type="submit" value="Upload" id="submit_file"/>
        </div>
      </div>

      <script>
        $(document).ready(function (e){
          $("#submit_file").click(function(){
            var file = $("#upload_file").val();
            var filepath = "/COMP307/front-end/img/dp/abc.jpg"
            var postdata = "file="+file+"&filepath"+filepath;
            $.ajax({
              url: "http://localhost/COMP307/back-end/updp",
              type: "POST",
              data:  postdata,
              enctype: 'multipart/form-data',
              success: function(data){
                alert(data);
              },           
            });
          });
        });
      </script>


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
