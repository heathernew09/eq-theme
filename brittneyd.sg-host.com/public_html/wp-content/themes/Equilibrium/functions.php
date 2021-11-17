<?php
/*This file is part of Equilibrium, twentytwentyone child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function Equilibrium_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'Equilibrium_enqueue_child_styles', 100 );

/*This portion set up the custom block patterns utilizing twenty21 for Equilibrium
Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/
add_action( 'init', function(){

	register_block_pattern_category( 
		'custom-patterns', 
		array( 'label' => esc_html__( 'Custom patterns', 'twentytwentyone-child' ) ) );

	register_block_pattern( //This block is the Bio block for Equilibrium bio.
	'twentytwentyone-child/custom-bio-pattern',
	array(
		'title'			=> __( 'Team Bio', 'twentytwentyone-child' ),
		'description'	=> _x( 'A block with 2 columns that displays an avatar image, email address, two paragraphs with bio.', 'Block pattern description', 'twentytwentyone-child' ),
		'content'		=> '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1","fontSize":"30px"},"color":{"text":"#000000"}}} -->
		<p class="has-text-color" style="color:#000000;font-size:30px;line-height:1.1"><strong><meta charset="utf-8">Brittney R. Doll, LCMFT</strong></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:separator {"customColor":"#000000","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#000000;color:#000000"/>
		<!-- /wp:separator --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"id":79,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image size-large is-style-rounded"><img src="http://brittneyd.sg-host.com/wp-content/uploads/2021/08/img-74711-2-768x1024.jpg" alt="Brittney R. Doll, LCMFT" class="wp-image-79"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p><strong><a href="mailto:brittney@equilibriumcounselwell.com">brittney@equilibriumcounselwell.com</a></strong></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#000000"}},"fontSize":"extra-small"} -->
		<p class="has-text-color has-extra-small-font-size" style="color:#000000"><meta charset="utf-8">Brittney is a trauma-informed therapist and educator. She works with women that have experienced traumatic experiences such as emotional, mental, physical, sexual, and spiritual/religious abuse. She offers a relaxed, non-judgmental environment to create safety for the process of healing.</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#000000"}},"fontSize":"extra-small"} -->
		<p class="has-text-color has-extra-small-font-size" style="color:#000000"><meta charset="utf-8">Brittneys method of therapy is rooted in Attachment Theory and Interpersonal Neurobiology. She practices a trauma therapy called Eye Movement Desensitization and Reprocessing (EMDR)--an evidence-based approach to healing acute and post-traumatic stress disorder. Brittney believes that all people are capable, resilient, and able to recover and heal. No one is broken or wounded beyond repair. She believes that hope is the most important aspect to therapeutic work and will hold hope for her clients until they are able to hold it for themselves.</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":40} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:columns -->',
				'categories'	=> array( 'custom-patterns' ),
			)
	);

});