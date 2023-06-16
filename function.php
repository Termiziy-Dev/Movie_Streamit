<?php

function debug($arr){
    echo "<pre>";
        print_r($arr);
    echo "</pre>";
}

function getImage($tableName, $modelId, $image){

    $dir = __DIR__ . "/uploads/{$tableName}/{$modelId}/$image";

    if (is_file($dir)){
        return "/uploads/{$tableName}/{$modelId}/$image";
    }

    return "/uploads/no-image.png";

}

function getGenreImage($tableName, $image){

    $dir = __DIR__ . "/uploads/{$tableName}/$image";

    if (is_file($dir)){
        return "/uploads/{$tableName}/$image";
    }

    return "/uploads/no-image.png";

}

function getFile(){
    global $link;
}
