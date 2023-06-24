<div class="verticle-slider">
    <div class="container-fluid">
        <section class="slider">
            <div class="slider-flex position-relative">
                <div class="swiper-button-prev verticle-btn"></div>
                <h4 class="main-title ">Top 10 Filmlar</h4>
                <div class="slider--col position-relative">
                    <div class="slider-prev btn-verticle"><i class="ri-arrow-up-s-line vertical-aerrow"></i></div>
                    <div class="slider-thumbs" data-swiper="slider-thumbs">
                        <div class="swiper-container " data-swiper="slider-thumbs-inner">
                            <?php if (!empty($topMovies)) : ?>
                                <div class="swiper-wrapper top-ten-slider-nav">
                                    <?php foreach ($topMovies as $movie) : ?>
                                        <div class="swiper-slide swiper-bg">
                                        <div class="block-images position-relative ">
                                            <?php $image = getImage('movie',$movie['id'],$movie['image']);?>
                                            <div class="img-box slider--image">
                                                <img src="<?=$image?>" class="img-fluid" alt="" loading="lazy">
                                            </div>
                                            <div class="block-description">
                                                <h6 class="iq-title"><a href="show-detail.html"><?=$movie['name']?></a></h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="text-white"><?=$movie['duration']?></span>
                                                </div>
                                                <div class="hover-buttons">
                                                    <a href="?route=movie-view&id=<?=$movie['id']?>" role="button" class="btn btn-hover"><i
                                                            class="fa fa-play mr-1" aria-hidden="true"></i>
                                                        Hoziroq ko'rish
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li class="share">
                                                        <span><i class="ri-share-fill"></i></span>
                                                        <div class="share-box">
                                                            <div class="d-flex align-items-center">
                                                                <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                                   target="_blank" rel="noopener noreferrer" class="share-ico"
                                                                   tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                                   target="_blank" rel="noopener noreferrer" class="share-ico"
                                                                   tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                                <a href="#"
                                                                   data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                                   class="share-ico iq-copy-link" tabindex="0"><i
                                                                        class="ri-links-fill"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span><i class="ri-heart-fill"></i></span>
                                                        <span class="count-box">2+</span>
                                                    </li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="slider-next btn-verticle"><i class="ri-arrow-down-s-line vertical-aerrow"></i></div>
                </div>
                <div class="slider-images" data-swiper="slider-images">
                    <div class="swiper-container " data-swiper="slider-images-inner">
                        <?php if (!empty($topMovies)) : ?>
                            <div class="swiper-wrapper ">
                                <?php foreach ($topMovies as $movie) : ?>
                                    <div class="swiper-slide">
                                        <?php $image = getImage('movie',$movie['id'],$movie['image']);?>
                                        <div class="slider--image block-images"><img src="<?=$image?>" loading="lazy" alt="" /></div>
                                    <div class="description">
                                        <div class="block-description">
                                            <h6 class="iq-title"><a href="show-detail.html"><?=$movie['name']?></a></h6>
                                            <div class="movie-time d-flex align-items-center my-2">
                                                <span class="text-white"><?=$movie['duration']?></span>
                                            </div>
                                            <div class="hover-buttons">
                                                <a href="show-detail.html" role="button" class="btn btn-hover"><i
                                                        class="fa fa-play mr-1" aria-hidden="true"></i>
                                                    Hoziroq ko'rish
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
                <div class="swiper-button-prev verticle-btn"></div>
                <div class="swiper-button-next verticle-btn"></div>
            </div>
    </div>
    </section>
</div>