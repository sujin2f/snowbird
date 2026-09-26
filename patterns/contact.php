<?php
/**
 * Title: Contact
 * Slug: snowbird/contact
 * Categories: contact
 */
?>

<!-- wp:group {"className":"contact__wrapper",,"id":"section__contact"} -->
<div class="wp-block-group contact__wrapper" id="section__contact">
    <!-- wp:columns {
        "isStackedOnMobile":true,
        "className":"contact__container"
    } -->
    <div class="wp-block-columns contact__container">
        <!-- wp:column {
            "width":"50%",
            "className":"card card--transparent"
        } -->
        <div class="wp-block-column card card--transparent" style="flex-basis:50%">
            <!-- wp:heading -->
            <h2>Why use Realty Connect?</h2>
            <!-- /wp:heading -->

            <!-- wp:list -->
            <ul class="wp-block-list">
                <!-- wp:list-item -->
                <li>
                    <div>NETWORK OF 90,000 TOP-RATED AGENTS</div>
                    <!-- wp:template-part {
                        "slug":"icons-user-check",
                        "tagName":"div",
                        "className":"card__icon icon--box icon--ocean"
                    } /-->
                </li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li>
                    <div>UNBIASED RECOMMENDATIONS</div>
                    <!-- wp:template-part {
                        "slug":"icons-user-check",
                        "tagName":"div",
                        "className":"card__icon icon--box icon--ocean"
                    } /-->
                </li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li>
                    <div>SERVING EVERY ZIP CODE IN ALL 50 STATES</div>
                    <!-- wp:template-part {
                        "slug":"icons-user-check",
                        "tagName":"div",
                        "className":"card__icon icon--box icon--ocean"
                    } /-->
                </li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li>
                    <div>IT'S FAST, EASY & 100% FREE!</div>
                    <!-- wp:template-part {
                        "slug":"icons-user-check",
                        "tagName":"div",
                        "className":"card__icon icon--box icon--ocean"
                    } /-->
                </li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {
            "width":"50%",
            "className":"card card--transparent"
        } -->
        <div class="wp-block-column card card--transparent contact" style="flex-basis:50%">
            <!-- wp:contact-form-7/contact-form-selector -->
            <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7]</div>
            <!-- /wp:contact-form-7/contact-form-selector -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
