<?php

require_once __DIR__ . '/../models/model.php';


$allHeaderMenus = getAllMenuItem(HEADER_MENU_POSITION);

$footerSocialMedia = footersocialMedia( FOOTER_MENU_POSITION );

$allSlides = getAllSlider();

$latestMovies = getLatestMovies();

$allGenres = getAllGenres();

$upcomingMovies = getLatestMovies('upcoming');

$topMovies = getLatestMovies('top');

$recommendMovies = getLatestMovies('recommend');

$route = (!empty($_GET['route'])) ? $_GET['route'] : null;
if (!empty($route)){
    switch ($route){
        case "movie-views":
            $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
            if (!empty($id)){
                addSeenCount('movie',$id);

                $movieData = getMovieDataById($id);
                if (!empty($movieData)){
                    $image = getImage('movie',$id,$movieData['image']);
                    require_once __DIR__ . '/../views/movie-view.php';
                }else{
                    require_once __DIR__ . '/../views/404.php';
                }

            } else{
                require_once __DIR__ . '/../views/404.php';
            }
        break;

        case "blog":
            $news = getAllNews();
            $newsCategories = getAllNewsCategories();
            require_once __DIR__ . '/../views/blog.php';
        break;

        case "blog-category":
            $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
            if (!empty($id)){
                $newsCategories = getAllNewsCategories();
                $categoryNews = getAllCategoryNews($id);
                require_once __DIR__ . '/../views/blog-category.php';
            }
        break;

        case "news-item":
            $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
            if (!empty($id)){
                $news = getNewsItem($id);
                $newsCategories = getAllNewsCategories();
                addSeenCount('news',$id);
                require_once __DIR__ . '/../views/news-item.php';
            }

        break;

        default:
            require_once __DIR__ . '/../views/404.php';
        break;
    }
}else{
    require_once __DIR__ . '/../views/index.php';
}

//debug($footerSocialMedia);

