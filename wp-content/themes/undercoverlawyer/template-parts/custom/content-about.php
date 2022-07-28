<?php $h1 = ( get_field('h1') ) ? get_field('h1') : get_the_title();?>

<?php echo do_shortcode('[breadcrumbs]');?>

<div class="middle-content">
    <div class="default-setion pt-img-1 about-main">
        <div class="container container-2">
            <h1 class="hd-h1"><?php echo $h1;?></h1>
            <?php
            if(get_field('h2')) { ?>
                <h2 class="hd-h2-border"><?php the_field('h2');?></h2>
                <?php
            } ?>
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <?php
                    if ( has_post_thumbnail() ) { ?>
                        <div class="about-img"><img src="<?php echo get_the_post_thumbnail_url();?>"></div>
                    <?php
                    }
                    if ( get_field('more_info') ) { ?>
                        <div class="at-more-wrap">
                            <a href="<?php echo get_field('more_info')['url'];?>" class="btn-design"><?php echo get_field('more_info')['title'];?></a>
                        </div>
                    <?php
                    } ?>
                </div>
                <div class="col-sm-9 col-xs-12"><?php the_content(); ?></div>
            </div>
            <?php the_field('content2');?>
        </div>
    </div>
    <?php /* get_template_part( 'template-parts/custom/partners', '4' );
     get_template_part( 'template-parts/custom/deposit', 'required' ); */ ?>
</div>