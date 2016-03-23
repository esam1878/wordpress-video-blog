<?php

/*
Template Name: Test
*/

get_header(); ?>



<div class="headerbanner"><img src="http://localhost:8888/wp-content/uploads/2016/03/manchester-united-captain-wayne-rooney-fa-cup-january.jpg"/></div>

<form action="mail_handler.php" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>






<h3><?php the_content(); ?></h3>


<?php get_footer(); ?>
