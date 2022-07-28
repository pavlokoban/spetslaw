<!--Location Start: <?php echo __DIR__.'/'. basename(__FILE__); ?>-->
<?php $parent_id = ( wp_get_post_parent_id( $post->ID ) !=0 ) ? wp_get_post_parent_id( $post->ID ) : $post->ID; ?>
<div class="default-setion pt-img-3">
    <div class="container container-2">
        <h2 class="hd-h2"><?php the_field('partner_title',$parent_id);?></h2>
        <?php
        $posts_rel = get_field('select_partner',$parent_id);
        if( $posts_rel ){ ?>
            <div class="partners-main">
                <div class="row">
                    <?php
                    foreach( $posts_rel as $post) {  setup_postdata($post);
                        $at_img = ( get_the_post_thumbnail_url() ) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/452x369?text=No%20Image'; ?>
                        <div <?php post_class(['col-sm-4','col-xs-12']);?>>
                            <div class="partner-box">
                                <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                    <img src="<?php echo $at_img;?>" alt="<?php the_title();?>">
                                    <div class="partner-box-name"><?php the_title();?></div>
                                </a>
                            </div>
                        </div>
                        <?php
                    } wp_reset_postdata();?>
                </div>
            </div>
            <?php
        } ?>
    </div>
</div>
<!--Location End: <?php echo __DIR__.'/'. basename(__FILE__); ?>-->