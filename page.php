<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
    <div class="container">
        <div class="entry">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
    </div>
<?php endwhile; ?>
