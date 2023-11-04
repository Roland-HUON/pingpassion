<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package refontepingpassion
 */
$datarevetement = get_fields();
get_header();
?>

	<main id="primary" class="site-main">

	<?php
		while ( have_posts() ) :
			the_post();?>
			<section class="single-revetement-wrapper">
				<?php the_post_thumbnail();?>
				<div class="single-revetement-card">
					<h2 class="single-revetement-title"><?php the_title();?></h2>
					<section class="single-revetement-information">
						<h2 class="single-revetement-precision">Informations revêtements</h2>
						<p>Rapidité : <?= $datarevetement['rapidite']?> </p>
						<p>Contrôle : <?= $datarevetement['controle']?> </p>
						<p>Adhérence : <?= $datarevetement['adherence']?> </p>

						<h2 class="single-revetement-precision">Épaisseur</h2>
						<ul>
							<?php foreach($datarevetement['epaisseur'] as $epaisseur) : ?>
								<li><?= $epaisseur['taille']?></li>
							<?php endforeach; ?>
						</ul>
					</section>
					<div class="single-revetement-context">
						<?php the_excerpt();?>
					</div>
				</div>
			</section>
			<?php
			// get_template_part( 'template-parts/content', 'none' );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'refontepingpassion' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'refontepingpassion' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;?>
		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
