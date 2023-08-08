<script>
window.location.href = 'dashboard.php';
</script>
<?php exit (); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TOPFLASH X-PLAYER</title>

<!-- Bootstrap -->
<style>
:root {
  --primary-color: #fff;
  --dark-gray: #222;
  --almost-black: #111;
  --semi-white: #ccc;
  --blue: #3498db;
  --red: #e74c3c;
  
  --standard: 1.25rem;
  --big: 2rem;
  --small: 0.7rem;
  
  --serif: Georgia, serif;
}
</style>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/scrollbar.css" rel="stylesheet">

<script src="js/jquery-1.11.3.min.js"></script> 
<link rel="stylesheet" type="text/css" href="css/rippler.css" />


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    #cbp-spmenu-s1
    {
      padding-bottom: 80px;
    }

      </style>
</head>
<body>

	<div class="body-content">
  	<div class="overlay"></div>
    
  	
<style type="text/css">
  div#SuccessMessage {
      position: fixed;
      top: -100%;
      left: 35%;
      width: 30%;
  }
  h3.SettingsHeadings {
        color: #fff;
      text-align: left;
  }

  .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input {display:none;}

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #2196F3;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

    .addredborder
    {
      border:1px solid red !important;
    }

    .modal-backdrop {
        z-index: 1040 !important;
    }
    .modal-dialog {
        z-index: 1100 !important;
    }

    .in {
      background: rgba(0, 0, 0, 0.95);
      }

      button#UpdateParentPassword {
          position: relative;
          top: 18px;
      }
      .commoncs2, .commoncs2:focus, .commoncs2:active
      {
          background: transparent;
          color: #000 !important;
          padding: 0;
          box-shadow: none;
          outline: none;
          border: 0;
          border-bottom: 1px solid #000;
          border-radius: 0;
      }
      .commoncs2::-webkit-input-placeholder {
          color: #000 !important;
        }
        
      .commoncs2::-moz-placeholder {
         color: #000 !important;
      }
      .commoncs2::-webkit-input-placeholder {
         color: #000 !important;
      }
      .commoncs2::-ms-input-placeholder{
         color: #000 !important;
      }

    td.common-td {
         width: 40%;
    }

   .disableInputs
   {
      cursor: not-allowed;
   }

   a.showbtn {
      top: -22px;
      position: relative;
      left: 94%;
  } 

  .commoncs {
    position: relative;
    top: 10px;
}


.form-control, .form-control:focus, .form-control:active {
     border-bottom: none !important; 
  }

  .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
      border: 1px solid #dadada52 !important;
      padding: 5px 10px !important;
      line-height: 30px !important;
  }

  .commoncs, .commoncs:focus, .commoncs:active 
  { 
      border-bottom: 1px solid #dadada52 !important;
  }
  .commoncs2, .commoncs2:focus, .commoncs2:active 
  { 
      border-bottom: 1px solid #000 !important;
  }


a.popsbtn {
    top: -32px;
}

.commonsectionclass table {
    border: none !important;
}

.commonsectionclass tr {
    border: none !important;
}


.commonsectionclass td {
    border: none !important;
}
.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td
{
  border: none !important;
  padding:10px 10px !important
}

.main-sheading
{
      border-bottom: 1px solid #aaa;
    padding-bottom: 10px;
}

.commonsectionclass {
    border-bottom: 1px groove #aaa;
}

