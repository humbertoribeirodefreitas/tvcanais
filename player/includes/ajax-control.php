<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);
if(!array_key_exists('types', $_SESSION)){
	exit();
}
if($_POST['action'] == 'logoutProcess'){
  $_SESSION['types'] = false;
  exit();
}
?>
<?php if($_POST['categoryID'] == '12' && $_POST['action'] == 'getStreamsFromID') { //LIVE ?>
    <?php
	$keys = array_keys($_SESSION['types']['channels']);
	if($_POST['groupName'] !== '0' && array_key_exists('groupName', $_POST)){
		$groupname = $_POST['groupName'];
		$backup = $_SESSION['types']['channels'][$groupname];
		$keys = [];
		$keys[$groupname] = $groupname;
	}
	?>
	<?php $c = 0; foreach($keys as $groupName) { ?>
	  <?php foreach($_SESSION['types']['channels'][$groupName] as $channel) { $c++; ?>
		<li id="video1" class="streamList Playclick rippler rippler-inverse sectionNo<?php echo $c; ?>">
		   <input type="hidden" class="streamUrl" data-streamtype="live" value="<?php echo $channel['url']; ?>">
		   <span style="font-weight: bold;width: 50px;text-align: center;padding-top: 8px;"><?php echo $c; ?></span>
		   <span class="number"><img src="<?php echo $channel['img']; ?>" width="100%" height="30px" onerror="this.src='images/no_logo.jpg'"></span>
		   <!-- <i class="fa fa-television" aria-hidden="true"></i> -->
		   <!-- <i class="fa fa-star hide" aria-hidden="true"></i> -->
		   <input type="hidden" class="serch_key" value="<?php echo $channel['name']; ?>" data-parentliclass="sectionNo<?php echo $c; ?>">
		   <label><?php echo $channel['name']; ?></label>
		   <i class="fa fa-repeat" aria-hidden="true" style="float: right;"></i>
		</li>
	  <?php } ?>
	<?php } ?>
<?php } else if($_POST['action'] !== 'getMovieInfo' && $_POST['action'] !== 'getSeriesInfo') { //FILMES E SERIES ?>
    <?php
	$keys = array_keys($_SESSION['types']['movies']);
	if($_POST['groupName'] !== '0' && array_key_exists('groupName', $_POST)){
		$groupname = $_POST['groupName'];
		$backup = $_SESSION['types']['movies'][$groupname];
		$keys = [];
		$keys[$groupname] = $groupname;
	}
	?>
	<?php $c = -1; $i = 0; foreach($keys as $groupName) { $c = -1; ?>
	  <?php foreach($_SESSION['types']['movies'][$groupName] as $movie) { $c++; ?>
	    <?php if($c >= intval($_POST['dataoffset']) && $i <= intval($_POST['datalimit'])) { $i++; ?>
		<li class="thumb-b animate streamList rippler rippler-default sectionNo46692 un-1" onclick="showInfo('movies', '<?php echo $movie['groupNameC']; ?>', '<?php echo intval($c); ?>')" data-streamURL="<?php echo $c; ?>">
		   <input type="hidden" class="serch_key" value="<?php echo $movie['name']; ?>" data-parentliclass="sectionNo46692">
		   <input type="hidden" id="fullData-<?php echo $c; ?>" value="data">
		   <!-- <h2 class="WihthoutZoom ">A SOCIEDADE LITERARIA E A TORTA DE CASCA DE BATATA [2018]</h2> -->
		   <div class="view view-tenth rippler rippler-default">
			  <img class="iconImage rippler rippler-img rippler-bs-primary" src="<?php echo $movie['img']; ?>" alt="" onerror="this.src='images/no-poster.jpg';this.parentElement.className='view view-tenth showEI ';" >
			  <div class="mask ">
				 <h2 ><?php echo $movie['name']; ?></h2>
				 <!-- <div class="fav"> <a href="#"><span class="fa fa-heart-o fa-heart"></span></a> <span>3.9</span> </div> -->
				 <div class="n-ratting">
					<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span><span class="fa fa-star-o"></span>
					<!-- <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> --> 
				 </div>
			  </div>
		   </div>
		</li>
		<?php } ?>
	  <?php } ?>
	<?php } ?>
	<?php if($i > 0){ ?>
	<center class="loading-loadBtn">
	   <button class="LoadMoreBtn btn btn-success rippler rippler-default" data-dataoffset="<?php echo intval($_POST['datalimit']) + intval($_POST['dataoffset']); ?>" data-categoryID="all">Buscar mais <i class="LoadingMoreFa fa fa-spin fa-spinner hideOnload"></i></button>
	</center>
	<?php } ?>
      
<?php } else if ($_POST['action'] == 'getMovieInfo') { ?>
<?php
if(!array_key_exists($_POST['type'], $_SESSION['types'])){
	exit();
} else if(!array_key_exists($_POST['groupName'], $_SESSION['types'][$_POST['type']])){
	exit();
} else if(!$_SESSION['types'][$_POST['type']][$_POST['groupName']][$_POST['c']]){
	exit();
}
$link = $_SESSION['types'][$_POST['type']][$_POST['groupName']][$_POST['c']];
?>
    <div class="modal-content">
    <div class="player_changeIssue alert alert-info" style="position: fixed; top: -300px;left: 35%;">
          Reproduzindo atravez de outro player devido a imcopatibilidade.
        </div>
      <div class="modal-header" style="border:0;"> <span class="p-close rippler rippler-default" data-dismiss="modal" aria-hidden="true">x</span> </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="col-sm-5 col-lg-2 col-md-2 col-xs-7">
            <div class="poster">
              <div class="poster-img"><img src="<?php echo $link['img']; ?>" onerror="this.src='images/no-poster.jpg';" alt="" class="img-responsive"></div>
              <div class="ratting-bar row">
                <div class="stars " style="text-align: center;"> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span></div>
              </div>
            </div>
            <button class="backToInfo btn btn-info hideOnLoad rippler rippler-inverse">Voltar</button>
          </div>
          <div class="col-sm-7 col-lg-9 col-md-8 col-xs-12">
            <div class="PlayerHolder" data-ajplayer="" data-flowplayer="" data-jwplayer="">
            <div id="player-holder" class="hideOnLoad"></div>
          </div>
            <div class="poster-details">
              <h2><?php echo $link['name']; ?></h2>
              <ul style="display: none;" class="col-md-6 col-sm-12">
                <li class="i-year">2019-02-07</li>
                <li class="i-duration">119 Minutes </li>
                <li class="i-movie">Ação / Drama / Thriller / Crime</li>
                <!-- <li class="i-trailer"><a href="#">2019-02-07</a></li> -->
              </ul>

              <ul style="display: none;" class="col-md-6 col-sm-12">
                <li class="i-cast"><p>Liam Neeson, Laura Dern, Tom Bateman, Tom Jackson, William Forsythe, Emmy Rossum, John Doman, Domenick Lombardozzi</p><button class="showCast btn btn-sm btn-info rippler rippler-default">Show Cast</button></li>
                <li class="i-director">Hans Petter Moland</li>
                
                <!-- <li class="i-trailer"><a href="#">2019-02-07</a></li> -->
              </ul>
              <p class="pull-left" style="display: none">
                Sem descrição até o momento.            
              </p>
              <div class="fav row">
                <div class="res-list hide">
                  <select>
                    <option>480p</option>
                    <option selected>720p</option>
                    <option>1080p</option>
                  </select>
                </div>
                <button class="gd hide">3D</button>
                <button class="add-fav hide"></button>
              </div>
              <div class="watch-now row">
                <button data-streamID="46701" data-ext="mp4" onclick="watchMovie('<?php echo trim($link['url']); ?>')" class=" rippler rippler-default">assistir agora</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<?php } else if($_POST['action'] == 'getSeriesInfo') { ?>
<?php echo file_get_contents('series.txt'); ?>
<? } else if($_POST['action'] == 'SaveSettings') { ?>
0
<?php } ?>
