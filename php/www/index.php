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
   <!-- <meta http-equiv="refresh" content="<?=$sec?>;URL='<?=$page?>'"> -->
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

   <!-- <script src="https://kit.fontawesome.com/377083d8a9.js" crossorigin="anonymous"></script> -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" /> -->
   <title>Resume</title>
</head>

<?=Header::displayHeader()?>

<body class="dark-mode">
   <!-- modal -->
   <div id="modalContainer" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="modalImage">
      <div id="caption"></div>
    </div>

   <div class="cards-container">
      <div class="cards">
         <?=Cards::greetingCards(Cards::GREETING_CARDS)?>
      </div>

      <div class="cards">
         <?=Cards::detailsCard(Cards::GREETING_CARDS)?>
      </div>
   </div>

</body>

<?=Footer::displayFooter()?>

<script>



</script>

</html>