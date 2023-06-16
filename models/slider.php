<?php

function getAllSlider(){
    global $link;
    $query = "SELECT * FROM `slider` WHERE `status` = 1";
    $result = @mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result , MYSQLI_ASSOC);
}