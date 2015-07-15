<?php 
	function limit_words($string, $word_limit, $sus = TRUE, $link = '') {
	    $words = explode(' ',$string);
	    return implode(' ',array_splice($words,0,$word_limit)).($sus ? '... <a href="'.$link.'">Leia mais</a>': '');
	}
?>