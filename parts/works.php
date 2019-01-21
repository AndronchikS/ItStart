<section id="works" class="works">
	<div class="container">
		<div class="section-title">
			<h2><?php the_field('titleportfolio', 194);?></h2>
			<p><?php the_field('descportfolio', 194);?></p>
		</div>
		<ul id="filters" class="clearfix text-center">
			<?php $hiterms = $hiterms = get_terms("forportfolio",
	array(
		"orderby" => "slug",
		"parent" => 0,
		"hide_empty" => 0,
	));?>
				 <?php foreach ($hiterms as $key => $hiterm): ?>
				 	<?php $term_link = get_term_link($hiterm);?>
				 	<li><span><a href="<?php echo esc_url($term_link); ?>" ><?php echo $hiterm->name; ?></a></span></li>
				 <?php endforeach;?>
		</ul>
		<div id="portfoliolist">
			<div class="row">
				<?php $tax = get_queried_object();
if ($tax->name == null) {
	$taxme = 'All';
} else {
	$taxme = $tax->name;
}
$query = new WP_Query(array(
	'tax_query' => array(
		array(
			'taxonomy' => 'forportfolio',
			'field' => 'slug',
			'terms' => $taxme,
		),
	),
));
while ($query->have_posts()): $query->the_post();?>
							<div class="col-md-4 col-lg-3 portfolio ?>">
								<div class="portfolio-wrapper">
									<div class="works-img">
										<a href="<?php echo
	get_the_post_thumbnail_url($post->ID); ?>" data-fancybox="images">
										<img src="<?php echo
	get_the_post_thumbnail_url($post->ID, 'portfolio'); ?>" alt="" />
										</a>
									</div>
									<div class="works-info">
										<div class="label-text">
											<h4><?php the_title();?></h4>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile;?>
				<?php wp_reset_postdata();?>
			</div>
		</div>
	</div>
</section>