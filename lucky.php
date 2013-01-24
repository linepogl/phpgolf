<?$a=range(1,1e4);for($q=2;++$k<170;$q=$a[$k])for($i=count($a);$i>0;$i--)if($i%$q==0)array_splice($a,$i-1,1);echo implode("
",$a);