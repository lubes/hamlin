<div class="page-header text-center">
    <div class="container">
        <h1>About Us</h1>
    </div>
    <section class="section-img large scroll" data-stellar-background-ratio="0.35" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover; background-attachment:fixed;"></section>
</div>
<section class="doc directors">
    <div class="container">
        <h1 class="section-title text-center">Board of Directors</h1>
        <div class="row">
            <?php $args = array( 'posts_per_page' => -1, 'post_type'=> 'directors' );
            $myposts = get_posts( $args );  $i = 0;
            foreach ( $myposts as $post ) : setup_postdata( $post );$i++; ?>
                <article <?php post_class('col-12 col-sm-12 col-md-4'); ?>>
                    <a href="#" data-toggle="modal" data-target="#teamModal" class="blog-img post-link fadein" rel="<?php the_ID(); ?>" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover;">
                        <h4 class="entry-title"><?php the_title(); ?><span><?php echo the_field('position');?></span></h4>
                    </a>
                    <div class="link-wrap">
                        <a href="#" data-toggle="modal" data-target="#teamModal" class="btn btn-purple btn-outline btn-block post-link" rel="<?php the_ID(); ?>">VIEW BIO</a>
                    </div>
                </article>
            <?php endforeach; wp_reset_postdata();?>
        </div>
    </div>
</section>

<!-- Ajax Modal -->
<div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ion-ios-close-empty"></i></button>
            <div class="modal-body">
                <div id="project-container"></div>
            </div>
        </div>
    </div>
</div>