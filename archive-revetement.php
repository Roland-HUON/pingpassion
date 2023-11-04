<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package refontepingpassion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Revêtements</h1>
				<h2>Jouer comme un pro avec les meilleurs revêtements du marché du ping pong !</h2>
			</header><!-- .page-header -->
			<section class="revetement-wrapper">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
				<article class="revetement-card">
					<h2><?php the_title();?></h2>
					<div class="revetement-card-content">
						<?php the_post_thumbnail();?>
						<div class="revetement-card-content-precision">
							<?php echo wp_trim_words( get_the_content(), 30, '...' );?>
							<a href="<?php the_permalink();?>">Se renseigner sur le revêtement</a>
						</div>
					</div>
				</article>
		
				<?php
			endwhile;?>
			</section>
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
