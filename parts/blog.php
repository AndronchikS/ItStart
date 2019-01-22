<section id="blog" class="blog">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('titlearticles', 194); ?></h2>
            <p><?php the_field('descarticles', 194); ?></p>
        </div>
        <div class="row">
            <?php $posts = get_posts(array(
                'post_type' => 'post',
                'category_name' => 'articles',
            ));
            foreach ($posts as $post): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="blog_post">
                        <div class="post_img">
                            <a href="index.php#"><img
                                        src=<?php echo get_the_post_thumbnail_url($post->ID, 'blog'); ?> alt="img"></a>
                        </div>
                        <div class="post_content">
                            <div class="post_header">
                                <h2 class="post_title"><a href="index.php#"><?php echo $post->post_title; ?></a></h2>
                                <div class="read_more"><a href="index.php#"><?php echo $post->post_content; ?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>
</section>
