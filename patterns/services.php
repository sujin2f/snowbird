<?php
/**
 * Title: Services
 * Slug: snowbird/services
 * Categories: columns
 */
?>

<!-- wp:group {"className":"services__wrapper","id":"section__services"} -->
<div class="wp-block-group services__wrapper" id="section__services">
    <!-- wp:group {
        "tagName":"header",
        "className":"services__header"
    } -->
    <header class="wp-block-group services__header">
        <!-- wp:heading -->
        <h2>Explore Florida Real Estate Opportunities</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Get familiar with the Florida market through our specialized portals.</p>
        <!-- /wp:paragraph -->
    </header>
    <!-- /wp:group -->

    <!-- wp:columns {
        "isStackedOnMobile":false,
        "className":"services__container"
    } -->
    <div class="wp-block-columns services__container">
        <!-- wp:column {"width":"33.33%","className":"card card--white"} -->
        <div class="wp-block-column card card--white" style="flex-basis:33.33%">
            <!-- wp:heading {"level":3} -->
            <h3>Need a Local Agent?</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Ready to buy or sell? Get introduced to ON and OFF Market properties that perfectly meet your criteria.</p>
            <!-- /wp:paragraph -->

            <!-- wp:button {"className":"button--primary button-sm"} -->
            <div class="wp-block-button button--primary button-sm">
                <a
                    class="wp-block-button__link wp-element-button"
                    href="https://realtyconnect.xyz"
                    target="_blank"
                    rel="noopener"
                >
                    Connect Here (RealtyConnect)
                </a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%","className":"card card--white"} -->
        <div class="wp-block-column card card--white" style="flex-basis:33.33%">
            <!-- wp:heading {"level":3} -->
            <h3>Foreclosure Properties</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Looking for distressed or foreclosure properties for sale below market value in Florida?</p>
            <!-- /wp:paragraph -->

            <!-- wp:button {"className":"button--black button-sm"} -->
            <div class="wp-block-button button--black button-sm">
                <a
                    class="wp-block-button__link wp-element-button"
                    href="https://foreclosure.com/"
                    target="_blank"
                    rel="noopener"
                >
                    Find Foreclosures (Foreclosure.com)
                </a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%","className":"card card--white"} -->
        <div class="wp-block-column card card--white" style="flex-basis:33.33%">
            <!-- wp:heading {"level":3} -->
            <h3>Tax Lien Auctions</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Explore high-yield Florida Tax Lien Auction opportunities for smart investors.</p>
            <!-- /wp:paragraph -->

            <!-- wp:button {
                "tagName":"button",
                "type":"button",
                "className":"button--black button--sm disabled"
            } -->
            <div class="wp-block-button button--black button--sm disabled">
                <button
                    type="button"
                    class="wp-block-button__link wp-element-button"
                >
                    Coming Soon
                </button>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
