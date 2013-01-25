<?$f='str_repeat';$r=$f('-',33);echo"$r
|";foreach(str_split(FEN)as$x)echo$x=='/'?"
$r
|":((int)$x?$f('   |',(int)$x):" $x |");
echo"
$r";