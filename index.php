<?php
$img = array();
$handler = opendir('img/');
while ($file = readdir($handler))
  if ($file != "." && $file != "..")
    $img[] = $file;
closedir($handler);
?>
<!DOCTYPE html>
<html>
<head>
   <title>Our GNU/Lord and GNU/Savior is 100% sexy!</title>
   <meta content="https://rms.sexy/404.jpg" name"twitter:image"></meta>
   <!--
       I'm too lazy to make the html pretty for now... Maybe when I've drank
       enough booze and I have nothing to do... Or if people start nagging  
       about it.
   -->
   <style>
   body {
     margin: 0;
     background-image: url("/noise.png");
   }

   img {
     text-align: center;
     position: absolute;
     margin: auto;
     top: 0;
     right: 0;
     bottom: 0;
     left: 0;
     image-orientation: from-image;
   }
   </style>
</head>
<body>
   <a href="/"><img class="stallman" src="/img/<?=$img[array_rand($img)];?>" height="100%"></a>
</body>
</html>
