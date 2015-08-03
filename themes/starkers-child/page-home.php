<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 * Template Name: Home
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="flexslider" data-behavior="flexslider">
	<ul class="slides" id="banner">
		<?php
		$args = array( 'post_type' => 'banner', 'order' => 'ASC', 'orderby' => 'menu_order' );
		$loop = new WP_Query( $args );?>
		<?php while ( $loop->have_posts() ) : $loop->the_post();?>
		<li class="banner-image" data-behavior="maxImageWidth">
			<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('full');
				} 
			?>
			<h2 class="flex-caption banner-text">
				<?php the_content(); ?>
			</h2>
		</li>
		<?php endwhile; ?>
	</ul>
</div>
<div class="grid">
	<div class="col-3-4 products-container">
		<div class="grid products ">
			<?php
				$args = array( 'post_type' => 'product', 'order' => 'ASC', 'orderby' => 'menu_order');
				$loop = new WP_Query( $args );?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
				<?php $show = types_render_field("show-on-homepage", array("output"=>"raw"));				
				if($show) { ?>
					<div class="col-1-3 obj_height product-container">
						<div class="module product">
						<a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
						<?php the_excerpt(); ?>
							<div class="product-image">
							<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('full');
									} 
								?>
							</div>
						</div>
					</div>
				<?php 
				}
				endwhile; ?>
	</div>
</div>
<div class="col-1-4 sidebar-links">
		<div class="module">
			<?php include ('parts/sidebar_primary.php'); ?>
		</div>
	</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
