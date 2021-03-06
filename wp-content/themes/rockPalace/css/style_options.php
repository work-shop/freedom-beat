<?php
global $data; 
$use_bg = ''; $background = ''; $custom_bg = ''; $body_face = ''; $use_bg_header =''; $background_header = ''; $custom_bg_header = '';

if(isset($data['background_image'])) {
	$use_bg = $data['background_image'];
}


if(isset($data['background_image_header'])) {
	$use_bg_header = $data['background_image_header'];
}

if($use_bg) {

	$custom_bg = $data['body_bg_custom'];
	
	if(!empty($custom_bg)) {
		$bg_img = $custom_bg;
	} else {
		$bg_img = $data['body_bg'];
	}
	
	$bg_prop = $data['body_bg_properties'];
	
	$background = 'url('. $bg_img .') '.$bg_prop ;

}


if($use_bg_header) {

	$custom_bg_header = $data['header_bg_custom'];
	
	if(!empty($custom_bg)) {
		$bg_img_header = $custom_bg;
	} else {
		$bg_img_header = $data['header_bg'];
	}
	
	$bg_prop_header = $data['header_bg_properties'];
	
	$background_header = 'url('. $bg_img_header .') '.$bg_prop_header ;

}

function ieOpacity($opacityIn){
	
	$opacity = explode('.',$opacityIn);
	if($opacity[0] == 1)
		$opacity = 100;
	else
		$opacity = $opacity[1] * 10;
		
	return $opacity;
}

function HexToRGB($hex,$opacity) {
		$hex = preg_replace("/#/", "", $hex);
		$color = array();
 
		if(strlen($hex) == 3) {
			$color['r'] = hexdec(substr($hex, 0, 1) . $r);
			$color['g'] = hexdec(substr($hex, 1, 1) . $g);
			$color['b'] = hexdec(substr($hex, 2, 1) . $b);
		}
		else if(strlen($hex) == 6) {
			$color['r'] = hexdec(substr($hex, 0, 2));
			$color['g'] = hexdec(substr($hex, 2, 2));
			$color['b'] = hexdec(substr($hex, 4, 2));
		}
 
		return 'rgba('.$color['r'] .','.$color['g'].','.$color['b'].','.$opacity.')';
	}
	


?>
::selection { background: <?php echo $data['mainColor']; ?>; color:#fff; text-shadow: none; }
#headerwrap{background:<?php echo $data['body_background_color'].' '.$background ?>  !important;}
body {	 
	background:<?php echo $data['body_background_color'].' '.$background ?>  !important;
	color:<?php echo $data['body_font']['color']; ?>;
	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif;
	font-size: <?php echo $data['body_font']['size']; ?>;
	font-weight: normal;
	line-height: 1.65em;
	letter-spacing: normal;
}
h1,h2,h3,h4,h5,h6, .blogpostcategory .posted-date p, .team .title, .term-description p, .titleBottom{
	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['heading_font']['face'])))); ?> !important;
	<?php if(strpos($data['heading_font']['face'],'200')) {?>
		font-weight: 300;
	<?php } else { ?>
		font-weight: normal;
	<?php }  ?>
	line-height: 110%;
}

h1 { 	
	color:<?php echo $data['heading_font_h1']['color']; ?>;
	font-size: <?php echo $data['heading_font_h1']['size'] ?> !important;
	}
	
h2, .term-description p { 	
	color:<?php echo $data['heading_font_h2']['color']; ?>;
	font-size: <?php echo $data['heading_font_h2']['size'] ?> !important;
	}

h3 { 	
	color:<?php echo $data['heading_font_h3']['color']; ?>;
	font-size: <?php echo $data['heading_font_h3']['size'] ?> !important;
	}

h4 { 	
	color:<?php echo $data['heading_font_h4']['color']; ?>;
	font-size: <?php echo $data['heading_font_h4']['size'] ?> !important;
	}	
	
h5 { 	
	color:<?php echo $data['heading_font_h5']['color']; ?>;
	font-size: <?php echo $data['heading_font_h5']['size'] ?> !important;
	}	

h6 { 	
	color:<?php echo $data['heading_font_h6']['color']; ?>;
	font-size: <?php echo $data['heading_font_h6']['size'] ?> !important;
	}	
h2.title a {color:<?php echo $data['heading_font_h2']['color']; ?>;}
a, a:active, a:visited, .footer_widget .widget_links ul li a{color: <?php echo $data['body_link_coler']; ?>;}	
.widget_nav_menu ul li a  {color: <?php echo $data['body_link_coler']; ?>;}
a:hover, h2.title a:hover, .item3 h3:hover, .item4 h3:hover, .item3 h3 a:hover, #portitems2 h3 a:hover {color: <?php echo $data['mainColor']; ?>;}
.product-remove a:hover {color: <?php echo $data['mainColor']; ?> !important;}
.item3 h3, .item4 h3, .item3 h3 a, .item4 h3 a, .item3 h4, .item2 h4, .item4 h4, #portitems2 h3 a {color:<?php echo $data['heading_font_h3']['color']; ?>;}

