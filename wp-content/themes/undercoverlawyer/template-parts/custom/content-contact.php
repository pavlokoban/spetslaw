<?php $h1 = ( get_field('h1') ) ? get_field('h1') : get_the_title();?>
<?php echo do_shortcode('[breadcrumbs]');?>
<div <?php post_class(['middle-content']);?>>
    <div class="default-setion pt-img-1">
        <div class="container container-2">
            <h1 class="hd-h1"><?php echo $h1;?></h1>
            <div class="map-main">
                <?php
                 if( have_rows('map_rep') ) { ?>
                    <div class="map-main">
                         <?php
                         while ( have_rows('map_rep') ) { the_row(); ?>
                             <div class="map-inner">
                                 <div class="map-iframe">
                                     <?php echo strip_tags(get_sub_field('map_iframe'),'<iframe>')?>
                                 </div>
                                 <div class="map-address">
                                     <address><?php the_sub_field('map_address');?></address>
                                 </div>
                             </div>
                         <?php
                         } reset_rows(); ?>
                    </div>
                 <?php
                 } ?>
            </div>
            <?php the_content();?>
        </div>
    </div>
    <?php //get_template_part( 'template-parts/custom/deposit', 'required' );?>
</div>