<?php

$act = "show_catalog";
if (isset($_GET['action'])) {
    $act = $_GET['action'];
}
switch ($act) {
    case 'show_catalog':
        include "MVC/View/Catalog/show_catalog.php";
        break;
    case 'edit_catalog':
        include "MVC/View/Catalog/edit_catalog.php";
        break;
    case 'add_catalog':
        include "MVC/View/Catalog/add_catalog.php";
        break;
    default:
        include_once "MVC/View/Catalog/show_catalog.php";
        break;
}
