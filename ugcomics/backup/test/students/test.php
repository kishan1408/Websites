<?php

$ip=$_SERVER['REMOTE_ADDR'];
echo "IP address= $ip";


$i=0;

if ($handle = opendir("./abhi")) {

    
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".." && is_dir($file) == false)
# && strtolower(substr($file, strrpos($file, '.') + 1)) == '')
        {$i+=1;
            #$thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
	    $thelist[$i]="$file" ;
        }
    }
    closedir($handle);
}

$val=rand(1,count($thelist));
echo "$val";echo "</br>";
echo "$thelist[$val]"."asd";





#echo rand(5, 15);


?>
