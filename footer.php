<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package refontepingpassion
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-info">
			<h2><?php bloginfo( 'name' ); ?></h2>
			<div class="site-mapping">
				<p>Aux portes de Paris, des spécialistes à votre écoute afin de vous conseiller pour tout achat lié au tennis de table.</p>
			</div>
			<div class="site-adresse">
				<p>7 quai d’Austerlitz</p>
				<p>75013 PARIS</p>
			</div>
			<div class="site-contact">
				<p>Téléphone : <a href="tel:+33145824395">01 45 82 43 95</a></p>
				<p>Mail : <a href="mailto : contactparis@ping-passion.com">contactparis@ping-passion.com</a></p>
			</div>
			<div class="site-img-social-media">
				<img src="" alt="">
				<img src="" alt="">
				<img src="" alt="">
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'refontepingpassion' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'refontepingpassion' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'refontepingpassion' ), 'refontepingpassion', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
