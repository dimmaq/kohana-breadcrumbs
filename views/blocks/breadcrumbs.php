<?php
	foreach ($breadcrumbs as $item)
		echo HTML::anchor($item['link'], $item['text']), '<span>/</span>';
