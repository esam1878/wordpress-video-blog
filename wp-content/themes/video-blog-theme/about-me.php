<?php

/*
Template Name: About Me
*/

get_header(); ?>
<div class="headerbanner-oterside"><img src="http://localhost:8888/wp-content/uploads/2016/03/12716043_10153503081807746_4366027131434481127_o-2.jpg"/></div>
<?php if( have_posts() ):

      while( have_posts() ): the_post(); ?>

      <div class="wrapper-top">
      <div class="main-container main-container_fullheight othersites-container">
      <div class="container box-fix post-decoration">

      <h2><?php the_title(); ?></h2>


      <h3><?php the_content(); ?></h3>
      <br>
      <hr>

</div>

</div>
</div>
  <br>

</div>


    <?php endwhile;
  endif;

   ?>

<?php get_footer(); ?>
