<?php 

get_header(); ?>

<div id="hero">
    <div class="container d-flex align-items-center justify-content-between h-100">
        <h1>Welcome to my Shop</h1>
    </div>
</div>



<div class="content container">
<?php if(have_posts(  )): while(have_posts(  )) :the_post(); ?>

<?php the_content(); ?>

<?php endwhile;else: endif;?>


</div>
<?php 
get_footer();