.commonsectionclass .form-control {
    border-bottom: 1px groove #aaa !important;
}
</style>
<div class="modal fade" id="confirmparentPopup" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirm PIN</h4>
        </div>
        <div class="modal-body">
          <input type="password" id="parentPass" class="form-control commoncs2" placeholder="Enter PIN" value=""  >
          <a href="#parentPass" data-currenteye="show" data-faid="fappass" class="showbtn popsbtn" ><i class="fa fa-eye-slash" id="fappass" aria-hidden="true"></i></a>
        </div>
        <div class="modal-footer">
          <button type="button" id="confirmpasswordbtn" class="btn btn-primary">Confirm <i class="fa fa-spin fa-spinner hideOnLoad" id="checkingprocess3"></i></button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container full-container navb-fixid">
      <div class="navbar-header">
        <div id="showLeft" class="cat-toggle hide"> <span></span> <span></span> <span></span> <span></span> </div>
        <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="offcanvas"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <a class="brand" href="dashboard.php"><img class="img-responsive" src="images/1560272488logo.png" alt="" onerror="this.src='img/logo.png';"></a>
      <div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
                <ul class="nav navbar-nav navbar-left main-icon">
          <li class=""><a href="index.php"><span class="da home"></span><span>Home</span></a></li>
          <li class=" ">
            <a href="live.php"><span class="da live"></span><span>Live Tv</span></a>
          </li>
          <li class=" ">
            <a href="movies.php"><span class="da movie"></span><span>Movies</span></a>
          </li>
          <li class=" " >
            <a href="series.php"><span class="da tv"></span><span>Tv series</span></a>
          </li>
          <li class=" ">
            <a href="radio.php"><span class="da radio"></span><span>Radio</span></a>
          </li>
          <li class=" ">
            <a href="catchup.php"><span class="da catchup"></span><span>Catch Up</span></a>
          </li>
                    
        </ul>
        <ul class="nav navbar-nav navbar-right r-icon">
                      <li class="r-li"><a href="#"" class="logoutBtn"><i class="fa fa-sign-out"></i><span class="r-show">Logout</span></a></li>
                  </ul>
            </div>
      <!--/.nav-collapse --> 
    </div>
  </nav>




  
  <div class="modal fade" id="ConfirmParentPassword" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update PIN</h4>
        </div>
        <div class="modal-body">
              <input type="password" id="poldpassword" class="form-control commoncs2" placeholder="Old PIN" value=""  >
              <a href="#poldpassword" data-currenteye="show" data-faid="faoldpass" class="showbtn popsbtn" ><i class="fa fa-eye-slash" id="faoldpass" aria-hidden="true"></i></a>
              <br>
              <input type="password" id="pmainpassword" class="form-control commoncs2" placeholder="New PIN" value=""  >
              <a href="#pmainpassword" data-currenteye="show" data-faid="fanewpass" class="showbtn popsbtn" ><i class="fa fa-eye-slash" id="fanewpass" aria-hidden="true"></i></a>
              <br>
              <input type="password" id="pconnpassword" class="form-control commoncs2" placeholder="Confirm PIN" value=""  >
              <a href="#pconnpassword" data-currenteye="show" data-faid="faconpass" class="showbtn popsbtn" ><i class="fa fa-eye-slash" id="faconpass" aria-hidden="true"></i></a>
        </div>
        <div class="modal-footer">
          <button type="button" id="updateparentpasswordbtn" class="btn btn-primary">Update <i class="fa fa-spin fa-spinner hideOnLoad" id="checkingprocess2"></i></button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="container-fluid">
  <center id="fullLoader" class="hideOnLoad"><img src="images/roundloader.gif"><p class="text-center">Carregando ...</p></center>
  
  <div class="col-md-12 container-holder">
    <div class="container col-md-8 col-md-offset-2">
        <h2 class="text-center heading main-sheading">SETTINGS</h2>
        <div class="col-md-12 commonsectionclass ">
          <table class="table table-bordered">
            <tr>
              <td colspan="2">
                  <h3 class="SettingsHeadings">Player Settings</h3>
              </td>
            </tr>
            <tr class="hideOnLoad ">
              <td class="common-td">
                Live Player
              </td>
              <td>
                <select id="live_player" class="form-control">
                  <option selected='selected' value="JW Player">JW Player</option>
                  <!-- <option  value="Flow player">Flow player</option> -->
                </select>
              </td>
            </tr>
            <tr class="">
              <td class="common-td">
                Select default player for movies section
              </td>
              <td>
                <select  id="movie_player" class="form-control">
                  <option selected='selected' value="JW Player">JW Player</option>
                  <option  value="Flow player">Flow player</option>
                  <option  value="AJ player">AJ player</option>
                </select>
              </td>
            </tr>
            <tr class="">
              <td class="common-td"> 
                Select default player for Series section
              </td>
              <td>
                <select id="series_player" class="form-control">
                  <option selected='selected' value="JW Player">JW Player</option>                  
                  <option  value="Flow player">Flow player</option>
                  <option  value="AJ player">AJ player</option>
                </select>
              </td>
            </tr>
         </table>  
        </div>
        <div class="col-md-12 commonsectionclass"> 
         <table class="table table-bordered"> 
            <tr>
              <td colspan="2">
                  <h3 class="SettingsHeadings">Time Settings</h3>
              </td>
            </tr>
            <tr>
              <td class="common-td">
                Time Format
              </td>
              <td>
                <select id="timeformat" class="form-control">
                    <option value="12" selected='selected'>12 Hours Format</option>
                    <option value="24" >24 Hours Format</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="common-td">
                Epg Time Shift
              </td>
              <td>
                <select id="epgtimeshift" class="form-control">
                                        <option value="-12" >-12</option>
                                          <option value="-11" >-11</option>
                                          <option value="-10" >-10</option>
                                          <option value="-9" >-9</option>
                                          <option value="-8" >-8</option>
                                          <option value="-7" >-7</option>
                                          <option value="-6" >-6</option>
                                          <option value="-5" >-5</option>
                                          <option value="-4" >-4</option>
                                          <option value="-3" >-3</option>
                                          <option value="-2" >-2</option>
                                          <option value="-1" >-1</option>
                                      <option value="0" selected='selected'>0</option>
                                        <option value="+1" >+1</option>
                                          <option value="+2" >+2</option>
                                          <option value="+3" >+3</option>
                                          <option value="+4" >+4</option>
                                          <option value="+5" >+5</option>
                                          <option value="+6" >+6</option>
                                          <option value="+7" >+7</option>
                                          <option value="+8" >+8</option>
                                          <option value="+9" >+9</option>
                                          <option value="+10" >+10</option>
                                          <option value="+11" >+11</option>
                                          <option value="+12" >+12</option>
                                    </select>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-12 commonsectionclass">  
         <table class="table table-bordered"> 
            <tr>
              <td colspan="2">
                  <h3 class="SettingsHeadings" id="parentheading">Parental Control Setting</h3>
              </td>
            </tr>            
            <tr>
              <td class="common-td">
                <div class="row">
                  <div class="col-md-12" style="margin-top: 16px; text-align: center;">
                    <span id="showentext" style="position: relative; top: -15px;">Disable</span>
                    <label class="switch ">
                      <input type="checkbox" id="enablecheckebox" checked data-afterenable="1" >
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              </td>
              <td style="height: 80px">
                                      <div class="row" style="text-align: center;">
                        <button id="UpdateParentPassword" class="btn btn-primary">Update PIN</button>
                        <input type="hidden" id="editpassword" >
                    </div>
                                  </td>
            </tr>
            
          </table>
        </div>
          <div class="col-md-12" >
          <p style="text-align: right;color: #717171;margin: 0;">V 1.5</p>
          </div>
          <div class="col-md-12" style="margin-bottom: 10px;">
            <center>

             <div class="alert alert-success " id="SuccessMessage">
                <strong>Success!</strong> Changes Saved Successfully.
             </div>
            <button class="btn btn-primary rippler rippler-default" id="SaveSettings">Save Changes <i class="fa fa-spin fa-spinner hideOnLoad" id="checkingprocess"></i></button></center>
          </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
   $(document).ready(function(){
      $(".commoncs").click(function(){
          if ( $(this).is('[readonly]') ) { 
            swal({
                  title: 'Error!',
                  text: 'Please Enable First!!!',
                  icon: 'warning'
                 });
          }
      });

      $(".showbtn").click(function(e){
          e.preventDefault();
          var currenteye = $(this).data('currenteye');
          var InputID = $(this).attr('href')
          var faid = $(this).data('faid');
          if(currenteye == "hide")
          {
          	$(this).data('currenteye','show');
          	$(InputID).attr('type','password');
          	$("#"+faid).removeClass("fa fa-eye");
          	$("#"+faid).addClass("fa fa-eye-slash");
          }
          else
          {
          	$(this).data('currenteye','hide')
          	$(InputID).attr('type','text');
          	$("#"+faid).removeClass("fa fa-eye-slash");
          	$("#"+faid).addClass("fa fa-eye");
          }
      });

      checkboxfunction();
      $('#UpdateParentPassword').click(function(){
          $('#ConfirmParentPassword').modal('show');
      });
      $('#enablecheckebox').click(function(e){
          if($(this).data('afterenable') == 1)
          {
            e.preventDefault();
/*            $("#parentPass").addClass("addredborder");*/
            $("#parentPass input[type=password]").focus();
            $('#confirmparentPopup').modal('show');

          }
          else
          {
            checkboxfunction();
          }
      });

      $('#confirmpasswordbtn').click(function(){   
          var  parentenable = "on";
          var  parentenableMessage = "Enabled";
          if($('#enablecheckebox').prop('checked') == true)
          {
             parentenable = "";   
             parentenableMessage = "Disabled";  
          } 
          $("#parentPass").removeClass('addredborder');    
          var parentPass = $("#parentPass").val();
          if(parentPass == "")
          {
            $("#parentPass").addClass('addredborder');
          }
          else
          {
            $('#checkingprocess3').removeClass('hideOnLoad');
            jQuery.ajax({
            type:"POST",
            url:"includes/ajax-control.php",
            dataType:"text",
            data:{
              action:'confirm_parentpassword',
              parentPass:parentPass
            },  
              success:function(response2){ 
                $('#checkingprocess3').addClass('hideOnLoad');
                 if(response2 != 0)
                 {
                    var savedparentpassword = "TESTE";
                    var live_player = $("#live_player");
                    var movie_player = $("#movie_player");
                    var series_player = $("#series_player");
                    var epgtimeshift_selector = $("#epgtimeshift");
                    var timeformat_selector = $("#timeformat");

                    var live_player_val = live_player.val();
                    var movie_player_val = movie_player.val();
                    var series_player_val = series_player.val();
                    var epgtimeshift_val = epgtimeshift_selector.val();
                    var timeformat_val = timeformat_selector.val();
                    jQuery.ajax({
                      type:"POST",
                      url:"includes/ajax-control.php",
                      dataType:"text",
                      data:{
                      action:'SaveSettings',
                      live_player_val:live_player_val,
                      movie_player_val:movie_player_val,
                      series_player_val:series_player_val,
                      epgtimeshift_val:epgtimeshift_val,
                      parentenable:parentenable,
                      parentmainpassword_val:savedparentpassword,
                      timeformat_val:timeformat_val
                      },  
                        success:function(response2){
                           $('#checkingprocess2').addClass('hideOnLoad');
                           swal({
                            text: 'PIN Successfully '+parentenableMessage,
                            button:false,
                            icon: 'success'
                           });
                           setTimeout (function(){
                            swal.close();
                            location.reload();
                           },2000)
                           /*$('#SuccessMessage').animate({'top':'67px'}, 300 );
                           setTimeout (function(){
                            $('#SuccessMessage').animate({'top':'-100%'}, 300 );
                           },2000)*/
                        }
                    });
                    /*$('#parentPass').val('');
                    $('#confirmparentPopup').modal('hide'); 
                    if($('#enablecheckebox').prop('checked') == true)
                    {
                      $('#showentext').text('Enable');
                      $('#enablecheckebox').prop('checked', false);  
                      $('#UpdateParentPassword').attr("disabled", true);
                    }
                    else
                    {
                      $('#showentext').text('Disable');
                      $('#enablecheckebox').prop('checked', true);
                      $('#UpdateParentPassword').attr("disabled", false);
                    } */
                 }
                 else
                 {
                    swal({
                        title: 'Error!',
                        text: 'Invalid PIN !!!',
                        icon: 'warning'
                       });
                 }             
              }
            });
          }
      });

      //Update Parent Password Section..
      $('#updateparentpasswordbtn').click(function(){
          var updatevalidationcondition = 1;
          var savedparentpassword = "TESTE";
          $(".commoncs2").removeClass("addredborder");
          var live_player = $("#live_player");
          var movie_player = $("#movie_player");
          var series_player = $("#series_player");
          var epgtimeshift_selector = $("#epgtimeshift");
          var timeformat_selector = $("#timeformat");

          var poldpassword = $("#poldpassword");
          var pmainpassword = $("#pmainpassword");
          var pconnpassword = $("#pconnpassword");

          var live_player_val = live_player.val();
          var movie_player_val = movie_player.val();
          var series_player_val = series_player.val();
          var epgtimeshift_val = epgtimeshift_selector.val();
          var timeformat_val = timeformat_selector.val();

          var poldpassword_val = poldpassword.val();
          var pmainpassword_val = pmainpassword.val();
          var pconnpassword_val = pconnpassword.val();

          if(poldpassword_val == "")
          {
            updatevalidationcondition = 0;
            $("#poldpassword").addClass('addredborder');
          }
          if(pmainpassword_val == "")
          {
            updatevalidationcondition = 0;
            $("#pmainpassword").addClass('addredborder');
          }
          if(pconnpassword_val == "")
          {
            updatevalidationcondition = 0;
            $("#pconnpassword").addClass('addredborder');
          }

          if(updatevalidationcondition == 1)
          {
              if(poldpassword_val != savedparentpassword)
              {
                swal({
                  title: 'Error!',
                  text: 'Old PIN is incorrect !!!',
                  icon: 'warning'
                 });
                 updatevalidationcondition = 0;
              }
          }

          if(updatevalidationcondition == 1)
          {
              if(pmainpassword_val != pconnpassword_val)
                  {
                    swal({
                      title: 'Error!',
                      text: 'New PIN does not matach with confirm PIN !!!',
                      icon: 'warning'
                     });
                    updatevalidationcondition = 0;
                  }
          }
          
          if(updatevalidationcondition == 1)
          {
            $('#checkingprocess2').removeClass('hideOnLoad');
            jQuery.ajax({
              type:"POST",
              url:"includes/ajax-control.php",
              dataType:"text",
              data:{
              action:'SaveSettings',
              live_player_val:live_player_val,
              movie_player_val:movie_player_val,
              series_player_val:series_player_val,
              epgtimeshift_val:epgtimeshift_val,
              parentenable:"on",
              parentmainpassword_val:pmainpassword_val,
              timeformat_val:timeformat_val
              },  
                success:function(response2){
                   $('#checkingprocess2').addClass('hideOnLoad');
                   swal({
                    text: 'PIN Successfully Upadeted',
                    button:false,
                    icon: 'success'
                   });
                   setTimeout (function(){
                    swal.close();
                    location.reload();
                   },2000)
                   /*$('#SuccessMessage').animate({'top':'67px'}, 300 );
                   setTimeout (function(){
                    $('#SuccessMessage').animate({'top':'-100%'}, 300 );
                   },2000)*/
                }
              });
          }


      });
      $(document).on("click", "#SaveSettings", function(){
        SaveSettingsFunction();
      });
    });

   function checkboxfunction()
   {
      $(".commoncs").removeClass("addredborder");
      if($('#enablecheckebox').prop('checked') == true)
          {
            $('.showbtn').removeClass('hideOnLoad');
            $('#showentext').text('Disable');
            $('.commoncs').removeClass('disableInputs');
            $('.commoncs').attr("readonly", false);
            $('#UpdateParentPassword').attr("disabled", false);
          }
          else
          {
            $('.showbtn').removeClass('hideOnLoad');
            $('#showentext').text('Enable');
            $('.commoncs').addClass('disableInputs');
            $('.commoncs').attr("readonly", true);
            $('#UpdateParentPassword').attr("disabled", true);
          }
   }

