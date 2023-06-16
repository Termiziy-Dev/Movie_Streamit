<?php

function getAllGenres(){
    global $link;
    $query = "SELECT * FROM `genres` WHERE `status` = 1";
    $result = mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result , MYSQLI_ASSOC);
}