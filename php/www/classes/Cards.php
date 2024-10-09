<?php

class Cards {

   const STYLES = [
      'greetingCard' => []
   ];

   const GREETING_CARDS  = [
      'Smitten' => [
         'logo'         => '<span class="smitten">S</span>',
         'image'        => 'images/smitten1.jpg',
         'imageAltText' => 'An image of the smitten game being played.',
         'style'        => 'greetingCard',
         'link'         => 'https://www.smittenlove.co.uk/',
         'description'  => '1st place hackathon project at Code Institute\'s, February 2022 Hackathon event.',
         'stackArray'   => ['JavaScript', 'HTML', 'CSS', 'Bootstrap', 'JSON,'],
         'stack'        => 'JavaScript, HTML, CSS, Bootstrap, JSON',
      ],
      'Spinning Wheelchairs' => [
         'logo'         => '<span class="spinning-wheelchairs">SWC</span>',
         'image'        => 'images/spinning-wheel.jpg',
         'imageAltText' => 'An image of a spinning wheelchair.',
         'style'        => 'greetingCard',
         'link'         => 'https://richardaeld.github.io/Hackathaon-trust-in-soda-team-2/',
         'description'  => '3rd place hackathon project at code Institutes\'s "Trust in SODA" 2021 event.',
         'stackArray'   => ['JavaScript', 'HTML', 'CSS', 'Bootstrap',],
         'stack'        => 'JavaScript, HTML, CSS, Bootstrap',
      ],
      'Romancing the Cards' => [
         'logo'         => '<span class="romancing-cards">RC</span>',
         'image'        => 'images/romancing-the-cards.jpg',
         'imageAltText' => '',
         'style'        => 'greetingCard',
         'link'         => 'https://richardaeld.github.io/google_translate_game/',
         'description'  => 'A memory matching game with multiple languages and themes.',
         'stackArray'   => ['JavaScript', 'HTML', 'CSS', 'Bootstrap',],
         'stack'        => 'JavaScript, HTML, CSS, Bootstrap',
      ],
      'DM Tool' => [
         'logo'         => '<span class="dm-tool">DM</span>',
         'image'        => 'images/dm-tool.jpg',
         'imageAltText' => '',
         'style'        => 'greetingCard',
         'link'         => 'https://richardaeld.github.io/digital-map/',
         'description'  => 'This PERN project is JavaScript-powered and exists as two separate deployments. The back-end deployment is a RESTful API, and the front-end deployment is a user-facing React.js app. This application is for any Dungeons and Dragons (D&D) 5e fans and can be utilized as a quick way to look up spells, roll digital dice, or view other frequently used table content. As a bonus, the RESTful API allows admins to easily create new tables and expand upon existing content.',
         'descriptionLong' => 'This PERN project is JavaScript-powered and exists as two separate deployments. The back-end deployment is a RESTful API, and the front-end deployment is a user-facing React.js app. This application is for any Dungeons and Dragons (D&D) 5e fans and can be utilized as a quick way to look up spells, roll digital dice, or view other frequently used table content. As a bonus, the RESTful API allows admins to easily create new tables and expand upon existing content.',
         'stackArray'   => ['JavaScript', 'HTML', 'CSS', 'Bootstrap', 'Google Maps API'],
         'stack'        => 'JavaScript, HTML, CSS, Bootstrap, Google Maps API'
      ],
      'Fat Raccoon' => [
         'logo'         => '<span class="fat-raccoon">FR</span>',
         'image'        => 'images/fat-raccoon.jpg',
         'imageAltText' => '',
         'style'        => 'greetingCard',
         'link'         => 'https://richardaeld.github.io/fat-raccoon/',
         'description'  => '',
         'stackArray'   => ['JavaScript', 'HTML', 'CSS', 'Bootstrap',],
         'stack'        => 'JavaScript, HTML, CSS, Bootstrap',
      ],
      'Eldridge M.B. Emporium' => [
         'logo'         => '<span class="eldridge-mb-emporium">EME</span>',
         'image'        => 'images/eldridge-music.jpg',
         'imageAltText' => 'An image of a Eldridge M.B. Emporium.',
         'style'        => 'greetingCard',
         'link'         => 'https://eldridgembemporium.com/',
         'description'  => '',
         'stackArray'   => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
         'stack'        => 'HTML, CSS, JavaScript, PHP, MySQL',
      ],
      'Multittude of Java Projects' => [
         'logo'         => '<span class="multittude-java-projects">MJP</span>',
         'image'        => 'images/multittude-java-projects.jpg',
         'imageAltText' => '',
         'style'        => 'greetingCard',
         'link'         => 'https://github.com/Richardaeld/Multittude-Java-Projects',
         'description'  => '',
         'stackArray'   => ['Java'],
         'stack'        => 'Java'
      ]
   ];


   static function greetingCards (array $cards) :void {
      foreach ($cards as $name => $values) { ?>
<div class="greeting-card-container">
   <div class="greeting-card">
      <!-- 1st -->
      <div>
         <div><div><?=$values['logo']?></div></div>
         <div><p>

            <?=$name?>
         </p>
      </div>
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
         </div>
         <!-- <p>Get started</p> -->
      </div>
   </div>

   <div>
      <span>Repo</span>
      <span>App</span>
   </div>

</div><?php
      }
   }

}