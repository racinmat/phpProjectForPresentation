<?php
    include_once 'header.php';
    $array = array("první", "druhý", "třetí", "čtvrtý");
    $size = 123456789;
    $time = new \DateTime();
    $keys = array_keys($array);
    $last_key = end($keys);
    foreach ($array as $key => $value){
        echo("<div>".ucfirst($value)."</div>");
        if ($key != $last_key)
            {echo("<hr>");
        }
    }
    echo ("Velikost vašich souborů je: ".humanFileSize($size)."<br/>");
    echo("Nyní je: ".$time->format('j. n. Y'));
    include_once 'footer.php';
    
function humanFileSize($size,$unit="") {
  if( (!$unit && $size >= 1<<30) || $unit == "GB")
    return number_format($size/(1<<30),2)."GB";
  if( (!$unit && $size >= 1<<20) || $unit == "MB")
    return number_format($size/(1<<20),2)."MB";
  if( (!$unit && $size >= 1<<10) || $unit == "KB")
    return number_format($size/(1<<10),2)."KB";
  return number_format($size)." bytes";
}
?>
