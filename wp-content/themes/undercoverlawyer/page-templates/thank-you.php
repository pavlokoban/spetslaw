<?php

/* Template Name: Thank You */

get_header();?>

<?php $h1 = (get_field('h1')) ? get_field('h1') : get_the_title(); ?>
<?php echo do_shortcode('[breadcrumbs]');?>

<div <?php post_class(['middle-content']); ?>>
    <div class="default-setion-1 pt-img-1 thankyou-section defaultthankyou-page">
        <div class="container container-2">
            <h1 class="hd-h1"><?php echo $h1; ?></h1>
			<p>Your inquiry has been successfully submitted.</p>
            <div class="border-design">
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

get_footer();?>
