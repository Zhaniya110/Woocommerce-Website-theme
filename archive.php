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


<?php if(have_posts(  )): while(have_posts(  )) :the_post(); ?>

<img class="img-fluid" src="<?php the_post_thumbnail_url('post_image'); ?>" alt="">
 <h1 class="main-container">
    <?php the_title(); ?>
</h1>

<?php the_excerpt(  ); ?>

<?php endwhile;else: endif;?>
<?php
global $wp_query;

$big = 999999999; // need an unlikely integer
$translated = __( 'Page', 'mytextdomain' ); // Supply translatable string

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
) );
?>
 </div>


</div>

</div>

<?php

get_footer(); ?>