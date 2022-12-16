<?php
$uri = explode("/", $_SERVER['REQUEST_URI']);
$str = explode("?", $_SERVER['REQUEST_URI']);


$bid = NULL;
if (isset($_GET['id'])) {
    $bid = $_GET['id'];
}

switch ($uri[1]) {
    case '':
        include APP_PATH . "/view/home.php";
        break;
    
        case 'home':
            include APP_PATH . "/view/home.php";
            break;

    case 'about':
        include APP_PATH . "/view/about.php";
        break;

    case "contact":
        include APP_PATH . "/view/contact.php";
        break;

    case "contact?$str[1]":
        include APP_PATH . "/view/contact.php";
        break;

    case 'maths':
        include APP_PATH . "/view/maths.php";
        break;

    case 'language':
        include APP_PATH . "/view/language.php";
        break;

    case 'coding':
        include APP_PATH . "/view/coding.php";
        break;

    case 'science':
        include APP_PATH . "/view/science.php";
        break;

    case "handwriting":
        include APP_PATH . "/view/handwriting.php";
        break;

    case "start-class":
        include APP_PATH . "/view/start-class.php";
        break;
    
        case "start-class?$str[1]":
            include APP_PATH . "/view/start-class.php";
            break;
//Controller Sends
    case "send":
        include APP_PATH . "/controller/send.php";
        break;

    case "apply":
        include APP_PATH . "/controller/apply.php";
        break;

    case "subscribe":
        include APP_PATH . "/controller/subscribe.php";
        break;

            
    default:
        // code...
        break;
}

//Admin panel
switch ($uri[2]) {

    case "home":
        include APP_PATH . "/view/admin/home.php";
        break;

    case "home?$str[1]":
        include APP_PATH . "/view/admin/home.php";
        break;

    case "themestvadminregister":
        include APP_PATH . "/view/admin/register.php";
        break;

    case "login":
        include APP_PATH . "/view/admin/login.php";
        break;

    case "login?$str[1]":
        include APP_PATH . "/view/admin/login.php";
        break;

    case "messages":
        include APP_PATH . "/view/admin/messages.php";
        break;

    case "client":
        include APP_PATH . "/view/admin/client.php";
        break;
    case "client?$str[1]":
        include APP_PATH . "/view/admin/client.php";
        break;

    case "add_client":
        include APP_PATH . "/view/admin/add_client.php";
        break;

    case "edit_client?$str[1]":
        include APP_PATH . "/view/admin/edit_client.php";
        break;

    case "port":
        include APP_PATH . "/view/admin/port.php";
        break;

    case "port?$str[1]":
        include APP_PATH . "/view/admin/port.php";
        break;

    case "edit_port?$str[1]":
        include APP_PATH . "/view/admin/edit_port.php";
        break;

    case "view_port?$str[1]":
        include APP_PATH . "/view/admin/view_port.php";
        break;

    case "add_port":
        include APP_PATH . "/view/admin/add_port.php";
        break;

    case "archive":
        include APP_PATH . "/view/admin/archive.php";
        break;

    case "archive?$str[1]":
        include APP_PATH . "/view/admin/archive.php";
        break;

    case "add_archive":
        include APP_PATH . "/view/admin/add_archive.php";
        break;

    case "edit_archive?$str[1]":
        include APP_PATH . "/view/admin/edit_archive.php";
        break;

    case "action?$str[1]":
        include APP_PATH . "/view/admin/action.php";
        break;

    default:
        // code...
        break;
}
