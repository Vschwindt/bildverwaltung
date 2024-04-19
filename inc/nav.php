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
    case "register":
        include "register.php";
        break;
    default:
        include "home.php";
        break;
}
