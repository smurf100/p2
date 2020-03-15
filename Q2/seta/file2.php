<?php


      $dir=$_GET["dir"];
   $extn=$_GET["ext"];

   echo $dir;
   echo $extn;
 $hndl=opendir($dir);
echo "hello";

while(($file=readdir($hndl))!=false)
{
     
   
    echo"$file";
 }

closedir($hndl);

?>