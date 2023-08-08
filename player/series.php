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
               <li>
                  <a onclick="getData('all')" data-CategoryID="all"  data-pcon="0" class="active onloadCallCategory">
                  All          </a>
               </li>
               <li>
                  <a onclick="getData('768')" data-CategoryID="768"  data-pcon="0" class="">
                  Flash [2014]          </a>
               </li>
               <li>
                  <a onclick="getData('769')" data-CategoryID="769"  data-pcon="0" class="">
                  Project Blue Book [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('770')" data-CategoryID="770"  data-pcon="0" class="">
                  Familia Addams [1992]          </a>
               </li>
               <li>
                  <a onclick="getData('771')" data-CategoryID="771"  data-pcon="0" class="">
                  Rilakkuma e Kaoru [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('772')" data-CategoryID="772"  data-pcon="0" class="">
                  Aqui en la Tierra [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('773')" data-CategoryID="773"  data-pcon="0" class="">
                  Il Miracolo [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('775')" data-CategoryID="775"  data-pcon="0" class="">
                  Cannon Busters [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('776')" data-CategoryID="776"  data-pcon="0" class="">
                  The Family [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('777')" data-CategoryID="777"  data-pcon="0" class="">
                  Fronteira [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('778')" data-CategoryID="778"  data-pcon="0" class="">
                  Jogos Sagrados [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('779')" data-CategoryID="779"  data-pcon="0" class="">
                  Sobrenatural [2005]          </a>
               </li>
               <li>
                  <a onclick="getData('780')" data-CategoryID="780"  data-pcon="0" class="">
                  Diablero [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('781')" data-CategoryID="781"  data-pcon="0" class="">
                  Frontera Verde [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('783')" data-CategoryID="783"  data-pcon="0" class="">
                  Mindhunter [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('784')" data-CategoryID="784"  data-pcon="0" class="">
                  Pesadelos e Paisagens Noturnas [2006]          </a>
               </li>
               <li>
                  <a onclick="getData('785')" data-CategoryID="785"  data-pcon="0" class="">
                  45 Revoluciones [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('786')" data-CategoryID="786"  data-pcon="0" class="">
                  Shippados [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('787')" data-CategoryID="787"  data-pcon="0" class="">
                  Better Than Us [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('788')" data-CategoryID="788"  data-pcon="0" class="">
                  O Mentalista [2008]          </a>
               </li>
               <li>
                  <a onclick="getData('789')" data-CategoryID="789"  data-pcon="0" class="">
                  Os Cavaleiros do Zodiaco [1994]          </a>
               </li>
               <li>
                  <a onclick="getData('791')" data-CategoryID="791"  data-pcon="0" class="">
                  Desventuras em Serie [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('792')" data-CategoryID="792"  data-pcon="0" class="">
                  Jogos Sagrados [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('793')" data-CategoryID="793"  data-pcon="0" class="">
                  Pico Da Neblina [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('799')" data-CategoryID="799"  data-pcon="0" class="">
                  Homem-Aranha [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('800')" data-CategoryID="800"  data-pcon="0" class="">
                  The First - Viagem a Marte [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('801')" data-CategoryID="801"  data-pcon="0" class="">
                  Pesadelo na Cozinha BR [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('802')" data-CategoryID="802"  data-pcon="0" class="">
                  Transformers - Prime [2010]          </a>
               </li>
               <li>
                  <a onclick="getData('803')" data-CategoryID="803"  data-pcon="0" class="">
                  Ultimate Homem-Aranha [2012]          </a>
               </li>
               <li>
                  <a onclick="getData('804')" data-CategoryID="804"  data-pcon="0" class="">
                  Chicago Fire [2012]          </a>
               </li>
               <li>
                  <a onclick="getData('805')" data-CategoryID="805"  data-pcon="0" class="">
                  Chicago Justice - A Servico da Lei [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('806')" data-CategoryID="806"  data-pcon="0" class="">
                  Preacher [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('807')" data-CategoryID="807"  data-pcon="0" class="">
                  This Is Us [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('808')" data-CategoryID="808"  data-pcon="0" class="">
                  Vis a vis [2015]          </a>
               </li>
               <li>
                  <a onclick="getData('811')" data-CategoryID="811"  data-pcon="0" class="">
                  Chicago Med [2015]          </a>
               </li>
               <li>
                  <a onclick="getData('812')" data-CategoryID="812"  data-pcon="0" class="">
                  The A List [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('813')" data-CategoryID="813"  data-pcon="0" class="">
                  Superdetetives [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('814')" data-CategoryID="814"  data-pcon="0" class="">
                  Ray Donovan [2013]          </a>
               </li>
               <li>
                  <a onclick="getData('815')" data-CategoryID="815"  data-pcon="0" class="">
                  The Terror [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('816')" data-CategoryID="816"  data-pcon="0" class="">
                  The Tick [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('818')" data-CategoryID="818"  data-pcon="0" class="">
                  Os 3 La Embaixo - Contos da Arcadia [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('819')" data-CategoryID="819"  data-pcon="0" class="">
                  Undone [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('820')" data-CategoryID="820"  data-pcon="0" class="">
                  Monarca [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('821')" data-CategoryID="821"  data-pcon="0" class="">
                  Inacreditavel [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('822')" data-CategoryID="822"  data-pcon="0" class="">
                  Marianne [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('823')" data-CategoryID="823"  data-pcon="0" class="">
                  O Cristal Encantado - A Era da Resistencia [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('824')" data-CategoryID="824"  data-pcon="0" class="">
                  Os Originais [2013]          </a>
               </li>
               <li>
                  <a onclick="getData('825')" data-CategoryID="825"  data-pcon="0" class="">
                  Black Mirror [2011]          </a>
               </li>
               <li>
                  <a onclick="getData('826')" data-CategoryID="826"  data-pcon="0" class="">
                  Quan Zhi Gao Shou The Kings Avatar [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('827')" data-CategoryID="827"  data-pcon="0" class="">
                  Yami Shibai - Japanese Ghost Stories [2013]          </a>
               </li>
               <li>
                  <a onclick="getData('828')" data-CategoryID="828"  data-pcon="0" class="">
                  Mayans MC [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('829')" data-CategoryID="829"  data-pcon="0" class="">
                  Requiem [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('830')" data-CategoryID="830"  data-pcon="0" class="">
                  Animal Kingdom [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('831')" data-CategoryID="831"  data-pcon="0" class="">
                  Filhos da Anarquia [2008]          </a>
               </li>
               <li>
                  <a onclick="getData('630')" data-CategoryID="630"  data-pcon="0" class="">
                  Stranger Things [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('631')" data-CategoryID="631"  data-pcon="0" class="">
                  La casa de papel [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('632')" data-CategoryID="632"  data-pcon="0" class="">
                  Saint Seya - Os Cavaleiros do Zodiaco [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('633')" data-CategoryID="633"  data-pcon="0" class="">
                  Marvel - Demolidor [2015]          </a>
               </li>
               <li>
                  <a onclick="getData('634')" data-CategoryID="634"  data-pcon="0" class="">
                  Dragon Ball Heroes [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('635')" data-CategoryID="635"  data-pcon="0" class="">
                  Doctor Who [2005]          </a>
               </li>
               <li>
                  <a onclick="getData('636')" data-CategoryID="636"  data-pcon="0" class="">
                  Game of Thrones [2011]          </a>
               </li>
               <li>
                  <a onclick="getData('637')" data-CategoryID="637"  data-pcon="0" class="">
                  Boogiepop wa Warawana [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('638')" data-CategoryID="638"  data-pcon="0" class="">
                  Marvel - Jessica Jones [2015]          </a>
               </li>
               <li>
                  <a onclick="getData('639')" data-CategoryID="639"  data-pcon="0" class="">
                  Marvel - O Justiceiro [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('640')" data-CategoryID="640"  data-pcon="0" class="">
                  Marvel - Agente Carter [2015]          </a>
               </li>
               <li>
                  <a onclick="getData('641')" data-CategoryID="641"  data-pcon="0" class="">
                  Agentes da SHIELD da Marvel [2013]          </a>
               </li>
               <li>
                  <a onclick="getData('642')" data-CategoryID="642"  data-pcon="0" class="">
                  Inumanos da Marvel [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('643')" data-CategoryID="643"  data-pcon="0" class="">
                  Marvel - Luke Cage [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('644')" data-CategoryID="644"  data-pcon="0" class="">
                  Marvel - Os Defensores [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('645')" data-CategoryID="645"  data-pcon="0" class="">
                  Fugitivos da Marvel [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('646')" data-CategoryID="646"  data-pcon="0" class="">
                  Marvel - Punho de Ferro [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('647')" data-CategoryID="647"  data-pcon="0" class="">
                  O Mundo Sombrio de Sabrina [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('648')" data-CategoryID="648"  data-pcon="0" class="">
                  MacGyver - Remake [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('649')" data-CategoryID="649"  data-pcon="0" class="">
                  Templarios [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('650')" data-CategoryID="650"  data-pcon="0" class="">
                  Bull [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('651')" data-CategoryID="651"  data-pcon="0" class="">
                  Years and Years [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('653')" data-CategoryID="653"  data-pcon="0" class="">
                  Coroner [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('654')" data-CategoryID="654"  data-pcon="0" class="">
                  Ransom [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('655')" data-CategoryID="655"  data-pcon="0" class="">
                  The Walking Dead [2010]          </a>
               </li>
               <li>
                  <a onclick="getData('656')" data-CategoryID="656"  data-pcon="0" class="">
                  Fear the Walking Dead [2015]          </a>
               </li>
               <li>
                  <a onclick="getData('657')" data-CategoryID="657"  data-pcon="0" class="">
                  Toque de Recolher [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('658')" data-CategoryID="658"  data-pcon="0" class="">
                  A Divisao [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('659')" data-CategoryID="659"  data-pcon="0" class="">
                  Golden Life [2015]          </a>
               </li>
               <li>
                  <a onclick="getData('660')" data-CategoryID="660"  data-pcon="0" class="">
                  Da Terra a Lua [1998]          </a>
               </li>
               <li>
                  <a onclick="getData('661')" data-CategoryID="661"  data-pcon="0" class="">
                  Kakegurui Live Action [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('662')" data-CategoryID="662"  data-pcon="0" class="">
                  9-1-1 [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('663')" data-CategoryID="663"  data-pcon="0" class="">
                  Big Little Lies [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('664')" data-CategoryID="664"  data-pcon="0" class="">
                  Elementarissimo [2012]          </a>
               </li>
               <li>
                  <a onclick="getData('665')" data-CategoryID="665"  data-pcon="0" class="">
                  Euphoria [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('666')" data-CategoryID="666"  data-pcon="0" class="">
                  Fallen - Anjos Caidos [2006]          </a>
               </li>
               <li>
                  <a onclick="getData('667')" data-CategoryID="667"  data-pcon="0" class="">
                  Gotham [2014]          </a>
               </li>
               <li>
                  <a onclick="getData('668')" data-CategoryID="668"  data-pcon="0" class="">
                  Havai 50 [2010]          </a>
               </li>
               <li>
                  <a onclick="getData('669')" data-CategoryID="669"  data-pcon="0" class="">
                  Instinto [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('670')" data-CategoryID="670"  data-pcon="0" class="">
                  Jezabel [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('671')" data-CategoryID="671"  data-pcon="0" class="">
                  Legacies [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('672')" data-CategoryID="672"  data-pcon="0" class="">
                  Maldosas [2010]          </a>
               </li>
               <li>
                  <a onclick="getData('673')" data-CategoryID="673"  data-pcon="0" class="">
                  New Amsterdam [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('674')" data-CategoryID="674"  data-pcon="0" class="">
                  NOS4A2 [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('675')" data-CategoryID="675"  data-pcon="0" class="">
                  O Conto da Aia [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('676')" data-CategoryID="676"  data-pcon="0" class="">
                  O Jardim De Bronze [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('677')" data-CategoryID="677"  data-pcon="0" class="">
                  SWAT [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('678')" data-CategoryID="678"  data-pcon="0" class="">
                  Single Parents [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('679')" data-CategoryID="679"  data-pcon="0" class="">
                  Siren [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('680')" data-CategoryID="680"  data-pcon="0" class="">
                  Sob Pressao [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('681')" data-CategoryID="681"  data-pcon="0" class="">
                  Star [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('682')" data-CategoryID="682"  data-pcon="0" class="">
                  Os 100 [2014]          </a>
               </li>
               <li>
                  <a onclick="getData('683')" data-CategoryID="683"  data-pcon="0" class="">
                  The Enemy Within [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('684')" data-CategoryID="684"  data-pcon="0" class="">
                  The Fix [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('685')" data-CategoryID="685"  data-pcon="0" class="">
                  Marvel - Manto e Adaga [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('686')" data-CategoryID="686"  data-pcon="0" class="">
                  Young Sheldon [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('687')" data-CategoryID="687"  data-pcon="0" class="">
                  Hanna [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('692')" data-CategoryID="692"  data-pcon="0" class="">
                  Fringe [2008]          </a>
               </li>
               <li>
                  <a onclick="getData('695')" data-CategoryID="695"  data-pcon="0" class="">
                  Mr Bean [1990]          </a>
               </li>
               <li>
                  <a onclick="getData('696')" data-CategoryID="696"  data-pcon="0" class="">
                  8 Dias [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('697')" data-CategoryID="697"  data-pcon="0" class="">
                  Outra Vida [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('698')" data-CategoryID="698"  data-pcon="0" class="">
                  The Boys Os Rapazes [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('699')" data-CategoryID="699"  data-pcon="0" class="">
                  Arquivo X [1993]          </a>
               </li>
               <li>
                  <a onclick="getData('704')" data-CategoryID="704"  data-pcon="0" class="">
                  Hanna [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('706')" data-CategoryID="706"  data-pcon="0" class="">
                  Arqueiro [2012]          </a>
               </li>
               <li>
                  <a onclick="getData('707')" data-CategoryID="707"  data-pcon="0" class="">
                  Chicago PD - Distrito 21 [2014]          </a>
               </li>
               <li>
                  <a onclick="getData('708')" data-CategoryID="708"  data-pcon="0" class="">
                  Jack Ryan de Tom Clancy [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('709')" data-CategoryID="709"  data-pcon="0" class="">
                  Lucifer [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('710')" data-CategoryID="710"  data-pcon="0" class="">
                  Primeira Vez Amor [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('711')" data-CategoryID="711"  data-pcon="0" class="">
                  The Good Doctor [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('712')" data-CategoryID="712"  data-pcon="0" class="">
                  Vikings [2013]          </a>
               </li>
               <li>
                  <a onclick="getData('713')" data-CategoryID="713"  data-pcon="0" class="">
                  Jiraiya o Incrivel Ninja [1988]          </a>
               </li>
               <li>
                  <a onclick="getData('714')" data-CategoryID="714"  data-pcon="0" class="">
                  The White Princess [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('715')" data-CategoryID="715"  data-pcon="0" class="">
                  Vai Que Cola [2013]          </a>
               </li>
               <li>
                  <a onclick="getData('716')" data-CategoryID="716"  data-pcon="0" class="">
                  Big Bang - A Teoria [2007]          </a>
               </li>
               <li>
                  <a onclick="getData('717')" data-CategoryID="717"  data-pcon="0" class="">
                  Westworld [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('718')" data-CategoryID="718"  data-pcon="0" class="">
                  Lista Negra [2013]          </a>
               </li>
               <li>
                  <a onclick="getData('719')" data-CategoryID="719"  data-pcon="0" class="">
                  Los Espookys [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('720')" data-CategoryID="720"  data-pcon="0" class="">
                  Krypton [2018]          </a>
               </li>
               <li>
                  <a onclick="getData('722')" data-CategoryID="722"  data-pcon="0" class="">
                  Scorpion [2014]          </a>
               </li>
               <li>
                  <a onclick="getData('723')" data-CategoryID="723"  data-pcon="0" class="">
                  Suits [2011]          </a>
               </li>
               <li>
                  <a onclick="getData('724')" data-CategoryID="724"  data-pcon="0" class="">
                  Chernobyl [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('745')" data-CategoryID="745"  data-pcon="0" class="">
                  Como Eu Conheci Sua Mae [2005]          </a>
               </li>
               <li>
                  <a onclick="getData('746')" data-CategoryID="746"  data-pcon="0" class="">
                  Ozark [2017]          </a>
               </li>
               <li>
                  <a onclick="getData('747')" data-CategoryID="747"  data-pcon="0" class="">
                  Scream [2015]          </a>
               </li>
               <li>
                  <a onclick="getData('750')" data-CategoryID="750"  data-pcon="0" class="">
                  Guardioes da Galaxia da Marvel [2015]          </a>
               </li>
               <li>
                  <a onclick="getData('751')" data-CategoryID="751"  data-pcon="0" class="">
                  Capitao Planeta [1990]          </a>
               </li>
               <li>
                  <a onclick="getData('752')" data-CategoryID="752"  data-pcon="0" class="">
                  Super Amigos [1973]          </a>
               </li>
               <li>
                  <a onclick="getData('753')" data-CategoryID="753"  data-pcon="0" class="">
                  Homem de Ferro - Serie Animada [2009]          </a>
               </li>
               <li>
                  <a onclick="getData('754')" data-CategoryID="754"  data-pcon="0" class="">
                  Samurai X [1996]          </a>
               </li>
               <li>
                  <a onclick="getData('756')" data-CategoryID="756"  data-pcon="0" class="">
                  Shurato [1989]          </a>
               </li>
               <li>
                  <a onclick="getData('757')" data-CategoryID="757"  data-pcon="0" class="">
                  Os Vingadores - Os Maiores Herois da Terra [2010]          </a>
               </li>
               <li>
                  <a onclick="getData('758')" data-CategoryID="758"  data-pcon="0" class="">
                  Os Vingadores Unidos [2013]          </a>
               </li>
               <li>
                  <a onclick="getData('759')" data-CategoryID="759"  data-pcon="0" class="">
                  Greys Anatomy [2005]          </a>
               </li>
               <li>
                  <a onclick="getData('760')" data-CategoryID="760"  data-pcon="0" class="">
                  Sintonia [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('761')" data-CategoryID="761"  data-pcon="0" class="">
                  The Inbestigators [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('762')" data-CategoryID="762"  data-pcon="0" class="">
                  Lei e Desordem [2013]          </a>
               </li>
               <li>
                  <a onclick="getData('763')" data-CategoryID="763"  data-pcon="0" class="">
                  Constantine [2014]          </a>
               </li>
               <li>
                  <a onclick="getData('764')" data-CategoryID="764"  data-pcon="0" class="">
                  Lendas do Amanha [2016]          </a>
               </li>
               <li>
                  <a onclick="getData('765')" data-CategoryID="765"  data-pcon="0" class="">
                  Dollar [2019]          </a>
               </li>
               <li>
                  <a onclick="getData('766')" data-CategoryID="766"  data-pcon="0" class="">
                  Empire [2015]          </a>
               </li>
               <li>
                  <a onclick="getData('767')" data-CategoryID="767"  data-pcon="0" class="">
                  Supergirl [2015]          </a>
               </li>
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
                     <li class=" ">
                        <a href="movies.php"><span class="da movie"></span><span>Filmes</span></a>
                     </li>
                     <li class="active ">
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
                     <button type="button" id="savesorting" data-sortin="series" class="btn btn-primary">
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
            <ul class="free-wall grid effect-3 videoSection hideOnLoad" id="SeriesContainer" style="margin-bottom: 50px !important;">
            </ul>
         </div>
      </div>
      <div class="modal fade movie-popup" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-custom">
            <div class="modal-content">
               <div class="modal-header" style="border:0;"> <span class="p-close" data-dismiss="modal" aria-hidden="true">x</span> </div>
               <div class="modal-body">
                  <div class="popup-content t-s">
                     <div class="pull-left" style="width: 10%;">
                        <div class="poster">
                           <div class="poster-img"><img src="img/t-s.jpg" alt="" class="img-responsive"></div>
                        </div>
                     </div>
                     <div class="col-sm-9 col-md-10 col-xs-12">
                        <div class="poster-details">
                           <h2>Vikings</h2>
                           <ul>
                              <li><i class="fa fa-anchor"></i>Drama</li>
                              <li><i class="fa fa-clock-o"></i>44 min</li>
                              <li><i class="fa fa-calendar"></i>2013-2016</li>
                              <li> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span></li>
                           </ul>
                           <p>Vikings follows the adventures of Ragnar Lothbrok, the greatest hero of his age. The series tells the sagas of Ragnar's band of Viking brothers and his family, as he rises to become King of the Viking tribes. As well as being a fearless warrior, Ragnar embodies the Norse traditions of devotion to the gods. Legend has it that he was a direct descendant of Odin, the god of war and warriors.</p>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="ts-content">
                        <div class="column seasons">
                           <ul>
                              <li class="active"><a data-toggle="tab" href="#s-1">Season 1</a></li>
                              <li><a data-toggle="tab" href="#s-2">Season 2</a></li>
                              <li><a data-toggle="tab" href="#s-3">Season 3</a></li>
                              <li><a data-toggle="tab" href="#s-4">Season 4</a></li>
                              <li><a data-toggle="tab" href="#s-5">Season 5</a></li>
                           </ul>
                        </div>
                        <div class="column episodes">
                           <div class="tab-content">
                              <ul id="s-1" class="tab-pane fade in active">
                                 <li class="active"><a data-toggle="tab" href="#epis-1"><b>1 </b>Rites of Passage</a></li>
                                 <li><a data-toggle="tab" href="#epis-2"><b>2 </b>Wrath of the Northmen </a></li>
                                 <li><a data-toggle="tab" href="#epis-3"><b>3 </b>Dispossessed </a></li>
                                 <li><a data-toggle="tab" href="#epis-4"><b>4 </b>Trial </a></li>
                                 <li><a data-toggle="tab" href="#epis-5"><b>5 </b>Raid </a></li>
                                 <li><a data-toggle="tab" href="#epis-6"><b>6 </b>Burial of the Dead </a></li>
                                 <li><a data-toggle="tab" href="#epis-7"><b>7 </b>A King's Ransom </a></li>
                                 <li><a data-toggle="tab" href="#epis-8"><b>8 </b>Sacrifice </a></li>
                                 <li><a data-toggle="tab" href="#epis-9"><b>9 </b>All Change </a></li>
                              </ul>
                              <ul id="s-2" class="tab-pane fade">
                                 <li><a data-toggle="tab" href="#epis-2"><b>2 </b>Wrath of the Northmen </a></li>
                                 <li><a data-toggle="tab" href="#epis-3"><b>3 </b>Dispossessed </a></li>
                                 <li><a data-toggle="tab" href="#epis-4"><b>4 </b>Trial </a></li>
                                 <li><a data-toggle="tab" href="#epis-5"><b>5 </b>Raid </a></li>
                                 <li><a data-toggle="tab" href="#epis-6"><b>6 </b>Burial of the Dead </a></li>
                              </ul>
                              <ul id="s-3" class="tab-pane fade">
                                 <li><a data-toggle="tab" href="#epis-2"><b>2 </b>Wrath of the Northmen </a></li>
                                 <li><a data-toggle="tab" href="#epis-3"><b>3 </b>Dispossessed </a></li>
                                 <li><a data-toggle="tab" href="#epis-4"><b>4 </b>Trial </a></li>
                                 <li><a data-toggle="tab" href="#epis-6"><b>6 </b>Burial of the Dead </a></li>
                              </ul>
                              <ul id="s-4" class="tab-pane fade">
                                 <li><a data-toggle="tab" href="#epis-2"><b>2 </b>Wrath of the Northmen </a></li>
                                 <li><a data-toggle="tab" href="#epis-3"><b>3 </b>Dispossessed </a></li>
                                 <li><a data-toggle="tab" href="#epis-4"><b>4 </b>Trial </a></li>
                                 <li><a data-toggle="tab" href="#epis-5"><b>5 </b>Raid </a></li>
                              </ul>
                              <ul id="s-5" class="tab-pane fade">
                                 <li><a data-toggle="tab" href="#epis-7"><b>7 </b>A King's Ransom </a></li>
                                 <li><a data-toggle="tab" href="#epis-8"><b>8 </b>Sacrifice </a></li>
                                 <li><a data-toggle="tab" href="#epis-9"><b>9 </b>All Change </a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="column w-content">
                           <div class="tab-content">
                              <div id="epis-1" class="tab-pane fade in active">
                                 <h2>Rites of Passage</h2>
                                 <h5>Episode 1</h5>
                                 <p>Ragnar goes on a trip of initiation with his son. Meanwhile, he thinks he has finally found a way to sail ships to the west. However, his beliefs are seen as insane so he chooses to go against the law.</p>
                                 <div class="fav row">
                                    <div class="res-list">
                                       <select>
                                          <option>480p</option>
                                          <option selected>720p</option>
                                          <option>1080p</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="watch-now row">
                                    <button>watch it now</button>
                                 </div>
                              </div>
                              <div id="epis-2" class="tab-pane fade">
                                 <h2>Wrath of the Northmen</h2>
                                 <h5>Episode 2</h5>
                                 <p>The stage is set for the first journey west by Ragnar Lothbrok as he gathers a crew willing to risk their lives to travel into the unknown.</p>
                                 <div class="fav row">
                                    <div class="res-list">
                                       <select>
                                          <option>480p</option>
                                          <option selected>720p</option>
                                          <option>1080p</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="watch-now row">
                                    <button>watch it now</button>
                                 </div>
                              </div>
                              <div id="epis-3" class="tab-pane fade">
                                 <h2>Dispossessed</h2>
                                 <h5>Episode 3</h5>
                                 <p>A monastery in Lindesfarne, England is about to get a firsthand look at how the Vikings operate.</p>
                                 <div class="fav row">
                                    <div class="res-list">
                                       <select>
                                          <option>480p</option>
                                          <option selected>720p</option>
                                          <option>1080p</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="watch-now row">
                                    <button>watch it now</button>
                                 </div>
                              </div>
                              <div id="epis-4" class="tab-pane fade">
                                 <h2>Trial</h2>
                                 <h5>Episode 4</h5>
                                 <p>The Vikings head back to England to see what other treasures this new world has to offer. This go round Ragnar and his crew sail out with Earl Haraldson's permission.</p>
                                 <div class="fav row">
                                    <div class="res-list">
                                       <select>
                                          <option>480p</option>
                                          <option selected>720p</option>
                                          <option>1080p</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="watch-now row">
                                    <button>watch it now</button>
                                 </div>
                              </div>
                              <div id="epis-5" class="tab-pane fade">
                                 <h2>Raid</h2>
                                 <h5>Episode 5</h5>
                                 <p>In the Great Hall of Kattegat, a seer reads Earl Haraldson's future and tells him that Ragnar Lothbrok searches for his death.</p>
                                 <div class="fav row">
                                    <div class="res-list">
                                       <select>
                                          <option>480p</option>
                                          <option selected>720p</option>
                                          <option>1080p</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="watch-now row">
                                    <button>watch it now</button>
                                 </div>
                              </div>
                              <div id="epis-6" class="tab-pane fade">
                                 <h2>Burial of the Dead</h2>
                                 <h5>Episode 6</h5>
                                 <p>Ragnar, weak and still hurt, must meet the Earl head-on after it comes to light that Rollo has been tortured on Haraldson's orders.</p>
                                 <div class="fav row">
                                    <div class="res-list">
                                       <select>
                                          <option>480p</option>
                                          <option selected>720p</option>
                                          <option>1080p</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="watch-now row">
                                    <button>watch it now</button>
                                 </div>
                              </div>
                              <div id="epis-7" class="tab-pane fade">
                                 <h2>A King's Ransom</h2>
                                 <h5>Episode 7</h5>
                                 <p>Three Viking ships sail upriver towards the very heart of power in eastern England: the Royal Villa of King Aelle.</p>
                                 <div class="fav row">
                                    <div class="res-list">
                                       <select>
                                          <option>480p</option>
                                          <option selected>720p</option>
                                          <option>1080p</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="watch-now row">
                                    <button>watch it now</button>
                                 </div>
                              </div>
                              <div id="epis-8" class="tab-pane fade">
                                 <h2>Sacrifice</h2>
                                 <h5>Episode 8</h5>
                                 <p>The traditional pilgrimage to Uppsalla to thank the gods brings a torrent of emotions for Ragnar, Lagertha, and Athelstan.</p>
                                 <div class="fav row">
                                    <div class="res-list">
                                       <select>
                                          <option>480p</option>
                                          <option selected>720p</option>
                                          <option>1080p</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="watch-now row">
                                    <button>watch it now</button>
                                 </div>
                              </div>
                              <div id="epis-9" class="tab-pane fade">
                                 <h2>All Change</h2>
                                 <h5>Episode 9</h5>
                                 <p>At the behest of King Horik, Ragnar assembles a small party to travel to Gotaland (modern day Sweden) to resolve a land dispute with the area's leader, Jarl Borg.</p>
                                 <div class="fav row">
                                    <div class="res-list">
                                       <select>
                                          <option>480p</option>
                                          <option selected>720p</option>
                                          <option>1080p</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="watch-now row">
                                    <button>watch it now</button>
                                 </div>
                              </div>
                           </div>
                           <!--tab-content--> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.modal-content --> 
         </div>
      </div>
      <!-- /.modal-dialog --> 
      <script src='https://content.jwplatform.com/libraries/fgbTqCCh.js'></script>
      <script src='js/flowplayer/flowplayer.js'></script>
      <script src='js/mediaPlayers.js'></script>
      <link rel="stylesheet" href="js/flowplayer/skin/skin.css" media="screen">
      <script type="text/javascript">
         $(document).ready(function(){
           var vid = '';
           var SeriesContainer = $("#SeriesContainer");
           var CHeckExists = SeriesContainer.length;
           if(CHeckExists != 0)
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
                     action:'GetSeriesByCateGoryId',
                     categoryID:categoryid,
                     dataoffset:dataoffset,
                     datalimit:datalimit,
                     hostURL: "http://sv1.cinetv.vip:8880/"
                     },  
                       success:function(response2){
                         $('.LoadingMoreFa').addClass('hideOnload');
                         $('.LoadMoreBtn').remove();
                          var SeriesContainer = $('#SeriesContainer');
                          SeriesContainer.append(response2);
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
          $('#fullLoader').addClass('hideOnLoad');
         
         }
         
         
         function confirmparent($categoryID = '', $dataoffset = '0' ,$datalimit = '28')
         {
           getData($categoryID);
         }  
         
         function getData($categoryID = '', $dataoffset = '0' ,$datalimit = '28')
         {
         removeSearchSec();
         $(this).addClass('active'); 
         var SeriesContainer = $('#SeriesContainer');
         SeriesContainer.html('');
         SeriesContainer.addClass('hideOnLoad');
         $('#fullLoader').removeClass('hideOnLoad');
         SeriesContainer.html('');
         SeriesContainer.addClass('hideOnLoad');
         jQuery.ajax({
           type:"POST",
           url:"includes/ajax-control.php",
           dataType:"text",
           data:{
           action:'GetSeriesByCateGoryId',
           categoryID:$categoryID,
           dataoffset:$dataoffset,
           datalimit:$datalimit,
           hostURL: "http://sv1.cinetv.vip:8880/"
           },  
             success:function(response2){
              
               if(response2 != '0' && response2.trim() !== '')
               {
                 SeriesContainer.html('');
                     SeriesContainer.html(response2);
                     SeriesContainer.removeClass('hideOnLoad');
                     SeriesContainer.css('margin-bottom','50px !important');
                     setformatOfListsByClass('.thumb-b');
         
               }
               else
               {
                 $('#fullLoader').addClass('hideOnLoad');
                 $("#NoResultFound").removeClass("hideOnLoad");
               }
               $(document).find(".rippler").rippler({
         effectClass      :  'rippler-effect'
         ,effectSize      :  0      // Default size (width & height)
         ,addElement      :  'div'   // e.g. 'svg'(feature)
         ,duration        :  400
         });
             }
           });
          
         }
         
         function showInfo($seriesID = '')
         {
         var fullDataVal = $("#fullData-"+$seriesID).val();
         /*$('#fullLoader').removeClass('hideOnLoad');*/
         $('.sectionNo'+$seriesID+'').addClass('InfoLoading');
         jQuery.ajax({
         type:"POST",
         url:"includes/ajax-control.php",
         dataType:"text",
         data:{
         action:'getSeriesInfo',
             seriesID:$seriesID,
         fullDataVal:fullDataVal,
         hostURL: "http://sv1.cinetv.vip:8880/"
         },  
         success:function(response2){ 
           if(response2 != "0" && response2.trim() != "")
           {
             $(document).find('.modal-dialog-custom').html(response2);
             $('.sectionNo'+$seriesID+'').removeClass('InfoLoading');
             $('#menuModal').modal('show');      
           }
           else
           {
             swal('Nada encontrado!!');
             $('.sectionNo'+$seriesID+'').removeClass('InfoLoading');
           }
           $(document).find(".rippler").rippler({
         effectClass      :  'rippler-effect'
         ,effectSize      :  0      // Default size (width & height)
         ,addElement      :  'div'   // e.g. 'svg'(feature)
         ,duration        :  400
         });
         }
         });
         }
         
         $(document).on("click", ".backToInfo", function(){
         
         var episID = $(this).data('episid');
         $(this).addClass('hideOnLoad');
         $('#player-holder').html('');
         $('#player-holder').addClass('hideOnLoad');
         $('#epis-'+episID+'').removeClass('hideOnLoad');
         
         })
         
         $(document).on("click", ".episodes li a", function(){
         var episID = $(this).data('episid');
         //$(this).addClass('hideOnLoad');
         $('#player-holder').html('');
         $('#player-holder').addClass('hideOnLoad');
         $('#epis-'+episID+'').removeClass('hideOnLoad');
         $('.backToInfo').addClass('hideOnLoad');
         /*$(document).find('.PlayerHolder div').html('').addClass('hideOnLoad');
         $('.backToInfo').addClass('hideOnLoad');*/
         
         })
         
         function watchnow($movie, $format)
         {
         $('#player-holder').removeClass('hideOnLoad');
         $('#epis-'+$movie+'').addClass('hideOnLoad');
         $('#backToInfo-'+$movie+'').removeClass('hideOnLoad');
         
                   $movieVideoLink = "http://sv1.cinetv.vip:8880/series/tes4589/569f6845d/"+$movie+'.'+$format;
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
            <input type="hidden" value="series" id="activepage"/>               
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