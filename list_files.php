<?php
$folders = array(
    'breakfast' => 'images/breakfast',
    'beer'      => 'images/beer',
    'geometric' => 'images/geometric',
    'random'    => 'images/random',
);

$file_lists = array();

foreach($folders as $key=>$value) {
    $folder = $value;
    $files = scandir($folder);
    $files = array_slice($files, 2);
    
    $file_lists[$key] = $files;
}

print_r(json_encode($file_lists));