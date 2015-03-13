<?php

const TEMPLATES_DIR = 'templates/';

$pages = array(
    'index',
    'flex-container',
    'flex-container-2',
    'flex-container-3',
    'flex-items',
    'flex-items-2',
    'flex-items-3',
    'centering',
    'holy-grail',
    'demos',
);

$thisPage = isset($_GET['page']) ? $_GET['page'] : 0;

$prevPage = isset($pages[$thisPage-1]) ? $thisPage-1 : null;
$nextPage = isset($pages[$thisPage+1]) ? $thisPage+1 : null;

include TEMPLATES_DIR . 'header.php';
include TEMPLATES_DIR . $pages[$thisPage] . '.php';
include TEMPLATES_DIR . 'footer.php';