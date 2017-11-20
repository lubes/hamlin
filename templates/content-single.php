<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('post-wrap'); ?>>
    <div class="page-header text-center">
        <div class="container">
            <h1 class="no-margin"><?php the_title(); ?></h1>
        </div>
    </div>  
    <section class="section-img large scroll" data-stellar-background-ratio="0.35" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover; background-attachment:fixed;"></section>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <?php if(get_field('secondary_image')):?>
    <section class="section-img large scroll"  data-stellar-background-ratio="0.35"  style="background:url('<?php echo the_field('secondary_image');?>') no-repeat center;background-size:cover; background-attachment:fixed;"></section> 
    <?php endif;?>
    <div class="entry-content">
        <?php if(get_field('secondary_information')):?>
            <?php echo the_field('secondary_information');?>
        <?php endif;?>
        <?php if(get_field('slider_images')):?>
        <div class="slider-wrap">
            <div class="posts-slider">
                <?php while ( have_rows('slider_images') ) : the_row(); ?>
                    <div class="slide">
                        <img src="<?php echo the_sub_field('image');?>" class="img-fluid" />
                    </div>
                <?php endwhile;?>  
            </div> 
        </div>
        <?php endif;?>
    </div>   
    <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php // comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
 