<?php
/*
Template Name: servicesTemp
*/
?>

<?php $classMenu = "inner-header";
$mainLogo = "main_logo2"; ?>
<?php include(locate_template('header.php')); ?>

<div class="main-wrapper">
    <section class="inner-page">
        <div class="container">
            <div class="singlepage-details-content">
                <div class="service-details-img">
                    <img src="<?php the_field('servicelogo', 488); ?>" alt="img">
                </div>
                <div class="service-details">
                    <div class="full_content">
                        <h6><?php the_field('signature', 488); ?></h6>
                        <h2 class="project_title"><?php the_field('titledevelop', 488); ?></h2>
                        <p><?php the_field('descdev1', 488); ?></p>

                        <p><?php the_field('descdev2', 488); ?></p>
                    </div>
                </div>
            </div>

            <div class="service_post-inner">
                <h2 class="project_title"><?php the_field('titleservices', 488); ?></h2>
                <div class="service_post-list">
                    <?php
                    $posts = get_posts(array(
                        'post_type' => 'services',
                        'order' => 'ASC',
                    ));
                    foreach ($posts as $post): ?>
                        <div class="service_post">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="service_post-img">
                                        <img src="<?php echo
                                        get_the_post_thumbnail_url($post->ID, 'services'); ?>" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="service_post-content">
                                        <div class="service_post-header">
                                            <h4><?php echo $post->post_title; ?></h4>
                                        </div>
                                        <div class="service_post-text">
                                            <p><?php echo $post->post_content; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <?php $experts = get_field('experts', 488);
                        foreach ($experts as $expert): ?>
                            <div class="col-lg-6">
                                <div class="team_member">
                                    <img src="<?php echo $expert['photo']; ?>" alt="img">
                                    <div class="team_member_inner">
                                        <h4><?php echo $expert['name']; ?></h4>
                                        <h6><?php echo $expert['position']; ?></h6>
                                        <p><?php echo $expert['desc']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="section-title">
                        <h2><?php the_field('titleserexpert', 488); ?></h2>
                        <p><?php the_field('serviceexpdes1', 488); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonials" class="testimonials testimonials2">
        <div class="container">
            <div class="section-title">
                <h2><?php the_field('testimonial', 488); ?></h2>
                <p><?php the_field('testimonialdesc', 488); ?></p>
            </div>
            <div class="owl-carousel owl-theme testimonial_carousel2">
                <?php $posts = new WP_Query(array('post_type' => 'testimonial')); ?>
                <?php while ($posts->have_posts()): $posts->the_post(); ?>
                    <?php include (locate_template('parts/commentBlock.php'));?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <?php get_template_part('/footer'); ?>
