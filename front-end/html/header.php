<nav class="navbar navbar-default navbar-fixed-top justify-content-between">
  <div class="navbar-brand navbar-left">
    <div class="form-inline">
      <?php 
      session_start();
      if(isSID() == false) : ?>
        <button id="home-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Home" onclick="window.location.href = '/COMP307/front-end/html/index.php';"></button>
        <input type="text" placeholder="Search for a specific movie & enter" id="searchbar">
        <button id="search-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Search"></button>
        <button id="signup-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Sign Up"></button>
        <button id="login-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Login" onclick="document.getElementById('login-modal').style.display='block'" style="width:auto"></button>
      <?php else : ?>
        <button id="home-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Home" onclick="window.location.href = '/COMP307/front-end/html/index-reg.php';"></button>
        <input type="text" placeholder="Search for a specific movie & enter" id="searchbar">
        <button id="search-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Search"></button>
        <div class="dropdown">
          <button id="user-btn" class="nav-btn dropdown-o" data-toggle="tooltip" data-placement="top" title="User"></button>
          <div class="dropdown-content">
            <ul>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Settings</a></li>
            </ul>
          </div>
        </div>
        <button id="logout-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Logout"></button>
      <?php endif; ?>

      <?php 
        function isSID(){
          require_once('database.php');
          $id = session_id();
          $query = "SELECT status from Users where sid='$id'";
          $status = $mysqli->query($query);
          $num = $status->num_rows;
          if ($num == 1){
            return true;
          }
          else {
            return false;
          }
        }
      ?>
    </div>
  </div>
</nav>

<!--Login modal-->
<div class="modal" id="login-modal">
  <form class="modal-content animate" method="post" action="login.php">
    <span onclick="document.getElementById('login-modal').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" name="username" required>
      <div class="username-status"></div>
      <label><b>Password</b></label>
      <input type="password" name="password" required>
      <button type="submit" id="login-sub">Login</button>
      <!--<span class="forgot"><a href="#">I forgot my password</a></span>-->
      </div>
    </div>
  </form>
</div>

<!--Signup modal-->
<div class="modal" id="signup-modal">
  <div class="modal-content animate" method="post" >
    <span onclick="document.getElementById('signup-modal').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" name="email" maxlength="32" required>
      <label><b>Username</b></label>
      <input type="text" name="username" maxlength="16" required>
      <div class="username-status"></div>
      <label><b>Password</b></label>
      <input type="password" name="password" maxlength="16" required>
      <button type="submit" id="signup-sub">Sign Up</button>
      </div>
    </div>
  </div>
</div>


<script>
// Get the modal
var modal1 = document.getElementById('login-modal');
var modal2 = document.getElementById('signup-modal');

$(document).ready(function() {
  $("#login-btn").click(function(){
    $(modal1).css("display", "block");
    $(".container-fluid").css("-webkit-filter", "blur(5px)");
  });
  $("#signup-btn").click(function(){
    $(modal2).css("display", "block");
    $(".container-fluid").css("-webkit-filter", "blur(5px)");
  });
  $(".close").click(function(){
    $(".container-fluid").css("-webkit-filter", "blur(0px)");
    $(".container-fluid").css("filter", "initial");
  });

  
  var base_url="http://localhost/COMP307/";
  var url, encodedata;

  $('#signup-sub').click(function(){
    var username = $("#signup-modal input[name=username]").val();
    var precode = {"username":username};
    var encode = JSON.stringify(precode);
    url = base_url+'back-end/checkusername';

     $.ajax({
       type: "POST",
       url: url,
       data: encode,
       success: function(data){
         window.alert(data);
         //$(".username-status").html("Username already exists. Please select another one.");
       }
     });
     
      
  });

  $('#logout-btn').click(function(){
    $('#logout-btn').load('logout.php', function(e){
        console.log(e);
      });
    });
  
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if ((event.target == modal1)|(event.target == modal2)) {
    modal1.style.display = "none";
    modal2.style.display = "none";
    $(".container-fluid").css("-webkit-filter", "blur(0px)");
    $(".container-fluid").css("filter", "initial");
  }
}



</script>