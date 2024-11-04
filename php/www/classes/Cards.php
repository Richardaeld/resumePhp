<?php

class Cards {
   // @ ===========================   Array Database    ===========================
   const CARDS  = [
      'Java From Data Structures' => [
         'logo'            => 'fa-brands fa-java',
         'year'            => '2024',
         'hackathon'       => 0,
         'image'           => 'images/data-structures.webp',
         'imageAltText'    => '',
         'style'           => 'greetingCard',
         'description'     => 'A collection of CLI projects created during Data Structures.',
         'descriptionLong' => 'A collection of CLI projects created during Data Structures. This collection includes 12 projects with a focus on stacks and a high degree of freedom for code design and execution.',
         'stack'           => ['Java'],
         'repo'            => ['https://github.com/Richardaeld/java-data-structure'],
         'app'             => '',
         'awards'          => '',
      ],
      'Java From Programming II' => [
         'logo'            => 'fa-brands fa-java',
         'year'            => '2023',
         'hackathon'       => 0,
         'image'           => 'images/programming-II.webp',
         'imageAltText'    => '',
         'style'           => 'greetingCard',
         'description'     => 'A collection of CLI projects created during Programming II.',
         'descriptionLong' => 'A collection of CLI projects created during Programming II. This collection includes 7 projects and 11 labs with a focus on user input, multi-threading, and stacks.',
         'stack'           => ['Java'],
         'repo'            => ['https://github.com/Richardaeld/java-programming-2'],
         'app'             => '',
         'awards'          => '',
      ],
      // 'Personal Website' => [
      //    'logo'            => 'fa-regular fa-file',
      //    'year'            => '2024',
      //    'hackathon'       => 0,
      //    'image'           => 'images/programming-II.webp',
      //    'imageAltText'    => '',
      //    'style'           => 'greetingCard',
      //    'description'     => '',
      //    'descriptionLong' => '',
      //    'stack'           => ['docker', 'PHP', 'JavaScript', 'HTML/CSS'],
      //    'repo'            => ['https://github.com/Richardaeld/resumePhp'],
      //    'app'             => '',
      //    'awards'          => '',
      // ],
      'Smitten' => [
         'logo'            => 'fa-regular fa-heart',
         'year'            => '2022',
         'hackathon'       => 1,
         'image'           => 'images/smitten.jpg',
         'imageAltText'    => 'An image of the smitten game being played.',
         'style'           => 'greetingCard',
         'description'     => '1st place hack-a-thon project at Code Institute\'s February 2022 hack-a-thon event.',
         'descriptionLong' => 'This JSON and JavaScript-powered hack-a-thon project achieved 1st place in Code Institute\'s "Love is in the Air" February 2022 hack-a-thon event. This application is a Valentine\'s Day themed Wordle, that the team named Smitten.',
         'stack'           => ['JavaScript', 'HTML/CSS', 'Bootstrap', 'JSON'],
         'repo'            => ['https://github.com/alissatroiano/8-your-heart-out'],
         'app'             => 'https://alissatroiano.github.io/8-your-heart-out/',
         'awards'          => "1st place in Code Institute's, \"Love is in the Air\" hack-a-thon. ",
      ],
      'Spinning Wheelchairs' => [
         'logo'            => 'fa-solid fa-wheelchair',
         'year'            => '2021',
         'hackathon'       => 1,
         'image'           => 'images/spinning-wheel.jpg',
         'imageAltText'    => 'An image of the spinning wheelchair app.',
         'style'           => 'greetingCard',
         'description'     => '3rd place hack-a-thon project at code Institute\'s "Trust in SODA" 2021 event.',
         'descriptionLong' => 'This JavaScript-powered hack-a-thon project achieved 3rd place in the "Trust in SODA" 2021 event in conjunction with Code Institute. This rudimentary project was designed to help determine if a hallway or doorway has adequate space to accommodate a wheelchair\'s wide turn radius.',
         'stack'           => ['JavaScript', 'HTML/CSS', 'Bootstrap', 'Github'],
         'repo'            => ['https://github.com/Richardaeld/Hackathaon-trust-in-soda-team-2'],
         'app'             => 'https://richardaeld.github.io/Hackathaon-trust-in-soda-team-2/',
         'awards'          => "3rd place in Code Institute's, \"Trust in SODA 2021\" hack-a-thon.",
      ],
      'DM Tool' => [
         'logo'            => 'fa-brands fa-d-and-d',
         'year'            => '2022',
         'hackathon'       => 0,
         'image'           => 'images/dm-tool.jpg',
         'imageAltText'    => 'An image of the dm-tool app.',
         'style'           => 'greetingCard',
         'description'     => 'A project for quick references for D&D 5e',
         'descriptionLong' => 'This PERN project is JavaScript-powered and exists as two separate deployments. The back-end deployment is a RESTful API, and the front-end deployment is a user-facing React.js app. This application is for any Dungeons and Dragons (D&D) 5e fans and can be utilized as a quick way to look up spells, roll digital dice, or view other frequently used table content. As a bonus, the RESTful API allows admins to easily create new tables and expand upon existing content.',
         'stack'           => ['PostgreSQL', 'Knex.js', 'React', 'Express', 'Node', 'JavaScript', 'Bootstrap', 'HTML/CSS'],
         'repo'            => ['https://github.com/Richardaeld/dm_tool_api', 'https://github.com/Richardaeld/DND_Into_The_Abyss'],
         'app'             => '',
         'awards'          => '',
      ],
      'Fat Raccoon' => [
         'logo'            => 'fa-solid fa-utensils',
         'year'            => '2021',
         'hackathon'       => 0,
         'image'           => 'images/fat-raccoon.jpg',
         'imageAltText'    => 'An image of the fat raccoon recipe site.',
         'style'           => 'greetingCard',
         'description'     => 'A recipe app that allows users to create, edit, and share recipes.',
         'descriptionLong' => 'The Fat Raccoon was designed as a home cooking community to accumulate and share family recipes. With this application, users can create an account to track previously viewed recipes, favorites, and uploaded recipes. This application features an advanced search function for selecting the perfect recipe. Additionally, when cooking, home chefs can use the built-in cross-out feature to keep track of what ingredients they used. This application leverages the flexibility of MongoDB\'s NoSQL database and Flask\'s minimal framework to allow for a truly custom and unique application.',
         'stack'           => ['Python', 'Flask', 'MongoDB', 'JavaScript', 'HTML/CSS', 'Bootstrap', 'Github'],
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
         'description'     => 'An e-commerce bookstore app that allows inventory management and secure checkout.',
         'descriptionLong' => ' Eldridge Music Book Emporium is an e-commerce bookstore application that is Django-powered and hosts several interactive functions that are modeled after modern e-commerce sites, such as: notifying users whenever a change has been made to their cart, retaining a purchase history, remembering a user\'s delivery address, and allowing users to rate products. To create a safe and secure checkout method, this application incorporates Stripe\'s API. ',
         'stack'           => ['Python', 'Django', 'PostgreSQL', 'JavaScript', 'HTML/CSS', 'Bootstrap', 'AWS', 'Stripe'],
         'repo'            => ['https://github.com/Richardaeld/Eldridge_Music'],
         'app'             => '',
         'awards'          => 'This project received a Merit for going above and beyond class requirements.',
      ],
      'Romancing the Cards' => [
         'logo'            => 'fa-regular fa-chess-pawn',
         'year'            => '2021',
         'hackathon'       => 0,
         'image'           => 'images/romancing-the-cards.jpg',
         'imageAltText'    => 'An image of a Romancing the Cards game.',
         'style'           => 'greetingCard',
         'description'     => 'A memory matching game with multiple languages and themes.',
         'descriptionLong' => 'The purpose of this, JavaScript-powered, game is to illustrate how a simple matching game can entertain and help with learning words in a different language. This game boasts 17 different words in 6 languages, 3 different game settings, and 1 cosmetic setting to help encourage returning users. Words for each game are selected at random so each playthrough has non-linear gameplay.',
         'stack'           => ['JavaScript', 'HTML/CSS', 'Bootstrap', 'Github'],
         'repo'            => ['https://github.com/Richardaeld/google_translate_game'],
         'app'             => 'https://richardaeld.github.io/google_translate_game/',
         'awards'          => '',
      ],
   ];


