<div class="main-wrapper">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 main-content">
                    <div class="blog-list">
                        <article class="blog_post post-box">
                            <div class="post_header">
                                <h4 class="post_cat">Category : <a href="#"><?php echo $post->post_type; ?></a></h4>
                                <h2 class="post_title"><?php the_title(); ?> </h2>
                            </div>
                            <div class="post_img">
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'single'); ?>" alt="img">
                            </div>
                            <div class="post_content">
                                <div class="full_content">
                                    <p><?php the_post();
                                        the_content(); ?>
                                    </p>
                                </div>
                                <div class="post_footer">
                                    <ul class="post_meta">
                                        <li><span class="author"><img src="<?php the_field('photo', 396); ?>"
                                                                      alt="author"> By <a
                                                        href="blog-single.php#"><?php the_author(); ?></a></span></li>
                                        <li><span class="date"><a
                                                        href="blog-single.php#"><?php the_date('j F,Y'); ?></a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="inner_posts">
                        <div class="row">
                            <?php $prev_post = get_previous_post(); ?>
                            <?php if (!empty($prev_post)): ?>
                                <div class="col-md-6">
                                    <div class="inner-post prev_post">

                                        <img src="<?php the_field('photo', 396); ?>" alt="img">
                                        <div class="post_block">
                                            <a href="<?php echo $prev_post->guid; ?>">Previous Post</a>
                                            <h4>
                                                <a href="<?php echo $prev_post->guid; ?>"><?php echo $prev_post->post_title; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>

                            <?php $next_post = get_next_post(); ?>
                            <?php if (!empty($next_post)): ?>
                                <div class="col-md-6">
                                    <div class="inner-post next_post">

                                        <img src="<?php the_field('photo', 396); ?>" alt="img">
                                        <div class="post_block">
                                            <a href="<?php echo $next_post->guid; ?>">Next Post</a>
                                            <h4>
                                                <a href="<?php echo $next_post->guid; ?>"><?php echo $next_post->post_title; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 sidebar">

                    <div id="search-2" class="widget widget_search">
                        <div class="sidebar_search">
                            <form class="sidebar_search_form">
                                <input type="text" name="search" class="form-control" placeholder="Search">
                                <button type="submit" class="form-control form-control-submit"><i
                                            class="ion-ios-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div id="recent-posts-2" class="widget widget_recent_posts">
                        <h4 class="widget_title"><span>Recent Posts</span></h4>
                        <div class="sidebar_recent_posts">
                            <ul class="recent_posts_list">
                                <?php $recent = get_recent($post->post_type);
                                foreach ($recent as $item):?>
                                    <li>
                                        <img src="<?php the_field('photo', 396) ?>" alt="insta">
                                        <div class="post_content">
                                            <h6><a href="<?php echo $item->guid ?>"><?php echo $item->post_title ?></a>
                                            </h6>
                                            <p class="date"> <?php echo date('j F,Y', strtotime($item->post_date)); ?></p>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div id="archives-1" class="widget widget_archive">
                        <h4 class="widget_title"><span>Archives List</span></h4>
                        <div class="sidebar_archive">
                            <?php $archives = get_arhives($post->post_type); ?>
                            <ul class="archive_list">
                                <?php foreach ($archives as $archive): ?>
                                    <li>
                                        <a href="<?php echo $archive->guid ?>"><?php echo date('F Y', strtotime($archive->post_date)); ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- End Main Wrapper-->