<?php

get_header(); ?>

<div class="content container">

<div class="row">
 <div class="col-lg-3">
<div class="sticky-top" style="top:56px;">
 <?php get_sidebar('page-sidebar'); ?>
 </div>
 </div>
 <div class="col-lg-9">
 <img class="img-fluid" src="<?php the_post_thumbnail_url('post_image'); ?>" alt="">
 <h1 class="main-container">
    <?php the_title(); ?>
</h1>

<?php if(have_posts(  )): while(have_posts(  )) :the_post(); ?>



<?php the_content(); ?>

<?php endwhile;else: endif;?>
  
 </div>


</div>

</div>

<?php

get_footer(); ?>