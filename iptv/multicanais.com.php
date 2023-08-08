<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
if(!array_key_exists('canal', $_GET)){
  $_GET['canal'] = '';
}
$username = 'lum-customer-domingos_ribe-zone-zone1-route_err-pass_dyn';
$password = 'kbd82apokgpe';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';
$url = 'https://multicanais.com/player.php?canal=' . $_GET['canal'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $url = 'https://token.multicanais.com/getAuth.php';
}
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_ENCODING, '');
curl_setopt($curl, CURLOPT_REFERER, 'https://multicanais.com/player.php');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $_SERVER['REQUEST_METHOD']);
if($_SERVER['REQUEST_METHOD'] == 'POST')
  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($_POST));

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $_SERVER['REQUEST_METHOD']);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($curl, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($curl, CURLOPT_PROXYUSERPWD, "$username-country-us-session-$session:$password");
curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36');
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    "X-Requested-With" => "XMLHttpRequest",
    "Referer" => "https://multicanais.com/player.php",
    "Sec-Fetch-Mode" => "cors"
));
$result = curl_exec($curl);
curl_close($curl);
if ($result)
    echo $result;
?>
<?php if($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
<script>
window.getChannel = function(){
  return '<?php echo $_GET['canal'];?>';
};
var i = setInterval(async function(){
  if(window.jQuery){
    $ = window.jQuery;
    window.path = jQuery('body').html().split("path: '")[1].split("'")[0];
    window.channel_name = window.getChannel();
    clearInterval(i);
    
    window.token = await grecaptcha.execute('6Lfz0a4UAAAAAAxHdPYGelnWDA1L6IOknsZNnRy9', {action: 'create_comment'});
    console.log(window.token);
    window.result = await jQuery.post("https://local.multicanais.com/iptv/multicanais.com.php",{token: token, ip: '51.79.78.213', channel: channel_name, path: path}).promise();
    if(typeof window.result == 'string')
	window.result = JSON.parse(result);

    window.channel_url = result['token_channel'];
    window.status = 'ready';    
  } else {
    window.status = 'ready';
  }
}, 1000);
</script>
<?php } ?>
