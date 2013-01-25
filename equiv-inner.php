<?for($q=split('a',strtr(LISTS,"(),
",'a  aa'));$a=$q[1+$j];){$j+=2;$b=$q[1+$j];$j+=2;$l=strlen($a);for($f=$i=-1;++$i<$l;$b=substr($b,1).$b[0])$f*=($a!=$b)*($a!=strrev($b));echo$f?0:1,"
";}