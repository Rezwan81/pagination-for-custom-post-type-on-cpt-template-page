<?php

 $currenrpage = get_query_var('paged') ? get_query_var('paged') : 1;
 
 $portfolio = new WP_Query(array(
 	'post_type'      => 'comet-portfolio',
 	'posts_per_page' => '2',
 	'paged'			 => $currenrpage	
 ));

 while($portfolio->have_posts()) : $portfolio->the_post();

 ?>
  <h3><?php the_title() ;?></h3>

 <?php endwhile; ?>     

 <?php
 $maxpage = $portfolio->max_num_pages;

 echo paginate_links(array(
 	'current' => $currentpage,
 	'total'   => $maxpage,
 	'show_all'=> true
 )); 
 ?>