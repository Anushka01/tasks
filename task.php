<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<title>My Task</title>
<!-- script for different button inside each tap-->
<script>
$(document).ready(function(){
  $("#changebtn")
  .click(function(e){
    e.preventDefault();
    var next_tab = $('.nav-tabs > .active').next('li').find('a');
    if(next_tab.length>0){
      next_tab.trigger('click');
    }else{
      $('.nav-tabs li:eq(0) a').trigger('click');
    }
 
   $("#one-ok").addClass("green"); 
   $("#progress1").hide();
   $("#logo1").addClass("glyphicon glyphicon-ok");
   $("#t1").addClass("heading");
 
  });
});
</script>
<script>
$(document).ready(function(){
  $("#changebtn1")
  .click(function(e){
    e.preventDefault();
    var next_tab = $('.nav-tabs > .active').next('li').find('a');
    if(next_tab.length>0){
      next_tab.trigger('click');
    }else{
      $('.nav-tabs li:eq(0) a').trigger('click');
    }
    $("#two-ok").addClass("green");
    $("#progress2").hide();
   $("#logo2").addClass("glyphicon glyphicon-ok");
   $("#t2").addClass("heading"); 
  });
});
</script>
<script>
$(document).ready(function(){
  $("#changebtn2")
  .click(function(e){
    e.preventDefault();
    var next_tab = $('.nav-tabs > .active').next('li').find('a');
    if(next_tab.length>0){
      next_tab.trigger('click');
    }else{
      $('.nav-tabs li:eq(0) a').trigger('click');
    }
    $("#three-ok").addClass("green");  
    $("#progress3").hide();
    $("#logo3").addClass("glyphicon glyphicon-ok");
    $("#t3").addClass("heading");
  });
});
</script>
<script>
$(document).ready(function(){
  $("#changebtn3")
  .click(function(e){
    e.preventDefault();
    var next_tab = $('.nav-tabs > .active').next('li').find('a');
    if(next_tab.length>0){
      next_tab.trigger('click');
    }else{
      $('.nav-tabs li:eq(0) a').trigger('click');
    }
    $("#four-ok").addClass("green");  
    $("#progress4").hide();
    $("#logo4").addClass("glyphicon glyphicon-ok");
    $("#t4").addClass("heading");

  });
});
</script>
<script>
$(document).ready(function(){
  $("#changebtn4")
  .click(function(e){
    e.preventDefault();
      $("#five-ok").addClass("green");  
    $("#progress5").hide();
    $("#logo5").addClass("glyphicon glyphicon-ok");
    $("#t5").addClass("heading");

  });
});
</script>

</head>
<body>
<section style="background:#efefe9;">
        <div class="container">
            <div class="row">
                <div class="board">
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active txt-clr" >
                     <a href="#home" data-toggle="tab" id="first">
                         <span class="round-tabs" id="one-ok">
                         <h4 id="progress1">1</h4>
                         <i id="logo1" style="color:#CCC;"></i>
                         </span> 
                         </a><p align="center" id="t1" >Tab 1</p>
                  </li>

                  <li class="txt-clr">
                      <a href="#menu1" data-toggle="tab" id="second" >
                       <span class="round-tabs" id="two-ok">
                        <h4 id="progress2">2</h4>
                        <i id="logo2" style="color:#CCC;"></i>
                       </span> 
                      </a><p align="center" id="t2" >Tab 2</p>
                 </li>
                 <li class="txt-clr">
                       <a href="#menu2" data-toggle="tab" >
                        <span class="round-tabs" id="three-ok">
                        <h4 id="progress3">3</h4>
                        <i id="logo3" style="color:#CCC;"></i>
                       </span> 
                        </a><p align="center" id="t3" >Tab 3</p>
                  </li>

                     <li class="txt-clr">
                          <a href="#menu3" data-toggle="tab" title="blah blah">
                              <span class="round-tabs" id="four-ok">
                              <h4 id="progress4">4</h4>
                              <i id="logo4" style="color:#CCC;"></i>
                              </span> 
                          </a><p align="center" id="t4" >Tab 4</p>
                     </li>
                     <li class="txt-clr">
                           <a href="#menu4" data-toggle="tab" title="blah blah">
                           <span class="round-tabs" id="five-ok" >
                                <h4 id="progress5">5</h4>
                                 <i id="logo5" style="color:#CCC;"></i>
                           </span> 
                     </a><p align="center" id="t5" >Tab 5</p>
                     </li>
                </ul>
           </div>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <h3 align="center" class="cont-clr1">TAB 1</h3>
                       <p class="text-center">
                  <button type="button" class="btn btn-success btn-outline-rounded " id="changebtn"> Click to go on next tab <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                        </p>
                    </div>
    <div id="menu1" class="tab-pane fade">
                <h3 align="center" class="cont-clr2">TAB 2</h3>
                  <p class="text-center">
                  <button type="button" class="btn btn-success btn-outline-rounded " id="changebtn1"> Click to go on next tab <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>          </p>
    </div>
    <div id="menu2" class="tab-pane fade">
                <h3 align="center" class="cont-clr3">TAB 3</h3>
                 <p class="text-center">
                  <button type="button" class="btn btn-success btn-outline-rounded " id="changebtn2"> Click to go on next tab <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                 </p>
       </div>
    <div id="menu3" class="tab-pane fade">
                       <h3 align="center" class="cont-clr4">TAB 4</h3>
                       <p class="text-center">
                          <button type="button" class="btn btn-success btn-outline-rounded " id="changebtn3"> Click to go on next tab <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                        </p>
    </div>
    <div id="menu4" class="tab-pane fade">
                       <h3 align="center" class="cont-clr5">TAB 5</h3>
                       <p class="text-center"><button type="button" class="btn btn-success btn-outline-rounded " id="changebtn4"> Completed !! <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
</p>
    </div>
</div>
                                
    
      </div>
    </div>
  </div>
</section>
</body>
</html>
