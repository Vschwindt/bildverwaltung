<?php

if (!isset($_GET['page'])) {
    include "home.php";
    die;
}


switch ($_GET['page']) {
    case "home":
        include "home.php";
        break;
    case "login":
        include "login.php";
        break;
    case "logout":
        include "logout.php";
        break;
    case "profile":
        include "profile.php";
        break;
    case "help":
        include "help.php";
        break;
    case "impressum":
        include "impressum.php";
        break;
    case "register":
        include "register.php";
        break;
    case "images":
        include "images.php";
        break;
    case "usermanagement":
        include "usermanagement.php";
        break;
    case "imagemanagement":
        include "imagemanagement.php";
        break;
    default:
        include "home.php";
        break;
}
