<nav class="navbar navbar-default navbar-fixed-top justify-content-between">
  <div class="navbar-brand navbar-left">
    <div class="form-inline">
      <?php 
      if(isSID(session_id()) == false) : ?>
        <button id="home-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Home" onclick="window.location.href = '/COMP307/front-end/html/index.php';"></button>
        <input type="text" placeholder="Search for a specific movie & enter" id="searchbar">
        <button id="search-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Search"></button>
        <button id="signup-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Sign Up" onclick="document.getElementById('signup-modal').style.display='block'" style="width:auto"></button>
        <button id="login-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Login" onclick="document.getElementById('login-modal').style.display='block'" style="width:auto"></button>
      <?php else : ?>
        <button id="home-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Home" onclick="window.location.href = '/COMP307/front-end/html/index-reg.php';"></button>
        <input type="text" placeholder="Search for a specific movie & enter" id="searchbar">
        <button id="search-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Search"></button>
        <button id="user-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="User"></button>
        <button id="logout-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Logout"></button>
      <?php endif; ?>

      <?php 
        function isSID($sid){
          session_start();
          $uniqueID = substr($sid, 0, 6);
          if ($uniqueID === "m00d13"){
            return true;
          }
          else {
            return false;
          }
        }
      ?>

      <script>
        $(document).ready(function(){
          $('#logout-btn').click(function(){
            $('#logout-btn').load('logout.php', function(e){
        console.log(e);
            });
          });
        });
      </script>
      
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
  <form class="modal-content animate" method="post" action="signup.php">
    <span onclick="document.getElementById('signup-modal').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" name="email" maxlength="32" required>
      <label><b>Username</b></label>
      <input type="text" name="username" maxlength="16" required>
      <label><b>Password</b></label>
      <input type="password" name="password" maxlength="16" required>
      <button type="submit" id="signup-sub">Sign Up</button>
      </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal1 = document.getElementById('login-modal');
var modal2 = document.getElementById('signup-modal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if ((event.target == modal1)|(event.target == modal2)) {
    modal1.style.display = "none";
    modal2.style.display = "none";
  }
}

</script>