/* ***********************
--------------------------------------
------------EXTRA TYPOGRAPHY----------
-----------------------------------*/
.homeRacent h3 a, .item4 h3, .item4 h3 a, .boxdescwraper h2, #footer .widget h3, .socialfooter h3, .widget h3, .item3 h3, #portitems2 h3, h3#comments, .relatedtitle h3,
.content ol.commentlist li .comment-author .fn a, #commentform  h3, .projectdescription h2, .team .title, .recentdescription h3
{ font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif !important;}


/* ***********************
--------------------------------------
------------NIVO SLIDER----------
--------------------------------------
*********************** */
.homeBox h2 a {color:<?php echo $data['heading_font_h2']['color']; ?>;}
.nivo-caption { 
	position:absolute; 
	background-color: <?php echo$data['slider_backColorNivo'] ?>;
	background-color: <?php echo HexToRGB($data['slider_backColorNivo'],$data['slider_opacity'])?>;
	border: 1px solid <?php echo $data['slider_borderColorNivo']; ?>; 
	color: <?php echo $data['slider_fontSize_colorNivo']['color']; ?>; 
	font-size: <?php echo $data['slider_fontSize_colorNivo']['size']; ?>;
	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['heading_font']['face'])))); ?> !important;
	letter-spacing: normal;
	padding:5px 15px 5px 5px;
	z-index:99;
	top:50px;
	left:0px;
	text-align:center;
	line-height:120%;
}
a.nivo-nextNav , a.nivo-prevNav {background: url(images/slideshowArrowForward.png)   <?php echo$data['slider_backColorNivo'] ?>;}
a.nivo-prevNav {background: url(images/slideshowArrowBackward.png)   <?php echo$data['slider_backColorNivo'] ?>;}

.nivo-caption a { 
	color: <?php echo $data['slider_fontSize_colorNivo']['color']; ?>;  
	text-decoration: underline; 
}	

.caption-content { padding:0px 0px 200px 0px; color:<?php echo $data['slider_fontSize_color']['color']; ?>; font-size: <?php echo $data['slider_fontSize_color']['size']; ?>; font-family: <?php echo str_replace("%20"," ",$data['']['face']); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif; text-shadow: 1px 1px 0px black; filter:alpha(opacity=<?php echo ieOpacity($data['slider_opacity']); ?>);letter-spacing: normal;}
.caption-content h1{width:250px !important; background: <?php echo HexToRGB($data['mainColor'],$data['slider_opacity']) ?>;  padding:10px ;text-align:center;  line-height:120%;}
.caption-content h2 {	color:<?php echo $data['slider_fontSize_color']['color'] ;?>!important;
						font-size:<?php echo $data['slider_fontSize_color']['size'] ;?>!important;
						text-shadow: 1px 1px 0px black;}
.caption-content p{ }




.caption-content h1{
	color:<?php echo $data['slider_HfontSize_color']['color'] ;?>!important;
	font-size:<?php echo $data['slider_HfontSize_color']['size'] ;?>!important;
	text-shadow: 1px 1px 0px black;
}

.caption-content h2{
	background: <?php echo HexToRGB($data['slider_backColor'], $data['slider_opacity']); ?>;  padding:10px ;text-align:center;  line-height:120%;
}

.homeRacent h2 ,.advertise h2,.slider-category .anythingBase,#nslider img, .related h3, .widget h3, .projectdescription h3, .portsingle .portfolio h3, .titleborderh,
.socialsingle h2{
	background:<?php echo $data['body_background_color'].' '.$background  ?>  !important;
	}

 #footer, #slider-wrapper-iframe, #slider-wrapper  {background:<?php echo $data['header_background_color'].' '.$background_header  ?>  !important;}


/* ***********************
--------------------------------------
------------SIZE OF THUMBS FOR SHOP----------
--------------------------------------
*********************** */

.homeRacent .productRH .image img, .homeRacent .productR .image img ,.productIframe.full{height: <?php echo $data['catalog_img_height']?>px;}
.homeRacent .productR .overdefult, .homeRacent .productR .overdefult:hover {height: <?php echo $data['catalog_img_height'] + 1?>px; width: <?php echo $data['catalog_img_height'] + 1?>px;}

/* ***********************
--------------------------------------
------------MAIN COLOR----------
--------------------------------------
*********************** */

#footer .product_list_widget li del, #footer .widget del span, .footer_widget h3 span,.catlinkhover,.item h3 a:hover, .item2 h3 a:hover, .item4 h3 a:hover,.catlink:hover,.infotext span, .homeRacent h3 a:hover, .item4 h4 a:hover,.tags a:hover,
.blogpost .link:hover,.blogpost .postedin:hover ,.blogpost .postedin:hover, .blogpost .link a:hover,.blogpostcategory a.textlink:hover,
.footer_widget .widget_links ul li a:hover, .footer_widget .widget_categories  ul li a:hover,  .footer_widget .widget_archive  ul li a:hover,
#footerb .footernav ul li a:hover,.footer_widget  ul li a:hover,.tags span a:hover,.more-link:hover,.showpostpostcontent h1 a:hover,
.menu li a:hover,.menu li a:hover strong, .menu li ul li:hover ul li:hover a,
.menu > li.current-menu-item a strong,.menu > li.current-menu-ancestor a strong,.blogpostcategory .meta .written:hover a ,.blogpostcategory .meta .comments:hover a ,
#wp-calendar a , .widgett a:hover ,.widget_categories li.current-cat a, .widget_categories li.current-cat, .blogpostcategory .meta .time a:hover,.homeRacent h2 span, .advertise h2 span, 
.related h3 span, .homeremove .catlink .sortingword:hover, .homeremove .catlinkhover .sortingword, .blogpost .datecomment  .link a,
.titleborderh span, .textSlide .box, .widget_login p a:hover, .priceSP ins,  .boxmore a:hover,
.homeRacent .productF h3.category, .textSlide .salePrice1 a, .textSlide .salePrice2 a, .textSlide .salePrice3 a, .textSlide span, .homeRacent .recentmore:hover,
.widget_login p a:hover, .priceSP ins, .cartTopDetails .product_list_widget li a:hover, .top-nav li a:hover,.cartTopDetails .product_list_widget .total .amount
{color:<?php echo $data['mainColor']; ?> !important;}


