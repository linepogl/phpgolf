<?for($c=NUMB;$c-6174;){$a=str_split(str_pad($c,4,0));asort($a);$b=strrev($a=implode($a));$c=$b-$a;echo"$b - $a = $c
";}