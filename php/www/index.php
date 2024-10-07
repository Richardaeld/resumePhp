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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   <title>Resume</title>
</head>

<?=Header::displayHeader()?>

<body>
   <div class="cards">
      <?=Cards::greetingCards(Cards::GREETING_CARDS)?>
   </div>
</body>

<?=Footer::displayFooter()?>

<script>
   let
      hoverTimeout,
      intruptTimeout;


   function flip (event) {
      clearTimeout(hoverTimeout);
      if (event.target.matches('.greeting-card')) {
         hoverTimeout = setTimeout(() => {
            event.target.classList.toggle('open')
            console.log(event)
         }, 250)
      }
   }

   document.querySelectorAll('.greeting-card').forEach(card => {
      console.log({card:card})
      card.addEventListener('mouseover', flip)
      card.addEventListener('click', flip)
   })


</script>

</html>