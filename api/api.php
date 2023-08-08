<?php
$username = $_GET['username'] ? $_GET['username'] : $_POST['username'];
if($username){
  $username = explode('@', $username)[0];
}
$password = $_GET['password'] ? $_GET['password'] : $_POST['password'];

$base_url = 'http://tv.topflash.ml:8880/new-player/player_api.php';
$base_url = 'http://painel.ebanonet.com.br:25461/player_api.php';

if($_GET['action'] == 'login'){
    if(!$username){
        echo '{"code":-11,"result":"no such account","keys":{"user_id":"0000000000000000","peer_id":"0000000000000000","session_key":"0000000000000000","token":"0000000000000000"},"user":{},"service":{"token":"d5931c322721c4047656ce03f7cba0bfcee0789bced0b8f4","mk_broker":"http://198.255.54.59:3918/v1/caches","domain_suffix":".easetuner.com","auth_url":"http://tv.topflash.ml/api/api.php?action=login","auth_url_sdk":"http://tv.topflash.ml/api/api.php?action=login","ch_url":"http://tv.topflash.ml/api/api.php?action=get_channels&username='.$username.'&password='.$password.'","epg_url":"http://tv.topflash.ml/api/api.php?action=get_epgs&username='.$username.'&password='.$password.'","vod_url":"http://tv.topflash.ml/api/api.php?action=get_vods&username='.$username.'&password='.$password.'","update_url":"http://tv.topflash.ml/api/api.php?action=update&username='.$username.'&password='.$password.'","message_url":"https://api1.pndvod.com/api/v1/message","name":"pacote completo","type":0,"reseller":"o futuro chegou","telephone":"","website":"não esqueça de renovar","enabledLive":true,"enabledPlayback":true,"enabledVoD":true,"enabledAppManager":true}}';
        exit();
    }
    $url = ''.$base_url.'?username='.$username.'&password='.$password.'';
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    if($data['user_info']['auth'] == 1){
        echo '{"code":0,"result":"ok","keys":{"user_id":"0000000000011349","peer_id":"bff241cd943f004a","session_key":"b2f9f5246391326d"},"user":{"user_id":70473,"user_name":"'.$username.'","user_status":1,"reg_time":"2019-10-27T17:12:49.502Z","start_time":"2019-10-27T18:12:49.000Z","end_time":"2019-11-27T22:12:49.000Z"},"service":{"token":"d5931c322721c4047656ce03f7cba0bfcee0789bced0b8f4","mk_broker":"http://198.255.54.59:3918/v1/caches","domain_suffix":".easetuner.com","auth_url":"http://tv.topflash.ml/api/api.php?action=login","auth_url_sdk":"http://tv.topflash.ml/api/api.php?action=login","ch_url":"http://tv.topflash.ml/api/api.php?action=get_channels&username='.$username.'&password='.$password.'","epg_url":"http://tv.topflash.ml/api/api.php?action=get_epgs&username='.$username.'&password='.$password.'","vod_url":"http://tv.topflash.ml/api/api.php?action=get_vods&username='.$username.'&password='.$password.'","update_url":"http://tv.topflash.ml/api/api.php?action=update&username='.$username.'&password='.$password.'","message_url":"https://api1.pndvod.com/api/v1/message","name":"pacote completo","type":0,"reseller":"o futuro chegou","telephone":"","website":"não esqueça de renovar","enabledLive":true,"enabledPlayback":true,"enabledVoD":true,"enabledAppManager":true}}';
    } else {
        echo '{"code":-11,"result":"Incorrect details","keys":{"user_id":"0000000000000000","peer_id":"0000000000000000","session_key":"0000000000000000","token":"0000000000000000"},"user":{},"service":{"token":"","mk_broker":"http://198.255.54.59:3918/v1/caches","domain_suffix":".easetuner.com","auth_url":"https://auth1.pndvod.com/api/v2/auth","auth_url_sdk":"https://auth1.pndvod.com:1443/v1/auth","ch_url":"","epg_url":"","vod_url":"","update_url":"https://update.pndvod.com/api/v1/update","message_url":"https://api1.pndvod.com/api/v1/message"}}';
    }
} else if(!$username || !$password) {
   exit();
} else if($_GET['action'] == 'get_channels'){
   $categories_url = ''.$base_url.'?username='.$username.'&password='.$password.'&action=get_live_categories';
   $result = file_get_contents($categories_url);
   $data = json_decode($result, true);
   $cats = [];
   foreach($data as $cat){
       $cats[$cat['category_id']] = $cat;
   }

   $channels_url = ''.$base_url.'?username='.$username.'&&password='.$password.'&action=get_live_streams';
   $result = file_get_contents($channels_url);
   $data = json_decode($result, true);
   $channels = [];
   foreach($data as $channel){
        $category = $cats[$channel['category_id']];
        $item = [
          'category' => '',
          'chid' => $channel['num'],
          'description' => '',
          'dlEver' => 0,
          'epg' => [],
          'epgSameAs' => null,
          'group' => 0,
          'hasPlayBack' => false,
          'id' => 'id'.$channel['num'].'',
          'level' => 0,
          'logo' => [
             'image' => [
                'big' => $channel['stream_icon'],
                'small' => $channel['stream_icon']
             ],
             'type' => 0
          ],
          'name' => [
             'init' => $channel['name']
          ],
          'search' => '',
          'sid' => 0,
          'sources' => [[
             'actor' => '',
             'address' => $channel['direct_source'] ? $channel['direct_source'] : 'http://painel.ebanonet.com.br:25461/live/'.$username.'/'.$password.'/'.$channel['stream_id'].'.m3u8',
             'audio' => '',
             'bType' => 0,
             'duration' => 0,
             'id' => 1234,
             'kbps' => 1800,
             'mediaType' => 'null',
             'qc' => 100,
             'qs' => 100,
             'subTitle' => '',
             'video' => ''
          ]],
          'tags' => [[
             'description' => [
                'init' => ''
             ],
             'image' => [
                'big' => '',
                'small' => ''
             ],
             'restrictedAccess' => false,
             'type' => 100,
             'name' => [
                'init' => $category['category_name']
             ],
             'id' => $category['category_id']
          ]],
          'type' => 0
        ];
        $channels[] = $item;
   }
   echo json_encode($channels);
} else if($_GET['action'] == 'get_epgs'){
   echo '[]';
} else if($_GET['action'] == 'update') {
   echo '{"package":"br.com.cylplaytv","mkbrokers":[],"sc":{"sysId":11,"xDomain":".easetuner.com"},"description":"CYLPlay","incompatibleVersion":300,"name":"CYLPlay","code":0,"info":"","release":{"versionName":"4.3.8","versionCode":438,"changeLog":"1. Melhorias na seção filmes e series\r\n2. Abertura dos canais com apenas um clique","targetSdkVersion":28,"minSdkVersion":16,"updateDate":"2019-10-25T07:06:50.723Z","channel":"cylplay","url":"http://apkdl.pndvod.com:5000/apk/CYLPlay-release-4.3.8-1910241050.apk","md5":"44cdd394f215b28a047ef7d80f1f45bf","size":30521240}}';
} else if($_GET['action'] == 'get_vods') {
   $categories_url = ''.$base_url.'?username='.$username.'&password='.$password.'&action=get_vod_categories';
   $result = file_get_contents($categories_url);
   $data = json_decode($result, true);
   $cats = [];
   foreach($data as $cat){
       $cats[$cat['category_id']] = $cat;
   }

   $vods_url = ''.$base_url.'?username='.$username.'&&password='.$password.'&action=get_vod_streams';
   $result = file_get_contents($vods_url);
   $data = json_decode($result, true);
   $vods = [];
   foreach($data as $vod){
        $category = $cats[$vod['category_id']];
        $item = [
          'category' => '',
          'chid' => $vod['num'],
          'description' => '',
          'dlEver' => 0,
          'epg' => [],
          'epgSameAs' => null,
          'group' => 0,
          'hasPlayBack' => false,
          'id' => 'id'.$vod['num'].'',
          'level' => 0,
          'logo' => [
             'image' => [
                'big' => $vod['stream_icon'],
                'small' => $vod['stream_icon']
             ],
             'type' => 0
          ],
          'name' => [
             'init' => $vod['name']
          ],
          'search' => '',
          'sid' => 0,
          'sources' => [[
             'actor' => '',
             'address' => 'https://file-examples.com/wp-content/uploads/2017/04/file_example_MP4_480_1_5MG.mp4',
             'audio' => '',
             'bType' => 0,
             'duration' => 0,
             'id' => 1234,
             'kbps' => 1800,
             'mediaType' => 'null',
             'qc' => 100,
             'qs' => 100,
             'subTitle' => '',
             'video' => ''
          ]],
          'tags' => [[
             'description' => [
                'init' => ''
             ],
             'image' => [
                'big' => '',
                'small' => ''
             ],
             'restrictedAccess' => false,
             'type' => 110,
             'name' => [
                'init' => $category['category_name']
             ],
             'id' => $category['category_id']
          ]],
          'type' => 1
        ];
        $vods[] = $item;
   }
   echo json_encode($vods);
}
