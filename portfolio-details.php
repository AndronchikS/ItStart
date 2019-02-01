<?php
/*
Template Name: portfolioTemp
*/
?>

<?php $classMenu = "inner-header";
$mainLogo = "main_logo2"; ?>
<?php include(locate_template('header.php')); ?>

<div class="main-wrapper">
    <section class="inner-page">
        <div class="container">
            <div class="singlepage-details-content">
                <div class="portfolio-details-img">
                    <img src="<?php the_field('portlogo', 486) ?>" alt="img">
                </div>
                <div class="portfolio-details">
                    <div class="full_content">
                        <h6><?php the_field('signature', 486) ?></h6>
                        <h2 class="project_title"><?php the_field('titlemobile', 486) ?></h2>
                        <p><?php the_field('descmobile1', 486) ?></p>

                        <p><?php the_field('descmobile2', 486) ?></p>
                    </div>
                    <div class="portfolio-content-img">
                        <img src="<?php the_field('imgmobile', 486) ?>" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-banner">
        <div class="container">
            <div class="video-content"><?php the_field('titlevideo1', 486) ?> <span class="video_btn"><a
                            class="fancybox-media" href="<?php the_field('video', 486) ?>"><i
                                class="ion-ios-play"></i></a></span> <?php the_field('titlevideo2', 486) ?> </div>
        </div>
    </section>

    <section class="project_desc">
        <div class="container">
            <div class="section-title">
                <h2><?php the_field('titleproject', 486) ?></h2>
                <p><?php the_field('spanproject', 486) ?></p>
            </div>
            <div class="project_desc_inner">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="desc_txt">
                            <p><?php the_field('projectdesc1', 486) ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="desc_txt">
                            <p><?php the_field('projectdesc2', 486) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project_desc_bottom">
            <div class="container">
                <div class="project_info_grid">
                    <?php $items = get_field('items', 486);
                    foreach ($items as $item): ?>
                        <div class="info_grid">
                            <h5><?php echo $item['title']; ?></h5>
                            <p><?php echo $item['descript']; ?> </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials testimonials1">
        <div class="container">
            <div class="owl-carousel owl-theme testimonial_carousel">
                <?php $posts = new WP_Query(array('post_type' => 'testimonial')); ?>
                <?php while ($posts->have_posts()): $posts->the_post(); ?>
                    <?php include(locate_template('parts/commentBlock.php')); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <?php get_template_part('/footer'); ?>
