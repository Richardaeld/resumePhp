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
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" /> -->
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
   <div class="cards">

      <?php for ($i=0; $i<1; $i++) { ?>
         <div class="hover-card">
            <!-- 1st -->
            <div>OPEN ME@</div>

            <!-- 2nd -->
            <div>
               <div><span class="smitten">img</span></div>
               <div>
                  <h2>Fully Responsive</h2>
                  <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Eaque voluptatum quo unde neque distinctio ipsum nobis
                     inventore earum repellendus, saepe aliquid animi vel
                     facere a commodi reprehenderit! Ex, vitae voluptatum!
                  </p>
               </div>
               <p>Get started</p>
            </div>

            <!-- 3rd -->
            <div>
               "test"
               <img src="images/smitten1.jpg" alt="">
            </div>

            <!-- 4th -->
            <div></div>
         </div>
      <?php } ?>

   </div>

</body>

<footer>
   <?=Footer::DisplayLinks()?>
   <?=Footer::DisplayAuthorSignature()?>
</footer>
<script>
   let
      hoverTimeout,
      intruptTimeout;


   function flip (event) {
      clearTimeout(hoverTimeout);
      if (event.target.matches('.hover-card')) {
         hoverTimeout = setTimeout(() => {
            event.target.classList.toggle('open')
            console.log(event)
         }, 250)
      }
   }

   document.querySelectorAll('.hover-card').forEach(card => {
      console.log({card:card})
      card.addEventListener('mouseover', flip)
      card.addEventListener('click', flip)
   })

   console.log('click123')

</script>

</html>