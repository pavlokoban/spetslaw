<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package undercoverlawyer
 */

get_header();?>

    <?php echo do_shortcode('[breadcrumbs]');?>
    <div <?php post_class(['middle-content']); ?>>
       <div class="default-setion-1 pt-img-1 thankyou-section">
            <div class="container container-2">
                <h1 class="hd-h1">Page Not Found</h1>
                <div class="border-design">
                    <div class="ep-tl">404</div>
                    <figure>The Page You Are Searching is Not available</figure>
                    <div class="ep-contact">
                        <a href="tel:<?php the_field('phone333', 'option'); ?>"><?php the_field('phone333', 'option'); ?></a>
                    </div>
                    <div class="ep-homeback">
                        <a class="send-btn effect-1" href="<?php echo site_url(); ?>" title="Back to Home">Back to Home</a>
                    </div>
                    <div class="ep-social">
                        <div class="social">
                            <?php get_template_part( 'template-parts/custom/social', 'icons' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/custom/deposit', 'required'); ?>
    </div>
<?php
get_footer();
