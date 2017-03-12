<?php

function processPost($str, $attributes = array()) {
	$attrs = '';
	foreach ($attributes as $attribute=>$value) {
		$attrs .= " {$attribute}=\"{$value}\"";
	}
	
	$str = str_replace("[img]","<img style='max-width:100%;' class='post_image' src='/images/blank.png' data-url='",$str);
	$str = str_replace("[/img]","'>",$str);
	
	$str = ' '.$str;
	$str = preg_replace('`([^"=\'>])((http|https|ftp|ftps)://[^\s< ]+[^\s<\.)])`i', '$1<a href="$2" rel="external nofollow" '.$attrs.'>$2</a>', $str);
	$str = substr($str, 1);

	$str = str_replace('  ','&nbsp;'.' ',$str);
	$str = nl2br($str);
	
	return $str;
}