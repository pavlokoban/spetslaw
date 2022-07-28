<?php $h1 = ( get_field('h1') ) ? get_field('h1') : get_the_title();?>
<?php echo do_shortcode('[breadcrumbs]');?>
<div <?php post_class(['middle-content']);?>>
    <div class="default-setion pt-img-3 forms-main">
        <div class="container container-2">
            <h1 class="hd-h1"><?php echo $h1;?></h1>
            <?php
             if( have_rows('form_rep') ) { ?>
                <div class="form-box-main">
                    <div class="row">
                     <?php
                     while ( have_rows('form_rep') ) { the_row(); ?>
                         <div class="col-md-3 col-sm-6 col-xs-12">
                             <div class="form-box">
                                 <a href="<?php echo get_sub_field('form_pdf')['url'];?>" title="<?php echo get_sub_field('form_pdf')['title'];?>">
                                     <img src="<?php the_sub_field('form_image');?>" alt="<?php echo get_sub_field('form_pdf')['title'];?>">
                                 </a>
                                 <div class="form-details">
                                     <figure><strong>File name:</strong> <?php echo get_sub_field('form_pdf')['filename'];?></figure>
                                     <summary>
                                         <span><i class="fa fa-eye"></i> 4646</span>
                                         <span><i class="fa fa-download"></i> 562</span>
                                         <span><i class="fa fa-thumbs-up"></i> 1</span>
                                         <span><i class="fa fa-eye"></i> 106.13kb</span>
                                     </summary>
                                 </div>
                             </div>
                         </div>
                     <?php
                     } reset_rows(); ?>
                    </div>
                </div>
             <?php
             } ?>
        </div>
    </div>
    <?php get_template_part( 'template-parts/custom/deposit', 'required' );?>
</div>