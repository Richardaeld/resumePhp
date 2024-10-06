<?php 

class Cards {

   const STYLES = [
      'greetingCard' => []
   ];

   const GREETING_CARDS  = [
      'Smitten' => [
         'logo' => '<span class="smitten">S</span>',
         'image' => 'images/smitten1.jpg',
         'imageAltText' => 'An Iamge of the smitten game being played.',
         'style' => 'greetingCard',
         'link' => 'https://www.smittenlove.co.uk/',
         'description' => 'This JSON and JavaScript-powered hackathon project achieved 1st place in Code Institute\'s, "Love is in the Air" February 2022 Hackathon event. This application is a Valentine\'s Day themed Wordle, that the team named Smitten.',
         'stackArray' => ['JavaScript', 'HTML', 'CSS', 'Bootstrap', 'JSON,'],
         'stack' => 'JavaScript, HTML, CSS, Bootstrap, JSON',
      ]
   ];


   static function greetingCards (array $cards) :void {
      foreach ($cards as $name => $values) { ?>
<div class="hover-card">
   <!-- 1st -->
   <div>
      <div><div><?=$values['logo']?></div></div>
      <div>View <?=$name?></div>
   </div>

   <!-- 2nd -->
   <div><img src="<?=$values['image']?>" alt="<?=$values['imageAltText']?>"></div>

   <!-- 3rd -->
   <div>
      <div>
         <!-- <h2>Fully Responsive</h2> -->
         <p>
            <?=$values['description']?><br>
            <b>Stack Used:</b> <br><?=$values['stack']?>
         </p>
         <div>
            <button>Repo</button>
            <button>App</button>
         </div>
      </div>
      <!-- <p>Get started</p> -->
   </div>

</div><?php
      }
   }

}