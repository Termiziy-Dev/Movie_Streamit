<?php require_once 'sections/header.php'?>

<div class="iq-breadcrumb-one  iq-bg-over iq-over-dark-50" style="background-image: url(<?=ASSETS?>images/about-us/01.jpg);">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                    <h2 class="title">Eng kutilgan filmlar</h2>
                    <ol class="breadcrumb main-bg">
                        <li class="breadcrumb-item"><a href="#">Asosiy</a></li>
                        <li class="breadcrumb-item"><a href="#">Dramma</a></li>
                        <li class="breadcrumb-item active">Eng kutilgan filmlar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <?php if (!empty($news)):?>
                    <article>
                            <div class="iq-blog-box">
                            <?php $image = getImage('news',$news['id'],$news['image'])?>
                            <div class="iq-blog-image">
                                <img width="1920" height="1080" src="<?=$image?>" loading="lazy" alt="">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="iq-user"><i class="fa fa-user-o mr-1" aria-hidden="true"></i><?=$news['seen_count']?></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar mr-1" aria-hidden="true"></i>
                                            <span class="screen-reader-text">Posted on</span>
                                            <a href="#" rel="bookmark">
                                                <time datetime="2019-02-02T12:46:15+00:00"><?=$news['create_date']?></time>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-content">
                                    <p><strong>Praesent iaculis, purus ac vehicula mattis, arcu lorem blandit nisl, non laoreet dui mi eget elit. Donec porttitor ex vel augue maximus luctus. Vivamus finibus nibh eu nunc volutpat suscipit.</strong></p>
                                    <p>Nam vulputate libero quis nisi euismod rhoncus. Sed eu euismod felis. Aenean ullamcorper dapibus odio ac tempor. Aliquam iaculis, quam vitae imperdiet consectetur, mi ante semper metus, ac efficitur nisi justo ut eros. Maecenas suscipit turpis fermentum elementum scelerisque.</p>
                                    <p>Sed leo elit, volutpat quis aliquet eu, elementum eget arcu. Aenean ligula tellus, malesuada eu ultrices vel, vulputate sit amet metus. Donec tincidunt sapien ut enim feugiat, sed egestas dolor ornare.</p>
                                </div>
                                <blockquote class="wp-block-quote">
                                    <p>\”Simon Doe has his tongue planted in his cheek as he describes the<br>fictional skills of his advancing agent.\”</p>
                                    <cite><a href="#">Steve Kowalsky</a></cite>
                                </blockquote>
                                <p>Potenti fusce himenaeos hac aenean quis donec vivamus aliquet, wprdpress integer inceptos curae sollicitudin in class sociosqu netus, euismod tempus fermentum odio gravida eleifend viverra pulvinar inceptos ligula consectetur. Potenti ante porttitor tristique curae scelerisque tristique, dictum eu donec conubia sit rutrum duis viverra in commodo.</p>
                                <p>Nisi habitasse viverra praesent a maecenas odio erat tristique praesent elementum rutrum maecenas blandit nec curabitur donec, turpis varius etiam felis ultrices sit, per inceptos dapibus fames donec praesent quisque commodo primis proin leo nisl lacinia dictumst justo sagittis luctus vestibulum sed quisque.</p>
                                <div>
                                    <div>
                                        <iframe title="Lauren Cohan opens up about her ‘Walking Dead’ salary dispute" width="525" height="295" src="https://www.youtube.com/embed/bPh0kfMRIFA?feature=oembed" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <p>Potenti fusce himenaeos hac aenean quis donec vivamus aliquet, wprdpress integer inceptos curae sollicitudin in class sociosqu netus, euismod tempus fermentum odio gravida eleifend viverra pulvinar inceptos ligula consectetur. Potenti ante porttitor tristique curae scelerisque tristique, dictum eu donec conubia sit rutrum duis viverra in commodo.</p>
                            </div>
                        </div>
                    </article>
                <?php endif;?>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="widget-area">
                    <div id="search-2" class="widget widget_search">
                        <form method="get" class="search-form" action="#" autocomplete="off">
                            <label>
                                <span class="input-group screen-reader-text">Search for:</span>
                            </label>
                            <input type="search" class="search-field search__input" placeholder="Search" value="" name="s">
                            <button type="submit" class="search-submit">
                                <i class="ri-search-line"></i>
                                <span class="screen-reader-text">Search</span>
                            </button>
                        </form>
                    </div>
                    <div class="iq-widget-menu widget">
                        <h5 class="widget-title">Recent Post</h5>
                        <div class="list-inline iq-widget-menu">
                            <ul class="iq-post">
                                <li>
                                    <div class="post-img">
                                        <div class="post-img-holder">
                                            <a href="#" style="background-image: url('<?=ASSETS?>images/blog/blog1.jpg');"></a>
                                        </div>
                                        <div class="post-blog">
                                            <div class="blog-box">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item  mr-3">
                                                        <a class="date-widget" href="#"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>February 2, 2019</a>
                                                    </li>
                                                </ul>
                                                <a class="new-link" href="#"><h6>The Most Anticipated Movies</h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <div class="post-img-holder">
                                            <a href="#" style="background-image: url('<?=ASSETS?>images/blog/blog2.jpg');"></a>
                                        </div>
                                        <div class="post-blog">
                                            <div class="blog-box">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item  mr-3"><a class="date-widget" href="#"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>February 2, 2019</a></li>
                                                </ul>
                                                <a class="new-link" href="#"><h6>Amy Adams Always Dreamed</h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <div class="post-img-holder">
                                            <a href="#" style="background-image: url(<?=ASSETS?>images/blog/blog3.jpg);"></a>
                                        </div>
                                        <div class="post-blog">
                                            <div class="blog-box">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item  mr-3"><a class="date-widget" href="#"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>February 2, 2019</a></li>
                                                </ul>
                                                <a class="new-link" href="#"><h6>WandaVision Will Reveal Scarlet Witch’s Untapped Powers</h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="archives-2" class="widget widget_archive">
                        <h5 class="widget-title">Archives</h5>
                        <ul>
                            <li><a href="#">February 2019</a></li>
                            <li><a href="#">January 2019</a></li>
                        </ul>
                    </div>
                    <div id="categories-2" class="widget widget_categories">
                        <h5 class="widget-title">Yanglik kategoriyalari</h5>
                        <?php if (!empty($newsCategories)): ?>
                            <ul>
                                <?php foreach ($newsCategories as $categori):?>
                                    <li><a href="?route=blog-category&id=<?=$categori['id']?>"><?=$categori['name']?></a></li>
                                <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'sections/footer.php'?>

