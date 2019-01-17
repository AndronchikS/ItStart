<section id="blog" class="blog">
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_field('titlearticles'); ?></h2>
            <p><?php echo get_field('descarticles'); ?></p>
        </div>
        <div class="row">
            <?php $articles = get_field('aboutarticles');
foreach ($articles as $article): ?>
            <div class="col-md-6 col-lg-4">
                <div class="blog_post">
                    <div class="post_img">
                        <a href="index.php#"><img src=<?php echo $article['imagearticles']; ?> alt="img"></a>
                    </div>
                    <div class="post_content">
                        <div class="post_header">
                            <h2 class="post_title"><a href="index.php#"><?php echo $article['titleimage']; ?></a></h2>
                            <div class="read_more"><a href="index.php#"><?php echo $article['goto']; ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section>