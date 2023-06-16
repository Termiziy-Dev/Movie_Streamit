<?php

function getAllMovies(){
    global $link;
    $query = "SELECT * FROM `movie` WHERE `status` = 1";
    $result = @mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result , MYSQLI_ASSOC);
}

function getLatestMovies($sectionStatus = null){
    global $link;

    switch ($sectionStatus){
        case null:
            $query = "SELECT * FROM `movie` WHERE `status` = 1 ORDER BY `id` DESC ";
        break;

        case "upcoming":
            $query = "SELECT * FROM `movie` WHERE `status` = 1 AND `upcoming` = 1";
        break;

        case "top":
            $query = "SELECT * FROM `movie` WHERE `status` = 1 AND `top10` = 1 AND `upcoming` = 1";
        break;

        case "recommend":
            $query = "SELECT * FROM `movie` WHERE `status` = 1 AND `recommend` = 1 AND `upcoming` = 1";
        break;
    }

    $result = @mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_all($result , MYSQLI_ASSOC);
}

function getMovieDataById($id){
    global $link;
    $query = "SELECT * FROM `movie` WHERE `id` = $id AND `status` = 1";
    $result = mysqli_query($link , $query) or die(mysqli_error($link));

    return mysqli_fetch_assoc($result);
}
