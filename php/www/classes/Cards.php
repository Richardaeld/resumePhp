<?php

class Cards {

   const STYLES = [
      'greetingCard' => []
   ];

   const GREETING_CARDS  = [
      'Java From Data Structures' => [
         'logo'            => 'fa-solid fa-memory',
         'year'            => '2024',
         'hackathon'       => 0,
         'image'           => 'images/data-structures.webp',
         'imageAltText'    => '',
         'style'           => 'greetingCard',
         'link'            => 'https://github.com/Richardaeld/Multittude-Java-Projects',
         'description'     => 'A collection of cli projects created during Data Structures.',
         'descriptionLong' => 'A collection of cli projects created during Data Structures. This collection includes 12 projects with a focus on stacks and a high degree of freedom for code design and execution.',
         'stack'           => ['Java'],
         'repo'            => ['https://github.com/Richardaeld/java-data-structure'],
         'app'             => '',
         'awards'          => '',
      ],
      'Java From Programming II' => [
         'logo'            => 'fa-solid fa-memory',
         'year'            => '2023',
         'hackathon'       => 0,
         'image'           => 'images/programming-II.webp',
         'imageAltText'    => '',
         'style'           => 'greetingCard',
         'link'            => 'https://github.com/Richardaeld/Multittude-Java-Projects',
         'description'     => 'A collection of cli projects created during Programming II.',
         'descriptionLong' => 'A collection of cli projects created during Programming II. This collection includes 7 projects and 11 labs with a focus on user input, multithreading, and stacks.',
         'stack'           => ['Java'],
         'repo'            => ['https://github.com/Richardaeld/java-programming-2'],
         'app'             => '',
         'awards'          => '',
      ],
      'Smitten' => [
         'logo'            => 'fa-regular fa-heart',
         'year'            => '2022',
         'hackathon'       => 1,
         'image'           => 'images/smitten.jpg',
         'imageAltText'    => 'An image of the smitten game being played.',
         'style'           => 'greetingCard',
         'link'            => 'https://www.smittenlove.co.uk/',
         'description'     => '1st place hackathon project at Code Institute\'s, February 2022 Hackathon event.',
         'descriptionLong' => 'This JSON and JavaScript-powered hackathon project achieved 1st place in Code Institute\'s, "Love is in the Air" February 2022 Hackathon event. This application is a Valentine\'s Day themed Wordle, that the team named Smitten.',
         'stack'           => ['JavaScript', 'HTML/CSS', 'Bootstrap', 'JSON'],
         'repo'            => ['https://github.com/alissatroiano/8-your-heart-out'],
         'app'             => 'https://alissatroiano.github.io/8-your-heart-out/',
         'awards'          => "1st place in Code Institute's, \"Love is in the Air\" hackathon. ",
      ],
      'Spinning Wheelchairs' => [
         'logo'            => 'fa-solid fa-wheelchair',
         'year'            => '2021',
         'hackathon'       => 1,
         'image'           => 'images/spinning-wheel.jpg',
         'imageAltText'    => 'An image of the spinning wheelchair app.',
         'style'           => 'greetingCard',
         'link'            => 'https://richardaeld.github.io/Hackathaon-trust-in-soda-team-2/',
         'description'     => '3rd place hackathon project at code Institutes\'s "Trust in SODA" 2021 event.',
         'descriptionLong' => 'This JavaScript-powered hackathon project achieved 3rd place in the "Trust in SODA" 2021 event in conjunction with Code Institute. This rudimentary project was designed to help determine if a hallway or doorway has adequate space to accommodate a wheelchair\'s wide turn radius.',
         'stack'           => ['JavaScript', 'HTML/CSS', 'Bootstrap', 'Github'],
         'repo'            => ['https://github.com/Richardaeld/Hackathaon-trust-in-soda-team-2'],
         'app'             => 'https://richardaeld.github.io/Hackathaon-trust-in-soda-team-2/',
         'awards'          => "3rd place in Code Institute's, \"Trust in SODA 2021\" hackathon.",
      ],
      'DM Tool' => [
         'logo'            => 'fa-brands fa-d-and-d',
         'year'            => '2022',
         'hackathon'       => 0,
         'image'           => 'images/dm-tool.jpg',
         'imageAltText'    => 'An image of the dm-tool app.',
         'style'           => 'greetingCard',
         'link'            => 'https://richardaeld.github.io/digital-map/',
         'description'     => 'A project for quick references for D&D 5e',
         'descriptionLong' => 'This PERN project is JavaScript-powered and exists as two separate deployments. The back-end deployment is a RESTful API, and the front-end deployment is a user-facing React.js app. This application is for any Dungeons and Dragons (D&D) 5e fans and can be utilized as a quick way to look up spells, roll digital dice, or view other frequently used table content. As a bonus, the RESTful API allows admins to easily create new tables and expand upon existing content.',
         'stack'           => ['Docker', 'PostgreSQL', 'Knex.js', 'React', 'Express', 'Node', 'JavaScript', 'Bootstrap', 'HTML/CSS'],
         'repo'            => ['https://github.com/Richardaeld/dm_tool_api', 'https://github.com/Richardaeld/DND_Into_The_Abyss'],
         'app'             => '',
         'awards'          => '',
      ],
      'Fat Raccoon' => [
         'logo'            => 'fa-solid fa-carrot',
         'year'            => '2021',
         'hackathon'       => 0,
         'image'           => 'images/fat-raccoon.jpg',
         'imageAltText'    => 'An image of the fat raccoon recipe site.',
         'style'           => 'greetingCard',
         'link'            => 'https://richardaeld.github.io/fat-raccoon/',
         'description'     => 'A recipe app that allows users to create, edit, and share recipes.',
         'descriptionLong' => ' The Fat Raccoon was designed to facilitate a home cooking community for the accumulation and sharing of family recipes. This application allows its users to create an account, which will track your previously viewed recipes, favorites, and uploaded recipes. It also allows for multiple ways to search for recipes and when you\'ve selected a recipe you want to cook it provides a cross-out function for the steps and ingredients you\'ve completed and used. This application leverages the flexibility of MongoDB\'s NoSQL database and Flask\'s minimal framework to allow for a truly custom and unique application. ',
         'stack'           => ['Docker', 'Python', 'Flask', 'MongoDB', 'JavaScript', 'HTML/CSS', 'Bootstrap', 'Github'],
         'repo'            => ['https://github.com/Richardaeld/Fat_Racoon_Kitchen'],
         'app'             => '',
         'awards'          => 'This project received a Merit for going above and beyond class requirements.',
      ],
      'Eldridge M.B. Emporium' => [
         'logo'            => 'fa-solid fa-book',
         'year'            => '2021',
         'hackathon'       => 0,
         'image'           => 'images/eldridge-music.jpg',
         'imageAltText'    => 'An image of a Eldridge M.B. Emporium.',
         'style'           => 'greetingCard',
         'link'            => 'https://eldridgembemporium.com/',
         'description'     => 'An ecommerce bookstore app that allows inventory management and secure checkout.',
         'descriptionLong' => ' Eldridge Music Book Emporium is an e-commerce bookstore application that is Django-powered and hosts several interactive functions that are modeled after modern e-commerce sites, such as: notifying users whenever a change has been made to their cart, retaining a purchase history, remembering a user\'s delivery address, and allowing users to rate products. To create a safe and secure checkout method, this application incorporates Stripe\'s API. ',
         'stack'           => ['Docker', 'Python', 'Django', 'PostgreSQL', 'JavaScript', 'HTML/CSS', 'Bootstrap', 'AWS', 'Stripe'],
         'repo'            => ['https://github.com/Richardaeld/Eldridge_Music'],
         'app'             => '',
         'awards'          => 'This project received a Merit for going above and beyond class requirements.',
      ],
      'Romancing the Cards' => [
         'logo'            => 'fa-solid fa-brain',
         'year'            => '2021',
         'hackathon'       => 0,
         'image'           => 'images/romancing-the-cards.jpg',
         'imageAltText'    => 'An image of a Romancing the Cards game.',
         'style'           => 'greetingCard',
         'link'            => 'https://richardaeld.github.io/google_translate_game/',
         'description'     => 'A memory matching game with multiple languages and themes.',
         'descriptionLong' => 'The purpose of this, JavaScript-powered, game is to illustrate how a simple matching game can entertain and help with learning words in a different language. This game boasts 17 different words in 6 languages, 3 different game settings, and 1 cosmetic setting to help encourage returning users. Words for each game are selected at random so each playthrough has non-linear gameplay.',
         'stack'           => ['JavaScript', 'HTML/CSS', 'Bootstrap', 'Github'],
         'repo'            => ['https://github.com/Richardaeld/google_translate_game'],
         'app'             => 'https://richardaeld.github.io/google_translate_game/',
         'awards'          => '',
      ],
   ];


