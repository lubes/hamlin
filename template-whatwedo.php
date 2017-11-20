<?php
/**
 * Template Name: What We Do
 */
?>
<?php use Roots\Sage\Titles; ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="page-header text-center">
        <div class="container">
            <?php if(is_page('what-we-do')){?>
                <h1>What We Do</h1>
            <?php } else { ?>
                <h1>About Us</h1>
            <?php } ?>
        </div>
        <section class="section-img large scroll" data-stellar-background-ratio="0.35" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover; background-attachment:fixed;"></section>
    </div>
<?php endwhile; ?>
<section class="doc smaller-pad">
    <div class="container">
        <?php if(!is_page('what-we-do')){?>
        <h1 class="section-title text-center"><?= Titles\title(); ?></h1>
        <?php } ?>
        <div class="entry">   
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; ?>
        </div>
        <?php if(is_page('treatment')){?>
            <div class="entry">
                <div class="row flex-items-xs-middle">
                    <div class="col-12 col-sm-12 col-md-6">
                        <?php if(get_field('number')):?>
                            <span class="number"><?php echo the_field('number');?></span>
                        <?php endif;?>
                        <div class="info-text">
                            <p><?php echo the_field('info_text');?></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="info-icon fadein" style="background:url('<?php echo the_field('info_icon');?>') no-repeat center;background-size: contain;"></div>
                    </div>
                </div>
            </div>
        <?php } else  if(is_page('education') || is_page('prevention')) { ?>
            <div class="entry">
                <div class="row flex-items-xs-middle">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="info-icon fadein" style="background:url('<?php echo the_field('info_icon');?>') no-repeat center;background-size: contain;"></div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <?php if(get_field('number')):?>
                            <span class="number"><?php echo the_field('number');?></span>
                        <?php endif;?>
                        <div class="info-text">
                            <p><?php echo the_field('info_text');?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if(get_field('secondary_info')):?>
        <div class="entry">
            <?php echo the_field('secondary_info');?>
        </div>
        <?php endif;?>
    </div>
</section>
<?php if(is_page('what-we-do')):?>
    <section class="doc smaller-pad">
        <div class="container">
            <?php get_template_part('templates/cta', 'boxes'); ?>
        </div>
    </section>
<?php endif;?>