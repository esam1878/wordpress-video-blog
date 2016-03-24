<?php get_header(); ?>
<!-- <div class="headerbanner"><img src="http://localhost:8888/wp-content/uploads/2016/03/Untitled-1.jpg"/></div>-->
<?php if( have_posts() ):

      while( have_posts() ): the_post(); ?>

      <div class="wrapper-top col-xs-12">
      <div class="main-container main-container_fullheight">
      <div class="container box-fix post-decoration">

      <div class="post-header">
      <h2><?php the_title(); ?></h2>
      <h4>Posted on <?php the_time('F j, Y') ?></h4>
      </div>


</div>

</div>
<div class="main-container main-container_fullheight post-footer">
<?php the_content(); ?>
<br>
<hr>
</div>
</div>
  <hr>

</div>


    <?php endwhile;?>

<div class=" col-xs-6 text-left next-button-container">
  <div class="next-button hvr-sweep-to-left"><?php next_posts_link('<< Older Videos'); ?></div>
</div>

<div class=" col-xs-6 text-right next-button-container">
  <div class="next-button hvr-sweep-to-right"><?php previous_posts_link('Newer Videos >>'); ?></div>
</div>
  <?endif;

   ?>
   <div class="button-up">
   <span id="top-link-block" class="hide">
       <a href="#top" class="well well-sm button-up-text"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
           <i class="glyphicon glyphicon-chevron-up"></i> Back to Top
       </a>
   </span>
   </div>
<?php get_footer(); ?>
