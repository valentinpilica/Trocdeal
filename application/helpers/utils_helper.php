<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('active_link'))
{
	function activateMenu($controller)
	{
		$CI = get_instance();
		$class = $CI->router->fetch_class();
		
		return ($class == $controller) ? 'active' : '';
	}
}

if (! function_exists('extratLastPartFromURLPath'))
{
	function extratLastPartFromURLPath($urlPath)
	{
		$pieces = explode("/", $urlPath);
		
		return $pieces[count($pieces) - 1];
	}
}

if (! function_exists('includeJS'))
{
	function includeJS($arr, $key = null, $defaultTheme = 'trocdeal', $fileTypePath = 'js')
	{
		if (is_array($arr))
		{
			foreach ($arr as $k => $v)
			{
				if (is_array($v))
				{
					includeJS($v, $k, $defaultTheme, $fileTypePath);
				}
				else
				{
					if (empty($key))
					{
						
						if (is_numeric($k))
						{
							?>
<script type="text/javascript"
	src="<?php echo base_url(); ?>assets/themes/<?php echo $defaultTheme; ?>/<?php echo $fileTypePath; ?>/<?php echo $v; ?>"></script>
<?php
						}
						else
						{
							?>
<script type="text/javascript"
	src="<?php echo base_url(); ?>assets/themes/<?php echo $defaultTheme; ?>/<?php echo $fileTypePath; ?>/<?php echo $k; ?>/<?php echo $v; ?>"></script>
<?php
						}
					}
					else
					{
						?>
<script type="text/javascript"
	src="<?php echo base_url(); ?>assets/themes/<?php echo $defaultTheme; ?>/<?php echo $fileTypePath; ?>/<?php echo $key ?>/<?php echo $v; ?>"></script>
<?php
					}
				}
			}
		}
	}
}

if (! function_exists('includeCSS'))
{
	function includeCSS($arr, $key = null, $defaultTheme = 'trocdeal', $fileTypePath = 'css')
	{
		if (is_array($arr))
		{
			foreach ($arr as $k => $v)
			{
				if (is_array($v))
				{
					includeJS($v, $k, $defaultTheme, $fileTypePath);
				}
				else
				{
					if (empty($key))
					{
						
						if (is_numeric($k))
						{
							?>
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>assets/themes/<?php echo $defaultTheme; ?>/<?php echo $fileTypePath; ?>/<?php echo $v; ?>" />
<?php
						}
						else
						{
							?>
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>assets/themes/<?php echo $defaultTheme; ?>/<?php echo $fileTypePath; ?>/<?php echo $k; ?>/<?php echo $v; ?>" />
<?php
						}
					}
					else
					{
						?>
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>assets/themes/<?php echo $defaultTheme; ?>/<?php echo $fileTypePath; ?>/<?php echo $key ?>/<?php echo $v; ?>" />
<?php
					}
				}
			}
		}
	}
}
?>