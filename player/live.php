<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>TOPFLASH X-PLAYER</title>
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
      <script src="js/fix.hls.js2?d" async="false" sync></script>
      <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/scrollbar.css" rel="stylesheet">
      <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="css/rippler.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script src="https://cdn.jsdelivr.net/npm/hls.js@latest" type="text/javascript"></script>
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
         <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <h3>Categorias</h3>
            <ul>
               <li>
                  <a onclick="if (!window.__cfRLUnblockHandlers) return false; getData('topplus')" data-CategoryID="12" data-pcon="0" class="active onloadCallCategory" data-cf-modified-16cbdd83250b7fe60ca52c4e-="">
                  TOP PLUS
                  </a>
               </li>
            </ul>
         </nav>
         <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container full-container navb-fixid">
               <div class="navbar-header">
                  <div id="showLeft" class="cat-toggle"> <span></span> <span></span> <span></span> <span></span> </div>
                  <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="offcanvas"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
               </div>
               <a class="brand" href="dashboard.php">
                  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="16cbdd83250b7fe60ca52c4e-|49"></script><img class="img-responsive" src="images/1560272488logo.png" alt="" onerror="this.src='img/logo.png';">
               </a>
               <div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
                  <ul class="nav navbar-nav navbar-left main-icon">
                     <li class=""><a href="dashboard.php"><span class="da home"></span><span>Inicio</span></a></li>
                     <li class="active ">
                        <a href="live.php"><span class="da live"></span><span>TV</span></a>
                     </li>
                     <li class=" ">
                        <a href="movies.php"><span class="da movie"></span><span>Filmes</span></a>
                     </li>
                     <li class=" ">
                        <a href="series.php"><span class="da tv"></span><span>Series</span></a>
                     </li>
                     <li class=" ">
                        <a href="radio.php"><span class="da radio"></span><span>Radio</span></a>
                     </li>
                     <li class=" ">
                        <a href="catchup.php"><span class="da catchup"></span><span>Grade</span></a>
                     </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right r-icon">
                     <li class="r-li"><a href="#search"><i class="fa fa-search"></i><span class="r-show"></span></a></li>
                     <li class="r-li"><a href="#sort" data-toggle="modal" data-target="#sortingpopup"><i class="fa fa-sort"></i><span class="r-show"></span></a></li>
                     <li class="r-li "><a href="settings.php"><i class="fa fa-gear"></i><span class="r-show"></span></a></li>
                     <li class="r-li"><a href="#" " class="logoutBtn"><i class="fa fa-sign-out"></i><span class="r-show">Sair</span></a></li>
                  </ul>
               </div>
            </div>
         </nav>
         <style type="text/css">
            .sorting-container span {
            font-size: 16px;
            font-weight: 200;
            cursor: pointer;
            }
         </style>
         <div class="modal fade" id="sortingpopup" role="dialog" data-backdrop="static" data-keyboard="false" style="background: rgba(0, 0, 0, 0.9)">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">
                        <span>
                        <i class="fa fa-sort" id="fappass" aria-hidden="true"></i>&nbsp;
                        Sort According to:
                        </span>
                     </h4>
                  </div>
                  <div class="modal-body">
                     <div class="sorting-container">
                        <label>
                        <input type="radio" name="sorttype" class="sorttype" value="default" checked> &nbsp;<span>Default</span>
                        </label>
                        <br>
                        <label>
                        <input type="radio" name="sorttype" class="sorttype" value="topadded"> &nbsp;<span>Top Added</span>
                        </label>
                        <br>
                        <label>
                        <input type="radio" name="sorttype" class="sorttype" value="asc"> &nbsp;<span>A-Z</span>
                        </label>
                        <br>
                        <label>
                        <input type="radio" name="sorttype" class="sorttype" value="desc"> &nbsp;<span>Z-A</span>
                        </label>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" id="savesorting" data-sortin="live" class="btn btn-primary">
                     Save
                     <i class="fa fa-spin fa-spinner hideOnLoad" id="sortingloader"></i>
                     </button>
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <script type="text/javascript">
            $(document).ready(function(){
              $("#savesorting").click(function(e){
                e.preventDefault();
                var SortIN = $(this).data('sortin');
                var selectedVal = $("input:radio.sorttype:checked").val();
                 $('#sortingloader').removeClass('hideOnload');
                 jQuery.ajax({
                    type:"POST",
                    url:"includes/ajax-control.php",
                    dataType:"text",
                    data:{
                    action:'SaveSortSettings',
                    SortIN:SortIN,
                    selectedVal:selectedVal,
                    hostURL: "http://sv1.cinetv.vip:8880/"
                    },
                    success:function(response2){ 
                      $('#sortingloader').addClass('hideOnload');
                        location.reload();
                    }
                 });
              });
            });
         </script><script src='https://content.jwplatform.com/libraries/fgbTqCCh.js' type="text/javascript"></script>
         <script type="text/javascript">
            function confirmparent(categoryID = '',onload = '')
            {
             if(onload == 1)
             {
               $('.main-fullContainer').addClass('hideOnLoad');
               /*$('.no-reultcontainer').removeClass('hideOnLoad');*/
               $('#fullLoader').addClass('hideOnLoad');
               $('.chanelLoader').hide();
               $('#fullLoader').addClass('hideOnLoad');
               $('.chanels').html("")
               $('.liveEPG').html('').hide();
               $('#player-wrapper').addClass('noResult');
               $('#player-wrapper').html('');
             }
            /* alert("Alert from function is "+categoryID);*/
             $("#confirmpasswordbtn").data('categoryID',categoryID);
             $('#confirmparentPopup').modal('show');
            
             
             
            }
            
             var reconnectInt;
             function getData($groupName = '')
            {
            if(parseInt($groupName) >= 0){
            $groupName = '0';
            }
             if(reconnectInt !== null || reconnectInt !== undefined)
                     {
                       clearInterval(reconnectInt);
                     } 
             removeSearchSec();
             $('.chanels').html('');
             $('.chanelLoader').show().removeClass('hideOnLoad');
              jQuery.ajax({
                       type:"POST",
                       url:"includes/ajax-control.php",
                       dataType:"text",
                       data:{
                       action:'getStreamsFromID',
                       categoryID:12,
            groupName: $groupName,
                       hostURL: "http://sv1.cinetv.vip:8880/"
                       },  
                         success:function(response2){ 
                           $getStreamsfromCategory = response2;
                           $('.chanelLoader').hide();
                           $('#fullLoader').addClass('hideOnLoad');
                           
                           $('.chanels').html($getStreamsfromCategory);
                           var StreamUrl = $('.Playclick').first().find('.streamUrl').val();
                           var StreamType = $('.Playclick').first().find('.streamUrl').data('streamtype');
                           $('.Playclick').first().addClass('playingChanel');
                           $(document).find(".rippler").rippler({
							   effectClass      :  'rippler-effect'
							   ,effectSize      :  0      // Default size (width & height)
							   ,addElement      :  'div'   // e.g. 'svg'(feature)
							   ,duration        :  400
						   });
            
                           $Videolink = StreamUrl;
                           getVideoLinkAjax($Videolink);
                           //getEPGdata(StreamId);
                         }
                       })
            }
            
            
            function getEPGdata($streamID = '')
            {
             $('.liveEPG').html('').hide();
             $('.epgloader').removeClass('hideOnLoad');
            
             var CurrentTime = $("#CurrentTime").val();
             jQuery.ajax({
                       type:"POST",
                       url:"includes/epgdata.php",
                       dataType:"text",
                       data:{
                       action:'GetEpgDataByStreamid',
                       StreamId:$streamID,
                       CurrentTime:CurrentTime,
                       hostURL : "http://sv1.cinetv.vip:8880/" 
                       },  
                       success:function(response){
                         if(response != "0")
                         {
            
                            
            
                          $('.liveEPG').show().html(response);
                          $('.epgloader').addClass('hideOnLoad');
                          if($(document).find('.NowPlayingActive').length >= 1)
                          {
            
                           var scroll = $(document).find('.NowPlayingActive').offset().top;
                           var scrollHolder = $(document).find('.liveEPG').offset().top;
                           scroll = scroll-scrollHolder;
                          
                           $(document).find('.tab-pane.active').animate({
                             scrollTop: (scroll-100)
                           },500); 
                          
                          }
                          
                           
                                             
                                                
                         }
                       }
                     });
            }
            
            async function getVideoLinkAjax($Videolink = "", FailCounter = "")
            {
            $Videolink = await $.get('http://topflash.ml:8880/url.php?url=' + $Videolink).promise();
               //console.log($Videolink);
               $('.Loadicon').remove();
               $LiveVideoLink = $Videolink;
               if(reconnectInt !== null || reconnectInt !== undefined)
                     {
                       clearInterval(reconnectInt);
                     } 
               var player = jwplayer('player-wrapper');
               // Set up the player with an HLS stream that includes timed metadata
               player.setup({
                 "file": $LiveVideoLink,
                 "width":"100%",
                 "aspectratio": "16:9"              
               });
               player.on('play',function(){
                 counter = 0;
                 clearInterval(reconnectInt);
               })
                player.on('error', function() {
               /*var PlayerDIvSelector = $('#player-wrapper');
               PlayerDIvSelector.html('');
               PlayerDIvSelector.attr('class', '');
               PlayerDIvSelector.css('text-align', 'center');
               PlayerDIvSelector.html('<img src="webtv/images/roundloader.gif" alt="tv image">');*/
                   var showText = 1;
                         var PlayerDIvSelector = $('#player-wrapper');
                         PlayerDIvSelector.html('');
                         PlayerDIvSelector.attr('class', '');
                         PlayerDIvSelector.css('text-align', 'center');
                         PlayerDIvSelector.html('<div class="erroronplayer"><span>Playback error, reconnects in 5s ('+showText+'/5)</span></div>');
            
                           
                           console.log('Stream connection lose reconnecting ' +showText +" Time");
                           console.log($(document).find('.jw-title-primary').text() + $(document).find('.jw-title-secondary').text());
                       reconnectLoop($LiveVideoLink,FailCounter);
                       return false;
                 
                
               });
            }
            
            function reconnectLoop(Link,FailCounter)
            {
            
            
             var counter = 0;
                 if(FailCounter == "new")
                       {
                         counter = 0;
                       } 
                       console.log(counter);
                       
                       reconnectInt = setInterval(function()
                       {
                         counter++;
                         if(counter < 5)
                         {
                           var player = jwplayer("player-wrapper").setup({
                             "file": Link,
                             "width": "100%",
                             "aspectratio": "16:9"
                           });
                           player.on('play', function() {
                             counter = 0;
                             clearInterval(reconnectInt);
                           });
                           player.on('error', function(){
                             var showText = Number(counter)+Number(1);
                               var PlayerDIvSelector = $('#player-wrapper');
                               PlayerDIvSelector.html('');
                               PlayerDIvSelector.attr('class', '');
                               PlayerDIvSelector.css('text-align', 'center');
                               PlayerDIvSelector.html('<div class="erroronplayer"><span>Playback error, reconnects in 5s ('+showText+'/5)</span></div>');
            
                                 //counter = Number(counter)+Number(1);
                                 console.log('Stream connection lose reconnecting ' +counter +" Time");
                                 console.log($(document).find('.jw-title-primary').text() + $(document).find('.jw-title-secondary').text());
                                 })
                         }
                         else
                         {
                           
                             clearInterval(reconnectInt);
                             counter = 0;
                             var PlayerDIvSelector = $('#player-wrapper');
                             PlayerDIvSelector.html('');
                             PlayerDIvSelector.attr('class', '');
                             PlayerDIvSelector.css('text-align', 'center');
                             PlayerDIvSelector.html('<div class="erroronplayer"><span>Sorry, this video can not be played.<br> Please try again or pick another video.</span></div>');
                         }
                         
                       },5000);
                         
            }
            $(document).ready(function(){
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
             
             $('#confirmpasswordbtn').click(function(){
               $("#parentPass").removeClass('addredborder');    
               var parentPass = $("#parentPass").val();
               var categoryid = $(this).data('categoryID');
               if(parentPass == "")
               {
                 $("#parentPass").addClass('addredborder');
               }
               else
               {
                 $('#checkingprocess2').removeClass('hideOnLoad');
                 jQuery.ajax({
                 type:"POST",
                 url:"includes/ajax-control.php",
                 dataType:"text",
                 data:{
                   action:'confirm_parentpassword',
                   parentPass:parentPass
                 },  
                   success:function(response2){ 
                     $('#checkingprocess2').addClass('hideOnLoad');
                      if(response2 != 0)
                      {
                         $('#parentPass').val('');
                         $('#confirmparentPopup').modal('hide');   
                          getData(categoryid);        
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
            
            
            
             $('#SearchData').keypress(function (e) {
              var key = e.which;
              if(key == 13)  // the enter key code
               {
                   callSearchFun(); 
               }
             });  
            
             var omLoadCategoryID = $(document).find('.onloadCallCategory').data('categoryid');
             var parentControlData = $(document).find('.onloadCallCategory').data('pcon');
             if(parentControlData == 1)
             {
                 confirmparent(omLoadCategoryID,1);
             }
             else
             {
               getData(omLoadCategoryID);
             }  
             $( document ).on("click", ".Playclick", function(){
                   $('.epgloader').removeClass('hideOnLoad');
                   $('liveEPG').html('');
                   var StreamUrl = $(this).find('.streamUrl').val();
                   var StreamType = $(this).find('.streamUrl').data('streamtype');
                   $('.Playclick').removeClass('playingChanel');
                   $(this).addClass('playingChanel');
            
                   $Videolink = StreamUrl;
                   getVideoLinkAjax($Videolink);  
                   //getEPGdata(StreamUrl);
                    var scroll1 = $(document).find('.video-player1').offset().top;
                           $('body, html').animate({
                             scrollTop: (scroll1-100)
                           },500); 
                });
            
             /*jwplayer("player-wrapper").setup({
                   //flashplayer: "player.swf",
                   file: "",
                   
               });*/
            
                $( document ).on("click", "#SearchBtn", function(){
                        callSearchFun();
                   });
            
                $( document ).on("click", ".clearSearch", function(){
                       removeSearchSec();
                   });
            });
            
            
            function callSearchFun()
            {
             $('#noResultFound').remove();
              var SearchData = $("#SearchData").val();   
              if(SearchData != "")
              {
                 $('.streamList').addClass('hideOnLoad');
                 var moive_namesearch = $('.serch_key');
                 filter = SearchData.toUpperCase();
                 CustomIndex = 0;
                 moive_namesearch.each(function( index ) {
                   if ($( this ).val().toUpperCase().indexOf(filter) > -1) {
                     $("."+$(this).data('parentliclass')).removeClass('hideOnLoad');
                     CustomIndex = 1;
                   }
                 });  
                 if(CustomIndex == 0)
                 {
                     $('.channels-ul').append('<li id="noResultFound">Nada encontrado!!')
                 }
                 $('#search').removeClass('open');
                 $('.clearSearch').removeClass('hideOnLoad');
            
              }
              else
              {
                 swal('Enter keyword for search.',{button: false});
                 setTimeout(function(){swal.close();},2000);
              }
            }
            
            
            function removeSearchSec()
            {
              $('#SearchData').val(''); 
              $('#noResultFound').remove();
              $('.clearSearch').addClass('hideOnLoad'); 
              $('.streamList').removeClass('hideOnLoad'); 
            }
            
             
         </script>
         <style type="text/css">
            .PlayerLoader .erroronplayer {
            position: relative;
            top: 150px;
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
            a.showbtn {
            top: -22px;
            position: relative;
            left: 94%;
            } 
            a.popsbtn {
            top: -32px;
            }
         </style>
         <div class="modal fade" id="confirmparentPopup" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Confirm PIN</h4>
                  </div>
                  <div class="modal-body">
                     <input type="password" id="parentPass" class="form-control commoncs2" placeholder="Enter PIN" value="">
                     <a href="#parentPass" data-currenteye="show" data-faid="fappass" class="showbtn popsbtn"><i class="fa fa-eye-slash" id="fappass" aria-hidden="true"></i></a>
                  </div>
                  <div class="modal-footer">
                     <button type="button" id="confirmpasswordbtn" class="btn btn-primary">Confirm <i class="fa fa-spin fa-spinner hideOnLoad" id="checkingprocess2"></i></button>
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <center id="fullLoader">
               <img src="images/roundloader.gif">
               <p class="text-center">Carregando ...</p>
            </center>
            <input type="hidden" id="CurrentTime" value="1569931972" data-temp="2019 Oct 01 12:12 PM">
            <div class="col-sm-5">
               <h2 style="margin-top: 30px;">Lista de Canais <span class="clearSearch hideOnLoad rippler rippler-default">Limpar Pesquisa</span></h2>
               <div class="channel-list">
                  <div class="chanelLoader hideOnLoad">
                     <center>
                        <img src="images/roundloader.gif">
                        <p class="text-center">CARREGANDO CANAIS</p>
                     </center>
                  </div>
                  <ul class="free-wall chanels channels-ul"></ul>
               </div>
            </div>
            <div class="col-sm-7">
               <div class="video-player1">
                  <div id="player-wrapper" style="text-align: center;">
                     <center class="PlayerLoader">
                        <div class="Loadicon" role="button" tabindex="0" aria-label="Loading">
                           <svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-buffer" viewBox="0 0 240 240" focusable="false">
                              <path id="PloaderIcon" d="M120,186.667a66.667,66.667,0,0,1,0-133.333V40a80,80,0,1,0,80,80H186.667A66.846,66.846,0,0,1,120,186.667Z"></path>
                           </svg>
                        </div>
                     </center>
                  </div>
               </div>
            </div>
            <div class="col-sm-7">
               <div class="playlist">
                  <div class="epgloader hideOnLoad">
                     <center>
                        <img src="images/roundloader.gif">
                        <p class="text-center">CARREGANDO EPG</p>
                     </center>
                  </div>
                  <div class="liveEPG"></div>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-5 hide">
               <h2 style="margin-top: 30px;">TV/All/By Numbers</h2>
               <div class="channel-list">
                  <ul class="free-wall">
                     <li id="video1">
                        <span class="number">1</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>Mega</label>
                     </li>
                     <li id="video2">
                        <span class="number">2</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>A1</label>
                     </li>
                     <li id="video3">
                        <span class="number">3</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>Channel 1</label>
                     </li>
                     <li id="video4">
                        <span class="number">4</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>Global Channel</label>
                     </li>
                     <li>
                        <span class="number">5</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>Channel Mega</label>
                     </li>
                     <li>
                        <span class="number">6</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>Super Stop</label>
                     </li>
                     <li>
                        <span class="number">7</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>Example Channel</label>
                     </li>
                     <li>
                        <span class="number">8</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>A1</label>
                     </li>
                     <li>
                        <span class="number">9</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>Mega Channel</label>
                     </li>
                     <li>
                        <span class="number">10</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>Custom Channel</label>
                     </li>
                     <li>
                        <span class="number">11</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>Tune Up</label>
                     </li>
                     <li>
                        <span class="number">12</span>
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <label>One Channel</label>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="pattern-over"></div>
      <img class="body-bg" src="images/bg.jpg" alt="">
      <div class="modal fade movie-popup" id="movieModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
         </div>
      </div>
      <div class="modal fade movie-popup" id="accountModal1" tabindex="-1" role="dialog" aria-labelledby="AccountModal" aria-hidden="true" style="z-index: 999;">
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
                              October 01, 2019
                           </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                           <span>Is trial</span>
                           <p>
                              Yes
                           </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                           <span>Active Connections</span>
                           <p>0</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                           <span>Created at</span>
                           <p>
                              October 01, 2019
                           </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                           <span>Max connections</span>
                           <p>1</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <form>
         <div id="search">
            <button type="button" class="close">×</button>
            <input type="search" value="" id="SearchData" placeholder="Digite uma palavra chave" autocomplete="off" />
            <button type="submit" id="SearchBtn" class="btn btn-primary">Pesquisar</button>
         </div>
      </form>
      <script type="text/javascript">
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
      <script src="js/offcanvas.js" type="text/javascript"></script>
      <script src="js/bootstrap.js" type="text/javascript"></script>
      <script src="js/classie.js" type="text/javascript"></script>
      <script src="js/owl.carousel.min.js" type="text/javascript"></script>
      <script src="js/plugin.js" type="text/javascript"></script>
      <script src="js/jquery.infinitescroll.min.js" type="text/javascript"></script>
      <script src="js/freewall.js" type="text/javascript"></script>
      <script type="text/javascript" src="js/Manualcustom.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" type="text/javascript"></script>
      <script src="js/jquery.rippler.min.js" type="text/javascript"></script>
      <script type="text/javascript">
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
      <style>
         .epgloader {
         display: none !important;
         }
      </style>
      <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="16cbdd83250b7fe60ca52c4e-|49" defer=""></script>
   </body>
</html>
