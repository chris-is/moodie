<?php session_start(); ?>

<script type="text/javascript" src="../js/grid.js"></script>

<!-- GENERAL AVERAGE RATING -->
<div class="gen-rating">
  <div class="row">
    <div id="rate-msg">This movie made other users feel...</div>
  </div>

  <div class="row" id="happy">
    <button class="adj">Happy</button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
  </div>

  <div class="row" id="angry">
    <button class="adj">Angry</button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
  </div>

  <div class="row" id="smart">
    <button class="adj">Smart</button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
  </div>

  <div class="row" id="excited">
    <button class="adj">Excited</button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
  </div>

  <div class="row" id="relaxed">
    <button class="adj">Relaxed</button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
  </div>

  <div class="row" id="shocked">
    <button class="adj">Shocked</button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
  </div>

  <div class="row" id="scared">
    <button class="adj">Scared</button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
  </div>

  <div class="row" id="sad">
    <button class="adj">Sad</button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
  </div>

  <div class="row" id="hungry">
    <button class="adj">Hungry</button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
  </div>

  <div class="row" id="bored">
    <button class="adj">Bored</button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
  </div>

<?php 
  require_once('../../back-end/database.php');
  $db = getDB();
  $sid = session_id();

  //Check if the person viewing is a logged in user
  $query = "SELECT status from Users where sid=?";
  $stmt = $db->prepare($query);
  $stmt->execute([$sid]);
  $status = $stmt->fetch(PDO::FETCH_ASSOC);

  //Display button to rate and user's personal grid if they're logged in
  if ($status['status'] == 1) : ?>
    
  <div class="row">
    <button class="adj rate" id="rateit">Rate it!</button>
    <div class="explain">No fields are mandatory<br/> Rate what you want!</div>
  </div>
  
</div>
<!-- USER RATING -->
<div class="user-rating">
  <div class="row">
    <div id="rate-msg">This movie made me feel...</div>
  </div>

  <div class="row" id="happy">
    <button class="adj">Happy</button>
    <button id="uhappy-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button id="uhappy-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="angry">
    <button class="adj">Angry</button>
    <button id="uangry-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button id="uangry-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="smart">
    <button class="adj">Smart</button>
    <button id="usmart-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button id="usmart-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="excited">
    <button class="adj">Excited</button>
    <button id="uexcited-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button id="uexcited-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="relaxed">
    <button class="adj">Relaxed</button>
    <button id="urelaxed-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button id="urelaxed-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="shocked">
    <button class="adj">Shocked</button>
    <button id="ushocked-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button id="ushocked-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="scared">
    <button class="adj">Scared</button>
    <button id="uscared-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button id="uscared-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="sad">
    <button class="adj">Sad</button>
    <button id="usad-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button id="usad-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="hungry">
    <button class="adj">Hungry</button>
    <button id="uhungry-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button id="uhungry-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="bored">
    <button class="adj">Bored</button>
    <button id="ubored-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button id="ubored-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row">
    <button class="adj rate" id="rate-submit">Rate!</button>
  </div>
</div>
<?php endif; ?>