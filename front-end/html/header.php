<nav class="navbar navbar-default navbar-fixed-top justify-content-between">
  <div class="navbar-brand navbar-left">
    <div class="form-inline">
      <button id="home-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Home"></button>
      <input type="text" placeholder="Search for a specific movie & enter" id="searchbar">
      <button id="search-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Search"></button>

      <?php 
      session_start();
      echo session_id();
      if(isSID(session_id()) == false) : ?>
          <button id="signup-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Sign Up" onclick="document.getElementById('signup-modal').style.display='block'" style="width:auto"></button>
          <button id="login-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Login" onclick="document.getElementById('login-modal').style.display='block'" style="width:auto"></button>
      <?php else : ?>
          <button id="user-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="User"></button>
          <button id="logout-btn" class="nav-btn" data-toggle="tooltip" data-placement="top" title="Logout"></button>
      <?php endif; ?>

      <?php 
        
        function isSID($sid){
          $uniqueID = substr($sid, 0, 6);
          if ($uniqueID === "m00d13"){
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
  <div class="modal-content animate" method="post" action="#">
    <span onclick="document.getElementById('login-modal').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" name="uname" required>
      <label><b>Password</b></label>
      <input type="password" name="pword" required>
      <button type="submit">Login</button>
      <!--<span class="forgot"><a href="#">I forgot my password</a></span>-->
      </div>
    </div>
  </div>
</div>

<!--Signup modal-->
<div class="modal" id="signup-modal">
  <div class="modal-content animate" method="post" action="register.php">
    <span onclick="document.getElementById('signup-modal').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" name="email" maxlength="32" required>
      <label><b>Username</b></label>
      <input type="text" name="username" maxlength="16" required>
      <label><b>Password</b></label>
      <input type="password" name="password" maxlength="16" required>
      <button type="submit">Sign Up</button>
      </div>
    </div>
  </div>
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