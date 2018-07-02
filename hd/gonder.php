<?php
  
error_reporting(0);
ini_set('display_errors', 0);
?>
<font face="verdana" size="2" color="maroon">
<link rel="stylesheet" href="style.css">
<div class="logo"></div>

<table align="center">
  <tr>
    <td>
</div>  

<div class="ara"></div>
<div class="sablon">

<?php

  $aDoor = $_POST['formDoor'];
  if(empty($aDoor))
  {
    echo("Dizinde video yok veya varsa da hiçbiri seçilmedi.");
  }
  else
  {

$ffmpegfile = 'E:\\Logo\\ffmpeg';
$bitendir = 'E:\\Logo\\logolu';
$videodir = 'E:\Logo\logosuz\*.{mxf,mp4,mov,mpg,MXF}';
//$videodir = 'L:\*.{mxf,mp4,mov,mpg,MXF}';
$batfile = 'E:\\Logo\\logobindirHD.bat';
$logofile = 'E:\\Logo\\belgesel_hd.png';

$myfile = fopen("$batfile", "w") or die("Unable to open file!");

    $N = count($aDoor);
    
    for($i=0; $i < $N; $i++)

    {

    $value= $aDoor[$i];
    
  $txt = "$ffmpegfile -i \"E:\\Logo\\logosuz\\$value\" -i $logofile -filter_complex \"[0:v][1:v] overlay=60:50\"  \"$bitendir\\$value"."_logolu.mp4\" \n";
//$txt = "$ffmpegfile -i \"L:\\$value\" -i $logofile -filter_complex \"[0:v][1:v] overlay=60:50\"  \"$bitendir\\$value"."_logolu.mp4\" \n";

    fwrite($myfile, $txt);
  //echo  "$value<br>";

      echo($aDoor[$i] . " ");
      echo "<br>";

    }

  }
fclose($myfile);
?>
    
    </td>
  </tr>
<tr><td>Yukarıdaki dosyalar için Logo bindirme dosyası oluşturuldu...</td></tr>

</table>

</div>
</td>
</font>