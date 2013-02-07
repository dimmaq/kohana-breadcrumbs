<?php
	if (count($breadcrumbs) > 1)
	{
		$f = TRUE;
		foreach ($breadcrumbs as $item)
		{
			if ($f)
				$f = FALSE;
			else
				echo '&nbsp;/&nbsp;';
			$l = $item['link'];
			$t = $item['text'];
			if (43 < UTF8::strlen($t))
			{
				$t = UTF8::substr($t, 0, 40) . '...';
			}
			if ($l)
				echo '<a href="'.$l.'">'.HTML::entities($t).'</a>';
			else
				echo HTML::entities($t);
		}
	}
?>
<!--
<pre>
<?php
	print_r($breadcrumbs);
?>
</pre>
-->