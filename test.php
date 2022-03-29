<?php
$sendto = 'tpashen22@gmail.com';
$subject = 'Email from web-site';
$name = $_POST['name'];
$like = $_POST['like'];
$education = $_POST['education'];
$content = "Name: " . $name . "\n";
$content .= "Like: " . $like . "\n\n";
$content .= $education;
mail($sendto,$subject,$content);
?>
