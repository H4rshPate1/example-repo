<?php
function includeMultipleFiles($files) {
    foreach ($files as $file) {
        if (file_exists($file)) {
            include $file;
        } else {
            echo "File not found: $file";
        }
    }
}
$files_to_include = [
    // 'connect.php',
    'index.php', 
    // 'script.js',
    // 'states_by_country.php',
    // 'cities_by_states.php',
    'read.php'
    // 'update.php',
    // 'delete.php' 
];
includeMultipleFiles($files_to_include);
?>