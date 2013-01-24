<?for(;++$i<1e3;){$v=array(1);for($q=$i,$z=0;!in_array($z,$v);){$v[]=$q;$z=0;foreach(str_split($q)as$x)$z+=$x*$x;if($z==1)echo"$i
";$q=$z;}}