function SaveSettingsFunction()
{
  $(".commoncs").removeClass("addredborder");
  var parentenable = "";
  var validationcondition = 1;
  var parentmainpassword_val = "TESTE";
   
  if($('#enablecheckebox').prop('checked') == true)
  {
      parentenable = "on";
      if($("#UpdateParentPassword").length == 0)
      {
        parentmainpassword_val = $("#parentmainpassword").val();
        parentconpassword_val = $("#parentconpassword").val();
        if(parentmainpassword_val == "")
        {
          validationcondition = 0;
          $("#parentmainpassword").addClass('addredborder');
        }

        if(parentconpassword_val == "")
        {
          validationcondition = 0;
          $("#parentconpassword").addClass('addredborder');
        }
        if(parentmainpassword_val != parentconpassword_val)
        {
          swal({
            title: 'Error!',
            text: 'New PIN does not matach with confirm PIN !!!',
            icon: 'warning'
           });
          validationcondition = 0;
        } 
      }
  }

  if(validationcondition == 1)
  {
    
    $('#checkingprocess').removeClass('hideOnLoad');
    var live_player = $("#live_player");
    var movie_player = $("#movie_player");
    var series_player = $("#series_player");
    var epgtimeshift_selector = $("#epgtimeshift");
    var timeformat_selector = $("#timeformat");

    var live_player_val = live_player.val();
    var movie_player_val = movie_player.val();
    var series_player_val = series_player.val();
    var epgtimeshift_val = epgtimeshift_selector.val();
    var timeformat_val = timeformat_selector.val();

    jQuery.ajax({
      type:"POST",
      url:"includes/ajax-control.php",
      dataType:"text",
      data:{
      action:'SaveSettings',
      live_player_val:live_player_val,
      movie_player_val:movie_player_val,
      series_player_val:series_player_val,
      epgtimeshift_val:epgtimeshift_val,
      parentenable:parentenable,
      parentmainpassword_val:parentmainpassword_val,
      timeformat_val:timeformat_val
      },  
        success:function(response2){
           $('#checkingprocess').addClass('hideOnLoad');
           swal({
            text: 'Settings saved',
            button:false,
            icon: 'success'
           });
           setTimeout (function(){
            swal.close();
            location.reload();
           },2000)
           /*$('#SuccessMessage').animate({'top':'67px'}, 300 );
           setTimeout (function(){
            $('#SuccessMessage').animate({'top':'-100%'}, 300 );
           },2000)*/
        }
      });  
  }
}   
</script>
    </div>
