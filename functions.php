<?php
array_map( function( $files ) {
    require_once "framework/{$files}.php";
},[
    'scripts',
]
);

function load_head() {
    echo 'shit';
}