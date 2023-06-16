<section class="iq-genres-section mt-5">
    <?php if (!empty($allGenres)) : ?>
        <div class="container-fluid">
        <div class="iq-main-header d-flex align-items-center justify-content-between mt-5 mt-lg-0">
            <h4 class="main-title">Kino Janrlari</h4>
        </div>
            <ul class=" row list-inline  mb-0 iq-rtl-direction iq_genres-contents">
                <?php foreach ($allGenres as $genre) : ?>
                    <?php $image = getGenreImage('../uploads/genre',$genre['id'].".jpg"); ?>
                    <li class="slide-item col-lg-3 col-md-4 col-sm-6">
                        <div class="block-images position-relative  watchlist-first">
                            <div class="img-box">
                                <img src="<?=$image?>" class="img-fluid" loading="lazy" alt="">
                            </div>
                            <div class="block-description d-flex justify-content-center flex-column text-center">
                                <h6 class="iq-title"><a href="view-all.html"><?=$genre['name']?></a></h6>
                            </div>
                        </div>
                    </li>

                <?php endforeach;?>
            </ul>

            <button class="btn btn-hover hide-me" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                <span class="genres-btn">Ko'proq yuklash</span>
            </button>

            <div class="collapse" id="collapseExample1">
                <ul class=" row list-inline  mb-0 iq-rtl-direction iq_genres-contents">
                    <?php foreach ($allGenres as $genre) : ?>

                        <li class="slide-item col-lg-3 col-md-4 col-sm-6">
                            <div class="block-images position-relative  watchlist-first">
                                <div class="img-box">
                                    <img src="<?=getGenreImage('../uploads/genre',"1".$genre['id'].".jpg")?>" class="img-fluid" loading="lazy" alt="">
                                </div>
                                <div class="block-description d-flex justify-content-center flex-column text-center">
                                    <h6 class="iq-title"><a href="view-all.html"><?=$genre['name']?></a></h6>
                                </div>
                            </div>
                        </li>

                    <?php endforeach;?>

                </ul>
            </div>
    </div>
    <?php endif;?>
</section>