<?$z=MAP;$a=array(strpos($z,'.'));for($w=strspn($z,'#')+1;++$i;)foreach($a as$r)foreach(array($r+1,$r-1,$r+$w,$r-$w)as$t){if($z[$t]==X){echo$i;die;}if($z[$t]==' '){$a[]=$t;$z[$t]=o;}}