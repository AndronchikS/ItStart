<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <h2><?php echo get_field('titleabout'); ?></h2>
                    <p><?php echo get_field('descabout1'); ?></p>
                </div>
                <div class="about_content_box box-left">
                    <div class="about_txt_box">
                        <p><?php echo get_field('descabout2'); ?></p>
                    </div>
                    <div class="about_img_box">
                        <img src=<?php echo get_field('imgabout'); ?> alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about_content_box box-right">
                    <div class="row">
                        <?php $imges = get_field('imagesaboutright');
foreach ($imges as $img): ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_img_box">
                                <img src=<?php echo $img['imgleft']; ?> alt="img">
                            </div>
                        </div>
                    <?php endforeach?>
                    </div>
                    <div class="about_txt_box">
                        <p><?php echo get_field('descabout3'); ?> </p>
                        <p><?php echo get_field('descabout4'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>