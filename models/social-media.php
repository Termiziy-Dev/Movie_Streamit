<?php

function footerSocialMedia($position = FOOTER_MENU_POSITION ){
    global $link;
    $query = "SELECT * FROM `social_link` WHERE `status` = 1 AND `position` = '$position' ORDER BY `order_by` ASC ";

    $result = @mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result , MYSQLI_ASSOC);
}
