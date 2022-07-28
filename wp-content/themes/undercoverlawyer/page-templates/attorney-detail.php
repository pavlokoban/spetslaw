<?php
/* Template Name: Attorney Detail */
get_header();

    $fe_img = ( get_the_post_thumbnail_url() ) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/452x369?text=No%20Image';

    echo do_shortcode('[breadcrumbs]');

    $h1 = ( get_field('h1') ) ? get_field('h1') : get_the_title();?>

    <div <?php post_class(['middle-content']);?>>
        <div class="default-setion pt-img-1 about-main">
            <div class="container container-2">
                <h1 class="hd-h1"><?php echo $h1;?></h1>
                <div class="partner-box pb-details">
                    <img src="<?php echo $fe_img;?>" alt="<?php the_title();?>">
                    <div class="partner-box-name"><?php echo $h1;?></div>
                </div>
                <?php the_content();?>
            </div>
        </div>
        <?php //get_template_part( 'template-parts/custom/partners', '4' );
        //get_template_part( 'template-parts/custom/deposit', 'required' );?>
    </div>
<?php
get_footer();?>