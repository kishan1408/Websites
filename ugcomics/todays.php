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
$val=count($thelist);

header( "Location: http://www.ugcomics.com/main/"."$thelist[$val]" ) ;
?>
/* This php will search for files with .php extension in the directory "main" and the select the latest comic.
   history : 13/09/2014 ~kishan1408[@]gmail.com
*/

