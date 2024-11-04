<?php
class GreetingCard {
   // @ ===========================   Style    ===========================
   const STYLE = <<<HTML
<style>
.cards {
   display: flex;
   flex-direction: row;
   flex-wrap: wrap;
   justify-content: space-evenly;
   margin: 3em;
}
.greeting-card-container,
.flat-card-container {
   width: calc(30%);
   background-color: transparent;
   display: flex;
   flex-direction: column;
   align-items: end;
}

.cards-container {
   display: flex;
   flex-direction: row;
   flex-wrap: wrap;
   justify-content: center;
}
.cards-container > div:first-child {
   max-width: 300em;

}

/* ===================== */
/* Greeting card */
/* Animation and color */
/* ===================== */
/* ========== Buttons */
.greeting-card-container > div:last-child {
   width: 100%;
   display: flex;
   justify-content: space-evenly;
   padding-bottom: .75em;
   margin-bottom: 2em;
   transition-duration: 1s;
   width: 50%;
}
.greeting-card-container.open > div:last-child {
   width:100%;
}
.fancy-link,
.fancy-link a {
   color: var(--dark-color-light-background);
   cursor: pointer;
   transition: .25s;
   background:transparent;
   padding: .5em;
   border-radius: 10px;
   position: relative;
   z-index: 10;
   text-decoration: none;
}
/* APP BUTTON */
.fancy-link::after {
   content: '';
   height: 2px;
   width: 80%;
   text-align: center;
   position: absolute;
   background-color: #fff;
   bottom: 0;
   left: 50%;
   transition: .25s;
   border-radius: 10px;
   z-index: 0;
   transform: translateX(-50%);
   background:
      linear-gradient(to bottom, var(--primary), var(--primary)),
      radial-gradient(circle, rgba(255, 255, 255, .4), rgba(255, 255, 255, .2)),
      linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2));
   background-blend-mode: overlay;
   background-size: cover;
   box-shadow:
      inset  1px  0px 3px 0px rgba(255, 255, 255, 0.4),
      inset  0px  1px 3px 0px rgba(255, 255, 255, 0.4),
      inset -1px -0px 3px 0px rgba(255, 255, 255, 0.4),
      inset -0px -1px 3px 0px rgba(255, 255, 255, 0.4);
}
/* APP BUTTON */
.fancy-link:hover::after {

   height:100%;
   width: 100%;
   left: 0;
   transform: translateX(-50%);
   left:50%;
   padding-left: 10%;
   padding-right:10%;
   z-index: -1;
}
.fancy-link:hover {

   color: var(--color-dark-background);
}

/* ========== Card Animation */
.greeting-card {
   position: relative;
   perspective:200rem;
   width: calc(50% - .75em );
   margin: .75em;
   color: var(--color-light-background);
   transition: 1.25s cubic-bezier(0.25, 0.1, 0.25, 1);
}

.greeting-card > div {
   pointer-events:none;
   transform-style: preserve-3d;
   backface-visibility: hidden;
   -webkit-backface-visibility: hidden;
   will-change: transform;
   width: 100%;
   height: 100%;
}
.greeting-card.open > div  {
   pointer-events: all;
}
.greeting-card > div {
   background: var(--card-background-color);
   background-blend-mode: overlay;
   background-size: cover;
   box-shadow:
      inset  1px  0px 3px 0px rgba(255, 255, 255, 0.4),
      inset  0px  1px 3px 0px rgba(255, 255, 255, 0.4),
      inset -1px -0px 3px 0px rgba(255, 255, 255, 0.4),
      inset -0px -1px 3px 0px rgba(255, 255, 255, 0.4);
   border-radius: 3px;
}

.greeting-card > div:nth-child(1),
.greeting-card > div:nth-child(2) {
   z-index: 3;
   transition: transform 1.25s cubic-bezier(0.25, 0.1, 0.25, 1);
   transform-origin: left;
}

.greeting-card > div:nth-child(2),
.greeting-card > div:nth-child(3) {
   background-color: var(--card-background-color-foreground);
}

.greeting-card img {
   transition: 1.25s cubic-bezier(0.25, 0.1, 0.25, 1);
}

