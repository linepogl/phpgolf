<?php
$a=split(',',strtr(JSON,'{}":','   ='));usort($a,trim);foreach($a as$x)die trim($x).'
';
//$F=strtok;for($F(JSON,'"');$x=$F('"} ');sort($a))$a[]="$x = ".$F(',:} ');echo join($a);