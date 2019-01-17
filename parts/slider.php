<section id="slider" class="slider_1">
    <div class="slider">
        <div class="container">
            <div class="slide-content">
                <h6 class="sub_heading"><?php echo get_field('title'); ?></h6>
                <div class="typing_content">
                    <h2 class="heading">
                        <?php echo get_field('title_change'); ?> <span class="typed-element"><?php echo get_field('first_word'); ?></span>
                    </h2>
                    <div class="typed-strings">
                        <p><?php echo get_field('second_word'); ?></p>
                        <p><?php echo get_field('third_word'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll_btn"><a href="index.php#about"><i class="fa fa-angle-down"></i></a></div>
        <div class="section-shape">
            <img src=<?php echo get_field('image_slider'); ?> alt="shape image">
        </div>
    </div>
</section>