<div class="row">         
    <?php $pages = array (48,73, 45);  
    foreach ( $pages as $page_id ){            
    $id = $page_id;
    $post = get_post($id); 
    $content = apply_filters('the_content', $post->post_content); 
    $title = apply_filters('the_title', $post->post_title); 
    $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>  
        <div class="col-12 col-sm-12 col-md-4">
            <div class="cta-box fadein">    
                <a href="<?php echo site_url();?>/what-we-do/<?php echo $title;?>" class="cta-img" style="background:url('<?php echo $image;?>') no-repeat center;background-size:cover;">
                <div class="cta-overlay">LEARN MORE</div></a>
                <div class="cta-entry text-center">
                    <h4><?php echo $title;?></h4>
                    <p><?php echo the_field('cta_box_text', $page_id);?> </p>
                </div>
                <a href="<?php echo site_url();?>/what-we-do/<?php echo $title;?>" class="btn btn-purple btn-block">LEARN MORE</a>  
            </div>
        </div>          
    <?php } ?>    
</div>