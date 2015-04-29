<?php 
$out = '';
//print_r($block);
//if($block->module=='widget') //remove title
	//$block->subject='';
	
if($block->region == 'content'){
	$out .= '<div class="mbf clearfix '.$classes.'">';
		$out .= render($title_suffix);
		if ($block->subject){
			$out .= '<div class="title colordefault">';
				$out .= '<h4 '.$title_attributes.'>'.$block->subject.'</h4>';
			$out .= '</div>';
		}
		$out .= $content;
	$out .= '</div>';	
}elseif($block->region == 'left_bar' || $block->region == 'right_bar' || $block->region == 'top_news'){
	$out .= $content;
}else{
	$out .= '<div class="'.$classes.'">';
		$out .= render($title_prefix);
		$out .= $content;
	$out .= '</div>';
}
print $out;
?>