<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <h2><?php the_field('titleabout', 194); ?></h2>
                    <p><?php the_field('descabout1', 194); ?></p>
                </div>
                <div class="about_content_box box-left">
                    <div class="about_txt_box">
                        <p><?php the_field('descabout2', 194); ?></p>
                    </div>
                    <div class="about_img_box">
                        <img src=<?php the_field('imgabout', 194); ?> alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about_content_box box-right">
                    <div class="row">
                        <?php $imges = get_field('imagesaboutright', 194);
                        foreach ($imges as $img): ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="about_img_box">
                                    <img src=<?php echo $img['imgleft']; ?> alt="img">
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="about_txt_box">
                        <p><?php the_field('descabout3', 194); ?> </p>
                        <p><?php the_field('descabout4', 194); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
