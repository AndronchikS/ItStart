<?php if ( $posts->have_posts() ):?>
<?php while ( $posts->have_posts() ) : $posts->the_post();  ?>
    <div class="blog-list">
        <article class="blog_post post-box">
            <div class="post_header">
                <h4 class="post_cat">Category : <a href="#"><?php echo  get_post_type(); ?></a></h4>
                <h2 class="post_title"><?php the_title(); ?> </h2>
            </div>
            <div class="post_img">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'single'); ?>" alt="img">
            </div>
            <div class="post_content">
                <div class="full_content">
                    <p><?php
                        the_content(); ?>
                    </p>
                </div>
                <div class="post_footer">
                    <ul class="post_meta">
                        <li><span class="author"><img src="<?php the_field('photo', 396); ?>"
                                                      alt="author"> By <a
                                        href="blog-single.php#"><?php the_author(); ?></a></span></li>
                        <li><span class="date"><a href="blog-single.php#"><?php echo the_date('j F,Y'); ?></a></span>
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
                                <a href="<?php echo $prev_post->guid; ?>"><?php echo $prev_post->post_title ?></a>
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
                                <a href="<?php echo $next_post->guid; ?>"><?php echo $next_post->post_title ?></a>
                            </h4>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

