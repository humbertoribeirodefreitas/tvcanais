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
         <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container full-container navb-fixid">
               <a class="brand" href="dashboard.php"><img class="img-responsive" src="images/1560272488logo.png" alt="" onerror="this.src='img/logo.png';"></a>
               <div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
                  <ul class="nav navbar-nav navbar-right r-icon">
                     <li><a href="settings.php"><i class="fa fa-gear"></i><span class="r-show"></span></a></li>
                  </ul>
                  <p class="datetime" style="margin-right: 20px;"><span class="time"></span>  <span class="date"> 01-Oct-2019</span></p>
               </div>
               <!--/.nav-collapse --> 
            </div>
         </nav>
         <!-- Sorting Model -->
         <style type="text/css">
            .sorting-container span {
            font-size: 16px;
            font-weight: 200;
            cursor: pointer;
            }
         </style>
         <div class="modal fade" id="sortingpopup" role="dialog" data-backdrop="static" data-keyboard="false" style="background: rgba(0, 0, 0, 0.9)">
            <div class="modal-dialog">
               <!-- Modal content-->
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
                        <input type="radio" name="sorttype" class="sorttype" value="default" checked > &nbsp;<span>Default</span>
                        </label>
                        <br>
                        <label>
                        <input type="radio" name="sorttype" class="sorttype" value="topadded"  > &nbsp;<span>Top Added</span>
                        </label>
                        <br>
                        <label>
                        <input type="radio" name="sorttype" class="sorttype" value="asc"  > &nbsp;<span>A-Z</span>
                        </label>
                        <br>
                        <label>
                        <input type="radio" name="sorttype" class="sorttype" value="desc"  > &nbsp;<span>Z-A</span>
                        </label>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" id="savesorting" data-sortin="dashboard" class="btn btn-primary">
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
         </script>
         <style>
            .messagePerm
            {
            position: absolute;
            width: 70%;
            left: 15%;
            }
            .dontShow
            {
            position: relative;
            bottom: 6px;
            font-size: 11px;
            opacity: 1;
            right: -35px;
            color: #000;
            margin-top: 25px;
            }        
            .herelink {
            color: #a039b1;
            font-weight: 600;
            }
            .liveTV{
            background:#!important;
            }   
            .movieVOD{
            background:#!important;
            }  
            .tvSeries{
            background:#!important;
            } 
         </style>
         <div class="container-fluid">
            <div class="col-md-10 col-md-offset-1">
               <div class="b-content home">
                  <div class="col-md-4 col-sm-4 col-xs-12 ">
                     <a href="live.php">
                        <div class="col-md-12 liveTV rippler rippler-default">
                           <center><img src="img/Live_tv.png"></center>
                           <h3 class="text-center" style="color:;">TV</h3>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12 ">
                     <a href="movies.php">
                        <div class="col-md-12 movieVOD rippler rippler-default">
                           <center><img src="img/on_demand.png"></center>
                           <h3 class="text-center" style="color:;">FILMES</h3>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12 ">
                     <a href="series.php">
                        <div class="col-md-12 tvSeries rippler rippler-default">
                           <center><img src="img/series.png"></center>
                           <h3 class="text-center" style="color:;">SERIES</h3>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-8 col-sm-12 col-xs-12 Mybtns">
                     <div class="col-md-4 col-sm-6 col-xs-12 hide">
                        <a href="" class="btn btn-default center-block rippler rippler-default"><i class="fa fa-book"></i> EPG</a>
                     </div>
                     <div class="col-md-4 col-sm-12 col-xs-12">
                        <a class="btn btn-default center-block btn-lg account rippler rippler-default" id="accountModal" style="color:;background-color:;background-image: url();background-position: center;background-size: cover;"><i class="fa fa-info"></i> CONTA</a>
                     </div>
                     <div class="col-md-4 col-sm-12 col-xs-12 ">
                        <a class="btn btn-default center-block btn-lg catchup rippler rippler-default" href="catchup.php"  style="color:;background-color:;background-image: url();background-position: center;background-size: cover;">
                        <i class="fa fa-clock-o" ></i> TEMPO</a>
                     </div>
                     <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="" class="btn btn-default center-block btn-lg logoutBtn rippler rippler-default"  style="color:;background-color:;background-image: url();background-position: center;background-size: cover;">
                        <i class="fa fa-sign-out" style="padding-top: 0px;"></i> SAIR</a>
                     </div>
                  </div>
                  <h4 class="text-center" style="color: #fff; top: 50px; float:left;width: 100%;position: relative;    text-transform: uppercase;">Licença: Vitalicia</h4>
               </div>
            </div>
         </div>
      </div>
      <div class="pattern-over"></div>
      <!--- Body pattern--->
      <img class="body-bg" src="images/dark-blue-bg.jpg" alt=""><!--- Body Background---> 
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