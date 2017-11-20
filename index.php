<?php use Roots\Sage\Titles; ?>

<div class="page-header text-center">
    <div class="container">
        <h1 class="no-margin"><?= Titles\title(); ?></h1>
    </div>
</div>

<?php $i=0; while (have_posts()) : the_post(); $i++; ?>
    <?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
        <section class="doc beige-bg">
            <div class="container">
                <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
            </div>
        </section>
    <?php else:?>
        <div class="container">
            <article <?php post_class('post-wrap standard-post'); ?>>
                <div class="row flex-items-xs-middle">            
                    <?php if ($i % 2 == 0) { ?>
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="blog-img fadein" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover;"></div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="blog-entry right-col">
                                <span class="cats"><?php $term_list = wp_get_post_terms($post->ID, 'category');the_terms( $post->name, 'category' );?></span>
                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p><?php echo wp_trim_words( get_the_content(), 25 ); ?></p>            
                                <a href="<?php the_permalink(); ?>" class="btn btn-purple btn-outline btn-block">READ MORE</a>
                            </div>
                        </div>                    
                    <?php } else { ?> 
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="blog-entry left-col">
                                <span class="cats"><?php $term_list = wp_get_post_terms($post->ID, 'category');the_terms( $post->name, 'category' );?></span>
                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p><?php echo wp_trim_words( get_the_content(), 25 ); ?></p>          
                                <a href="<?php the_permalink(); ?>" class="btn btn-purple btn-outline btn-block">READ MORE</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="blog-img fadein" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover;"></div>
                        </div>                     
                    <?php } ?>
                </div>
            </article>
        </div>
    <?php endif; ?>
<?php endwhile; ?>
 
<?php the_posts_navigation(); ?>
