<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Locus
 */

?>

<section class="locus hero position-relative">
	<img class="img-fluid banner-bg lozad fade-img" src="<?php echo get_template_directory_uri(); ?>/images/banner-bg.png" alt="">
	<div class="container">
		<div class="row px-3 py-5 p-lg-5">
			<div class="col px-lg-4 py-5 text-center index-1">
				<h1 class="pb-5 fw-bold fs-5">Make Right Decisions to Delight Your Customers</h1>
				<p class="mx-auto pb-5 fs-14 lh-base-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis adipisci, doloribus similique voluptate unde eveniet eos nostrum placeat tempora voluptatibus reiciendis veniam architecto expedita non veritatis, porro numquam enim vero.</p>
				<form class="mx-auto">
					<div class="input-group input-group-lg rounded-pill bg-white shadow">
						<button class="btn btn-link text-muted" type="button"><i class="fa fa-search"></i></button>
						<input class="form-control bg-transparent border-0 px-0" type="search" name="" id="" placeholder="Search">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
// the query
$tech_updates = new WP_Query(array(
	'category_name' => 'updates',
	'posts_per_page' => 3,
));
?>
<section class="locus tech-updates pt-5">
	<div class="container">
		<div class="row px-5 py-2">
			<div class="col-12 text-center">
				<h3 class="title position-relative">Tech Updates</h3>
			</div>
		</div>
		<div class="row p-5 pb-0">
			<?php if ($tech_updates->have_posts()) : ?>
				<?php while ($tech_updates->have_posts()) : $tech_updates->the_post(); ?>
					<div class="card mx-lg-5 mb-5 px-0 shadow">
						<div class="row g-0 align-items-center">
							<div class="col-md-5">
								<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
								<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo $url ?>" alt="..."></a>
							</div>
							<div class="col-md-7">
								<div class="card-body pt-4 pb-5 px-lg-5">
									<a class="text-decoration-none" href="<?php the_permalink(); ?>">
										<h5 class="card-title mb-3 text-center fw-bold"><?php the_title(); ?></h5>
									</a>
									<p class="card-text text-center">Suspendisse potenti. Nunc eros leo, pellentesque non odio in, cursus tempus enim. Quisque sed nulla velit. Phasellus blandit consectetur massa vitae mollis. Suspendisse nisl leo, imperdiet at finibus a, tristique ut ligula. Mauris dignissim orci odio, eu accumsan augue elementum ac.</p>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php __('No Updates'); ?></p>
			<?php endif; ?>
			<a class="text-center fw-bold text-decoration-none" href="#">Load More</a>
		</div>
	</div>
</section>

<?php
// the query
$the_query = new WP_Query(array(
	'category_name' => 'stories',
	'posts_per_page' => 3,
));
?>
<section class="locus people-stories pt-5">
	<div class="container">
		<div class="row px-5 py-2">
			<div class="col-12 text-center">
				<h3 class="title position-relative">People Stories</h3>
			</div>
		</div>
		<div class="row px-5 pt-5">
			<div class="card-group">
				<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="card locus-card mx-lg-3 shadow">
							<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
							<img class="position-relative" src="<?php echo $url ?>" alt="">
							<span class="position-absolute badge locus-badge text-uppercase fs-14 fw-bold bg-primary mx-4 my-4 px-4 py-2"><?php the_tags(''); ?></span>
							<div class="card-body p-4 pb-0">
								<span class="fs-14 text-muted"><?php the_time('F j, Y'); ?></span>
								<h5 class="card-title fs-14 fw-bold lh-base py-2">
									<?php the_title(); ?>
								</h5>
							</div>
							<div class="card-footer">
								<a href="<?php the_permalink(); ?>" class="small text-decoration-none">Read More</a>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php __('No News'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="locus news-gallery py-5">
	<div class="container">
		<div class="row px-5 py-2">
			<div class="col-12 text-center">
				<h3 class="title position-relative">Newest From Gallery</h3>
			</div>
		</div>
		<div class="row px-5 py-5">
			<div class="card-group">
				<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="card locus-card mx-lg-3 shadow">
							<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
							<img class="position-relative" src="<?php echo $url ?>" alt="">
							<span class="position-absolute badge locus-badge text-uppercase fs-14 fw-bold bg-primary mx-4 my-4 px-4 py-2"><?php the_tags(''); ?></span>
							<div class="card-body p-4 pb-0">
								<span class="fs-14 text-muted"><?php the_time('F j, Y'); ?></span>
								<h5 class="card-title fs-14 fw-bold lh-base py-2">
									<?php the_title(); ?>
								</h5>
							</div>
							<div class="card-footer">
								<a href="<?php the_permalink(); ?>" class="small text-decoration-none">Read More</a>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php __('No News'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="locus newsletter">
	<div class="container">
		<div class="row px-3 py-5 p-lg-5">
			<div class="col-12 px-lg-5 pt-5 text-center">
				<h3 class="pb-5 fw-bold fs-5">Subscribe to Our Newsletter</h3>
				<p class="fs-14 lh-base-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla quasi aliquid perspiciatis repellat eligendi nam quos, doloribus, officia corporis quibusdam ad? Sunt explicabo labore hic tempora ullam veritatis cumque sint, similique recusandae excepturi eveniet distinctio?</p>
			</div>
			<div class="col-12 px-lg-5 pt-5 text-center">
				<form class="mx-auto row row-cols-auto g-1 align-items-center pb-5">
					<div class="col-8"><input class="form-control border-0 shadow" type="email" placeholder="Enter your email"></div>
					<div class="d-grid col-4">
						<button class="btn btn-primary text-uppercase" type="submit">Subscribe</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>