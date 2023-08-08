<?php
session_start();
$raw = file_get_contents('test.txt');
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
$types['series'] = [];
$links_types = [];
foreach($lines as $line){
	if(includes('group-title', $line)){
		$line = trim(str_replace("'", '"', $line));
		$groupName = explode('group-title="', $line)[1];
		$groupName = explode('"', $groupName)[0];
		if(!array_key_exists($groupName, $data)){
			$data[$groupName] = ["links" => []];
		} 
		$logo = explode('-logo="', $line)[1];
		$logo = explode('"', $logo)[0];
		$linkName = explode($groupName, $line)[1];
		$linkName = trim(explode(',', $linkName)[1]);
		if(includes('|canal', $linkName)){
			$linkName = explode('|', $linkName)[0];
			if(!array_key_exists($groupName, $types['channels'])){
				$types['channels'][$groupName] = [];
			}
			$links_types[$linkName] = 'channels|'.(sizeof($types['channels'][$groupName])).'';
			$types['channels'][$groupName][] = ["name" => $linkName, "groupName" => $groupName, "img" => $logo];
		} else if(includes('|filme', $linkName)){
			$linkName = explode('|', $linkName)[0];
			if(!array_key_exists($groupName, $types['movies'])){
				$types['movies'][$groupName] = [];
			}
			$links_types[$linkName] = 'movies|'.(sizeof($types['channels'][$groupName])).'';
			$types['movies'][$groupName][] = ["name" => $linkName, "groupName" => $groupName, "img" => $logo];
		} else if(includes('|serie', $linkName)){
			$linkName = explode('|', $linkName)[0];
			if(!array_key_exists($groupName, $types['series'])){
				$types['series'][$groupName] = [];
			}
			$links_types[$linkName] = 'series|'.(sizeof($types['channels'][$groupName])).'';
			$types['series'][$groupName][] = ["name" => $linkName, "groupName" => $groupName, "img" => $logo];
		} else {
			$linkName = explode('|', $linkName)[0];
		}
	} else if(includes('http', $line)){
		if(array_key_exists($linkName, $links_types)){
			$type =  explode('|', $links_types[$linkName]);
			$count = $type[1];
			$type = $type[0];
			$types[$type][$groupName][$count]['url'] = $line;
		}
		$data[$groupName]['links'][] = ["name" => $linkName, "groupName" => $groupName, "img" => $logo, "url" => $line];
	}
}
$_SESSION['data'] = $data;
$_SESSION['types'] = $types;
$_SESSION['types']['movies'] = $types['channels'];
var_dump($_SESSION['types']);
