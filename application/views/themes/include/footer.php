<?php
foreach ($js as $file)
{
	echo "\n\t\t";
	?><script src="<?php echo $file; ?>"></script><?php
}
echo "\n\t";
?>
</body>
</html>
