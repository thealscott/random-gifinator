<?php
$dir    = 'images/gifs';
$files = scandir($dir);
$files = array_slice($files, 2);
print_r(json_encode($files));