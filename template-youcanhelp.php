<?php
/**
 * Template Name: You Can Help
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <div class="container">
        <div class="entry">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>    
        <?php if(is_page('pillar-program')):?>
            <div class="entry text-center">
                <a href="" class="btn btn-purple btn-cta btn-outline">DONATE</a>  
            </div>  
        <?php endif;?>
    </div>
<?php endwhile; ?>

<?php if(is_page('you-can-help')):?>
<section class="doc">
    <div class="container">
        <div class="row">
            <?php while ( have_rows('help_boxes') ) : the_row(); ?> 
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="info-box">
                        <div class="info-img fadein" style="background:url('<?php echo the_sub_field('icon');?>') no-repeat center;background-size: contain;"></div>
                        <p><?php echo the_sub_field('text');?></p>
                    </div>
                </div>
            <?php endwhile;?>   
            <div class="col-12 col-sm-12 col-md-6">
                <div class="info-box info-link">
                    <div class="info-entry">
                        <h3><?php echo the_field('cta_box_text');?></h3>
                        <a href="<?php echo the_field('cta_box_link');?>" class="btn btn-white btn-block"><?php echo the_field('cta_box_button_text');?></a> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
