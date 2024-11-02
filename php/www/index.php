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
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <link rel="icon" href="images/cv-favicon.jpg" type="image/x-icon">
   <?=GreetingCard::STYLE?>
   <?=DetailsCard::STYLE?>
   <title>Resume</title>
</head>

<div ></div>
<?=Header::displayHeader()?>

<body class="dark-mode">
   <!-- modal -->
   <div id="modalContainer" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="modalImage">
      <div id="caption"></div>
    </div>

    <!-- All Cards -->
   <div class="cards-container">
      <div class="cards"><?=GreetingCard::greetingCards(Cards::CARDS)?></div>
      <div class="cards"><?=detailsCard::detailsCard(Cards::CARDS)?></div>
   </div>

</body>

<?=Footer::displayFooter()?>


<?=Header::SCRIPTS['switcher']?>
<?=Header::SCRIPTS['scrollToTop']?>
<?=Header::SCRIPTS['burgerMenu']?>
<?=Cards::SCRIPT?>
<?=GreetingCard::SCRIPT?>
<script> const cards = <?=json_encode(Cards::CARDS);?>; </script>
<?=DetailsCard::SCRIPT?>

</html>