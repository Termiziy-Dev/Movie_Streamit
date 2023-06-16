<?php require_once 'sections/header.php' ?>

    <!-- Banner Start -->

<?php $movie_file = getImage("movie",$movieData['id'],$movieData['move_file']);?>

    <div class="iq-main-slider site-video">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pt-0">
                        <?php if (!empty($movie_file)): ?>
                        <video
                            id="my-video"
                            class="video-js vjs-big-play-centered w-100"
                            controls
                            preload="auto"
                            data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "<?=$movie_file?>"}], "youtube": { "iv_load_policy": 1 } }'>
                            <source src="<?=$movie_file?>" type="video/mp4" />
                            <source src="MY_VIDEO.html" type="video/webm" />
                        </video>
                        <?php else: ?>
                            <div class="alert alert-danger">
                                Film hozircha yuklanmagan!
                            </div>
                        <?php endif;?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Banner End -->
    <!-- MainContent -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-4 pt-0 pb-4">
                    <div class="row">
                        <div class="col-md-9 col-12 genres-list mb-auto">
                            <div class="d-md-flex">
                                <h3 class="genres-title big-title text-uppercase fadeInLeft animated"
                                    data-animation-in="fadeInLeft" data-delay-in="0.6"
                                    style="opacity: 1; animation-delay: 0.6s">
                                    <?=$movieData['name']?>
                                </h3>
                            </div>
                            <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-content">
                                <span>
                                    <?=$movieData['genre']?>
                                </span>
                            </ul>
                            <div class="d-flex flex-wrap align-items-center text-white text-detail flex-wrap mb-4">
                                <span class="badge badge-secondary font-size-16"><i class="fa fa-eye"></i><?=$movieData['seen_count']?> views</span>
                                <span class="ml-3 font-Weight-500 genres-info"><?=$movieData['duration']?></span>
                                <span class="trending-year trending-year-list font-Weight-500 genres-info"><?=$movieData['date']?></span>
                            </div>
                            <ul class="list-inline p-0 m-0 share-icons music-play-lists mb-1">
                                <li class="share">
                                    <span><i class="ri-share-fill"></i></span>
                                    <div class="share-box">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="share-ico"><i class="ri-facebook-fill"></i></a>
                                            <a href="#" class="share-ico"><i class="ri-twitter-fill"></i></a>
                                            <a href="#" class="share-ico"><i class="ri-links-fill"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span><i class="ri-heart-fill"></i></span>
                                </li>
                                <li>
                                    <span><i class="ri-add-line"></i></span>
                                </li>
                            </ul>
                            <ul class="p-0 list-inline d-flex flex-wrap align-items-center mb-3 mt-4">
                                <li class="text-primary text-lable mr-3">
                                    <i class="fa fa-tags" aria-hidden="true"></i>Tags:
                                </li>
                                <li class="trending-list mr-3">
                                    <a class="title" href="tags/adventure.html">Adventure</a>,
                                </li>
                                <li class="trending-list mr-3">
                                    <a class="title" href="tags/animation.html">Animation</a>,
                                </li>2
                                <li class="trending-list mr-3">
                                    <a class="title" href="tags/comedy.html">Comedy</a>
                                </li>
                            </ul>
                        </div>
                        <?php $trailer = getImage('movie',$movieData['id'],$movieData['trailer_file'])?>
                        <div class="trailor-video col-md-3 col-12 mt-lg-0 mt-4 mb-md-0 mb-1 text-lg-right">
                            <a href="<?=$trailer?>"
                               class="video-open playbtn block-images position-relative playbtn_thumbnail">
                                <img width="1920" height="1080" src="<?=$image?>"
                                     class="attachment-medium-large size-medium-large wp-post-image" loading="lazy" alt=""  />
                                <span class="content btn btn-transparant iq-button">
                                  <i class="fa fa-play mr-2"></i>
                                  <span>Trailerni ko'rish</span>
                               </span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="streamit-content-details trending-info g-border">
                    <ul class="trending-pills-header d-flex nav nav-pills align-items-center text-center mb-5 justify-content-center"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="pill" href="#decription-22"
                               role="tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#review-23" role="tab"
                               aria-selected="false">Comments</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="decription-22" class="tab-pane fade active show" role="tabpanel">
                            <div class="description-content">
                                <p><?=$movieData['description']?></p>
                            </div>
                        </div>
                        <div id="review-23" class="tab-pane fade" role="tabpanel">
                            <div id="reviews" class="streamit-reviews">
                                <div id="comments" class="comments-area validate-form">
                                    <p class="masvideos-noreviews mt-3">
                                        There are no comment yet.
                                    </p>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title">
                                                Be the first to comment “mission marse”
                                                <small><a rel="nofollow" id="cancel-comment-reply-link"
                                                          href="https://templates.iqonic.design/product/wp/streamit/movie/pirates-of-sea/#respond"
                                                          style="display: none">Cancel reply</a></small>
                                            </h3>
                                            <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                                                <p class="comment-notes">
                                              <span id="email-notes">Your email address will not be
                                                 published.</span>
                                                    <span class="required-field-message" aria-hidden="true">Required fields are
                                                 marked
                                                 <span class="required" aria-hidden="true">*</span></span>
                                                </p>
                                                <p class="comment-form-comment p-0 mb-3 mt-0">
                                                    <label for="comment">Your comment&nbsp;<span
                                                            class="required">*</span></label><textarea id="comment" name="comment"
                                                                                                       cols="45" rows="8" required=""></textarea>
                                                </p>
                                                <p class="comment-form-author mt-3 pr-lg-3 pr-md-3 pr-0">
                                                    <label for="author">Name&nbsp;<span class="required">*</span></label>
                                                    <input id="author" name="author" type="text" value="" size="30" required="" />
                                                </p>
                                                <p class="comment-form-email mt-3 pl-lg-3 pl-md-3 pl-0">
                                                    <label for="email">Email&nbsp;<span class="required">*</span></label>
                                                    <input id="email" name="email" type="email" value="" size="30" required="" />
                                                </p>
                                                <p class="comment-form-cookies-consent">
                                                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                                           type="checkbox" value="yes" />
                                                    <label for="wp-comment-cookies-consent">Save my name, email,
                                                        and website in this
                                                        browser for the next time I comment.</label>
                                                </p>
                                                <p class="form-submit">
                                                    <button name="submit" type="submit" id="submit"
                                                            class="btn btn-hover iq-button" value="Submit">
                                                        <span><i class="ri-play-fill"></i>Submit</span>
                                                    </button>
                                                    <input type="hidden" name="comment_post_ID" value="7230"
                                                           id="comment_post_ID" />
                                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0" />
                                                </p>
                                            </form>
                                        </div>
                                        <!-- #respond -->
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'sections/footer.php'?>

