<div class="row" id="g-happy">
  <button class="g-square p" data-toggle="tooltip" data-placement="top"></button>
  <button class="g-square p" data-toggle="tooltip" data-placement="top"></button>
  <button class="g-square p" data-toggle="tooltip" data-placement="top"></button>
  <button class="g-square p" data-toggle="tooltip" data-placement="top"></button>
  <button class="g-square p" data-toggle="tooltip" data-placement="top"></button>
  <button class="g-square p" data-toggle="tooltip" data-placement="top"></button>
</div>
<div class="row" id="g-sad">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
</div>
<div class="row" id="g-scared">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
</div>
<div class="row" id="g-hungry">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
</div>
<div class="row" id="g-nostalgic">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
  <img class="g-square" src="../img/home.png">
</div>


<script>
  $(document).ready(function() {
    $('.p').click(function(){
      if ($(this).hasClass('pink')) {
        $(this).removeClass('pink');
      } 
      else {
        $(this).addClass('pink');
      }
      //$(this).toggle_switch.attr("src", toggle_switch.attr("src").replace("../img/home.png", "../img/blank-grid.png"));
      //$(this).attr("src","../img/home.png");
    });
  });
</script>