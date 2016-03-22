<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
<!-- META SECTION -->
<title>TrocDeal - Business changing between products</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<!-- END META SECTION -->

<?php
if (! empty($meta))
	foreach ($meta as $name => $content)
	{
		echo "\n\t\t";
		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
	}
echo "\n";

if (! empty($canonical))
{
	echo "\n\t\t";
	?><link rel="canonical" href="<?php echo $canonical?>" /><?php
}
echo "\n\t";

if (isset($css))
{
	includeCSS($css, null, $this->config->item('default_theme_name'), 'css');
}
?>
</head>

<body>