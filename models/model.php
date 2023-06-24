<?php

require_once 'menu.php';

require_once 'social-media.php';

require_once 'slider.php';

require_once 'movie.php';       // Database functions for `movie` table

require_once 'genres.php';       // Database functions for `genres` table

require_once 'news.php';       // Database functions for `news`and 'news_category' table


// Seen Count Movies
function addSeenCount($tableName,$id,$rowName = 'seen_count'){
    global $link;
    $query = "SELECT `$rowName` FROM `$tableName` WHERE `id` = $id";
    $result = @mysqli_query($link , $query) or die(mysqli_error($link));

    $count =  mysqli_fetch_assoc($result)[$rowName];
    $count += rand(0 , DEFAULT_SEEN_COUNT);

    $query = "UPDATE `$tableName` SET `$rowName` = '$count'  WHERE `id` = '$id'";
    $result = @mysqli_query($link , $query) or die(mysqli_error($link));
    return true;
}
