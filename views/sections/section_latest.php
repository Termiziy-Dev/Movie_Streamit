<section id="iq-favorites">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="main-title">So'ngi qo'shilgan kinolar</h4>
                    <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                </div>
            </div>
        </div>
        <!-- Swiper -->

        <?php if (!empty($latestMovies)) : ?>
            <div class="favourite-slider">
                <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                    <ul class="swiper-wrapper p-0 m-0 ">
                        <?php foreach ($latestMovies as $movie) : ?>

                            <?php $image = getImage('movie',$movie['id'],$movie['image'])?>

                            <li class="swiper-slide slide-item">
                            <div class="block-images position-relative ">
                                <div class="img-box">
                                    <img src="<?=$image?>" class="img-fluid" alt="" loading="lazy">
                                </div>
                                <div class="block-description">
                                    <h6 class="iq-title"><a href="<?=$image?>"><?=$movie['name']?></a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                        <span class="text-white"><?=$movie['duration']?></span>
                                    </div>
                                    <div class="hover-buttons">
                                        <a href="?route=movie-view&id=<?=$movie['id']?>" role="button" class="btn btn-hover"><i
                                                class="fa fa-play mr-1" aria-hidden="true"></i>
                                            Hoziroq ko'rish!
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
                                                       target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                            class="ri-facebook-fill"></i></a>
                                                    <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                       target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                            class="ri-twitter-fill"></i></a>
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
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        <?php endif;?>

    </div>
</section>