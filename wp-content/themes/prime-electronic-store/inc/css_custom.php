<?php

$prime_electronic_store_custom_css = "";

/*-------------------- Container Width-------------------*/

$prime_electronic_store_theme_width = get_theme_mod( 'prime_electronic_store_theme_width','full-width');

if($prime_electronic_store_theme_width == 'full-width'){
$prime_electronic_store_custom_css .='body{';
	$prime_electronic_store_custom_css .='max-width: 100% !important;';
$prime_electronic_store_custom_css .='}';
$prime_electronic_store_custom_css .='.sticky-head{';
	$prime_electronic_store_custom_css .='left: 0;';
$prime_electronic_store_custom_css .='}';
}else if($prime_electronic_store_theme_width == 'container'){
$prime_electronic_store_custom_css .='body{';
	$prime_electronic_store_custom_css .='width: 80% !important; padding-right: 15px; padding-left: 15px;  margin-right: auto !important; margin-left: auto !important;';
$prime_electronic_store_custom_css .='}';
$prime_electronic_store_custom_css .='.sticky-head{';
	$prime_electronic_store_custom_css .='left: 0;';
$prime_electronic_store_custom_css .='}';
}else if($prime_electronic_store_theme_width == 'container-fluid'){
$prime_electronic_store_custom_css .='body{';
	$prime_electronic_store_custom_css .='width: 95% !important;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$prime_electronic_store_custom_css .='}';
$prime_electronic_store_custom_css .='.sticky-head{';
	$prime_electronic_store_custom_css .='left: 0;';
$prime_electronic_store_custom_css .='}';
}