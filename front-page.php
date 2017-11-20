<section class="intro" style="background:url(<?php echo the_field('hero_image');?>) no-repeat center;background-size:cover;">
    <div class="intro-entry">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8">
                    <h1>Hamlin Fistula USA</h1>
                    <h3><?php echo the_field('hero_text');?></h3>
                    <a href="<?php echo the_field('hero_link');?>" class="btn btn-purple btn-outline"><?php echo the_field('hero_button_text');?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-img scroll" data-stellar-background-ratio="0.35" style="background:url('<?php echo the_field('second_image');?>') no-repeat center;background-size:cover;background-attachment:fixed;"></section>

<section class="doc beige-bg">
    <div class="container">
        <div class="entry">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('templates/content', 'page'); ?>
            <?php endwhile; ?>
        </div>
        <?php get_template_part('templates/cta', 'boxes'); ?>
    </div>
</section>

<section class="doc violet-bg">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <?php $post_object = get_field('work_box_1', 4);
                if( $post_object ): $post = $post_object;setup_postdata( $post );?>            
                    <div class="cta-box large fadein">
                        <div class="cta-img" style="background:url('<?php echo $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>') no-repeat center;background-size:cover;"></div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-white btn-block"><?php echo the_field('custom_title_1', 4);?></a>
                    </div>   
                <?php wp_reset_postdata(); endif;?>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <?php $post_object = get_field('work_box_2', 4);
                if( $post_object ): $post = $post_object;setup_postdata( $post );?>            
                    <div class="cta-box large fadein">
                        <div class="cta-img" style="background:url('<?php echo $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>') no-repeat center;background-size:cover;"></div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-white btn-block"><?php echo the_field('custom_title_2', 4);?></a>
                    </div>   
                <?php wp_reset_postdata(); endif;?>
            </div>
        </div>
    </div>
</section>

<section class="donate-sec" style="background:url('<?php echo the_field('donate_image');?>') no-repeat center;background-size:cover;">
    <div class="donate-entry text-center fadein">
        <?php echo the_field('donate_text');?>
        <a href="<?php echo site_url();?>/donate" class="btn btn-purple btn-outline btn-block">DONATE NOW</a>
    </div>
</section>

<section class="blog-feed">
    <h1 class="blog-title">Stories and Updates</h1>
    <div class="row no-gutters">
        <?php $args = array( 'posts_per_page' => 3, 'cat'=>5 );
        $myposts = get_posts( $args );  $i = 0;
        foreach ( $myposts as $post ) : setup_postdata( $post );$i++; ?>
            <article <?php post_class('col-12 col-sm-12 col-md-4'); ?>>
                <a href="<?php the_permalink(); ?>" class="blog-img" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover;">
                    <h4 class="entry-title fadein"><?php the_title(); ?></h4>
                </a>
                <div class="link-wrap">
                    <a href="<?php the_permalink(); ?>" class="btn btn-purple btn-outline btn-block"><?php if(get_field('custom_link_text')) { echo the_field('custom_link_text'); } else { echo 'READ MORE'; }?></a>
                </div>
            </article>
        <?php endforeach; wp_reset_postdata();?>
    </div>
</section>