<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_template_part( 'partials/header' ); ?>

<div class="error-404 not-found default-max-width">
	<div class="container">
		<div class="row">
			<div class="page-content column column-50">
				<h1 class="page-title"><?php esc_html_e( 'Ai ... De (water)', 'haven_genk' ); ?> <span><?php esc_html_e('weg kwijt ', 'haven_genk'); ?></span>?</h1>
				<p><?php esc_html_e( 'Haven Genk zet je graag direct weer op het juiste spoor voor een logistieke oplossing op maat!', 'haven_genk' ); ?></p>
				<a href="" class="btn primary-btn"><?php esc_html_e( 'Naar de homepagina', 'haven_genk' ); ?></a>
			</div><!-- .page-content -->
			<div class="column column-50">
				<h1 class="big-bold">404</h1>
			</div>
		</div>
	</div>
</div><!-- .error-404 -->

<?php get_template_part( 'partials/footer' ); ?>