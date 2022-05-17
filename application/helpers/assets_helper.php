<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    if(!function_exists('img_loader'))
	{
		function img_loader($name, $format)
		{
			return base_url()."/assets/img/".$name.".".$format;
		}
	}

	 if(!function_exists('image_loader'))
	{
		function image_loader($name)
		{
			return base_url()."/assets/img/".$name;
		}
	}

	if(!function_exists('css_loader'))
	{
		function css_loader($name)
		{
			return base_url()."/assets/css/".$name.".css";
		}
	}

	if(!function_exists('scss_loader'))
	{
		function scss_loader($name)
		{
			return base_url()."/assets/scss/".$name.".scss";
		}
	}

	if(!function_exists('js_loader'))
	{
		function js_loader($name)
		{
			return base_url()."/assets/js/".$name.".js";
		}
	}

	if(!function_exists('map_loader'))
    {
        function map_loader($name)
        {
            return base_url()."/assets/map/".$name.".map";
        }
    }

?>