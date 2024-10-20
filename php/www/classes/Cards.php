<?php

class Cards {

   const STYLES = [
      'greetingCard' => []
   ];

   const GREETING_CARDS  = [
      'Smitten' => [
         'logo'            => '<span class="smitten">S</span>',
         'image'           => 'images/smitten1.jpg',
         'imageAltText'    => 'An image of the smitten game being played.',
         'style'           => 'greetingCard',
         'link'            => 'https://www.smittenlove.co.uk/',
         'description'     => '1st place hackathon project at Code Institute\'s, February 2022 Hackathon event.',
         'descriptionLong' => 'This JSON and JavaScript-powered hackathon project achieved 1st place in Code Institute\'s, "Love is in the Air" February 2022 Hackathon event. This application is a Valentine\'s Day themed Wordle, that the team named Smitten.',
         'stackArray'      => ['JavaScript', 'HTML', 'CSS', 'Bootstrap', 'JSON,'],
         'stack'           => 'JavaScript, HTML, CSS, Bootstrap, JSON',
         'repo'            => ['https://github.com/alissatroiano/8-your-heart-out'],
         'app'             => 'https://alissatroiano.github.io/8-your-heart-out/',
      ],
      'Spinning Wheelchairs' => [
         'logo'            => '<span class="spinning-wheelchairs">SWC</span>',
         'image'           => 'images/spinning-wheel.jpg',
         'imageAltText'    => 'An image of a spinning wheelchair.',
         'style'           => 'greetingCard',
         'link'            => 'https://richardaeld.github.io/Hackathaon-trust-in-soda-team-2/',
         'description'     => '3rd place hackathon project at code Institutes\'s "Trust in SODA" 2021 event.',
         'descriptionLong' => 'This JavaScript-powered hackathon project achieved 3rd place in the "Trust in SODA" 2021 event in conjunction with Code Institute. This rudimentary project was designed to help determine if a hallway or doorway has adequate space to accommodate a wheelchair\'s wide turn radius.',
         'stackArray'      => ['JavaScript', 'HTML', 'CSS', 'Bootstrap', 'Github'],
         'stack'           => 'JavaScript, HTML, CSS, Bootstrap',
         'repo'            => ['https://github.com/Richardaeld/Hackathaon-trust-in-soda-team-2'],
         'app'             => 'https://richardaeld.github.io/Hackathaon-trust-in-soda-team-2/',
      ],
      'Romancing the Cards' => [
         'logo'            => '<span class="romancing-cards">RC</span>',
         'image'           => 'images/romancing-the-cards.jpg',
         'imageAltText'    => '',
         'style'           => 'greetingCard',
         'link'            => 'https://richardaeld.github.io/google_translate_game/',
         'description'     => 'A memory matching game with multiple languages and themes.',
         'descriptionLong' => 'The purpose of this, JavaScript-powered, game is to illustrate how a simple matching game can entertain and help with learning words in a different language. This game boasts 17 different words in 6 languages, 3 different game settings, and 1 cosmetic setting to help encourage returning users. Words for each game are selected at random so each playthrough has non-linear gameplay.',
         'stackArray'      => ['JavaScript', 'HTML', 'CSS', 'Bootstrap', 'Github'],
         'stack'           => 'JavaScript, HTML, CSS, Bootstrap',
         'repo'            => ['https://github.com/Richardaeld/google_translate_game'],
         'app'             => 'https://richardaeld.github.io/google_translate_game/',
      ],
      'DM Tool' => [
         'logo'            => '<span class="dm-tool">DM</span>',
         'image'           => 'images/dm-tool.jpg',
         'imageAltText'    => '',
         'style'           => 'greetingCard',
         'link'            => 'https://richardaeld.github.io/digital-map/',
         'description'     => 'A project for quick references for D&D 5e',
         'descriptionLong' => 'This PERN project is JavaScript-powered and exists as two separate deployments. The back-end deployment is a RESTful API, and the front-end deployment is a user-facing React.js app. This application is for any Dungeons and Dragons (D&D) 5e fans and can be utilized as a quick way to look up spells, roll digital dice, or view other frequently used table content. As a bonus, the RESTful API allows admins to easily create new tables and expand upon existing content.',
         'stackArray'      => ['Docker', 'PostgreSQL', 'Knex.js', 'React', 'Express', 'Node', 'JavaScript', 'Bootstrap', 'HTML', 'CSS'],
         'stack'           => 'Docker, PostgerSQL, Knex.js, React, Express, Node, JavaScript, Bootstrap, HTML, CSS',
         'repo'            => ['https://github.com/Richardaeld/dm_tool_api', 'https://github.com/Richardaeld/DND_Into_The_Abyss'],
         'app'             => '',
      ],
      'Fat Raccoon' => [
         'logo'            => '<span class="fat-raccoon">FR</span>',
         'image'           => 'images/fat-raccoon.jpg',
         'imageAltText'    => '',
         'style'           => 'greetingCard',
         'link'            => 'https://richardaeld.github.io/fat-raccoon/',
         'description'     => 'A recipe app that allows users to create, edit, and share recipes.',
         'descriptionLong' => ' The Fat Raccoon was designed to facilitate a home cooking community for the accumulation and sharing of family recipes. This application allows its users to create an account, which will track your previously viewed recipes, favorites, and uploaded recipes. It also allows for multiple ways to search for recipes and when you\'ve selected a recipe you want to cook it provides a cross-out function for the steps and ingredients you\'ve completed and used. This application leverages the flexibility of MongoDB\'s NoSQL database and Flask\'s minimal framework to allow for a truly custom and unique application. ',
         'stackArray'      => ['Docker', 'Python', 'Flask', 'MongoDB', 'JavaScript', 'HTML', 'CSS', 'Bootstrap', 'Github'],
         'stack'           => 'Docker Python, Flask, MongoDB, JavaScript, HTML, CSS, Bootstrap Github',
         'repo'            => ['https://github.com/Richardaeld/Fat_Racoon_Kitchen'],
         'app'             => '',
      ],
      'Eldridge M.B. Emporium' => [
         'logo'            => '<span class="eldridge-mb-emporium">EME</span>',
         'image'           => 'images/eldridge-music.jpg',
         'imageAltText'    => 'An image of a Eldridge M.B. Emporium.',
         'style'           => 'greetingCard',
         'link'            => 'https://eldridgembemporium.com/',
         'description'     => 'An ecommerce bookstore app that allows inventory management and secure checkout.',
         'descriptionLong' => ' Eldridge Music Book Emporium is an e-commerce bookstore application that is Django-powered and hosts several interactive functions that are modeled after modern e-commerce sites, such as: notifying users whenever a change has been made to their cart, retaining a purchase history, remembering a user\'s delivery address, and allowing users to rate products. To create a safe and secure checkout method, this application incorporates Stripe\'s API. ',
         'stackArray'      => ['Docker', 'Python', 'Django', 'PostgreSQL', 'JavaScript', 'HTML', 'CSS', 'Bootstrap', 'AWS', 'Stripe'],
         'stack'           => 'Docker, Python, Django, PostgreSQL, JavaScript, HTML, CSS, Bootstrap, AWS, Stripe',
         'repo'            => ['https://github.com/Richardaeld/Eldridge_Music'],
         'app'             => '',
      ],
      'Multittude of Java Projects' => [
         'logo'            => '<span class="multittude-java-projects">MJP</span>',
         'image'           => 'images/multittude-java-projects.jpg',
         'imageAltText'    => '',
         'style'           => 'greetingCard',
         'link'            => 'https://github.com/Richardaeld/Multittude-Java-Projects',
         'description'     => 'A collection of projects created during Data Structures and Programming II',
         'descriptionLong' => 'A collection of projects created during Data Structures and Programming II',
         'stackArray'      => ['Java'],
         'stack'           => 'Java',
         'repo'            => ['https://github.com/Richardaeld/java-data-structure', 'https://github.com/Richardaeld/java-programming-2'],
         'app'             => '',
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
               <?=$values['description']?><br><br>
               <b>Stack Used:</b> <br><?=$values['stack']?>
            </p>
         </div>
         <!-- <p>Get started</p> -->
      </div>
   </div>

   <div>
      <?php if (!empty($values['repo'])) { foreach ($values['repo'] as $link) {?><span class="fancy-link"><a href="<?=$link?>">Repo</a></span><?php          }} ?>
      <?php if (!empty($values['app']))                                       {?><span class="fancy-link"><a href="<?=$values['app']?>">App</a></span><?php   } ?>
   </div>

</div><?php
break;
      }
   }


