<?php get_template_part('templates/footer', 'cta'); ?>
<footer class="content-info">
    <div class="footer-menu">
        <div class="container">
            <nav class="footer-nav">
                <?php wp_nav_menu([
                    'menu'            => 'primary_navigation',
                    'theme_location'  => 'primary_navigation',
                    'container'       => 'div',
                    'container_id'    => 'bs4navbar',
                    'menu_id'         => false,
                    'menu_class'      => 'inner-footer-nav row',
                    'depth'           => 2,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                ]); ?>
             </nav>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <ul class="socials list-unstyled">   
                <?php while ( have_rows('socials', 4) ) : the_row(); ?> 
                    <li><a href="<?php echo the_sub_field('link', 4);?>" target="_blank"><i class="<?php echo the_sub_field('icon', 4);?>"></i></a></li>
                <?php endwhile;?> 
            </ul>
            <p>&copy; <?php echo date("Y"); ?> <?php echo the_field('copyright', 4);?> | <a href="<?php echo site_url();?>/privacy-policy">PRIVACY POLICY</a></p>
        </div>
    </div>
</footer>
