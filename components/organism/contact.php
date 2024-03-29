<?php if(!isset($vars['background_image'])){ 
		 $vars['background_image'] = $vars['image'];
	}
	// debug($vars);
	?>

	<div class="col-md-6 col-md-offset-3 text-center">
		<div class="box">
		<?php 
		get_component([ 'template' => 'molecule/card',
							'remove_tags' =>  $vars['remove_elements'],
											'vars' => [
														"class" => 'title',
														"title" => $vars["title"],
														"subtitle" => $vars["subtitle"],
														"content" => apply_filters('the_content',  $vars["content"]),
															"button" => ''
														]
											 ]);
		get_component([ 'template' => 'molecule/form',
							'remove_tags' =>  ['h2','p'],
											'vars' => [
														"class" => 'form text-center',
														"form" => $vars["form"],
														]
											 ]);
		 ?>
		</div>
	</div>
