<?php

function getAllMenuItem($position = HEADER_MENU_POSITION , $parent = 0){
    global $link;
    $query = "SELECT * FROM `menu` WHERE `status` = 1 AND `position` = '$position'AND `parent` = '$parent' ORDER BY `order_by` ASC ";
    $result = @mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result , MYSQLI_ASSOC);
}

########## BACKEND FUNCTION ##########

function getAllMenu(){
    global $link;
    $query = "SELECT * FROM `menu`";
    $result = @mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result , MYSQLI_ASSOC);
}

function addNewMenu($title,$url,$position,$orderBy,$parent,$status){
    global $link;
    $query = "INSERT INTO `menu` (`title`,`link`,`position`,`order_by`,`parent`,`status`) VALUES ('$title','$url','$position','$orderBy','$parent','$status')";

    $result = @mysqli_query($link,$query) or die(mysqli_error($link));

    if (mysqli_affected_rows($link) > 0){
        return true;
    }

    return false;
}


