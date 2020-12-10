<?php

$act = "show_product";
if (isset($_GET['action'])) {
    $act = $_GET['action'];
}
switch ($act) {
    case 'show_product':
        include "MVC/View/Product/show_product.php";
        break;
    case 'edit_product':
        include "MVC/View/Product/edit_product.php";
        break;
    case 'add_product':
        include "MVC/View/Product/add_product.php";
        break;
    default:
        include_once "MVC/View/Product/show_product.php";
        break;
}
