<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php
if(!array_key_exists('canal', $_GET)){
  exit();
}
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://player.aovivo.club/channels/'.$_GET['canal'].'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Connection: keep-alive';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
$headers[] = 'Referer: http://aovivo.club/';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cookie: __cfduid=dff8ff412791b1bef3ca3d12676756c271569962213; _ga=GA1.2.13879118.1569962216; _gid=GA1.2.79103201.1569962216; _gat=1; _gat_gtag_UA_93420900_3=1; GED_PLAYLIST_ACTIVITY=W3sidSI6ImRBcFoiLCJ0c2wiOjE1NzAwMjM2MzIsIm52IjowLCJ1cHQiOjE1NzAwMjI3NTcsImx0IjoxNTcwMDIzNTU5fV0.';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$parts = explode('<body>', $result);
echo $parts[0];
?>
<body>
<script type="text/javascript">
function myDone(url, result){
  if(result.includes('.ts')){
      if(url[0] == '/' && url[1] == '/'){
	url = 'http:' + url;
      }
      window.channel_url = url;
      window.status = 'ready';
  } else if(result.includes('.m3u')) {
    var splitUrl = domain.split('/');
    var baseUrl = '';
    splitUrl.forEach((item) =>  {
       if(!item.includes('.m3u'))
           baseUrl += item + '/';
    });
    var fl = '';
    result.split('\n').forEach((line) => {
	if(line.includes('m3u8'))
	   fl = line;
    });
    if(fl.includes('http')){
	baseUrl = fl;
    } else {
	baseUrl += fl;
    }
    $.get(baseUrl).then(r => myDone(baseUrl, r));
  } else {
    window.status = 'ready';
  }
}
window.myconsole = console;
setTimeout(() => {
   window.status = 'ready';
}, 8000);
window.sources = [];
</script>

<script src="js/lib/unpackers/javascriptobfuscator_unpacker.js"></script>
<script src="js/lib/unpackers/urlencode_unpacker.js"></script>
<script src="js/lib/unpackers/p_a_c_k_e_r_unpacker.js"></script>
<script src="js/lib/unpackers/myobfuscate_unpacker.js"></script>
<?php
$two = $parts[1];
$two = str_replace('../', 'http://player.aovivo.club/', $two);
$two_l = '';
foreach(explode("\n", $two) as $line){
if(strpos($line, '.css') === false && strpos($line, 'src=') === false){
  $two_l .= $line . "\n";
}
}
$two_l = str_replace('\\', '\\\\', $two_l);
$two_l = str_replace('<script>', '<script> window.sources.push(`', $two_l);
$two_l = str_replace('</script>', '`); </script>', $two_l);
echo $two_l;
?>
<script>
var source = window.sources[0];
if(window.P_A_C_K_E_R){
var unpackers = [P_A_C_K_E_R, Urlencoded, JavascriptObfuscator /*, MyObfuscate*/ ];
for (var i = 0; i < unpackers.length; i++) {
 if (unpackers[i].detect(source)) {
   unpacked = unpackers[i].unpack(source);
   if (unpacked !== source) {
	source = unpacked;
   }
 }
}
var domain = source.split('src:')[1];
domain = domain.split('.m3u8')[0];
domain = domain.replace('"', '') + '.m3u8';
$.get(domain).then(r => myDone(domain, r)).catch(err => window.status = 'ready');
} else {
  window.status = 'ready';
}
</script>