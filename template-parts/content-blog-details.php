<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Locus
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="locus blog-details">
		<div class="container-fluid px-0 blog-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/blog-banner-image.jpg);">
			<div class="row mx-0 px-4 py-5">
				<div class="col-12 pb-5 text-center text-white">
					<?php
					if (is_singular()) :
						the_title('<h1 class="fw-bold">', '</h1>');
					else :
						the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
					endif;
					?>
				</div>
			</div>
		</div>
	</section>

	<div class="container blog-content">
		<div class="row gx-5 px-3 py-5">
			<div class="col-md-8">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'locus'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post(get_the_title())
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'locus'),
						'after'  => '</div>',
					)
				);
				?>
			</div>
			<div class="col-md-4">
				<div class="card shadow">
					<div class="card-body p-4">
						<h5 class="card-title mt-2 mb-4">Subscribe to Locus</h5>
						<p class="card-text small text-muted lh-sm mb-4">Lorem, ipsum dolor sit amet consectetur
							adipisicing elit. Cumque corrupti velit maiores fugit omnis distinctio quis alias
							voluptas impedit, explicabo sunt inventore. Sunt, nobis veniam.</small>
						</p>
						<form>
							<div class="mb-3">
								<input type="text" class="form-control rounded-3 border border-primary" id="" placeholder="Name*">
							</div>
							<div class="mb-3">
								<input type="email" class="form-control rounded-3 border border-primary" id="" placeholder="Business Email*">
							</div>
							<div class="input-group mb-3 rounded-3 border border-primary">
								<button class="btn dropdown-toggle bg-transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/images/english.png" alt="English"></button>
								<ul class="dropdown-menu locus-lang">
									<li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/french.png" alt="French"></a></li>
									<li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/german.png" alt="German"></a></li>
								</ul>
								<input type="tel" class="form-control border-0 bg-transparent" placeholder="Contact Number*" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
							</div>
							<div class="form-check mb-3">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
								<label class="form-check-label small lh-sm text-black-50" for="flexCheckDefault">
									<span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos a itaque
										autem consequuntur illum, neque, sint voluptate rerum magni, in quia
										repellat tenetur facere accusamus?</span>
								</label>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary small text-uppercase">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->