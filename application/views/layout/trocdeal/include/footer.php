<?php
foreach ($audio as $file)
{
	switch (extratLastPartFromURLPath($file))
	{
		case 'alert.mp3' :
			?>
<audio <?php print('id="audio-alert"') ?> preload="auto"
	id="audio-alert" src="<?php echo $file; ?>"></audio>
<?php
			break;
		case 'fail.mp3' :
			?>
<audio <?php print('id="audio-fail"') ?> preload="auto"
	src="<?php echo $file; ?>"></audio>
<?php
			break;
	}
}

foreach ($js as $file)
{
	echo "\n\t\t";
	?><script src="<?php echo $file; ?>"></script><?php
}
echo "\n\t";
?>
</body>
</html>
