<article <?php post_class('post-wrap'); ?>>
    <div class="row flex-items-xs-middle">
        <div class="col-12 col-sm-12 col-md-6">
            <div class="blog-entry left-col">
                <span class="cats"><?php $term_list = wp_get_post_terms($post->ID, 'category');the_terms( $post->name, 'category' );?></span>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php echo wp_trim_words( get_the_content(), 25 ); ?></p>               
                <a href="<?php the_permalink(); ?>" class="btn btn-purple btn-outline btn-block">READ MORE</a>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="blog-img" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover;">
        </div>
    </div>
</article>