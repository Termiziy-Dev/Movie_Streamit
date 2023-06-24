<?php

function getAllNews(){
    global $link;
    $query = "SELECT * FROM `news` WHERE `status` = 1";
    $result = mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}

function getAllNewsCategories(){
    global $link;
    $query = "SELECT * FROM `news_category` WHERE `status` = 1";
    $result = mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}

function getAllCategoryNews($id){
    global $link;
    $query = "SELECT * FROM `news` WHERE `status` = 1 AND `category_id` = '$id'";
    $result = mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}

function getNewsItem($id){
    global $link;
    $query = "SELECT * FROM `news` WHERE `status` = 1 AND `id` = '$id'";
    $result = mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_assoc($result);
}