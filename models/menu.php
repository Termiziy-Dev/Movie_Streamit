<?php

function getAllMenuItem($position = HEADER_MENU_POSITION , $parent = 0){
    global $link;
    $query = "SELECT * FROM `menu` WHERE `status` = 1 AND `position` = '$position'AND `parent` = '$parent' ORDER BY `order_by` ASC ";
    $result = @mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result , MYSQLI_ASSOC);
}
