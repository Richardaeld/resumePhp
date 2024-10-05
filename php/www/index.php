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
    <link rel="stylesheet" href="css/default.css">
   <title>Resume</title>
</head>
<header>
   <div>
      Richard Eldridge
      <span>
         Software Developer
      </span>
   </div>
   <?=Header::displayNavLinks()?>
   <div>
      switcher
   </div>
</header>
<body>
   <h1>test</h1>
</body>
</html>