<?php
/* Template Name: Home Page */
get_header();

    $fe_img = ( get_the_post_thumbnail_url() ) ? get_the_post_thumbnail_url() : get_field('default_banner');?>

    <div class="banner-main" style="background: url(<?php echo $fe_img;?>); background-size: cover; background-repeat: no-repeat; background-position: top;">
        <div class="banner-inner">
            <div class="container container-2">
                <?php
                if( get_field('h1') || get_field('h1-2')) { ?>
                    <div class="banner-text">
                        <h1 class="text-noeffect">
                            <figure><?php the_field('h1');?></figure>
                            <summary><?php the_field('h1-2');?></summary>
                        </h1>
                    </div>
                <?php
                }
                if( get_field('schedule_button') || get_field('no_fee') ) {?>
                    <div class="banner-btn">
                        <figure><?php the_field('no_fee');?></figure>
                        <a href="<?php echo get_field('schedule_button')['url'];?>"><?php echo get_field('schedule_button')['title'];?></a></div>
                <?php
                } ?>
            </div>
        </div>
    </div>
    <?php
    if( get_field('meet_form') ) { ?>
        <div class="box-video modal fade" id="attorney-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="vertical-alignment-helper">
                <div class="modal-dialog vertical-align-center">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id="attorney-form-1">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                                <?php echo do_shortcode('[contact-form-7 id="'.get_field('meet_form').'"]');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } ?>
    <div class="middle-content">
        <div class="default-setion pt-img-1">
            <div class="container container-2">
                <div class="row">

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <?php
                            if( get_field('left_image') ) { ?>
                                <div class="home-at-img-main">
                                    <div class="home-at-img-inner"><img src="<?php the_field('left_image');?>" alt="Attorney"></div>
                                </div>
                            <?php
                            }
                            if( get_field('meet_button') ) { ?>
                            <div class="meet-att-btn">
                                <a class="btn-design meet-attorney" data-toggle="modal" href="#attorney-form"><?php the_field('meet_button');?></a>
                            </div>
                            <?php
                            } ?>
                        </div>

                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="home-at-right">
                            <h2 class="hd-h2-border"><?php the_field('fort_title');?></h2>
                            <?php the_content();?>
                            <h3 class="hd-h3-border"><?php the_field('legal_title');?></h3>
                            <?php the_field('legal_content');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-setion pt-img-3">
            <div class="container container-2">
                <h2 class="hd-h2"><?php the_field('vehicle_title');?></h2>
                <?php the_field('vehicle_content');?>
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="hd-h3-border"><?php the_field('pedestrian_title');?></h3>
                        <?php the_field('pedestrian_content');?>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="hd-h3-border"><?php the_field('premise_title');?></h3>
                        <?php the_field('premise_content');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-setion home-pa-main">
            <div class="container-fluid">
                <h2 class="hd-h2"><?php the_field('practice_title');?></h2>
                <?php
                $posts_rel = get_field('select_practice_area');
                if( $posts_rel ){ ?>
                    <div <?php post_class(['hp-box-main']);?>>
                        <?php
                        foreach( $posts_rel as $post) {  setup_postdata($post); ?>
                            <div class="hp-box">
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
                <div class="hpa-btn">
                    <a href="<?php echo get_field('view_practice')['url'];?>" class="btn-design">
                        <?php echo get_field('view_practice')['title'];?>
                    </a>
                </div>
            </div>
        </div>
        <div class="default-setion">
            <div class="container container-2">
                <h2 class="hd-h2"><?php the_field('negligence_title');?></h2>
                <?php the_field('negligence_content');?>
            </div>
        </div>
        <div class="default-setion pt-img-3 text-center">
            <div class="container container-2">
                <h2 class="hd-h2"><?php the_field('assessment_title');?></h2>
                <?php the_field('assessment_content');?>
                <h3 class="hd-h3"><?php the_field('vladimir_title');?></h3>
                <?php the_field('vladimir_content');?>
            </div>
        </div>
        <div class="default-setion pt-img-1">
            <div class="container container-2">
                <h2 class="hd-h2"><?php the_field('blog_title');?></h2>
                <?php
                $myposts = get_posts(['post_type' => 'post', 'posts_per_page' => 4,]);
                if( $myposts ) { ?>
                    <div class="home-blog-inner">
                        <div class="row">
                            <?php
                            $counter = 1;
                            foreach( $myposts as $post) {  setup_postdata($post);
                                $thumb_img = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/335x223'; ?>
                                <div <?php post_class(['col-sm-3','col-xs-12']);?>>
                                    <div class="h-blog-box"><img src="<?php echo $thumb_img;?>" alt="<?php the_title();?>">
                                        <div class="h-blog-box-inner">
                                            <div class="h-blog-name"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
                                            <div class="h-blog-number"><?php echo str_pad($counter, 2, "0", STR_PAD_LEFT);?></div>
                                            <div class="h-blog-post-detais">
                                                <?php post_date();?>
                                                <?php post_categories();?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            $counter++;
                            } wp_reset_postdata();?>
                        </div>
                        <div class="h-blog-btn"><a href="<?php echo get_permalink( get_option('page_for_posts') );?>" class="btn-design"><?php the_field('view_blog');?></a></div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
<?php
get_footer();?>