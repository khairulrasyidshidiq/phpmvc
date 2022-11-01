<?php
$url = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if($url === 'public'){
    header("Location: home");
}
require_once '../app/init.php';
