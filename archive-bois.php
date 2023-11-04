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
				<h1>Bois</h1>
				<h2>Jouer comme un pro avec les plus grandes qualités de bois du marché !</h2>
			</header><!-- .page-header -->
			<section class="bois-wrapper">
				<h2 class="bois-selection">Notre selection</h2>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
				<article class="bois-card">
					<div class="bois-card-content">
						<?php the_post_thumbnail();?>
						<h2 class="bois-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
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
