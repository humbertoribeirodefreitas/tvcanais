<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 */

echo "  </div>\r\n<div class=\"pattern-over\"></div>\r\n<!--- Body pattern--->\r\n";
if ($activePage == "dashboard") {
    echo " \r\n<img class=\"body-bg\" src=\"images/dash_bg.jpg\" alt=\"\"><!--- Body Background---> \r\n";
} else {
    echo "  <img class=\"body-bg\" src=\"images/login_bg.jpg\" alt=\"\"><!--- Body Background---> \r\n";
}
echo "<!-- Movie MODAL CODE -->\r\n<div class=\"modal fade movie-popup\" id=\"movieModal\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">\r\n  <div class=\"modal-dialog\">\r\n    \r\n    <!-- /.modal-content -->\r\n    </div>\r\n  <!-- modal-dialog --> \r\n <!--  <img class=\"body-bg\" src=\"images/mainBlurBG.jpg\" alt=\"\"> --><!--- Body Background--> \r\n</div>\r\n\r\n<div class=\"modal fade movie-popup\" id=\"accountModal1\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"AccountModal\" aria-hidden=\"true\" style=\"z-index: 999;\">\r\n  <div class=\"modal-dialog\">\r\n   <div class=\"modal-content\">\r\n          <div class=\"modal-header\" style=\"border:0;\"> <span class=\"p-close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</span> </div>\r\n          <div class=\"modal-body\">\r\n            <div class=\"popup-content t-s\">\r\n              \r\n\r\n                   <div class=\"info_set clearfix\" style=\"width:50%; position: relative; left: 25%; margin-top: 5%; color: #000; background: #fff\">\r\n<h1 class=\"text-center\" style=\"color: #000;\">Account Information</h1>\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Username</span>\r\n\r\n                         <p style=\"width: 100%; overflow: hidden; text-overflow: ellipsis;\" title=\"";
echo $_SESSION["webTvplayer"]["username"];
echo "\">";
echo $_SESSION["webTvplayer"]["username"];
echo "</p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Status</span>\r\n\r\n                         <p>";
echo $_SESSION["webTvplayer"]["status"];
echo "</p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Expiry date</span>\r\n\r\n                         <p>\r\n                             ";
if ($_SESSION["webTvplayer"]["exp_date"] == "null" || $_SESSION["webTvplayer"]["exp_date"] == "") {
    echo "Unlimited";
} else {
    echo date("F d, Y", $_SESSION["webTvplayer"]["exp_date"]);
}
echo "                         </p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Is trial</span>\r\n\r\n                         <p>\r\n\r\n                             ";
if ($_SESSION["webTvplayer"]["is_trial"] == "0") {
    echo "No";
} else {
    echo "Yes";
}
echo "                         </p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Active Connections</span>\r\n\r\n                         <p>";
echo $_SESSION["webTvplayer"]["active_cons"];
echo "</p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Created at</span>\r\n\r\n                         <p>\r\n                          ";
echo date("F d, Y", $_SESSION["webTvplayer"]["created_at"]);
echo "                         </p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Max connections</span>\r\n\r\n                         <p>";
echo $_SESSION["webTvplayer"]["max_connections"];
echo "</p>\r\n\r\n                      </div>\r\n\r\n                   </div>                       \r\n              </div>\r\n            </div>\r\n          </div>\r\n    <!-- /.modal-content -->\r\n    </div>\r\n  <!-- modal-dialog --> \r\n <!--  <img class=\"body-bg\" src=\"images/mainBlurBG.jpg\" alt=\"\"> --><!--- Body Background---> \r\n</div>\r\n<!--Movie-popup End--> \r\n\r\n<!--Saerch-popup Start-->\r\n<div id=\"search\">\r\n    <button type=\"button\" class=\"close\">×</button>\r\n        <input type=\"search\" value=\"\" id=\"SearchData\" placeholder=\"type keyword(s) here\" />\r\n        <button type=\"submit\"  id=\"SearchBtn\" class=\"btn btn-primary\">Search</button>\r\n</div>\r\n<!--Saerch-popup End-->\r\n<!-- jQuery (JavaScript plugins) --> \r\n\r\n\r\n<script src=\"js/offcanvas.js\"></script> \r\n<script src=\"js/bootstrap.js\"></script> \r\n<script src=\"js/classie.js\"></script> \r\n<script src=\"js/owl.carousel.min.js\"></script> \r\n<!-- <script src=\"js/scrollbar.js\"></script> --> \r\n<script src=\"js/plugin.js\"></script>\r\n<script src=\"js/jquery.infinitescroll.min.js\"></script> \r\n<script src=\"js/freewall.js\"></script> \r\n<script type=\"text/javascript\" src=\"js/Manualcustom.js\"></script>\r\n<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>\r\n<!-- <script src='https://content.jwplatform.com/libraries/fgbTqCCh.js'></script> -->\r\n<!-- <script src=\"//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js\" ></script> -->\r\n<script src=\"js/jquery.rippler.min.js\"></script>\r\n\r\n\r\n\r\n\r\n<script>\r\n/*-------- Load more Start  ----------*/\r\n\$(document).ready(function() {\r\n\r\n\$(document).find(\".rippler, li\").rippler({\r\n    effectClass      :  'rippler-effect'\r\n    ,effectSize      :  0      // Default size (width & height)\r\n    ,addElement      :  'div'   // e.g. 'svg'(feature)\r\n    ,duration        :  400\r\n  });\r\n\r\n";
if (isset($_GET["loggedout"])) {
    echo "swal({\r\n  title: 'Logged out!',text:'You have been logged out Successfully.',icon:'success',buttons: false});\r\nsetTimeout (function(){\r\n          swal.close();\r\n         },2000)\r\n";
}
echo "  \$('#accountModal').click(function(){\r\n    \$('#accountModal1').modal('show');\r\n  })\r\n\r\n\$('#cbp-spmenu-s1 li a').click(function(){\r\n  \$('#cbp-spmenu-s1 li a').removeClass('active');\r\n  \$(this).addClass('active');\r\n\r\n    classie.toggle( showLeft, 'active' );\r\n    classie.toggle( menuLeft, 'cbp-spmenu-open' );\r\n    \$('.cat-toggle').toggleClass('open');\r\n})\r\n\r\n\$(document).on('click','.showCast',function(){\r\n  \r\n  \$(this).parent('.i-cast').toggleClass('openCast');\r\n  \r\n  if(\$(this).text() == 'Show Cast')\r\n  {\r\n    \$(this).text('Hide Cast');\r\n  }\r\n  else\r\n  {\r\n    \$(this).text('Show Cast');\r\n  }\r\n  \r\n\r\n})\r\n\$('#menuModal').on('hidden.bs.modal', function () {\r\n  clearInt();\r\n   \$('#player-holder').html('');\r\n   \$('.backToInfo').addClass('hideOnLoad');\r\n   \$(document).find('.PlayerHolder div').html('').addClass('hideOnLoad');\r\n   clearInt();\r\n})\r\n\r\n\$(document).on('click','.backToInfo',function(){\r\n  if(\$('#player-holder').hasClass('flowplayer'))\r\n  {\r\n   var container = document.getElementById(\"player-holder\");\r\n    flowplayer(container).shutdown(); \r\n  }\r\n  \r\n  \$('#player-holder').html('');\r\n\r\n  \$('#player-holder, .backToInfo').addClass('hideOnLoad');\r\n\r\n    var episID = \$(this).data('episid');\r\n    if(episID)\r\n    {\r\n      \$('#epis-'+episID+'').removeClass('hideOnLoad');\r\n    }\r\n    else\r\n    {\r\n      \$('.poster-details').removeClass('hideOnLoad');\r\n    }\r\n    clearInt();\r\n  })\r\n\r\n  \r\n  setInterval(function(){\r\n  var date = new Date();\r\n  var hours = date.getHours();\r\n  var minutes = date.getMinutes();\r\n  var ampm = hours >= 12 ? 'PM' : 'AM';\r\n  hours = hours % 12;\r\n  hours = hours ? hours : 12; // the hour '0' should be '12'\r\n  minutes = minutes < 10 ? '0'+minutes : minutes;\r\n  var strTime = hours + ':' + minutes + ' ' + ampm;\r\n  \$('.time').html(strTime);\r\n  },1000)\r\n  /*setInterval(function(){\r\n  var hr = date.getHours();\r\n  var mins = date.getMinutes();\r\n    \$('.time').html(hr+':'+mins)\r\n  },1000)*/\r\nvar win = \$(window);\r\n\r\n// Each time the user scrolls\r\n/*win.scroll(function() {\r\n  // End of the document reached?\r\n  if (\$(document).height() - win.height() == win.scrollTop()) {\r\n    \$('#loading').show();\r\n\r\n    \$.ajax({\r\n      url: 'get-post.php',\r\n      dataType: 'html',\r\n      success: function(html) {\r\n        \$('#posts ul').append(html);\r\n        \$('#loading').hide();\r\n      }\r\n    });\r\n  }\r\n});*/\r\n});\r\n/*-------- Load more End ----------*/\r\n/*-------- Grids Start ----------*/\r\n\$(function() {\r\n        \$(\".free-wall\").each(function() {\r\n          var wall = new Freewall(this);\r\n          wall.reset({\r\n            selector: '.thumb-b',\r\n            animate: true,\r\n            cellW: 185,\r\n            cellH: 278,\r\n            fixSize: 0,\r\n            gutterY: 0,\r\n            gutterX: -15,\r\n            onResize: function() {\r\n              wall.fitWidth();\r\n            }\r\n          })\r\n          wall.fitWidth();\r\n        });\r\n        \$(window).trigger(\"resize\");\r\n      });\r\n/*-------- Grids End ----------*/\r\n\r\n\r\n\r\n</script>\r\n</body>\r\n</html>";

?>