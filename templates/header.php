<header class="banner">
    <div class="nav-wrap">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <nav class="navbar nav-primary">
            <?php wp_nav_menu([
                'menu'            => 'primary_navigation',
                'theme_location'  => 'primary_navigation',
                'container'       => 'div',
                'container_id'    => 'bs4navbar',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav mr-auto',
                'depth'           => 2,
                'fallback_cb'     => 'bs4navwalker::fallback',
                'walker'          => new bs4navwalker()
            ]); ?>
         </nav>
    </div>
    <div class="clearfix"></div>
    <div class="menu-toggle hidden-lg-up"><i class="ion-navicon"></i></div>
</header>

<!-- Newsletter Modal -->
<div class="modal fade smaller" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ion-ios-close-empty"></i></button>
            <div class="modal-body">
            <?php echo the_field('newsletter_copy', 4);?>
            <form action="https://hamlinfistulausa.us16.list-manage.com/subscribe/post" class="signup-form" method="POST">
                <input type="hidden" name="u" value="f2b86eaea0ac6da47815fc77d">
                <input type="hidden" name="id" value="3038353ba7">
                <div id="mergeTable" class="mergeTable">
                    <div class="mergeRow dojoDndItem mergeRow-email" id="mergeRow-0">
                        <label for="MERGE0">Email Address <span class="req asterisk">*</span></label>
                        <div class="field-group">
                            <input type="email" class="form-control" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">
                        </div>
                    </div>
                    <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-1">
                        <label for="MERGE1">First Name</label>
                        <div class="field-group">
                            <input type="text" class="form-control" name="MERGE1" id="MERGE1" size="25" value="">
                        </div>
                    </div>
                    <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-2">
                        <label for="MERGE2">Last Name</label>
                        <div class="field-group">
                            <input type="text" class="form-control" name="MERGE2" id="MERGE2" size="25" value="">
                        </div>
                    </div>
                </div>
                <div class="submit_container clear">
                    <input type="submit" class="formEmailButton btn btn-purple btn-block" name="submit" value="Subscribe to list">
                </div>
                <input type="hidden" name="ht" value="c19ffdd6f660f076103f244af6bd8d50ea007bd3:MTUxMDg1MzU2NC42NDQ5">
                <input type="hidden" name="mc_signupsource" value="hosted">
            </form>
            </div>
        </div>
    </div>
</div>