/* Left page */
.greeting-card > div:nth-child(1) {
   position: absolute;
   color: var(--color-light-background);
   font-weight: bold;
   transform: rotateY(360deg);
   font-family: "Roboto";

}
.greeting-card > div:nth-child(2) {
   transform: rotateY(180deg) translateX(-100%);
   position: relative;
}

/* right page */
.greeting-card > div:nth-child(3) {
   z-index: 0;
   top: 0;
   position: absolute;
   color: var(--color-light-background);
}
/* Shadow */
.greeting-card > div:nth-child(3)::before {
   content: '';
   position: absolute;
   height: 100%;
   width: 100%;
   top: 0;
   left: 0;
   transition: 1.75s;
   background: rgba(0, 0, 0, 0.15);
   filter: blur(8px)
}


/* ===================== */
/* first card (front) -- Internal Structure */
/* ===================== */
/* top section */
.greeting-card > div:nth-child(1) > div:first-child {
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   width: 100%;
   height: 50%;
}
/* bottom section */
.greeting-card > div:nth-child(1) > div:last-child {
   width: 100%;
   height: 50%;
   background:
      linear-gradient(to bottom, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.5));
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
}
.greeting-card > div:nth-child(1) > div:last-child p {
   padding: .25em;
   text-align: center;
}
/* Arrow */
.greeting-card > div:nth-child(1) > div > div:first-child::after {
   content: '';
   position: absolute;
   left: calc(50% - 10px);
   top: 50%;
   border-left: 10px solid transparent;
   border-right:10px solid transparent;
   border-top:  20px solid rgba(92, 75, 138, .50);
}
/* ===================== */
/* first card (back) -- Internal Structure */
/* ===================== */
.greeting-card > div:nth-child(2) {
   display: flex;
   justify-content: center;
}
.greeting-card > div:nth-child(2) > img {
   padding:.75em;
}

/* ===================== */
/* second card -- Internal Structure */
/* ===================== */
.greeting-card > div:nth-child(3) p {
   margin: 0;
   padding: .75em .5em .25em .5em;
   overflow: ellipsis;
   text-overflow: ellipsis;
   height: 10px;
   margin-bottom: .25em;
}
.greeting-card > div:nth-child(3) > div {
   display: flex;
   flex-direction: column;
   padding: .25em .5em .25em .5em;

}
.greeting-card > div:nth-child(3) > div > div:last-child {
   display: flex;
   justify-content: space-evenly;
   color: var(--color-dark-background);
}

.greeting-card img {
   width: 100%;
   height: 250px;
   object-fit:scale-down;
   overflow: hidden;
   border-radius: 5px;
}


/* ===================== */
/* Card 2 + 3 shadow */
/* ===================== */
.greeting-card > div:nth-child(2),
.greeting-card > div:nth-child(3) {
   box-shadow:
      inset  1px  0px 3px 0px rgba(255, 255, 255, 0.4),
      inset  0px  1px 3px 0px rgba(255, 255, 255, 0.4),
      inset -1px -0px 3px 0px rgba(255, 255, 255, 0.4),
      inset -0px -1px 3px 0px rgba(255, 255, 255, 0.4),
      inset  1px  0px 4px 0px rgba(0,0,0, 0.6),
      inset  0px  1px 4px 0px rgba(0,0,0, 0.6),
      inset -1px -0px 4px 0px rgba(0,0,0, 0.6),
      inset -0px -1px 4px 0px rgba(0,0,0, 0.6);
}

/* open animation */
.greeting-card.open > div:nth-child(1) {
   transform: rotateY(180deg);
}
.greeting-card.open > div:nth-child(2) {
   transform: rotateY(0deg) translateX(-100%);
}
.greeting-card.open > div:nth-child(3)::before {
   transform: translateX(-100%);
}
/* ===================== */
/* Responsive */
/* ===================== */
@media (max-width: 1920px) {
   .greeting-card > div:nth-child(3) p {
      font-size: .9em;
   }
}

@media (max-width: 1280px) {
/* @media (max-width: 1024px) { */
/* @media (max-width: 768px) { */
/* @media (max-width: 768px) { */
      body {
         margin: 6em 0 0 0;
      }
      .cards {
         margin: 1em
      }
      .greeting-card-container {
         width: calc(50%);
      }
      .greeting-card > div:nth-child(3) p {
         font-size: .8em;
      }
   }

   /* Styles for phones */
   @media (max-width: 480px) {
      body {
         margin: 5em 0 0 0;
      }
      .cards {
         margin: .25em
      }
      .greeting-card-container {
         width: calc(100%);
      }

      .greeting-card > div:nth-child(3) p {
         font-size: .8em;
      }
   }
