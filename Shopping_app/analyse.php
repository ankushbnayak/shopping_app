<?php

//connection
$dbhandle = mysqli_connect("localhost", "root", "","Shopping") or die("Not connection");

//execute SQL query
$result = mysqli_query($dbhandle,"SELECT * FROM analysis");

$num_poller = mysqli_num_rows($result);

$total_votes = 0;

//fetch the data from the database
while($row = mysqli_fetch_array($result))

 {

 //calculates number of votes
  $total_votes += $row['qty'];

}

//null pointer $result
mysqli_data_seek($result,0);

//close the connection
//mysqli_close($dbhandle);

//Tell gd2, where your fonts reside

putenv('GDFONTPATH=C:\Windows\Fonts');
$font = getenv('GDFONTPATH') . '\arial.ttf';

//Set starting point for drawing
$y = 50;

//Specify constant values
//Image width in pixels
$width = 700;

//Bars height
$bar_height = 20; 

//Calculates image height
$height = $num_poller * $bar_height * 1.5 + 70;

//Distance on the bar chart standing for 1 unit
$bar_unit = ($width - 400) / 100; 

//Create the image resource
$image = imagecreate($width, $height);

//making four colors, white, black, blue and red
$white = imagecolorallocate($image, 255, 255, 255);

$black = imageColorAllocate($image, 0, 0, 0);

$red   = imageColorAllocate($image, 255, 0, 0);

$blue  = imagecolorallocate($image,0,0,255);

//Create image background
imageFill($image,$width,$height,$white);

//Draw background shape
imageRectangle($image, 0, 0, $width-1, $height-1, $black);

//Output header
imagettftext($image, 16, 0, $width/3 + 50, $y - 20, $black, $font, 'Poll Results');

while($row = mysqli_fetch_object($result))

 {

  if ($total_votes > 0)
 
   $percent = intval(round(($row->qty/$total_votes)*100));

  else

    $percent = 0;

//Output header for a particular value

    imagettftext($image,12,0,10, $y+($bar_height/2), $black, $font, $row->product);

//Output percentage for a particular value
imagettftext($image, 12, 0, 170, $y + ($bar_height/2),$red,$font,$percent.'%');

$bar_length = $percent * $bar_unit;

//Draw a shape that corresponds to 100%
imagerectangle($image, $bar_length+221, $y-2, (220+(100*$bar_unit)), $y+$bar_height, $black);

//Output a bar for a particular value
    imagefilledrectangle($image,220,$y-2,220+$bar_length, $y+$bar_height, $blue);

//Output the number of votes
imagettftext($image, 12, 0, 250+100*$bar_unit, $y+($bar_height/2), $black, $font, $row->qty);

//Going down to the next bar
$y = $y + ($bar_height * 1.5);

}

//Tell the browser about types of file
header("Content-Type: image/jpeg");

//Displya in jpeg format newly created image
imagejpeg($image);

//Free up resources
imagedestroy($image)
?>