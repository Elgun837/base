<?php
require "header.php";
require "config.php";
if(!isset($_GET['page'])) {
    $_GET['page'] = "index";
}

// return match ($_GET['page']) {
//     "login" => require "login.php",
//     "logout" => require "logout.php",
//     "home" => require "home.php",
//     "header" => require "header.php",
//     "register" => require "register.php",
//     "addbasket" => require "addbasket.php",
//     "shopping-cart" => require "shopping-cart.php",
//     "remove-basket" => require "remove-basket.php",
//     default => null,
// };
switch ($_GET['page']) {
    case "login":
        require_once "login.php";
        break;
        case "register":
            require_once "register.php";
            break;
            case "home":
                require_once "home.php";
                break;
                case "logout":
                    require_once "logout.php";
                    break;
                    case "remove-basket":
                        require_once "remove-basket.php";
                        break;
                        case "shopping-cart":
                            require_once "shopping-cart.php";
                            break;
                            case "addbasket":
                                require_once "addbasket.php";
                                break;
}
// if(!isset($_SESSION['login'])){
//     header("location:?page=login");
// }else{
//     header("location:?page=home");
// } 