<?php

$ip=$_SERVER['REMOTE_ADDR'];
echo "IP address= $ip";




if ($handle = opendir("./students")) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".." && is_dir($file) == true)
# && strtolower(substr($file, strrpos($file, '.') + 1)) == '')
        {
            $thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
        }
    }
    closedir($handle);
}

echo "$thelist";







echo rand(5, 15);


?>