<div class="pattern-over"></div>
<!--- Body pattern--->
  <img class="body-bg" src="images/bg.jpg" alt=""><!--- Body Background---> 
<!-- Movie MODAL CODE -->
<div class="modal fade movie-popup" id="movieModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <!-- /.modal-content -->
    </div>
  <!-- modal-dialog --> 
 <!--  <img class="body-bg" src="images/mainBlurBG.jpg" alt=""> --><!--- Body Background--> 
</div>

<div class="modal fade movie-popup" id="accountModal1"  tabindex="-1" role="dialog" aria-labelledby="AccountModal" aria-hidden="true" style="z-index: 999;">
  <div class="modal-dialog">
   <div class="modal-content">
          <div class="modal-header" style="border:0;"> <span class="p-close" data-dismiss="modal" aria-hidden="true">x</span> </div>
          <div class="modal-body">
            <div class="popup-content t-s">
              

                   <div class="info_set clearfix" style="width:50%; position: relative; left: 25%; margin-top: 5%; color: #000; background: #fff">
<h1 class="text-center" style="color: #000;">Account Information</h1>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

                         <span>Username</span>

                         <p style="width: 100%; overflow: hidden; text-overflow: ellipsis;" title="tes4589">tes4589</p>

                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

                         <span>Status</span>

                         <p>Active</p>

                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

                         <span>Expiry date</span>

                         <p>
                             October 01, 2019                         </p>

                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

                         <span>Is trial</span>

                         <p>

                             Yes                         </p>

                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

                         <span>Active Connections</span>

                         <p>0</p>

                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

                         <span>Created at</span>

                         <p>
                          October 01, 2019                         </p>

                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">

                         <span>Max connections</span>

                         <p>1</p>

                      </div>

                   </div>                       
              </div>
            </div>
          </div>
    <!-- /.modal-content -->
    </div>
  <!-- modal-dialog --> 
 <!--  <img class="body-bg" src="images/mainBlurBG.jpg" alt=""> --><!--- Body Background---> 
