<?php session_start(); ?>
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
	  <script src="js/mediaPlayers.js"></script> 
	  <script src="js/flowplayer/flowplayer.min.js"></script>
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
         <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <h3>Categorias</h3>
            <ul>
			   <?php foreach(array_keys($_SESSION['types']['movies']) as $groupName) { ?>
               <li>
                  <a onclick="getData('<?php echo $groupName; ?>')" data-CategoryID="all"  data-pcon="0" class="active onloadCallCategory">
					<?php echo $_SESSION['data'][$groupName]['groupName']; ?>          
				  </a>
               </li>
			   <?php } ?>
            </ul>
            <!-- <form class="sort">
               <label>Sort By:</label>
               <div class="s-list">
                 <select>
                   <option>Title</option>
                   <option>Year</option>
                   <option>Date added</option>
                   <option>Popularity</option>
                 </select>
               </div>
               </form> -->
         </nav>
         <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container full-container navb-fixid">
               <div class="navbar-header">
                  <div id="showLeft" class="cat-toggle"> <span></span> <span></span> <span></span> <span></span> </div>
                  <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="offcanvas"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
               </div>
               <a class="brand" href="dashboard.php"><img class="img-responsive" src="images/1560272488logo.png" alt="" onerror="this.src='img/logo.png';"></a>
               <div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
                  <ul class="nav navbar-nav navbar-left main-icon">
                     <li class=""><a href="dashboard.php"><span class="da home"></span><span>Inicio</span></a></li>
                     <li class=" ">
                        <a href="live.php"><span class="da live"></span><span>TV</span></a>
                     </li>
                     <li class="active ">
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
                     <li class="r-li"><a href="#"" class="logoutBtn"><i class="fa fa-sign-out"></i><span class="r-show">Sair</span></a></li>
                  </ul>
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
                     <button type="button" id="savesorting" data-sortin="movies" class="btn btn-primary">
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
         <p class="SerchResult hideOnLoad">
            Search Result of <span id="searchOf">American</span>
            <span class="clearSearch">Limpar Pesquisa</span>
         </p>
         <h1 id="NoResultFound" class="hideOnLoad">Nada encontrado!!</h1>
         <div id="posts">
            <center id="fullLoader">
               <img src="images/roundloader.gif"  alt="tv image"> 
               <p class="text-center">Carregando ...</p>
            </center>
            <ul class="free-wall grid effect-3 videoSection hideOnLoad" id="MoviesContainer">
            </ul>
         </div>
      </div>
      <!--- Body Content End---> 
      <!-- MODAL CODE -->
      <div class="modal fade movie-popup" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-custom">
            <div class="modal-content">
               <div class="modal-header" style="border:0;"> <span class="p-close" data-dismiss="modal" aria-hidden="true">x</span> </div>
               <div class="modal-body">
                  <div class="popup-content">
                     <div class="col-sm-5 col-lg-3 col-md-4 col-xs-7">
                        <div class="poster">
                           <div class="poster-img"><img src="img/poster.jpg" alt="" class="img-responsive"></div>
                           <div class="ratting-bar row">
                              <p class="pull-left">Overall rate:</p>
                              <div class="stars pull-right"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-7 col-lg-9 col-md-8 col-xs-12">
                        <div class="poster-details">
                           <h2>SAN ANDREAS</h2>
                           <ul>
                              <li class="i-year">2016</li>
                              <li class="i-duration">114 min</li>
                              <li class="i-movie">Action</li>
                              <li class="i-trailer"><a href="#">Watch trailer</a></li>
                           </ul>
                           <p>In the aftermath of a massive earthquake in California, a rescue-chopper pilot <br>
                              makes a dangerous journey across the state in order to rescue his estranged <br>
                              daughter.
                           </p>
                           <div class="fav row">
                              <div class="res-list">
                                 <select>
                                    <option>480p</option>
                                    <option selected>720p</option>
                                    <option>1080p</option>
                                 </select>
                              </div>
                              <button class="gd">3D</button>
                              <button class="add-fav"></button>
                           </div>
                           <div class="watch-now row">
                              <button class="rippler rippler-default">watch it now</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.modal-content --> 
         </div>
         <!-- /.modal-dialog --> 
         <script src='https://content.jwplatform.com/libraries/fgbTqCCh.js'></script>
         <!-- <script src='js/ajPlayer.js'></script> -->
         <script src='js/flowplayer/flowplayer.js'></script>
         <script src='js/mediaPlayers.js'></script>
         <link rel="stylesheet" href="js/flowplayer/skin/skin.css" media="screen">
         <script type="text/javascript">
            $(document).ready(function(){
              if($(document).find('.onloadCallCategory').length != 0 || true)
              {
                var omLoadCategoryID = $(document).find('.onloadCallCategory').data('categoryid');
                var parentControlData = $(document).find('.onloadCallCategory').data('pcon');
                if(parentControlData == 1)
                {
                    getData(omLoadCategoryID);
                }
                else
                {
                  getData(omLoadCategoryID);
                }
                
                $(document).find(".rippler").rippler({
            effectClass      :  'rippler-effect'
            ,effectSize      :  0      // Default size (width & height)
            ,addElement      :  'div'   // e.g. 'svg'(feature)
            ,duration        :  400
            });
              }
              $( document ).on("click", ".Playclick", function(){
                var StreamId = $(this).find('.streamUrl').val();
                var StreamType = $(this).find('.streamId').data('streamtype');
                $('.Playclick').removeClass('playingChanel');
                $(this).addClass('playingChanel');
                getVideoLinkAjax(StreamId,StreamType);  
                
              });   
            
              $('#SearchData').keypress(function (e) {
                  var key = e.which;
                  if(key == 13)  // the enter key code
                  {
                    callSearchFun(); 
                  }
              });
            
            
                $( document ).on("click", ".clearSearch", function(){           
                  var omSearchCategoryID = $('.cbp-spmenu').find('.active').data('categoryid');           
                  getData(omSearchCategoryID);  
                });
            
                $( document ).on("click", ".LoadMoreBtn", function(){
                    $('.LoadingMoreFa').removeClass('hideOnload');
                    var categoryid =$(this).data('categoryid'); 
                    var dataoffset =$(this).data('dataoffset');
                    datalimit = Number(28)+Number(dataoffset);
                    dataoffset = Number(dataoffset)+Number(1); 
                    jQuery.ajax({
                      type:"POST",
                      url:"includes/ajax-control.php",
                      dataType:"text",
                      data:{
		      groupName:window.saveddata,
                      action:'getMoviesDataFromCategoryId',
                      categoryID:categoryid,
                      dataoffset:dataoffset,
                      datalimit:datalimit,
                      hostURL: "http://sv1.cinetv.vip:8880/"
                      },  
                        success:function(response2){ 
                          $('.LoadingMoreFa').addClass('hideOnload');
                          $('.LoadMoreBtn').remove();
                          var MoviesContainer = $('#MoviesContainer');
                          MoviesContainer.append(response2);
                          setformatOfListsByClass('.thumb-b');
                           $('html, body').animate({
                              scrollTop: Number($('.un-'+dataoffset).offset().top)-Number(140)
                            }, 1500);
                           $(document).find(".rippler").rippler({
            effectClass      :  'rippler-effect'
            ,effectSize      :  0      // Default size (width & height)
            ,addElement      :  'div'   // e.g. 'svg'(feature)
            ,duration        :  400
            });
                        }
                      });   
                  });   
            
            });
            
            function callSearchFun()
            {
              $('.LoadMoreBtn').addClass('hideOnLoad');
              var SearchData = $("#SearchData").val();   
               $('.visible-sec').removeClass('visible-sec');
               $('.SerchResult').addClass('hideOnLoad');
               $('#NoResultFound').addClass('hideOnLoad');
               if(SearchData != "")
               {
                  $('.streamList').addClass('hideOnLoad');
                  var moive_namesearch = $('.serch_key');
                  filter = SearchData.toUpperCase();
                  CustomIndex = 0;
                  moive_namesearch.each(function( index ) {
                    if ($( this ).val().toUpperCase().indexOf(filter) > -1) {
                      $("."+$(this).data('parentliclass')).removeClass('hideOnLoad');
                      $("."+$(this).data('parentliclass')).addClass('visible-sec');
                      CustomIndex = 1;
                    }
                  });  
                  if(CustomIndex == 0)
                  {
                      $('#NoResultFound').removeClass('hideOnLoad');
                  }
                  $('#search').removeClass('open');
                  $('#searchOf').text(filter);
                  $('.SerchResult').removeClass('hideOnLoad');
                  setformatOfListsByClass('.visible-sec');
            
               }
               else
               {
                  swal('Enter keyword for search.',{button: false});
                  setTimeout(function(){swal.close();},2000);
               }
            }
            
            function removeSearchSec()
            {
              $('.LoadMoreBtn').removeClass('hideOnLoad');
             $('.SerchResult').addClass('hideOnLoad'); 
             $('#SearchData').val(''); 
             $('#NoResultFound').addClass('hideOnLoad');
             $('.streamList').removeClass('hideOnLoad'); 
              setformatOfListsByClass('.thumb-b');
            }
            
            function confirmparent($categoryID = '', $dataoffset = '0' ,$datalimit = '28')
            {
              getData($categoryID);
            }  
            
            
            function getData($groupName = '', $dataoffset = '0' ,$datalimit = '28')
            {
			window.saveddata = $groupName;
			if(parseInt($groupName) >= 0 || $groupName == "all"){
				$groupName = '0';
				window.saveddata = '0';
			}
            $("#NoResultFound").addClass("hideOnLoad");
            removeSearchSec();
            //$('li .active').removeClass('active');
            $(this).addClass('active'); 
            var MoviesContainer = $('#MoviesContainer');
            $('#fullLoader').removeClass('hideOnLoad');
            MoviesContainer.html('');
            MoviesContainer.addClass('hideOnLoad');
            jQuery.ajax({
                    type:"POST",
                    url:"includes/ajax-control.php",
                    dataType:"text",
                    data:{
                    action:'getMoviesDataFromCategoryId',
                    categoryID:100,
					groupName: $groupName,
                    dataoffset:$dataoffset,
                    datalimit:$datalimit,
                    hostURL: "http://sv1.cinetv.vip:8880/"
                    },  
                      success:function(response2){ 
                        $('#fullLoader').addClass('hideOnLoad');
                        if(response2 != "0" && response2.trim() != "")
                        {
                            MoviesContainer.html('');
                            MoviesContainer.html(response2);
                            MoviesContainer.removeClass('hideOnLoad');
                            setformatOfListsByClass('.thumb-b');
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
                        }
                        /*$getStreamsfromCategory = response2;
                        $('.chanels').html($getStreamsfromCategory);
                        var StreamId = $('.Playclick').first().find('.streamId').val();
                        var StreamType = $('.Playclick').first().find('.streamId').data('streamtype');
                        $('.Playclick').first().addClass('playingChanel');
                        getVideoLinkAjax(StreamId,StreamType);
                        getEPGdata(StreamId);*/
                      }
                    });
            }
            
            function setformatOfListsByClass(ClassName = "")
            {
              $(".free-wall").each(function() {
              var wall = new Freewall(this);
              wall.reset({
                selector: ClassName,
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
              /* $(this).find('.iconImage').parent().parent().addClass('checkingcontrol');
                console.log($(this).find('.iconImage').parent().parent().attr('data-width')+"px");*/
                $(this).find('.iconImage').css('width',$(this).find('.iconImage').parent().parent().attr('data-width')+"px");
                $(this).find('.iconImage').css('height',$(this).find('.iconImage').parent().parent().attr('data-height')+"px");
            });
            $(window).trigger("resize");
            }
            
            function showInfo($type, $groupName = '', $streamID = 0)
            {
            var fullDataVal = $("#fullData-"+$streamID).val();
            /*$('#fullLoader').removeClass('hideOnLoad');*/
            $('.sectionNo'+$streamID+'').addClass('InfoLoading');
            jQuery.ajax({
                    type:"POST",
                    url:"includes/ajax-control.php",
                    dataType:"text",
                    data:{
                    action:'getMovieInfo',
						c: $streamID,
						groupName: $groupName,
						type: $type
                    },  
                      success:function(response2){
                       
                        $('.sectionNo'+$streamID+'').removeClass('InfoLoading');
                        $(document).find('.modal-dialog-custom').html(response2);
                        $('#menuModal').modal('show');
                        $(document).find(".rippler").rippler({
            effectClass      :  'rippler-effect'
            ,effectSize      :  0      // Default size (width & height)
            ,addElement      :  'div'   // e.g. 'svg'(feature)
            ,duration        :  400
            });
                      }
                    })
            
            }
            
            
            function watchMovie($movieUrl)
            {
            $('#player-holder').removeClass('hideOnLoad');
            $('.poster-details').addClass('hideOnLoad');
            $('.backToInfo').removeClass('hideOnLoad');
                    $movieVideoLink = $movieUrl;
                set_jwplayer($movieVideoLink);
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
            <input type="search" value="" id="SearchData" placeholder="Digite uma palavra chave" autocomplete="off" /> 
            <input type="hidden" value="movies" id="activepage"/>               
            <button type="submit"  id="SearchBtn_custom" class="btn btn-primary">Search <span class="loader-submit hideOnLoad"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span></button>
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
      <script src="js/plugin.js"></script>
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
