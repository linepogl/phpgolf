<?for($j=199,$w=" on the wall";$j>1;){$i=--$j<2?99:intval($j/2);$s=$i<2?'':'s';$a="$i bottle$s of beer";echo$j%2?($j>1?"Take one down and pass it around":"Go to the store and buy some more").", $a$w.\n\n":"$a$w, $a.\n";}

