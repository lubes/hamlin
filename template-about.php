<?php
/**
 * Template Name: About Us
 */
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="page-header text-center">
        <div class="container">
            <h1>About Us</h1>
        </div>
        <section class="section-img large scroll" data-stellar-background-ratio="0.35" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover; background-attachment:fixed;"></section>
    </div>
    <div class="container">
        <div class="entry">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>    
    </div>
<?php endwhile; ?>
<?php if(is_page('financials')):?>
<section class="doc directors">
    <div class="container">
        <h1 class="section-title text-center"><?= Titles\title(); ?></h1>
        <!-- Financials Page -->
        <?php if(is_page('financials')):?>
        <div class="entry">
            <div class="row">
            <?php while ( have_rows('financials') ) : the_row(); ?>
               <div class="col-12 col-sm-12 col-md-4">
                    <a class="doc-entry fadein" href="<?php echo the_sub_field('document');?>" target="_blnk">
                        <div class="doc-title"><?php echo the_sub_field('document_title');?></div>
                    </a>
                </div>
            <?php endwhile;?>   
            </div>
        </div>
        <?php endif;?>
        <!-- End Financials Page -->
    </div>
</section>
<?php endif;?>
