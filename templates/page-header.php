<?php use Roots\Sage\Titles; ?>

<div class="page-header text-center">
    <div class="container">
        <h1><?= Titles\title(); ?></h1>
    </div>
    <?php if(has_post_thumbnail()):?>
    <section class="section-img large scroll" data-stellar-background-ratio="0.35" style="background:url('<?php echo the_post_thumbnail_url();?>') no-repeat center;background-size:cover; background-attachment:fixed;"></section>
    <?php endif;?>
</div>
