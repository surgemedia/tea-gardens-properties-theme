
<section id="whoweare" class="page-heading " style="background-image:url(<?php echo $vars["background"]; ?>)">

	<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
											'vars' => [
														"class" => 'card container '.$vars['class'],
														"subtitle" => $vars["subtitle"],
														"title" => $vars["title"],
														"image" => $vars["image"],
														"content" => apply_filters('the_content',  $vars["content"]),
														"button" => $vars['button']
														]
											 ]);
	 ?>
<?php //debug($vars); ?>
</section>