<?php

require_once __DIR__."/../../models/model.php";

$errorMessage = "";

$route = (!empty($_GET['r'])) ? $_GET['r'] : null;

if (!empty($route)){
    switch ($route){
        case 'menu':

            $allMenu = getAllMenu();
//            debug($allMenu);die;
            require_once __DIR__."/../views/menu.php";
        break;

        case 'menu-add':

            if (!empty($_POST)){
//                debug($_POST);die;
                $title = $_POST['title'];
                $url = $_POST['link'];
                $position = $_POST['position'];
                $orderBy = $_POST['order_by'];
                $parent = $_POST['parent'];
                $status = $_POST['status'];

                if (!empty($title) && !empty($url) && !empty($position) && !empty($orderBy) && !empty($parent) && !empty($status) || $parent == 0 || $status == 0){
                    if (addNewMenu($title,$url,$position,$orderBy,$parent,$status)){
                        header("refresh:0;url=/../admin/?r=menu");
                    }
                }else{
                    $errorMessage = "Majburiy bo'lgan forma elementi to'ldirilmadi!";
                }
            }

            require_once __DIR__."/../views/menu_form.php";
        break;

        default:
            require_once __DIR__."/../views/404.php";
        break;
    }
} else{
    require_once __DIR__."/../views/index.php";
}

