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
        <!-- wp:column {
            "width":"66.66%",
            "className":"card card--sand card--profile"
        } -->
        <div class="wp-block-column card card--sand card--profile" style="flex-basis:66.66%">
            <!-- wp:image {
                "sizeSlug":"large",
                "linkDestination":"none"
            } -->
            <figure class="wp-block-image size-large card--profile__image">
                <img src="https://example.com" alt="Example image description" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading -->
            <h2>Why Deal With Me?</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"card--profile__subtitle"} -->
            <p class="card--profile__subtitle">45+ Years of Trust & Dual-Country Experience</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"className":"card--profile__paragraph"} -->
            <div class="wp-block-group card--profile__paragraph">
                <!-- wp:paragraph -->
                <p>I am a licensed Broker in Toronto for 45 years, and licensed in Florida for 35 years. All those years of experience in both countries enable me to offer you comfort and expert assistance.</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>A foreign investor in Florida real estate requires a knowledgeable team of local experienced agents who can offer access to mortgage brokers, lawyers, and exclusive ON/OFF market listings.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%","className":"card card--navy card--market-insight"} -->
        <div class="wp-block-column card card--navy card--market-insight" style="flex-basis:33.33%">
            <!-- wp:group {"className":"card--market-insight__header"} -->
            <div class="wp-block-group card--market-insight__header">
                <!-- wp:heading -->
                <h2>Market Insight</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"card--market-insight__flag"} -->
                <p class="card--market-insight__flag">🍁</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"className":"card--market-insight__subtitle"} -->
            <p class="card--market-insight__subtitle">Did You Know?</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p>Canadians are the largest market of foreigners that buy and sell real estate in Florida!</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"card--market-insight__footer"} -->
            <p class="card--market-insight__footer">Don't get stuck with the wrong agent!</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
