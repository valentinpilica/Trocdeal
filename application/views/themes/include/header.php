<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
<!-- META SECTION -->
<!-- <title>TrocDeal - Business changing between products</title> -->
<title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="icon" href="<?php echo base_url(); ?>assets/themes/<?php echo $defaultThemeName; ?>/favicon.ico" type="image/x-icon" />
<!-- END META SECTION -->

<?php
/**
 * -- Copy from here --
 */
if (! empty($meta)) foreach ($meta as $name => $content)
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

foreach ($css as $file)
{
	echo "\n\t\t";
	?><link rel="stylesheet"
	<?php (strcmp(extratLastPartFromURLPath($file), 'theme-default.css') == 0) ?  print('id="theme"') : ''?>
	href="<?php echo $file; ?>" type="text/css" /><?php
}
echo "\n\t";

/**
 * -- to here --
 */
?>


</head>

<body>