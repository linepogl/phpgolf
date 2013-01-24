<?$x=new XMLReader;for($x->XML(XML);$x->read();)if($x->nodeType==1)echo str_repeat(' ',4*$x->depth).$x->localName."
";