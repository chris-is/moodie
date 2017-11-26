//USER GRID//
  //PINK - HAPPY
  var idx = 1;
  var ipink = eval("data[0]." + adjarray[idx]);
  alert(ipink);
  idx++;
  var interval = null;
  $('#uhappy-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uhappy-plus").val($("#uhappy-plus").val() + 200);
        if(ipink < 10){
          $('.uhappy').eq(ipink).addClass('pink');
          ipink++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#uhappy-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uhappy-minus").val($("#uhappy-minus").val() + 200);
        if(ipink > 0){
          ipink--;
          $('.uhappy').eq(ipink).removeClass('pink');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //RED - ANGRY
  var ird = eval("data[0]." + adjarray[idx]);
  idx++;
  var interval = null;
  $('#uangry-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uangry-plus").val($("#uangry-plus").val() + 200);
        if(ird < 10){
          $('.uangry').eq(ird).addClass('red');
          ird++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#uangry-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uangry-minus").val($("#uangry-minus").val() + 200);
        if(ird > 0){
          ird--;
          $('.uangry').eq(ird).removeClass('red');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //ORANGE - SMART
  var iora = eval("data[0]." + adjarray[idx]);
  idx++;
  var interval = null;
  $('#usmart-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#usmart-plus").val($("#usmart-plus").val() + 200);
        if(iora < 10){
          $('.usmart').eq(iora).addClass('orange');
          iora++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#usmart-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#usmart-minus").val($("#usmart-minus").val() + 200);
        if(iora > 0){
          iora--;
          $('.usmart').eq(iora).removeClass('orange');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //YELLOW - EXCITED
  var iyel = eval("data[0]." + adjarray[idx]);
  idx++;
  var interval = null;
  $('#uexcited-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uexcited-plus").val($("#uexcited-plus").val() + 200);
        if(iyel < 10){
          $('.uexcited').eq(iyel).addClass('yellow');
          iyel++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#uexcited-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uexcited-minus").val($("#uexcited-minus").val() + 200);
        if(iyel > 0){
          iyel--;
          $('.uexcited').eq(iyel).removeClass('yellow');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //WHITE - RELAXED
  var iwhi = eval("data[0]." + adjarray[idx]);
  idx++;
  var interval = null;
  $('#urelaxed-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#urelaxed-plus").val($("#urelaxed-plus").val() + 200);
        if(iwhi < 10){
          $('.urelaxed').eq(iwhi).addClass('white');
          iwhi++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#urelaxed-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#urelaxed-minus").val($("#urelaxed-minus").val() + 200);
        if(iwhi > 0){
          iwhi--;
          $('.urelaxed').eq(iwhi).removeClass('white');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //PURPLE - SHOCKED
  var ipur = eval("data[0]." + adjarray[idx]);
  idx++;
  var interval = null;
  $('#ushocked-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#ushocked-plus").val($("#ushocked-plus").val() + 200);
        if(ipur < 10){
          $('.ushocked').eq(ipur).addClass('purple');
          ipur++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#ushocked-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#ushocked-minus").val($("#ushocked-minus").val() + 200);
        if(ipur > 0){
          ipur--;
          $('.ushocked').eq(ipur).removeClass('purple');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //LILAC - SCARED
  var ilil = eval("data[0]." + adjarray[idx]);
  idx++;
  $('#uscared-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uscared-plus").val($("#uscared-plus").val() + 200);
        if(ilil < 10){
          $('.uscared').eq(ilil).addClass('lilac');
          ilil++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#uscared-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uscared-minus").val($("#uscared-minus").val() + 200);
        if(ilil > 0){
          ilil--;
          $('.uscared').eq(ilil).removeClass('lilac');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //BLUE - SAD
  var iblu = eval("data[0]." + adjarray[idx]);
  idx++;
  $('#usad-plus').on('mousedown', function() {
    interval = setInterval(function() {
      $("#usad-plus").val($("#blu-plus").val() + 200);
      if(iblu < 10){
        $('.usad').eq(iblu).addClass('blue');
        iblu++;
      }
    }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#usad-minus').on('mousedown', function() {
    interval = setInterval(function() {
      $("#usad-minus").val($("#usad-minus").val() + 200);
      if(iblu > 0){
        iblu--;
        $('.usad').eq(iblu).removeClass('blue');
      }
    }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //GREEN - HUNGRY
  var igrn = eval("data[0]." + adjarray[idx]);
  idx++;
  $('#uhungry-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uhungry-plus").val($("#uhungry-plus").val() + 200);
        if(igrn < 10){
          $('.uhungry').eq(igrn).addClass('green');
          igrn++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#uhungry-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uhungry-minus").val($("#uhungry-minus").val() + 200);
        if(igrn > 0){
          igrn--;
          $('.uhungry').eq(igrn).removeClass('green');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //BROWN - BORED
  var ibrn = eval("data[0]." + adjarray[idx]);
  idx++;
  $('#ubored-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#ubored-plus").val($("#ubored-plus").val() + 200);
        if(ibrn < 10){
          $('.ubored').eq(ibrn).addClass('brown');
          ibrn++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#ubored-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#ubored-minus").val($("#ubored-minus").val() + 200);
        if(ibrn > 0){
          ibrn--;
          $('.ubored').eq(ibrn).removeClass('brown');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

// RATINGS SUBMIT
  $('#rate-submit').click(function(){
    $('.user-rating').hide();
    $('.gen-rating').show();
  });