   // @ ===========================   Script    ===========================
   const SCRIPT = <<<HTML
<script>
   // @ =============
   // @ General Helper functions
   // @ =============
   // @ Scroll to top of page
   function scrollToTop () {
      setTimeout(() => { document.querySelector('#top').scrollIntoView({ behavior: 'smooth', block: 'start'}); }, 10);
      setTimeout(() => { window.scrollBy({top: -300, behavior: 'smooth'}); }, 700)
   }

   // @ Navigate to top of detailscard
   function scrollToDetailsCardTop () {
      const
         maxWidth    = 1280,
         windowWidth = window.innerWidth;

      //  @ initial position adjustment
      setTimeout(() => { document.querySelector('#detailsCard').scrollIntoView({ behavior: 'smooth', block: 'start'}); }, 10);
      if (windowWidth > maxWidth) return;

      // @ Additioanl incremental scroll <?php // ! TODO Rework if time provides to give a better smoother exp ?>
      setTimeout(() => {
         const
            element      = document.querySelector('#detailsCard'),
            headerPixels = document.querySelector('header').clientHeight,
            rect         = document.querySelector('#detailsCard').getBoundingClientRect(),
            offset       = document.querySelector('header').clientHeight;

         // @ Adjust scroll position after the animation
         (rect.top > offset)
            ? setTimeout(() => { window.scrollBy({top: -offset, behavior: 'smooth'}); }, 300)
            : window.scrollBy(0, -offset); // @ If it's already near the top, just scroll a little
      }, 500);
   }


   // @ Create common elements easily and add attributes
   function createEl (typeElement, attributes = null) {
      const el = document.createElement(typeElement);
      if (attributes !== null) {
         for (const [key, value] of Object.entries(attributes)) {
            (key.includes('data'))
               ? el.dataset[key.replace('data-', '')] = value
               : el[key] = value;
         }
      }
      return el;
   }


   // @ Reveals modal with image
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
</script>
HTML;
}