<?php if ($blogs): ?>
    <?php foreach ($blogs as $blog): ?>
        <?php the_post(); ?>
        <article class="blog_post">
            <div class="post_header">
                <h4 class="post_cat">Category : <a
                        href="blog.php#"><?php echo get_post_type(); ?></a></h4>
                <h2 class="post_title"><a href="blog.php#"><?php echo $blog->post_title; ?></a>
                </h2>
            </div>
            <div class="post_img">
                <a href="blog.php#"><img
                        src="<?php echo get_the_post_thumbnail_url($blog->ID, 'single'); ?>"
                        alt="img"></a>
            </div>
            <div class="post_content">
                <div class="post_intro">
                    <p><?php echo $blog->post_content ?></p>
                </div>

                <div class="post_footer">
                    <ul class="post_meta">
                        <li><span class="author"><img src="<?php the_field('photo', 396); ?>"
                                                      alt="author"> By <a
                                    href="blog.php#"><?php the_author(); ?>;</a></span></li>
                        <li><span class="date"><a
                                    href="blog.php#"><?php echo date('j F,Y', strtotime($blog->post_date)); ?></a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    <?php endforeach; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>