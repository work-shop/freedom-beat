<?php global $data ?>
<div class = "outerpagewrap">
	<div class="pagewrap">
		<div class="pagecontent">
			<div class="pagecontentContent">
				<h1><?php the_title();?></h1>
				<p><?php the_breadcrumb(); ?></p>
			</div>
			<div class="homeIcon"><a href="<?php echo home_url(); ?>"></a></div>
		</div>

	</div>
</div>
<div id="mainwrap">
	<?php if (have_posts()) : while (have_posts()) : the_post();  $postmeta = get_post_custom(get_the_id());  ?>
	<div id="main" class="clearfix">	
	<div class="content singledefult">
		<div class="postcontent singledefult" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
			<div class="blogpost">		
				<div class="posttext">
				<?php if( !get_post_format()){?> 
				
				<?php } ?>
					<?php if ( !has_post_format( 'gallery' , get_the_id())) { ?>
						<div class="blogsingleimage">			
							<?php	
							if ( !get_post_format() ) {
						
								
							?>
							<a href="<?php echo $image ?>" rel="lightbox[single-gallery]" title="<?php the_title(); ?>">
								<?php getImage('blog'); ?>
							</a>
							<?php } ?>
							<?php if ( has_post_format( 'video' , get_the_id())) {?>
							
								<?php  
								if(isset($postmeta["selectv"][0])){
									if ($postmeta["selectv"][0] == 'vimeo')  
									{  
										echo '<iframe src="http://player.vimeo.com/video/'.$postmeta["video_post_url"][0].'" width="580" height="280"  ></iframe>';  
									}  
									else if ($postmeta["selectv"][0] == 'youtube')  
									{  
										echo '<iframe width="580" height="280" src="http://www.youtube.com/embed/'.$postmeta["video_post_url"][0].'"  ></iframe>';  
									}  
									else  
									{  
										echo 'Please select a Video Site via the WordPress Admin';  
									}
								}
								?>
							<?php
							}
							?>	
							<?php if ( has_post_format( 'audio' , get_the_id())) {?>
							<div class="audioPlayer">
								<?php 
								if(isset($postmeta["audio_post_url"][0]))
									echo do_shortcode('[audio file="'. $postmeta["audio_post_url"][0] .'"]') ?>
							</div>
							<?php
							}
							?>	
							<div class="leftholder">
									<div class = "posted-date"><div class = "date-inside"><a href="<?php 
									$arc_year = get_the_time('Y'); 
									$arc_month = get_the_time('m'); 
									$arc_day = get_the_time('d');
									echo get_day_link($arc_year, $arc_month, $arc_day); ?>"><div class="day"><?php the_time('j') ?></div><div class="month"><?php the_time('M') ?></div> </a></div></div>
								<div class="commentblog"><div class = "circleHolder"><div class = "comment-inside"><?php socialLinkCat(get_permalink(),get_the_title(),false) ?></div></div></div>
							</div>
							<?php if(has_post_format( 'video' , get_the_id())){ ?>
								<div class = "meta videoGallery">
							<?php } 
							
							else {?>
								<div class = "meta">
							<?php } ?>		
									<div class="authorblog"><strong><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['translation_by']); } else {  _e('By: ','wp-rockPalace'); } ?></strong> <?php the_author_posts_link(); ?></div>
									<div class="categoryblog"><strong><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['translation_categories']); } else {  _e('Categories: ','wp-rockPalace'); } ?></strong>							
										<?php   if(get_query_var('portfoliocategory')){ 
											echo get_the_term_list( get_the_id(), 'portfoliocategory', '', ', ', '' ); 
										} else {
											the_category(', '); 
										}?></div>
									

							</div>
							
						</div>
					<?php } else {?>
						<?php
						global $post;
						$post_subtitrare = get_post( get_the_id() );
						$content = $post_subtitrare->post_content;
						$pattern = get_shortcode_regex();
						preg_match( "/$pattern/s", $content, $match );
						if( isset( $match[2] ) && ( "gallery" == $match[2] ) ) {
							$atts = shortcode_parse_atts( $match[3] );
							$attachments = isset( $atts['ids'] ) ? explode( ',', $atts['ids'] ) : get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . get_the_id() .'&order=ASC&orderby=menu_order ID' );
						}

						if ($attachments) {?>
						<div class="gallery-single">
						<?php
							foreach ($attachments as $attachment) {
								$title = '';
								//echo apply_filters('the_title', $attachment->post_title);
								$image =  wp_get_attachment_image_src( $attachment, 'gallery' ); 	 ?>
									<div class="image-gallery">
										<a href="<?php echo $image[0] ?>" rel="lightbox[single-gallery]" title="<?php the_title(); ?>"><div class = "over"></div>
											<img src="<?php echo $image[0] ?>" alt="<?php the_title(); ?>"/>			
										</a>	
									</div>			
									<?php } ?>
						</div>
						<?php } ?>
							<div class="leftholder">
									<div class = "posted-date"><div class = "date-inside"><a href="<?php 
									$arc_year = get_the_time('Y'); 
									$arc_month = get_the_time('m'); 
									$arc_day = get_the_time('d');
									echo get_day_link($arc_year, $arc_month, $arc_day); ?>"><div class="day"><?php the_time('j') ?></div><div class="month"><?php the_time('M') ?></div> </a></div></div>
								<div class="commentblog"><div class = "circleHolder"><div class = "comment-inside"><?php socialLinkCat(get_permalink(),get_the_title(),false) ?></div></div></div>
							</div>
							<div class = "meta videoGallery">

									<div class="authorblog"><strong><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['translation_by']); } else {  _e('By: ','wp-rockPalace'); } ?></strong> <?php the_author_posts_link(); ?></div>
								<div class="categoryblog"><strong><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['translation_categories']); } else {  _e('Categories: ','wp-rockPalace'); } ?></strong>							
										<?php   if(get_query_var('portfoliocategory')){ 
											echo get_the_term_list( get_the_id(), 'portfoliocategory', '', ', ', '' ); 
										} else {
											the_category(', '); 
										}?></div>
									

							</div>
					<?php }  ?>
					<div class="sentry">
						<?php if ( has_post_format( 'video' , get_the_id())) {?>
							<div><?php the_content(); ?></div>
						<?php
						}
					    if ( has_post_format( 'audio' , get_the_id())) { ?>
							<div><?php the_content(); ?></div>
						<?php
						}						
						if(has_post_format( 'gallery' , get_the_id())){?>
							<div class="gallery-content"><?php the_content(); 	?></div>
						<?php } 
						if( !get_post_format()){?> 
						    <?php add_filter('the_content', 'addlightboxrel_replace'); ?>
							<div><?php the_content(); ?></div>		
						<?php } ?>
						<div class="singleBorder"></div>
					</div>
				</div>
				
				<?php if(has_tag()) { ?>
					<?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { $tagsTR = stripText($data['translation_tags']); } else {  $tagsTR = __('Tags: ','wp-rockPalace'); } ?>
					<div class="tags"><?php the_tags($tagsTR,', ',''); ?></div>	
				<?php } ?>
					

				
			</div>						
			
		</div>		
		<?php
		$posttags = wp_get_post_tags(get_the_id(), array( 'fields' => 'ids' ));
		$query_custom = new WP_Query(
			array( "tag__in" => $posttags,
				   "orderby" => 'rand',
				   "showposts" => 3,
				   "post__not_in" => array(get_the_id())
			) );
		if ($query_custom->have_posts()) : ?>
			<div class="relatedtitle">
				<h3><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['translation_relatedpost']); } else {  _e('Related post','wp-rockPalace'); } ?></h3>
			</div>
			<div class="related">	
			
			<?php
			$count = 0;
			while ($query_custom->have_posts()) : $query_custom->the_post(); 

					
				if($count != 2){ ?>
					<div class="one_third">
				<?php } else { ?>
					<div class="one_third last">
				<?php } ?>
						<div class="image"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php getImage('related'); ?></a></div>
						<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>			
					</div>
						
				<?php 
				$count++;
			endwhile; ?>
			</div>
		<?php endif;
		wp_reset_postdata(); 
		
		?>	
	
	
	<?php comments_template(); ?>
					
	<?php endwhile; else: ?>
					
		<?php get_template_part('404'); ?>

	<?php endif; ?>
	</div>


<?php get_sidebar(); ?>
</div>
</div>