.socialsingle h2 span, .homeRacent h2 span, .advertise h2 span, .related h3 span, .infotext span,  .portfolio h3 span, .portsingleshare span, .titleborderh span,
.blogpostcategory .meta .category a, .singledefult .meta .category a, #portitems2 .category a, .homeRacent .category a, .portcategories a
{background:<?php echo $data['mainColor']; ?> !important; color: <?php echo $data['body_box_coler']; ?> !important;text-shadow:0 1px 0 <?php echo HexToRGB($data['ShadowColorFont'],$data['ShadowOpacittyColorFont'])?>;padding:2px 6px 3px 6px; }
.widget del .amount {background:none !important;}


.leftContentSP .thumbnails img:hover, .product_list_widget li  img:hover {border:5px solid <?php echo $data['mainColor']; ?>;}
.textSlide h1.underline {border-bottom:6px solid <?php echo $data['mainColor']; ?>;}

.advertise .bx-wrapper:hover .bx-next{background: <?php echo $data['mainColor']; ?> url(images/slideshowArrowForward.png) no-repeat 0px 1px;margin-left:940px;}
.advertise .bx-wrapper:hover .bx-prev {background: <?php echo $data['mainColor']; ?> url(images/slideshowArrowBackward.png) no-repeat 0px 1px;margin-left:0px;}
 .page .homeRacent .bx-next,.homeRacent.SP .bx-next{background: <?php echo $data['mainColor']; ?> url(images/slideshowArrowForward.png) no-repeat 0px 1px;}
 .page .homeRacent .bx-prev,.homeRacent.SP .bx-prev {background: <?php echo $data['mainColor']; ?> url(images/slideshowArrowBackward.png) no-repeat 0px 1px;}

/* ***********************
--------------------------------------
------------BOX COLOR----------
--------------------------------------
*********************** */
.homeBox .first {background:<?php echo $data['box1_color']; ?> !important;}
.homeBox .second {background:<?php echo $data['box2_color']; ?> !important;}
.homeBox .third {background:<?php echo $data['box3_color']; ?> !important;}

#footer, .item3 h3, .item4 h3, .item3 h3 a, .item4 h3 a ,.homewrap .homesingleleft,.homewrap .homesingleright, .container,.audioPlayerWrap
{ background:<?php echo $data['boxColor']; ?>}
.iosSlider .slider .item {border-left: 1px solid <?php echo $data['boxColor']; ?>}
.image-gallery, .gallery-item, .posttext .blogsingleimage img, .blogpostcategory .blogimage, .blogpostcategory iframe, #slider-category, .blogFullWidth #slider-category, 
.category_posts .widgett img,.recent_posts .widgett  img,.blogpostcategory .commentblog .circleHolder, .singledefult .commentblog .circleHolder, .related .one_third .image img
{ background:<?php echo $data['boxColor']; ?> !important;}

.category_posts .widgett img:hover,.recent_posts .widgett  img:hover,.related .one_third .image img:hover,#fancybox-close:hover, .cartWrapper, 
.homeRacent .productF .recentCart a:hover, .homeRacent .productR .recentCart a:hover, .cartPS .price
{background:<?php echo $data['mainColor']; ?> !important;}

.homeRacent h3 a, .item4 h3, .item4 h3 a {color:<?php echo $data['body_font']['color']; ?>;}
#remove a, #remove a span{color:<?php echo $data['body_font']['color']; ?>;font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif;} 

/* ***********************
--------------------------------------
------------BOX FONT COLOR----------
--------------------------------------
*********************** */

.homeRacent h3.category a, .blogpostcategory .meta .category a, .singledefult .meta .category a, .blogpost .posted-date a, #portitems2 h3.category a, .team .role,.portcategories a,
.wp-pagenavi a:hover, .wp-pagenavi span.current, #respond #commentform input#submit:hover, #contactform .contactbutton .contact-button:hover, .blogpostcategory .date-inside, .singledefult .date-inside,
 .pagecontent h1, .pagecontent p, .pagecontent p a, .homeRacent h3.category a:hover,
.homeremove .catlink span, .errorpage .postcontent h2, .errorpage .posttext, .blogpostcategory .date-inside .day, .singledefult .date-inside .day,.blogpostcategory .date-inside .month, .singledefult .date-inside .month,textSlide .quote, textSlide .quote2, .infotext span,
.widget_tag_cloud a:hover, .widget_product_tag_cloud a:hover, .content ol.commentlist li .reply a:hover, .relatedtitle h3, h3#comments, .boxmore a , #commentform h3, .homeRacent .productR .recentdescription .onsale, ins, .titleSP h2, .cartPS .price

 {color: <?php echo $data['body_box_coler']; ?> !important;}
