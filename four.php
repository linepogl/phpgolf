<?php

foreach(explode("+
+",BOARDS)as$s){
	$z=str_replace(array(~Ô,~Ò,~ƒ,~ßßß,~ß,~õõ,~õ),array('','','',O,'',X),$s);

	$a=$b=$c=$d='';
	for($i=$w=strpos($z,X)+1;$i--;)
		for($j=strlen($z.X)/$w;$j--;)
			for($k=4;$k--;){
				$a.=$z[-$k+$o=$i+$w*$j]?:X;
				$b.=$z[$o-$k-$k*$w]?:X;
				$c.=$z[$o-$k+$k*$w]?:X;
				$d.=$z[$o-$k*$w]?:X;
			}


	echo in_array(RRRR,$a=str_split("$a$b$c$d",4))?R:(in_array(WWWW,$a)?W:None),~õ;
}

