<?php
session_start();
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: /player');
}

$lista = file_get_contents($_FILES['iptvfile']['tmp_name']);
if(!$lista){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $_POST['iptv']);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3");
  curl_setopt($ch, CURLOPT_REFERER, "http://www.facebook.com");
  $page = curl_exec($ch) or die(curl_error($ch));
  $lista = $page;
}

$raw = $lista;
$_SESSION['raw'] = $raw;
$lines = explode("\n", $_SESSION['raw']);

function includes($search, $str){
	return strpos($str, $search) !== false;
}
$data = [];
$linkName = '';
$groupName = '';
$logo = '';

$types = [];
$types['channels'] = [];
$types['movies'] = [];
$types['radios'] = [];
$types['series'] = [];
$links_types = [];
foreach($lines as $line){
	if(includes('group-title', $line)){
		$line = trim(str_replace("'", '"', $line));
		$groupName = explode('group-title="', $line)[1];
		$groupName = explode('"', $groupName)[0];
		$groupNameC = preg_replace("/[^A-Za-z0-9]/", '', $groupName);
		$groupNameC = strtolower($groupNameC);
		if(!array_key_exists($groupName, $data)){
			$data[$groupNameC] = ["groupName" => $groupName, "links" => []];
		} 
		$logo = explode('-logo="', $line)[1];
		$logo = explode('"', $logo)[0];
		$linkName = explode($groupName, $line)[1];
		$linkName = trim(explode(',', $linkName)[1]);
		if(includes('|canal', $linkName)){
			$linkName = explode('|', $linkName)[0];
			if(!array_key_exists($groupNameC, $types['channels'])){
				$types['channels'][$groupNameC] = [];
			}
			$links_types[$linkName] = 'channels|'.(sizeof($types['channels'][$groupNameC])).'';
			$types['channels'][$groupNameC][] = ["name" => $linkName, "groupName" => $groupName, "groupNameC" => $groupNameC, "img" => $logo];
		} else if(includes('|filme', $linkName)){
			$linkName = explode('|', $linkName)[0];
			if(!array_key_exists($groupNameC, $types['movies'])){
				$types['movies'][$groupNameC] = [];
			}
			$links_types[$linkName] = 'movies|'.(sizeof($types['movies'][$groupNameC])).'';
			$types['movies'][$groupNameC][] = ["name" => $linkName, "groupName" => $groupName, "groupNameC" => $groupNameC, "img" => $logo];
		} else if(includes('|serie', $linkName)){
			$linkName = explode('|', $linkName)[0];
			if(!array_key_exists($groupNameC, $types['series'])){
				$types['series'][$groupNameC] = [];
			}
			$links_types[$linkName] = 'series|'.(sizeof($types['series'][$groupNameC])).'';
			$types['series'][$groupNameC][] = ["name" => $linkName, "groupName" => $groupName, "img" => $logo];
		} else if(includes('|radio', $linkName)){
			$linkName = explode('|', $linkName)[0];
			if(!array_key_exists($groupNameC, $types['radios'])){
				$types['radios'][$GroupNameC] = [];
			}
			$links_types[$linkName] = 'radios|'.(sizeof($types['radios'])).'';
			$types['radios'][$groupNameC][] = ["name" => $linkName, "groupName" => $groupName, "img" => $logo];
		} else {
			$linkName = explode('|', $linkName)[0];
			if(!array_key_exists($groupNameC, $types['channels'])){
				$types['channels'][$groupNameC] = [];
			}
			$links_types[$linkName] = 'channels|'.(sizeof($types['channels'][$groupNameC])).'';
			$types['channels'][$groupNameC][] = ["name" => $linkName, "groupName" => $groupName, "img" => $logo];
		}
	} else if(includes('http', $line)){
		if(array_key_exists($linkName, $links_types)){
			$type =  explode('|', $links_types[$linkName]);
			$count = $type[1];
			$type = $type[0];
			$types[$type][$groupNameC][$count]['url'] = $line;
		}
		$data[$groupNameC]['links'][] = ["name" => $linkName, "groupName" => $groupName, "img" => $logo, "url" => $line];
	}
}
$_SESSION['data'] = $data; 
$_SESSION['types'] = $types; 
?> 
<script> 
window.location.href = 'dashboard.php'; 
</script>

