<?php
$imgSrc = "sample.png";
$imgBinary = fread(fopen($imgSrc, "r"), filesize($imgSrc));
$imgStr = base64_encode($imgBinary);

echo '<img src="data:image/jpg;base64, '.$imgStr.'" />';
?>