<?php get_header(); ?>

<?php
  $post = $wp_query->post;
  if (get_post_type( $post->ID ) != 'portfolioentry') {
      get_template_part('single_defult');
  } else {
      get_template_part('single_portfolio');
	 }
?>

<?php get_footer(); ?>