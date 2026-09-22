<?php
/**
 * Title: Hero
 * Slug: snowbird/hero
 * Categories: featured
 */
?>

<!-- wp:cover {
	"url":"<?php echo get_template_directory_uri(); ?>/src/images/hero.default.jpeg",
	"dimRatio":40,
	"className":"hero__wrapper"
} -->
<div class="wp-block-cover hero__wrapper">
	<img
		class="wp-block-cover__image-background"
		alt=""
		src="<?php echo get_template_directory_uri(); ?>/src/images/hero.default.jpeg"
		data-object-fit="cover"
	/>

	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">
		<!-- wp:paragraph {"className":"badge"} -->
		<p class="badge">100% Free Service · No Pressure · No Obligation</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading -->
		<h2 class="wp-block-heading">Canadians! Your Florida Real Estate Dreams, Simplified.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"hero__description"} -->
		<p class="hero__description">
			For 35 years, I help Canadians Find, Buy, and Sell at the right price with the perfect LOCAL agent. Access ON & OFF Market properties cost-free.
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:button {"className":"button--lg button--primary"} -->
		<div class="wp-block-button button--lg button--primary">
			<a
				class="wp-block-button__link wp-element-button"
				href="https://realtyconnect.xyz"
				target="_blank"
				rel="noopener"
			>
				Find Your Local Agent
				<!-- wp:template-part {
					"slug":"icons-arrow-right",
					"tagName":"span"
				} /-->
			</a>
		</div>
  		<!-- /wp:button -->
	</div>
</div>
<!-- /wp:cover -->
