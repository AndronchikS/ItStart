<section id="services" class="services pt-10">
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_field('titleservices'); ?></h2>
            <p><?php echo get_field('desservice'); ?></p>
        </div>
        <div class="row">
            <?php
$services = get_field('about_services');
foreach ($services as $service): ?>
            <div class="col-lg-4 col-md-6">
                <div class="servicebox">
                    <div class="srv_desc">
                        <h5 class="count"><?php echo $service['number']; ?></h5>
                        <h4><a href="index.php#"><?php echo $service['title_about_service']; ?></a></h4>
                        <p><?php echo $service['desc_service']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>