   static function greetingCards (array $cards) :void {
      foreach ($cards as $name => $values) { ?>
<div class="greeting-card-container">
   <div class="greeting-card" data-greeting-card-name="<?=$name?>">
      <!-- 1st -->
      <div>
         <div>
            <div>
               <span class="logo">
                  <i class="<?=$values['logo']?>"></i>
                  <span><?=$values['year']?></span>
                  <?php if (!empty($values['hackathon'])) { ?><span>(Hackathon)</span><?php } ?>
               </span>
            </div>
         </div>
         <div><p><?=$name?></p></div>
      </div>

      <!-- 2nd -->
      <div><img data-greeting-card-img="<?=$name?>" src="<?=$values['image']?>" alt="<?=$values['imageAltText']?>"></div>

      <!-- 3rd -->
      <div>
         <div>
            <p>
               <?=$values['description']?><br><br>
               <b>Stack:</b> <br><?=implode(', ',$values['stack'])?>
            </p>
         </div>
      </div>
   </div>

   <div>
      <?php if (!empty($values['repo'])) { foreach ($values['repo'] as $link) {?><span class="fancy-link"><a href="<?=$link?>">Repo</a></span><?php          }} ?>
      <?php if (!empty($values['app']))                                       {?><span class="fancy-link"><a href="<?=$values['app']?>">App</a></span><?php   } ?>
      <span class="fancy-link" onclick="selectDetailsCard(event)" ><a href="#detailsCard" data-card-name="<?=$name?>">Details</a></span>
   </div>

</div><?php
      }
   }


