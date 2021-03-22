<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Locus
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'blog-details');

	endwhile; // End of the loop.
	?>

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

</main><!-- #main -->

<?php
get_footer();
