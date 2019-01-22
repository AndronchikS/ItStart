<section id="services" class="services pt-10">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('titleservices', 194); ?></h2>
            <p><?php the_field('desservice', 194); ?></p>
        </div>
        <div class="row">
            <?php
            $posts = get_posts(array(
                'post_type' => 'services',
                'order' => 'ASC',
            ));
            $num = 0;
            foreach ($posts as $post): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="servicebox">
                        <div class="srv_desc">
                            <h5 class="count"><?php ++$num;
                                echo sprintf('%1$02d', $num); ?></h5>
                            <h4><a href="index.php#"><?php echo $post->post_title; ?></a></h4>
                            <p><?php echo $post->post_content; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
