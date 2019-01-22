<section id="slider" class="slider_1">
    <div class="slider">
        <div class="container">
            <div class="slide-content">
                <h6 class="sub_heading"><?php the_field('title', 194); ?></h6>
                <div class="typing_content">
                    <h2 class="heading">
                        <?php the_field('title_change', 194); ?>
                        <span class="typed-element"><?php the_field('first_word', 194); ?></span>
                    </h2>
                    <div class="typed-strings">
                        <p><?php the_field("second_word", 194); ?></p>
                        <p><?php the_field("third_word", 194); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll_btn"><a href="index.php#about"><i class="fa fa-angle-down"></i></a></div>
        <div class="section-shape">
            <img src=<?php the_field('image_slider', 194); ?> alt="shape image">
        </div>
    </div>
</section>