.homeremove .catlinkhover .sortingword, .homeremove .catlink .sortingword:hover {background:<?php echo $data['body_box_coler']; ?>;}
.boxDescription .homeboxmore:hover {background:<?php echo $data['body_box_coler']; ?> !important;}
/* ***********************
--------------------------------------
------------MAIN COLOR BOXED----------
--------------------------------------
*********************** */
#contactform  .contactbutton .contact-button:hover, .gototop ,.role, .team .icon img,.pagewrap, .blogpostcategory .posted-date .date-inside,.singledefult .posted-date .date-inside,
.errorpage,  ins, .widget_login .submitbutton, .relatedtitle,.commenttitle, .related .one_third .image img:hover, .content ol.commentlist li .reply a:hover,
.item4 .image, .item3 .image, .item2 .image, .boxDescription .homeboxmore,#fancybox-close:hover ,.item2 .image, .category_posts .widgett img:hover, .recent_posts .widgett  img:hover,
#commentform  h3, #portitems2 .image, .widget_login .submitbutton, .widget_price_filter_custom .ui-slider .ui-slider-handle,
.widget_price_filter_custom .ui-widget-content, .item4 .image, .item3 .image, .item2 .image
{background:<?php echo $data['mainColor']; ?> ;}
.textBottom, .homeRacent .productR .recentdescription .onsale {background:<?php echo $data['mainColor']; ?>; background-color:<?php echo HexToRGB($data['mainColor'],$data['slider_opacity'])?>;}

.widget_tag_cloud a:hover, .widget_product_tag_cloud a:hover, #respond #commentform input#submit:hover{background:<?php echo $data['mainColor']; ?> !important;}

.wp-pagenavi a:hover, .wp-pagenavi span.current, #content input.button,
a.button:hover, button.button:hover, input.button:hover, #respond input#submit:hover, #content input.button:hover, 
.titleSP h2, mark
  {background:<?php echo $data['mainColor']; ?>; text-shadow:0 1px 0 <?php echo HexToRGB($data['ShadowColorFont'],$data['ShadowOpacittyColorFont'])?>;}
.blogpostcategory .comment-inside a, .singledefult .comment-inside a, .blogpostcategory .date-inside,.singledefult .date-inside,textSlide .quote, textSlide .quote2 {color: <?php echo $data['body_box_coler']; ?> !important; text-shadow:0 1px 0 <?php echo HexToRGB($data['ShadowColorFont'],$data['ShadowOpacittyColorFont'])?>;}
.textSlide .button, .textSlide .box {text-shadow:none;}
/* ***********************
--------------------------------------
------------MAIN BORDER COLOR----------
--------------------------------------
*********************** */
#logo a, .recentborder,.item4 .recentborder, .item3 .recentborder,.afterlinehome,.TopHolder ,#footer ,.borderLineLeft, .borderLineLeftSlideshow , .cartHolder {border-color:<?php echo $data['mainColor']; ?> !important;}


/* ***********************
--------------------------------------
------------BODY COLOR----------
--------------------------------------
*********************** */

.blogpost .link a,.datecomment span,.homesingleleft .tags a,.homesingleleft .postedin a,.blogpostcategory .category a,.singledefult .category a,.blogpostcategory .comments a,.singledefult .comments a,
.blogpostcategory a.textlink ,.singledefult a.textlink ,.written a, .blogpostcategory .meta .time a, .singledefult .meta .time a	
{ color:<?php echo $data['body_font']['color']; ?>}
.homeRacent.SP h3 { color:<?php echo $data['heading_font_h3']['color']; ?> !important;}

/* ***********************
--------------------------------------
------------MENU----------
--------------------------------------
*********************** */

