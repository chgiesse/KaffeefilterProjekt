<?php
function subview($file){
	$file = str_replace('\\', '/', __DIR__).'/../views/sub-views/'.$file;
	include $file;
}
?>