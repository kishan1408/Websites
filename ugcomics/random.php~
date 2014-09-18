<?php
$i=0;
if ($handle = opendir("./main")) {
 
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'php')
        {$i+=1;      
	 $thelist[$i]="$file" ;
        }
    }
    closedir($handle);
}
$val=rand(1,count($thelist));

header( "Location: http://127.0.0.1/main/"."$thelist[$val]" ) ;
?>
