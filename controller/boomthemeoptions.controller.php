<?php 
class BoomThemeOptionsController{
	function __construct(){

	}

}
function boom_theme_print_social(){
	$return = '';
	if( have_rows('boom_theme_social','option') ):
	  $return .='<ul class="nav">';

 		// loop through the rows of data
    while ( have_rows('boom_theme_social','option') ) : the_row();
      
			$return .='<li class="nav-item">';	
			$return .='<a class="nav-link active" href="'.get_sub_field('url').'"><i class="fa fa-'.get_sub_field('social_name').'"></i></a>';	
			$return .='</li>';	
      
    endwhile;
		$return .= '</ul>';	
	endif;

	echo $return;
}
