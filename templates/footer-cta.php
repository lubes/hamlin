<?php if(is_archive('directors')) { $id = '57'; } else { $id = get_the_ID(); }?>
<?php if(get_field('show_footer_cta',$id)==1):?>
<section class="bottom-cta beige-bg">
    <div class="row no-gutters">
        <div class="col-12 col-sm-12 col-md-6">
            <div class="cta-image" style="background:url('<?php echo the_field('footer_image', $id);?>') no-repeat center;background-size:cover;"></div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="cta-block">
                <div class="cta-entry">
                    <h3><?php echo the_field('footer_text', $id);?></h3>
                </div>
                <a href="<?php echo the_field('footer_link', $id);?>" class="btn btn-purple btn-outline btn-block"><?php echo the_field('button_text', $id);?></a>           
            </div>
        </div>
    </div>
</section>
<?php endif;?>