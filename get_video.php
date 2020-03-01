<?
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0", false);
header("Cache-Control: max-age=0", false);
header("Pragma: no-cache");

//http://mekka-online.ru/
$homepage = file_get_contents('https://makkahlive.net/makkahlive.aspx');
$begin=strpos($homepage,'<iframe');
$end=strpos($homepage,"</iframe>");
$video = substr($homepage,$begin,$end-$begin+9);
echo($video);