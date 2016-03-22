<?php

/*
Template Name: Contact
*/

get_header(); ?>

<div class="headerbanner"><img src="http://localhost:8888/wp-content/uploads/2016/03/manchester-united-captain-wayne-rooney-fa-cup-january.jpg"/></div>

<?php if( have_posts() ):

      while( have_posts() ): the_post(); ?>

      <div class="wrapper-top">
      <div class="main-container main-container_fullheight">
      <div class="container box-fix post-decoration">

      <h2><?php the_title(); ?></h2>

      <form>

  <label>Name</label>
  <input name="name" placeholder="Name" class="name-box">

  <label>Email</label>
  <input name="email" type="email" placeholder="Email" class="email-box">

  <label>Message</label>
  <textarea name="message" placeholder="Message" class="message-box"></textarea>

  <input id="submit" name="submit" type="submit" value="SUBMIT" class="submit-box">

</form>
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

<?php get_footer(); ?>
