
<?php global $data; ?>
<!-- box home page for 4 intro boxes -->
	<div class = "homeBoxAll">
		<div class="homeBox ">
			<div class="one_third first">
				<a href="<?php if(isset($data['box1_link'])) echo $data['box1_link']?>">
					<div class="imageBox">
						<img src="<?php if (isset($data['box1_image'])) echo $data['box1_image']; else echo get_template_directory_uri().'/images/placeholder-580-small.png';?>" alt="<?php echo stripText($data['box1_title']) ?>">
					</div>
				</a>
				<h3><a class="overdefultlink" href="<?php if(isset($data['box1_link'])) echo $data['box1_link']?>"><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['box1_title']); } else {  _e('Featured Box 1 Title','wp-rockPalace'); } ?></a></h3>
				<div class="recentdescription">
					<div class="descriptionHomePort">
						<div><p><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['box1_description']); } else {  _e('Featured Box 1 Description','wp-rockPalace'); } ?> </p></div>
					</div>
				</div>
								
			</div>
			<div class="one_third second">
				<a href="<?php if(isset($data['box2_link'])) echo $data['box2_link']?>">
					<div class="imageBox">
						<img src="<?php if (isset($data['box2_image'])) echo $data['box2_image']; else echo get_template_directory_uri().'/images/placeholder-580-small.png';?>" alt="<?php echo stripText($data['box2_title']) ?>">
					</div>
				</a>	
				<h3><a class="overdefultlink" href="<?php if(isset($data['box2_link'])) echo $data['box2_link']?>"><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['box2_title']); } else {  _e('Featured Box 2 Title','wp-rockPalace'); } ?></a></h3>
				<div class="recentdescription">
					<div class="descriptionHomePort">
						<div><p><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['box2_description']); } else {  _e('Featured Box 2 Description','wp-rockPalace'); } ?> </p></div>
					</div>
				</div>	
			</div>
			<div class="one_third last third">	
				<a href="<?php if(isset($data['box3_link'])) echo $data['box3_link']?>">
					<div class="imageBox">
						<img src="<?php if (isset($data['box3_image'])) echo $data['box3_image']; else echo get_template_directory_uri().'/images/placeholder-580-small.png';?>" alt="<?php echo stripText($data['box3_title']) ?>">
					</div>
				</a>
				<h3><a class="overdefultlink" href="<?php if(isset($data['box3_link'])) echo $data['box3_link']?>"><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['box3_title']); } else {  _e('Featured Box 3 Title','wp-rockPalace'); } ?></a></h3>
				<div class="recentdescription">
					<div class="descriptionHomePort">
						<div><p><?php if (!function_exists('icl_object_id') or (ICL_LANGUAGE_CODE == $sitepress->get_default_language()) ) { echo stripText($data['box3_description']); } else {  _e('Featured Box 3 Description','wp-rockPalace'); } ?> </p></div>
					</div>
				</div>

			</div>
			

		</div>
	</div>

		
		<div class="clear"></div>	