</style>
HTML;


   // @ ===========================   Script    ===========================
   const SCRIPT = <<<HTML
<script>
   // @ =============================================
   // @ ============= Open Greeting cards
   // @ =============================================
   const greetingCards = document.querySelectorAll('.greeting-card');

   function openGreetingCard   (event) {
      setTimeout(() => {
         event.target.closest('.greeting-card').classList.add('open')
         event.target.closest('.greeting-card-container').classList.add('open')
      },   250);
   }
   function toggleGreetingCard (event) {
      event.target.closest('.greeting-card').classList.toggle('open');
      event.target.closest('.greeting-card-container').classList.toggle('open');
   }
   function closeGreetingCard  (event) {
      event.target.closest('.greeting-card').classList.remove('open');
      event.target.closest('.greeting-card-container').classList.remove('open');
   }
   // @ Open one card every second <? // @ Replaced by window.scrollBy function ?>
   // document.querySelectorAll('.greeting-card-container:nth-child(-n+3)').forEach((card, index) => {
   //    setTimeout(() => {
   //       card.closest('.greeting-card-container').classList.add('open');
   //       card.querySelector('.greeting-card').classList.add('open')
   //    }, 1000 * (index+1));
   // });
   // @ Open cards as they come into view
   const quarterViewHeight = window.innerHeight * 0.35;
   greetingCards.forEach(card => {
      const handleScroll = () => {
         const rect = card.getBoundingClientRect();

         if (rect.top < window.innerHeight-quarterViewHeight && rect.bottom-quarterViewHeight >= 0) {
            setTimeout(() => {
               card.classList.add('open');
               card.closest('.greeting-card-container').classList.add('open')
            }, 750);
         } else {
            setTimeout(() => {
               card.classList.remove('open');
               card.closest('.greeting-card-container').classList.remove('open')
            }, 250);
         }
      };
      window.addEventListener('scroll', handleScroll);
   });
   // @ Open visible Greeting cards on page load
   setTimeout(() => {window.scrollBy({ top: 1, behavior: 'smooth'}); }, 100);

   // @ =============
   // @ Event Handlers
   // @ =============
   greetingCards.forEach(card => {
      updateModal(`.greeting-card img[data-greeting-card-img="\${card.dataset.greetingCardName}"]`);
      // card.addEventListener('mouseover', openGreetingCard);
      // card.addEventListener('mouseout',  closeGreetingCard);
      card.addEventListener('click',     toggleGreetingCard);
      // @ Add event to opened greeting card layer 3
      card.querySelector('div:nth-child(2) img').addEventListener('click', openGreetingCard);
   });

</script>
HTML;


   // @ ===========================   HTML Structure    ===========================
   static function greetingCards (array $cards) :void {
      foreach ($cards as $name => $values) { ?>
<div class="greeting-card-container">
   <div class="greeting-card" data-greeting-card-name="<?=$name?>">
      <!-- 1st layer book cover-->
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

      <!-- 2nd layer book back cover (image) -->
      <div><img data-greeting-card-img="<?=$name?>" src="<?=$values['image']?>" alt="<?=$values['imageAltText']?>"></div>

      <!-- 3rd layer project info and stack-->
      <div>
         <div>
            <p>
               <?=$values['description']?><br><br>
               <b>Stack</b> <br><?=implode(', ',$values['stack'])?>
            </p>
         </div>
      </div>
   </div>
   <!-- Links -->
   <div>
      <?php if (!empty($values['repo'])) { foreach ($values['repo'] as $link) {?><a class="fancy-link" target="_blank" href="<?=$link?>">Repo</a><?php          }} ?>
      <?php if (!empty($values['app']))                                       {?><a class="fancy-link" target="_blank" href="<?=$values['app']?>">App</a><?php   } ?>
      <a class="fancy-link" onclick="selectDetailsCard(event); scrollToDetailsCardTop()" data-card-name="<?=$name?>">Details</a>
   </div>

</div><?php
      }
   }

}