.menu li:hover ul {border-bottom: 5px solid <?php echo $data['mainColor']; ?>;}
.menu li ul li a, .item4 h4 a, #portitems2 .category a, .homeRacent .category a, .item3 h4 a, .homeRacent .productF h3.category, .homeRacent .productR h3.category
{	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif !important; }
.menu > li a {	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['menu_font'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif !important; color:#2e2d2d;letter-spacing: normal;}
.menu a span{ 	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif  !important; color:#aaa !important;letter-spacing: normal;}

.top-nav a {color:#fff;}
/* ***********************
--------------------------------------
------------BLOG----------
-----------------------------------*/
.blogpostcategory h2 {line-height: 110% !important;}
.wp-pagenavi span.pages {font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif;}
.wp-pagenavi a, .showpostpostcontent h1 a {color:<?php echo $data['heading_font_h2']['color']; ?>;}
.wp-pagenavi a:hover,ul.tabs a:hover, h2.trigger:hover, .nextbutton, .prevbutton  { background-color:<?php echo $data['mainColor']; ?> !important; }
ul.tabs.woo a.current{  background-color:#3A3F43; }
.nextbutton.port {background: <?php echo $data['mainColor']; ?> url(images/slideshowArrowForward.png) no-repeat 0px 1px !important;}
.prevbutton.port {background: <?php echo $data['mainColor']; ?> url(images/slideshowArrowBackward.png) no-repeat 0px 1px !important;}
ul.tabs.woo .active a, ul.tabs a.current{  background-color:<?php echo $data['mainColor']; ?>; }
.blogpost .datecomment a, .related h4 a, .content ol.commentlist li .comment-author .fn a{color:<?php echo $data['body_font']['color']; ?>;}
.blogpost .datecomment a:hover, .tags a:hover, .related h4 a:hover, .content ol.commentlist li .comment-author .fn a:hover{ color:<?php echo $data['mainColor']; ?>; }
.comment-author .fn a{font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['heading_font']['face'])))); ?> !important;}
.image-gallery, .gallery-item { border: 2px dashed <?php echo $data['mainColor']; ?>;}
.blogpostcategory .posted-date p, .singledefult .posted-date p{font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif !important;text-shadow:0 1px 0 <?php echo HexToRGB($data['ShadowColorFont'],$data['ShadowOpacittyColorFont'])?>;}
.pagecontent h1, .pagecontent p,  .team .role,  .pagecontentContent #breadcrumb {text-shadow:0 1px 0 <?php echo HexToRGB($data['ShadowColorFont'],$data['ShadowOpacittyColorFont'])?>;}
/* ***********************
--------------------------------------
------------Widget----------
-----------------------------------*/
.wttitle a {color:<?php echo $data['heading_font_h4']['color']; ?>;}

.widgetline{<?php echo $bordersidebar; ?>}
.widgett a:hover, .widget_nav_menu ul li a:hover{color:<?php echo $data['mainColor']; ?> !important;}
 .widget_nav_menu ul li a{	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif !important; }
.related h4{	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif !important; }
.widget_search form div {	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif !important;}
.widgett a {	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif !important;}
.widget_tag_cloud a{	font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['body_font']['face'])))); ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif !important;}

/* ***********************
--------------------------------------
------------BUTTONS WITH SHORTCODES----------
--------------------------------------
*********************** */
.button_purche_right_top,.button_download_right_top,.button_search_right_top {font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['heading_font']['face'])))); ?> !important;color:<?php echo $data['heading_font_h2']['color']; ?>;text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);}
.button_purche:hover,.button_download:hover,.button_search:hover {color:<?php echo $data['mainColor']; ?> !important;}
.ribbon_center_red a, .ribbon_center_blue a, .ribbon_center_white a, .ribbon_center_yellow a, .ribbon_center_green a {font-family: <?php echo str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$data['heading_font']['face'])))); ?> !important;}
a.button.loading::before, button.button.loading::before, input.button.loading::before {content: "";position: absolute;height: 32px;width: 32px;bottom: 20px;left: 150px;text-indent: 0;background:url(images/loading.gif) no-repeat;}


/* ***********************
--------------------------------------
------------RESPONSIVE MODE----------
--------------------------------------
*********************** */