</div>
<!--Movie-popup End--> 

<!--Saerch-popup Start-->

  <form>
  <div id="search">
      <button type="button" class="close">×</button>
          <input type="search" value="" id="SearchData" placeholder="Digite uma palavra chave" autocomplete="off"/>
          <button type="submit"  id="SearchBtn" class="btn btn-primary">Pesquisar</button>
  </div>
</form>



<!-- <div id="search">
    <button type="button" class="close">×</button>
        <input type="search" value="" id="SearchData" placeholder="Digite uma palavra chave" />
        <button type="submit"  id="SearchBtn" class="btn btn-primary">Pesquisar</button>
</div> -->
<!--Saerch-popup End-->
<!-- jQuery (JavaScript plugins) --> 
<script>
  $(document).ready(function(){  
    $('#SearchBtn_custom').click(function(e){
      $('.SerchResult').addClass('hideOnLoad');
      var searchquery = $('#SearchData').val();
      var Activepage = $('#activepage').val();
      var ActiveCategoryId = $('.cbp-spmenu').find('.active').attr('data-categoryid');
      var MoviesContainer = $('#MoviesContainer');
      var SeriesContainer = $('#SeriesContainer');     
       if(searchquery.length == 0){                   
        $('.loader-submit').addClass('hideOnLoad');       
        return false;
       }
      $('.loader-submit').removeClass('hideOnLoad');
      $(document).keypress(function(e) {
        if(e.which == 13) {
            //$('#search').addClass('open');
            $('.loader-submit').addClass('hideOnLoad');           
            if(searchquery.length == 0){
              e.preventDefault();              
              $('.loader-submit').addClass('hideOnLoad');
              return false;
            }
        }
      }); 

        if(searchquery.length !== 0)
        {
          if(ActiveCategoryId == "FAVOURITES")
          {
            callSearchFun();
            $('.loader-submit').addClass('hideOnLoad');
            $('#SearchData').val(''); 
            $('#searchOf').html(searchquery);
            $('html, body').animate({
                scrollTop: $(".SerchResult").offset().top                               
            }, 2000);
          }
          else
          {
            $("#NoResultFound").addClass("hideOnLoad");
            $("#fullLoader").removeClass("hideOnLoad");
            jQuery.ajax({
                type:"POST",
                url:"includes/ajax-control.php",
                dataType:"text",
                data:{
                action:'searchQueryWithCatgoryId',
                categoryID:ActiveCategoryId,
                PageSection:Activepage,
                Searchfor:searchquery,
                hostURL: "http://sv1.cinetv.vip:8880/"
                },  
                  success:function(response2){ 
                    $('.loader-submit').addClass('hideOnLoad');
                    $('#fullLoader').addClass('hideOnLoad');
                    $('#search').removeClass('open');
                    $('#SearchData').val('');
                    if(response2 != "0" && response2.trim() != "")
                    {
                      
                      if(Activepage == "movies"){                
                        MoviesContainer.html('');
                        MoviesContainer.html(response2);
                        MoviesContainer.removeClass('hideOnLoad');
                        $('.SerchResult').removeClass('hideOnLoad');
                        $('#searchOf').html(searchquery);
                        setformatOfListsByClass('.thumb-b');
                        jQuery('html, body').animate({
                             scrollTop: jQuery("#posts").offset().top                               
                        }, 2000);
                      }
                      if(Activepage == "series"){
                        SeriesContainer.html('');
                        SeriesContainer.html(response2);
                        SeriesContainer.removeClass('hideOnLoad');
                        $('#searchOf').html(searchquery);
                        SeriesContainer.css('margin-bottom','50px !important');
                        $('.SerchResult').removeClass('hideOnLoad');                    
                        setformatOfListsByClass('.thumb-b');
                        jQuery('html, body').animate({
                             scrollTop: jQuery("#posts").offset().top                               
                        }, 2000);
                      }                    
                       $(document).find(".rippler").rippler({
                          effectClass      :  'rippler-effect'
                          ,effectSize      :  0      // Default size (width & height)
                          ,addElement      :  'div'   // e.g. 'svg'(feature)
                          ,duration        :  400
                        });
                    }
                    else
                    {
                        $("#NoResultFound").removeClass("hideOnLoad");
                        $('.SerchResult').removeClass('hideOnLoad');
                        MoviesContainer.html('');
                        SeriesContainer.html('');
                        $('#searchOf').html(searchquery);
                        jQuery('html, body').animate({
                             scrollTop: jQuery(".SerchResult").offset().top                               
                        }, 2000);
                    }                    
                  }
            });
          }
        }else{
          $('.loader-submit').addClass('hideOnLoad');       
          return false;
        }
    });

  });
