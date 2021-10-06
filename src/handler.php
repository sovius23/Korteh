<?php
$file=fopen("yourfile.txt","w+");
$toWrite=strip_tags(preg_replace("#</br>#","\r\n",$_GET["info"]));
fwrite($file,$toWrite);
// надо удалить теги, заменить br на /n
$fileName = "yourfile.txt";


header("Content-Type: text/html");
header("Content-Length: " . filesize($fileName));
header("Content-Disposition: attachment; filename=$fileName");
readfile($fileName);
fclose($file);
unlink($fileName);
exit;

