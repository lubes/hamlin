<?php
/**
 * Template Name: Donate 
 */
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="page-header text-center">
        <div class="container">
            <h1><?php echo the_field('custom_title');?></h1>
        </div>
        <section class="section-img large scroll" data-stellar-background-ratio="0.35" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover; background-attachment:fixed;"></section>
    </div>
    <div class="container">
        <div class="entry">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>    
    </div>
<?php endwhile; ?>