<?php if($data['showresponsive'] ) { ?>

@media screen and (min-width:0px) and (max-width:970px){
	/*footer*/
	#footer{top:20px;}
	.footer_widget1{margin-top: 30px; }
	.twitterlink,.facebooklink,.vimeo,.dribble,.emaillink{float:none; padding:13px;}
	.footer_widget .widgett{margin:5px auto 15px auto !important; padding:0;}
	#footerb .copyright{width:100% !important; text-align:left !important; padding-left:5px;}
	.footer_widget .widget_search form div {padding:0;}
	.socialfooter .socialcategory{margin: 0px 0 10px 0px; text-align: center;float: none;width: 150px;margin: 0 auto;}
	.footer_widget .category_posts .widgett, .footer_widget .recent_posts .widgett{float:none;}

	/*menu + header*/
	#headerwrap{position:relative; margin-bottom:30px;padding-bottom: 20px; min-height: 70px; float: left;}
	#logo {width:100%;float:left;position:relative;height:80px; }
	#mainwrap,.outerpagewrap{top:0;}
	#header {float:left; }
	#logo {width:100%; }
	.infotext h2 {font-size:24px !important; line-height: 140%;}
	.current_page_ancestor, .current-menu-item{border:none !important; padding-top:10px !important;}
	.infotext h1 {text-align:center;}
	.pagenav{display:none !important;}
	.respMenu{display:block;}		
	
	/*iosslider*/
	.textBottom {width:96% !important;padding:0; padding-top:5px;}
	.iosDescription span{font-size: 9px;}
	.iosDescription br{height: 0px !important; }
	.iosDescription h3{font-size: 10px !important;}
	.iosSlider .titleBottom{font-size: 12px !important;}	
	.iosSlider .slider .item .desc {font-size: 12px !important; line-height: 100%;}
	.iosSlider .prevButton,.iosSlider .nextButton{display:none;}
	#slider-wrapper{background:none; top:0; max-height: auto;float: left;}

	
	/*homebox*/
	.homeBox .one_third{padding:0;}
	.homeBox .one_third img, .homeBox .one_third h3 {padding:5px}
	.descriptionHomePort {float:none;}


	/*home recent port*/
	.homeRacent{margin-top:20px;}
	.homeRacent .one_half  {padding:10px 0 !important; border-left:none; border-right:none;}
	.homeRacent .recentimage{border:none !important; padding:0 !important; width:100%;  margin:0px auto !important; height:auto;}
	.recentmore {top:5px; float:none;}
	.homeRecent{margin-top:0;}
	.homeRacent h3{text-align:center;}
	.homeBox .one_fourth {width:100% !important;margin:0 !important;  }
	.homeBox .one_fourth .boxImage {margin: 0px auto !important; background:none !important;border:none!important; }
	.homeBox .boxdescwraper { position:relative !important;  display:inline-block; margin:0;}
	.top-nav li{padding-right:15px;}
	.boxdescwraper ,.boxImage, .boxDescription .homeboxmore{float:none; display:inline-block;}
	.boxdescwraper {top:-15px !important;}
	.homeboxmore {margin-bottom:30px}
	.sliderAdvertisePost .recentdescription h3 {margin-top:20px}
	.homeBox .recentdescription {margin-left:0;}	
	.homeRacent .recentdescriptionPort {width:100%;}
	.homeRacent .star-rating{float:none !important; margin:0 auto !important;}
	.homeRacent .recentdescription .star-rating, .homeRacent .recentdescription .shortDescription { margin-left:0;}
	.homeRacent .productIframe.full {width:99%;}
	.homeRacent .image img { width:98%;}
	.homeRacent.post h3 {margin:0px 0 10px 5px !important}

	/*advertiset*/
	.advertise img, .advertise a{float:none;}
	.advertise {background: url(images/mainBorderLine.png) top repeat-x; margin-top:0;}
	.advertise .title{margin:30px 0 10px 0;}
	 
	 /*bxslider*/
	.bx-viewport{height:auto !important}
	.bx-viewport ul{list-style:none;}
	.bx-viewport li{float:left; list-style:none; width:100%;}


	/*blog*/
	audio {width: 90%;}
	.blogpostcategory .meta,.blogpostcategory p{text-align:left;}
	.content{width:100%;}
	.blogpostcategory{width:98%; margin:0 auto; float:none;display: inline-block;}
	.socialsingle .emaillink{height:0;}
	.blog .wp-pagenavi {margin-top:20px;}
	.blogpostcategory .overdefultlink {display:none !important;}
	#slider-category .slider-item img {height:98% !important; width:100% !important;}
	.anythingBase .panel {background:none !important;}
	.portfolio .description{margin-top:10px;}




	/*single*/
	.singledefult h1, .singledefult h2, .singledefult h3{text-align:left;}
	.blogpost{width:98%; margin:0 auto;}
	.singledefult .tags{text-align:left;}
	.blogpost .author{margin-left:0px ;}
	.postcontent.singledefult {background:none; margin-bottom:20px;}
	.posttext img {width: 97%;}
	.projectdetails #slider img{width:100%;}
	.projectdetails .blogsingleimage{padding:0;}



	/*comment*/
	#commentform #respond #commentform textarea, #commentform #respond #commentform input{width:100%;margin-left: 0; padding-right: 0; margin-right: 0; padding-left: 0;}
	#commentform{width:98%; margin:0 auto;}
	#commentform #respond {padding:0;}
	.commentfield{float:none; text-align:left;}
	.commentlist .commenttext {width: 75%;text-align: left;padding:15px 10px 0 15px;}
	.comment-author{text-align:left;padding:0px 10px 0 0px;}



	/*team*/
	.one_third.team {background:none; padding-top:0px;}

	/*general*/
	.recentimage .image{background:none !important;}
	body{text-align:center;}
	h1,h2,h3,h4,h5,h6{margin-left:0 !important; margin-right:0 !important;}
	img {height: auto; }
	#main, .homeRacent .recentdescription, .footer_widget1, .footer_widget2, .footer_widget3, .footer_widget4{padding:0 !important;}

	 .menu li li ,#remove , .titleborder,.footernav, .closewrap,.sidebar,.related,.addthis_button_more,.editlink, .advertise, .homeRacent.SP,#footer .star-rating ,
	.totop,.overdefult, .loading, .outerpagewrap.error404,.bx-prev,.bx-next,.homeIcon,#nslider,#nslidert.homeRacent .category,.slider-wrapper, #nslider-wrapper, #slider-wrapper,
	.blogsingleimage .nextbutton.port, .blogsingleimage .prevbutton.port,.nivoSlidert,.relatedtitle,.portfolio .category, .blogsingleimage .nextbutton.port, .blogsingleimage .prevbutton.port{
		display:none !important;
	}

	
	#header,  #main ,#showpost  ,.homeRecent ,.pagenav,.homeBox .one_third,.bx-wrapper,.homeRacent h3,.homeRacent,.homeRacent .one_half ,.totop, .infotext ,.infotextwrap, #footerinside, .one_half,.footernav,#footerb ,
	.footer_widget1, .footer_widget2, .footer_widget3, .footer_widget4,.pagecontent, .portfolio,.wp-pagenavi,.image ,.pagecontentContent,#portitems2 h3
	.one_fourth, .one_fifth,.three_fourths,.one_fourths,.two_thirds,.one_third,.team .social,.item3,.item4 ,.leftContentSP ,.rightContentSP, .imagesSPAll,.top-nav ,#respond #commentform input,
	#respond #commentform textarea ,.boxDescription,.footer_widget .widget_search form div,.infotext h1, .categorytopbarWraper.sidebarShop,
	.projectdescription .posttext,.homeRacent .one_fourth,.pagecontentContent, object,.one_fourth{
		width:100% !important;
	}

	.pagenav{position:relative; margin:0;}

	div.product div.images img, #content div.product div.images img {width:100%}

	.borderLine {width:95% !important;}
	.borderLineRight{width:88% !important;}
	.borderLineLeft{width:10% !important;}
	.image .loading{text-align:center; width:100%;}
	.pagewrap{height:auto; padding-bottom:10px; margin-bottom:10px;}
	.wp-pagenavi{padding:0 !important; }
	.posttext{text-align:left !important}
	.posttext .blogsingleimage,.gallery-single {width:100%;}
	.blogsingleimage iframe{width: 98%;}
	.block .h2{font-size:14px !important;}


	/*port*/
	.portfolio h3, .portfolio h4{text-align:center !important; margin-top: 10px;}
	#portitems4{text-align:center;margin:0 auto;}
	.portfolio{margin: 0 auto; display: inline-block;}
	.item4 h4 a{float:none; margin-top:10px; margin-bottom:20px; border:none; color:#2a2b2c;}
	.portsingle .portfolio, .portsingleshare,.titleborderh{display:none !important;}
	.blogsingleimage .sentry img, .projectdetails .blogsingleimage,.projectdetails,.projectdescription ,.blogpost .datecomment {width: 100% !important;}
	.projectdescription  p {text-align:left; padding:0;}
	.projectdescription {padding:0; margin-bottom: 30px;}
	.projectdescription h2{text-align:left;}
	.item4 h4 a {text-shadow:none !important;}
	#portitems2 .recentdescription .description {padding:0px 10px 0 0px;}
	.item2 .image {background:#fff !important;}
	
	/*page*/
	.fullwidth{margin-top:20px;}
	.posttext {padding:0 5px;}
	.page .socialsingle {padding-left:5px;}
	#slider img{float: left; }


	/*shortcode*/
	.one_half, .one_third, .two_thirds, .one_fourth, .three_fourths, .one_fifth, .two_fifth, .three_fifths, .four_fifths {margin-top:10px; margin-right:0px;}

	.question h3, .success h3, .info h3, .error h3 {line-height:120%;}

	/*contact*/
	.google-map-placeholder ,#contactform {width:100% !important;}
	#contactform .commentfield input ,#contactform .commentfieldarea textarea{width:95%;}
	#contactform .contactbutton .contact-button {float:none;}
	.contactbutton{text-align:center}


	#mainwrap{width:98.7% !important;padding-left:2px;}
}

/*479*/
@media screen and (min-width:478px) and (max-width:970px){

	
	/*footer*/
	#footer .widget{width:99%; margin:2px;}
	.gototop {margin:-25px 0px 0px 90% !important}

	/*team*/
	.team .image img {width:240px;}

	/*blog*/



	/*single*/
	.blogpost{width:98%; margin:0 auto 50px auto;}

	/*portfolio*/
	#portitems3  h3,#portitems3  h4{text-align:center !important;}
	#portitems2 .recentdescription {width:100% !important; min-height:125px;}


	.homeBox .one_fourth {width: 50% !important;text-align: center;margin: 0 auto;margin-right: 0px !important;}
	.homeRacent .one_fourth {width: 49% !important;text-align: center;margin: 0.3% auto; margin-left: 0.6%;}

	/*port*/
	.one_half.item2{width:47% !important; float:left; margin-right:0; margin-left:2%;}
	.one_half.item2 img{width: 100%; height:150px;}
	#portitems2 .one_half{margin-right:0 !important}
	.item3{width:47% !important; float:left; margin-right:0; margin-left:2%;}
	.item3 img{width: 100%;}
	.item4{width:47% !important; float:left; margin-right:0; margin-left:2%;}
	.item4 img{width: 100%;}

	.one_third.team {width:47% !important; float:left; margin-right:0; margin-left:2%;}

	.homeRecent .one_third{width: 47.2% !important; float: left;padding-top:5px; margin-left:1%; margin-right:1%;}
	.homeRecent .one_third.last{display:none;}

	.homeRecent .one_fourth{width: 47.2% !important; float: left;padding-top:5px; margin-left:1%; margin-right:1%;}

	

}
@media screen and (min-width:490px) and (max-width:600px){
	.blogpostcategory .meta {width:80%;}


}

@media screen and (min-width:481px) and (max-width:715px){
	 .bx-wrapper img{width:100%;}
	 .shortDescription {min-height:20px;}
}

@media screen and (min-width:481px) and (max-width:960px){
	 .shortDescription {min-height:68px;}
	 .blogpostcategory iframe{width: 98%;}
}

@media screen and (max-width:515px){

	.blogpostcategory iframe {width: 92.5% !important;}
	#slider-category, .blogFullWidth #slider-category {width: 92.5% !important;height:auto !important; padding-bottom:0px !important;}
	#slider-category img, .blogFullWidth #slider-category img {width: 100% !important; height:auto !important;	padding-bottom:0px !important;}
	#slider-category .anythingSlider, .blogFullWidth #slider-category .anythingSlider {	padding-bottom:5px !important;}

	/*single*/
	.leftholder,.addthis_button,.commenttitle,#commentform h3{display:none;}
	.singledefult .sentry,.singledefult .meta,#respond {width:100%;}
	.specificComment{margin:60px 0px 0px 0px;}
	.tags {margin-left:0; width:100%;}

}

@media screen and (min-width:580px) and (max-width:960px){

	/*iosslider*/
	.textBottom {width:98% !important;}
	.iosDescription h3{font-size: 12px !important;}
	.iosSlider .titleBottom{font-size: 14px !important;}	
	.iosSlider .slider .item .desc {font-size: 14px !important; line-height: 100%;}
}

@media screen and (max-width:599px){
	.top-nav ul{display:none;}
	
	/*portfolio*/
	#portitems2 h3 {min-height:35px; }
	

	
}

@media screen and (max-width:478px){
	/*home recent port*/
	.recentdescription h3{text-align:center;}
	.recentimage, .recentdescription {width:100% !important; padding-top: 10px;}

	

	/*footer*/
	#footer .widget{width:98%; margin-left:2px;}
	.gototop {margin:-25px 0px 0px 80% !important}


	/*team*/
	.one_third.team {width:100%;}

	/*blog*/
	.blogpostcategory .leftholder{display:none;}
	.blogpostcategory .meta {width:100%; margin:0 auto;}
	.blogpostcategory .blogmore{width: 100%;float: right !important;text-align: right;}
	.blogpostcategory .meta .socialsingle{width:50%;}
	.comment-author, .commentlist .commenttext{width:100% !important; text-align:center !important;padding:0px 10px 0 0px;}
	.commentlist .avatar {width:100%; float:none;background:none;}



	/*single*/
	.singledefult .socialsingle{padding-left:0; float:left;}


	/*shortcode*/
	ul.tabs a{width: 99%; text-align: center; padding:15px 0; }
	ul.tabs li{float:none;}

}

@media screen and (max-width:295px){
	/*team*/
	.team .image img {width:220px;}
}

@media screen and (max-width:330px){
	.cartWrapper{margin-top: -37px;}
	.homeRacent .productR .recentdescription .onsale {margin-left:15% !important;}
	.socialTop{}
}


@media screen and (min-width:560px) and (max-width:970px){
	/*blog*/
	.link-category .blogpostcategory{margin:0 auto 50px auto;}
	.posttext {width:600px; margin:0 auto;}
	.blogpostcategory .comment-inside .addthis_button {margin-left: -10px;}

	/*single*/
	.singledefult .author{margin-left:450px;}
	#commentform {float:none}
	.commentlist,#commentform{width: 100%;text-align: center;margin: 20px auto !important;text-align:center;}
	form#commentform{width:100%;}
	.singledefult .blogpost{width:100% !important; margin:0 auto;}
	#respond{width:85%;}

	/*comment*/

	#commentform{width:100%; margin:0 auto;}

	.homeRacent.post h3{}

	/*homebox*/
	.one_third.first, .one_third.second, .one_third.third {width:29.8% !important; min-height: 150px; }
	.homeBox .one_third h2 {margin-top:0px;}
	.homeBox .one_third .boxImage {width:100%; float:none;}


}

@media screen and (min-width:599px) and (max-width:960px){
	.homeRacent .one_third{width:48.0% !important; }
	.homeRacent .one_third.last{margin-right:1.4% }
}



@media screen and (min-width:700px) and (max-width:970px){
	.recentdescription .description {text-align:left;padding-left:20px !important;}
	#portitems2 .recentdescription {padding-left:0%;}
	.homeRacent.post .recentdescription{width:100%;}
	.blogpostcategory{width:600px; margin:0 auto 10px auto;}
}

@media screen and (min-width:700px) and (max-width:960px){
	/*home recent port*/
	
	.recentdescription .descrpiton {text-align:left !important; padding-right: 5px;}


	.advertise .bx-next{margin-left:940px;}
	.advertise .bx-prev{margin-left:0;}
}



@media screen and (min-width:768px){
	/*shortcode*/
	.one_half { width: 48% }
	.one_third { width: 30% }
	.two_thirds { width: 65.33% }
	.one_fourth { width: 22% ; }
	.three_fourths { width: 74% }
	.one_fifth { width: 16.8% }
	.four_fifths { width: 79.2% }
}


@media
only screen
and (min-device-width : 320px)
and (max-device-width : 480px)
and (orientation : portrait)
and (-webkit-min-device-pixel-ratio : 2) {
/* Styles */
	.cartWrapper {margin-top:-5px;}
	.leftContentSP, .rightContentSP  {width:100% !important;overflow:hidden;}
	.images.imagesSP{display:block;overflow:hidden;}
}

@media
only screen
and (min-device-width : 320px)
and (max-device-width : 480px)
and (orientation : landscape)
and (-webkit-min-device-pixel-ratio : 2) {
/* Styles */
	.cartWrapper {margin-top:-5px;}
	.homeRecent .one_third{width: 100% !important;} 
	.leftContentSP, .rightContentSP  {width:100% !important;overflow:hidden;}
	.images.imagesSP{display:block;overflow:hidden;}
	.item3 {width:100% !important;}
	.item3 .recentimage, .item3 .recentdescription {width:80% !important;margin-left:10%;}
	 /*.leftContentSP .thumbnails img {width:90%;}*/
}

<?php } ?>

/* ***********************
--------------------------------------
------------CUSTOM CSS----------
--------------------------------------
*********************** */

<?php echo stripText($data['custom_style']) ?>