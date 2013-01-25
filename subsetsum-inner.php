<?foreach(split("
",LISTS)as$l){$a=split(',',$l);$f=1;for($i=0;++$i<1<<$c=count($a);$f*=$s)for($s=$j=0;$j<$c;$j++)$s+=$i&1<<$j?$a[$j]:0;echo$f?'no
':'yes
';}