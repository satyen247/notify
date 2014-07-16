<?php
echo "<br> Server Name = ".$_SERVER['SERVER_NAME'];
echo "<br>HOST = ".$_SERVER['HTTP_HOST']."<br><br>";
echo "<br>My I.P. = ".$_SERVER['REMOTE_ADDR']."<br><br>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<br>BasePath = ".$_SERVER['DOCUMENT_ROOT']."<br><br>";


$ds_separator = DIRECTORY_SEPARATOR;
echo "<br>Ds Separator = ".$ds_separator;
$file = __FILE__ ;
echo "<br>File = ".$file;
$root = dirname(dirname(dirname(__FILE__)));
echo "<br>Root = ".$root;
$app_dir = basename(dirname(dirname(__FILE__)));
echo "<br>App Dir = ".$app_dir;
$webroot_dir = basename(dirname(__FILE__));
echo "<br>Webroot Dir = ".$webroot_dir;
$webroot = dirname(__FILE__) . $ds_separator;
echo "<br>Webroot = ".$webroot;


echo "<br><br> DIR = ".dirname(__FILE__);

echo "<br>Self = ".basename($_SERVER['PHP_SELF']);

echo "<br>Referre = ".$_SERVER['HTTP_REFERER'];
echo "<br><br>";
echo "<br>SATYEN";
phpinfo();
?>