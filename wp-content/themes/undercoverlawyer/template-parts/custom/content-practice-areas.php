<?php
$h1 = ( get_field('h1') ) ? get_field('h1') : get_the_title();

echo do_shortcode('[breadcrumbs]');?>

<div <?php post_class(['middle-content']);?>>
    <div class="default-setion pt-img-1 pa-details">
        <div class="container container-2">
            <?php the_content();?>
        </div>
    </div>
    <div class="default-setion home-pa-main">
        <div class="container-fluid">
            <h1 class="hd-h1"><?php echo $h1;?></h1>
            <?php
            $posts_rel = get_field('select_practice_area');
            if( $posts_rel ){ ?>
                <div class="hp-box-main">
                    <?php
                    foreach( $posts_rel as $post) {  setup_postdata($post); ?>
                        <div <?php post_class(['hp-box']);?>>
                            <div class="hp-box-inner">
                                <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                    <figure><?php the_field('2_line_title');?></figure>
                                </a>
                            </div>
                        </div>
                    <?php
                    } wp_reset_postdata();?>
                </div>
            <?php
            } ?>
        </div>
    </div>
    <?php // get_template_part( 'template-parts/custom/deposit', 'required' );?>
</div>