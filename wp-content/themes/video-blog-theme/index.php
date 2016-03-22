<?php get_header(); ?>
<div class="headerbanner"><img src="http://localhost:8888/wp-content/uploads/2016/03/Untitled-1.jpg"/></div>
<?php if( have_posts() ):

      while( have_posts() ): the_post(); ?>

      <div class="wrapper-top col-xs-12">
      <div class="main-container main-container_fullheight">
      <div class="container box-fix post-decoration">

      <h2><?php the_title(); ?></h2>
      <h4>Posted on <?php the_time('F j, Y') ?> <?php the_time('g:i a') ?></h4>

      <h3><?php the_content(); ?></h3>
      <br>
      <hr>

</div>

</div>
</div>
  <hr>

</div>


    <?php endwhile;
  endif;

   ?>
   <div class="button-up">
   <span id="top-link-block" class="hide">
       <a href="#top" class="well well-sm button-up-text"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
           <i class="glyphicon glyphicon-chevron-up"></i> Back to Top
       </a>
   </span>
   </div>
<?php get_footer(); ?>