</script>

<script src="js/offcanvas.js"></script> 
<script src="js/bootstrap.js"></script> 
<script src="js/classie.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<!-- <script src="js/scrollbar.js"></script> --> 
<script src="js/jquery.infinitescroll.min.js"></script> 
<script src="js/freewall.js"></script> 
<script type="text/javascript" src="js/Manualcustom.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script src='https://content.jwplatform.com/libraries/fgbTqCCh.js'></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script> -->
<script src="js/jquery.rippler.min.js"></script>




<script>
/*-------- Load more Start  ----------*/
$(document).ready(function() {

$(document).find(".rippler, li").rippler({
    effectClass      :  'rippler-effect'
    ,effectSize      :  0      // Default size (width & height)
    ,addElement      :  'div'   // e.g. 'svg'(feature)
    ,duration        :  400
  });

  $('#accountModal').click(function(){
    $('#accountModal1').modal('show');
  })

$('#cbp-spmenu-s1 li a').click(function(){
  $('#cbp-spmenu-s1 li a').removeClass('active');
  $(this).addClass('active');

    classie.toggle( showLeft, 'active' );
    classie.toggle( menuLeft, 'cbp-spmenu-open' );
    $('.cat-toggle').toggleClass('open');
})

$(document).on('click','.showCast',function(){
  
  $(this).parent('.i-cast').toggleClass('openCast');
  
  if($(this).text() == 'Show Cast')
  {
    $(this).text('Hide Cast');
  }
  else
  {
    $(this).text('Show Cast');
  }
  

})
$('#menuModal').on('hidden.bs.modal', function () {
  clearInt();
   $('#player-holder').html('');
   $('.backToInfo').addClass('hideOnLoad');
   $(document).find('.PlayerHolder div').html('').addClass('hideOnLoad');
   clearInt();
})

$(document).on('click','.backToInfo',function(){
  if($('#player-holder').hasClass('flowplayer'))
  {
   var container = document.getElementById("player-holder");
    flowplayer(container).shutdown(); 
  }
  
  $('#player-holder').html('');

  $('#player-holder, .backToInfo').addClass('hideOnLoad');

    var episID = $(this).data('episid');
    if(episID)
    {
      $('#epis-'+episID+'').removeClass('hideOnLoad');
    }
    else
    {
      $('.poster-details').removeClass('hideOnLoad');
    }
    clearInt();
  })

  
  setInterval(function(){
  var date = new Date();
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  $('.time').html(strTime);
  },1000)
  /*setInterval(function(){
  var hr = date.getHours();
  var mins = date.getMinutes();
    $('.time').html(hr+':'+mins)
  },1000)*/
var win = $(window);

// Each time the user scrolls
/*win.scroll(function() {
  // End of the document reached?
  if ($(document).height() - win.height() == win.scrollTop()) {
    $('#loading').show();

    $.ajax({
      url: 'get-post.php',
      dataType: 'html',
      success: function(html) {
        $('#posts ul').append(html);
        $('#loading').hide();
      }
    });
  }
});*/
});
/*-------- Load more End ----------*/
/*-------- Grids Start ----------*/
$(function() {
        $(".free-wall").each(function() {
          var wall = new Freewall(this);
          wall.reset({
            selector: '.thumb-b',
            animate: true,
            cellW: 185,
            cellH: 278,
            fixSize: 0,
            gutterY: 0,
            gutterX: -15,
            onResize: function() {
              wall.fitWidth();
            }
          })
          wall.fitWidth();
        });
        $(window).trigger("resize");
      });
/*-------- Grids End ----------*/



</script>
</body>
</html>
