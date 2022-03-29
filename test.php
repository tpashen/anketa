<?php
$sendto = 'tpashen22@gmail.com';
$subject = 'Email from web-site';
$name = $_GET['name'];
$like = $_GET['like'];
$education = $_GET['education'];
$content = "Name: " . $name . "\n";
$content .= "Like: " . $like . "\n\n";
$content .= $education;
mail($sendto,$subject,$content);
?>
