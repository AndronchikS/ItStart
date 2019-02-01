<div class="item">
    <div class="testibox">
        <div class="testi-img">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'testimonial'); ?>" alt="">
        </div>
        <div class="testi-content">
            <ul>
                <li><i class="ion-ios-star"></i></li>
                <li><i class="ion-ios-star"></i></li>
                <li><i class="ion-ios-star"></i></li>
                <li><i class="ion-ios-star"></i></li>
                <li><i class="ion-ios-star"></i></li>
            </ul>
            <p> <?php the_content(); ?></p>
            <h4><?php the_title(); ?></h4>
            <h6>CEO, Advertising Corp</h6>
        </div>
    </div>
</div>