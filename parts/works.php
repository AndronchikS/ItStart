<section id="works" class="works">
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_field('titleportfolio'); ?></h2>
            <p><?php echo get_field('descportfolio '); ?></p>
        </div>
        <ul id="filters" class="clearfix text-center">
            <?php $menus = get_field('menuportfolio');
foreach ($menus as $menu): ?>
                                                <?php $class = "filter ";
if ($menu['titlemenu'] == "All") {
	$class .= "active";
}?>
            <li><span class="<?php echo $class; ?>" data-filter=<?php echo $menu['data-filter']; ?>><?php echo $menu['titlemenu']; ?></span></li>
            <?php endforeach;?>
        </ul>
        <div id="portfoliolist">
            <div class="row">
                <?php $images = get_field('imgportfolio');
foreach ($images as $image): ?>
                                                        <?php $class = "col-md-4 col-lg-3 portfolio ";
$class .= $image['class'];?>
                <div class="<?php echo $class; ?>">
                    <div class="portfolio-wrapper">
                        <div class="works-img">
                            <a href=<?php echo $image['image']; ?>  data-fancybox="images">
                            <img src=<?php echo $image['image']; ?> alt="" />
                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php echo $image['descimg']; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>