   static function detailsCard (array $cards) : void { ?>
<div class="details-card-container">
   <div class="details-card">
      <div>
         <h3>name</h3>
         <div>
            <img src="" alt="">
            <div>
               <div>
                  <span>logo</span>
               </div>
               <div>
                  <p>
                     <span></span>
                  </p>
                  <p>
                     <b>Stack Used</b><br/>
                     <span></span>
                  </p>
               </div>
               <div><span class="fancy-link"><a href="<?=$values['app']?>">App</a></span></div>
            </div>
         </div>
      </div>
   </div>

   <div>
      <?php foreach ($cards as $name => $values) {?>
         <div data-card-name="<?=$name?>"><?=$name?></div>
      <?php } ?>
   </div>
</div>

<script>
   const
      cards             = <?=json_encode(self::GREETING_CARDS)?>,
      target            = document.querySelector('.details-card-container'),
      detailCardButtons = document.querySelectorAll('.details-card-container div[data-card-name]');

   // @ Update the details card
   function updateName        (card) { target.querySelector('h3').textContent     = card;                      }
   function updateDescription (card) { target.querySelector('p:first-child').textContent = cards[card]['descriptionLong'];}
   function updateApp         (card) { target.querySelector('div a').href         = cards[card]['app'];        }
   function updateRepo        (card) { target.querySelector('div span a').href    = cards[card]['repo'][0];    }
   function updateStack       (card) { target.querySelector('p:last-child span').textContent = cards[card]['stack'];      }
   function updateLogo        (card) { target.querySelector('div img').src        = cards[card]['image'];      }
   function updateDetailsCard (card) {
      updateName(card);
      updateDescription(card);
      updateApp(card);
      updateRepo(card);
      updateStack(card);
      updateLogo(card);
   }

   // ! Dev settings
   document.querySelectorAll('.details-card-container div[data-card-name]')[0].classList.add('selected');
   updateDetailsCard('Smitten')
   // ! Dev settings

   function removeSelected (previousButton) {
      detailCardButtons.forEach(button => {
         button.classList.remove('selected');
      });
   }
   // @ event for updating details card
   detailCardButtons.forEach(button => {
      button.addEventListener('click', () => {
         removeSelected(button);

         button.classList.add('selected');
         setTimeout(() => {
            target.querySelector('.details-card > div').classList.add('animate');
         }, 1);

         setTimeout(() => {
            updateDetailsCard(button.textContent);
         }, 500);

         setTimeout(() => {
            target.querySelector('.details-card > div').classList.remove('animate');
         }, 1000);
      });
   });


</script>




   <?php }
}