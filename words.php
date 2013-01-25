<?for(;++$i<1e4;ksort($a))$a[str_shuffle(WORD)]=1;echo join("
",array_keys($a));