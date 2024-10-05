<?php
$page = $_SERVER['PHP_SELF'];
$sec = "2";

// Define the autoload function
spl_autoload_register(function ($class) {
   $file = "./classes/{$class}.php";
   if (file_exists($file)) require $file;
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="refresh" content="<?=$sec?>;URL='<?=$page?>'">

   <title>Resume</title>
</head>
<header>
   <?=Header::exportText()?>
   <nav>
      <ul>
         <li></li>
      </ul>
   </nav>
</header>
<body>
   <h1>Boiler Plate1223</h1>
</body>
</html>