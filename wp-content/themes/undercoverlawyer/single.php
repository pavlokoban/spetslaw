<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package undercoverlawyer
 */

get_header();

    while ( have_posts() ) { the_post();
    $fe_img = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/750x500?text=No%20Image'; ?>
    <?php echo do_shortcode('[breadcrumbs]');?>
    <div <?php post_class(['middle-content']);?>>
        <div class="default-setion pt-img-1">
            <div class="container container-2">
                <h2 class="hd-h1"><?php the_field('h1',get_option('page_for_posts'));?></h2>
                <div class="blog-details-main">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12">
                            <h1 class="hd-h2-border"><?php the_title();?></h1>
                            <div class="blog-box">
                                <div class="blog-box-content">
                                    <div class="bb-post-by">
                                        <?php
                                        post_author();
                                        post_categories();
                                        post_date();?>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details-content">
                                <?php the_content();?>
                            </div>
                            <div class="ft-social post-share">
                                <figure>Social Share</figure>
                                <ul>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/home?status=<?php the_permalink();?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=&summary=&source=" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <?php the_post_navigation( array(
                                'prev_text'                  => __( 'Prev' ),
                                'next_text'                  => __( 'Next' ),
                                'screen_reader_text' => __( '&nbsp;' ),
                            ) );?>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="sidebar-main">
                                <?php get_sidebar();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part( 'template-parts/custom/deposit', 'required' );?>
    </div>
<?php
}

get_footer();