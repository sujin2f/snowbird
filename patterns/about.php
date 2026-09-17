<?php
/**
 * Title: About
 * Slug: snowbird/about
 * Categories: columns
 */
?>

<!-- wp:group {"className":"about__wrapper"} -->
<div class="wp-block-group about__wrapper">
    <!-- wp:columns {
        "isStackedOnMobile":false,
        "className":"about__container"
    } -->
    <div class="wp-block-columns about__container">
        <!-- wp:column {"width":"66.66%","className":"card"} -->
        <div class="wp-block-column card" style="flex-basis:66.66%">
            <!-- wp:paragraph -->
            <p>Wider column layout text.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%","className":"card"} -->
        <div class="wp-block-column card" style="flex-basis:33.33%">
            <!-- wp:heading -->
            <h2>Narrow Column</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