   static function detailsCard (array $cards) : void { ?>
<div>
   <div class="details-card-container">
      <div id="detailsCard" class="details-card">
         <div>
            <h3 class="header-text">name</h3>
            <div>
               <img src="" alt="">
               <div>
                  <div></div>
                  <div>
                     <p>
                        <span></span>
                     </p>
                     <p>
                        <b>Awards</b><br />
                        <span></span>
                     </p>
                     <p>
                        <b>Stack Used</b><br/>
                        <span></span>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div>
         <!-- project buttons -->
         <?php foreach ($cards as $name => $values) {?>
            <div data-card-name="<?=$name?>"><?=$name?></div>
         <?php } ?>
      </div>
   </div>
   <!-- project links -->
   <div class="details-card-links">
      <span class="fancy-link"><a href="<?=$values['app']?>">App</a></span>
   </div>
</div>
<script>
   // @ =============
   // @ General Helper functions
   // @ =============
   // @ Create common elements easily and add attributes
   function createEl(tag, attributes = {}, children = []) {
      const element = document.createElement(tag);

      // Assign the provided attributes to the element
      for (const [key, value] of Object.entries(attributes)) element.setAttribute(key, value);

      // Append child elements if any
      Array.from(children).forEach(child => {
         (typeof child === 'string')
            // If the child is a string, create a text node
            ? element.appendChild(document.createTextNode(child))
            // Otherwise, assume it's a node and append it directly
            : element.appendChild(child);
      });
      return element;
   }

   function updateModal (imageSelector) {
      const
         modal       = document.querySelector("#modalContainer"),
         img         = document.querySelector(imageSelector),
         modalImg    = document.querySelector("#modalImage"),
         captionText = document.querySelector("#caption"),
         span        = document.querySelector("#modalContainer > span.close");

      // @ --- event handlers
      // @ Open modal
      img.onclick = function() {
         modal.style.display   = "block";
         modalImg.src          = this.src;
         captionText.innerHTML = this.alt;
      }
      // @ Close modal
      span.onclick   = function()      { modal.style.display = "none"; }
      window.onclick = function(event) { if (event.target == modal) modal.style.display = "none"; }
   }

   // @ =============================================
   // @ ============= Open Greeting cards
   // @ =============================================
   // @ =============
   // @ Main functions
   // @ =============
   const greetingCards = document.querySelectorAll('.greeting-card');

   function openGreetingCard   (event) { setTimeout(() => event.target.closest('.greeting-card').classList.add('open'),   250); }
   function toggleGreetingCard (event) { event.target.closest('.greeting-card').classList.toggle('open'); }
   function closeGreetingCard  (event) { event.target.closest('.greeting-card').classList.remove('open'); }

   greetingCards.forEach((card, index) => {
      setTimeout(() => {
         card.classList.add('open')
      }, 1000 * (index+1));
   });

   // @ =============
   // @ Event Handlers
   // @ =============
   greetingCards.forEach(card => {

      // console.log(card.querySelector('div:nth-child(3)'))

      updateModal(`.greeting-card img[data-greeting-card-img="${card.dataset.greetingCardName}"]`);
      // card.addEventListener('mouseover', openGreetingCard);
      // card.addEventListener('mouseout',  closeGreetingCard);
      card.addEventListener('click',     toggleGreetingCard);
      // @ Add event to opened greeting card layer 3
      // card.querySelector('div:nth-child(1)').addEventListener('click', toggleGreetingCard);
      card.querySelector('div:nth-child(2) img').addEventListener('click', openGreetingCard);
   });


   // @ =============================================
   // @ ============= Update the details card body
   // @ =============================================
   const
      cards             = <?=json_encode(self::GREETING_CARDS)?>,
      target            = document.querySelector('.details-card-container'),
      detailCardButtons = document.querySelectorAll('.details-card-container div[data-card-name]');


   // @ =============
   // @ Helper functions
   // @ =============
   function updateName        (card) {
      target.querySelector('h3').textContent            = card;
   }

   function updateDescription (card) {
      target.querySelector('p:first-child').textContent = cards[card]['descriptionLong'];
   }

   function updateImage       (card) {
      target.querySelector('div img').src               = cards[card]['image'];
      target.querySelector('div img').alt               = cards[card]['imageAltText'];
   }

   function updateAwards      (card) {
      const funcTarget = target.querySelector('p:nth-child(2)');
      funcTarget.style.display = (cards[card]['awards'] == '') ? 'none' : 'block' ;
      funcTarget.querySelector('span').textContent = cards[card]['awards'];
   }

   function updateStack       (card) {
      const ul = createEl('ul');
      cards[card]['stack'].forEach(stack => {
         const li = createEl('li', {}, stack);
         ul.appendChild(li);
      });
      target.querySelector('p:last-child span').innerHTML = '';
      target.querySelector('p:last-child span').appendChild(ul);
   }

   function updateLinks (card) {
      const linkTarget = document.querySelector('.details-card-links');
      linkTarget.innerHTML = '';

      // @ Repo(s)
      Array.from(cards[card]['repo']).forEach(repo => {
         const span = createEl('span', { class: 'fancy-link' });
         const a = createEl('a', { href: repo });
         a.textContent = 'Repo';
         span.appendChild(a);
         linkTarget.appendChild(span);
      })

      // @ App
      if (cards[card]['app'] !== '') {
         const span = createEl('span', { class: 'fancy-link' });
         const a = createEl('a', { href: cards[card]['app'] });
         a.textContent = 'App';
         span.appendChild(a);
         linkTarget.appendChild(span);
      }
   }

   // @ =============
   // @ Main functions
   // @ =============
   function updateDetailsCard (card) {
      updateName(card);
      updateDescription(card);
      updateLinks(card);
      updateStack(card);
      updateImage(card);
      updateAwards(card);
      updateModal(".details-card img");
   }

   function selectDetailsCard (event) {
      applyTransitionToDetailsCard(document.querySelector(`div[data-card-name="${event.target.dataset.cardName}"]`))
   }

   // ! Default details card
   applyTransitionToDetailsCard(document.querySelector(`div[data-card-name="Smitten"]`))

   // @ =============================================
   // @ ============= Update the details card Buttons
   // @ =============================================
   // @ =============
   // @ Helper functions
   // @ =============
   function removeSelected (previousButton) {
      detailCardButtons.forEach(button => {
         button.classList.remove('selected');
      });
   }
   // @ =============
   // @ Event handlers
   // @ =============
   // @ event for updating details card
   detailCardButtons.forEach(button => {
      button.addEventListener('click', () => {
         applyTransitionToDetailsCard (button);
      });
   });

   // @ =============
   // @ Main Functions
   // @ =============
   function applyTransitionToDetailsCard (button) {
      removeSelected(button);

      button.classList.add('selected');
      setTimeout(() => {
         target.querySelector('.details-card > div').classList.add('transitionWipe');
         document.querySelector('.details-card-links').classList.add('transitionWipe');
      }, 1);

      setTimeout(() => {
         updateDetailsCard(button.textContent);
      }, 500);

      setTimeout(() => {
         target.querySelector('.details-card > div').classList.remove('transitionWipe');
         document.querySelector('.details-card-links').classList.remove('transitionWipe');
      }, 1000);
   }


</script>
   <?php }
}