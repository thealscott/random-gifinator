<?php
// list of files to be ignored when scanning folders
$ignore = array('.','..','cgi-bin','.DS_Store');

// top level folder gives us index of sub-categories
$folders = scandir('images/gifs');
$folders = array_diff($folders, $ignore);

foreach($folders as $folder) {
    // for each sub category we get the list of files within
    $files = scandir('images/gifs/'.$folder);
    $files = array_values(array_diff($files, $ignore));
    
    $file_lists[$folder] = $files;
}

// Get featured Letter gifs
$folders = scandir('images/letters');
$folders = array_diff($folders, $ignore);

foreach($folders as $folder) {
    // for each sub category we get the list of files within
    $files = scandir('images/letters/'.$folder);
    $files = array_values(array_diff($files, $ignore));
    
    $featured_file_lists[$folder] = $files;
}


// return the data as JSON
print_r(json_encode(array(
    'gifs' => $file_lists,
    'letters' => $featured_file_lists
)));