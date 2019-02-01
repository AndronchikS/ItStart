<?php
/*
Template Name: blogTemp
*/
?>
<?php $classMenu = "inner-header";
$mainLogo = "main_logo2"; ?>
<?php include(locate_template('header.php')); ?>

<div class="main-wrapper">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 main-content">
                    <div class="blog-list">
                        <?php $blogs = get_blog('portfolio'); ?>
                        <?php if ($blogs): ?>
                            <?php foreach ($blogs as $blog): ?>
                                <?php the_post(); ?>
                                <article class="blog_post">
                                    <div class="post_header">
                                        <h4 class="post_cat">Category : <a
                                                    href="blog.php#"><?php echo get_post_type(); ?></a></h4>
                                        <h2 class="post_title"><a href="blog.php#"><?php echo $blog->post_title; ?></a>
                                        </h2>
                                    </div>
                                    <div class="post_img">
                                        <a href="blog.php#"><img
                                                    src="<?php echo get_the_post_thumbnail_url($blog->ID, 'single'); ?>"
                                                    alt="img"></a>
                                    </div>
                                    <div class="post_content">
                                        <div class="post_intro">
                                            <p><?php echo $blog->post_content ?></p>
                                        </div>

                                        <div class="post_footer">
                                            <ul class="post_meta">
                                                <li><span class="author"><img src="<?php the_field('photo', 396); ?>"
                                                                              alt="author"> By <a
                                                                href="blog.php#"><?php the_author(); ?>;</a></span></li>
                                                <li><span class="date"><a
                                                                href="blog.php#"><?php echo date('j F,Y', strtotime($blog->post_date)); ?></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>

                    <div class="pagination-div">
                        <?php $count = get_count_post_custom('portfolio'); ?>
                        <ul class="pagination">
                            <?php $i = 1;$ref = 0;
                            while ($count > 0): ?>
                                <?php $class = 'page-numbers';
                                if ($i == 1) {
                                    $class .= ' current';
                                } ?>
                                <li><a class="<?php echo $class; ?>" href="<?php echo $ref; ?>"><?php echo $i; ?></a></li>
                                <?php $i++;
                                $count--;$ref++; ?>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-5 col-lg-4 sidebar">

                    <div id="search-2" class="widget widget_search">
                        <div class="sidebar_search">
                            <form class="sidebar_search_form"
                                  action="http://wpthemebooster.com/demo/themeforest/html/carrby/search.php">
                                <input type="text" name="search" class="form-control" placeholder="Search">
                                <button type="submit" class="form-control form-control-submit"><i
                                            class="ion-ios-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div id="recent-posts-2" class="widget widget_recent_posts">
                        <h4 class="widget_title"><span>Recent Posts</span></h4>
                        <div class="sidebar_recent_posts">
                            <ul class="recent_posts_list">
                                <?php $recent = get_recent('portfolio');
                                foreach ($recent as $item):?>
                                    <li>
                                        <img src="<?php the_field('photo', 396) ?>" alt="insta">
                                        <div class="post_content">
                                            <h6><a href="<?php echo $item->guid ?>"><?php echo $item->post_title ?></a>
                                            </h6>
                                            <p class="date"> <?php echo date('j F,Y', strtotime($item->post_date)); ?></p>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div id="archives-1" class="widget widget_archive">
                        <h4 class="widget_title"><span>Archives List</span></h4>
                        <div class="sidebar_archive">
                            <?php $archives = get_arhives('portfolio'); ?>
                            <ul class="archive_list">
                                <?php foreach ($archives as $archive): ?>
                                    <li>
                                        <a href="<?php echo $archive->guid ?>"><?php echo date('F Y', strtotime($archive->post_date)); ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div id="categories-2" class="widget widget_categories">
                        <h4 class="widget_title"><span>Categories</span></h4>
                        <div class="sidebar_categories">
                            <ul class="category_list">
                                <?php $hiterms = get_terms("forportfolio",
                                    array(
                                        "orderby" => "slug",
                                        "parent" => 0,
                                        "hide_empty" => 0,
                                    ));?>
                                <?php foreach ($hiterms as $key => $hiterm): ?>
                                    <?php $term_link = get_term_link($hiterm); ?>
                                    <li>
                                        <a href="<?php echo $hiterm->term_id;?>"><?php echo $hiterm->name;?> <span>(<?php echo $hiterm->count;?>
                                                )</span></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('/footer'); ?>
