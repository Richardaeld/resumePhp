<?php
class DetailsCard {
   // @ ===========================   Style    ===========================
   const STYLE = <<<HTML
<style>
/* ===================== */
/* details card */
/* ===================== */
.details-card-container {
   display: flex;
}
/* buttons */
.details-card-container > div:last-child > div.selected,
.details-card-container > div:last-child > div.selected::before {
   border-top-left-radius: 0;
   border-bottom-left-radius: 0;
}
.details-card-container > div:last-child > div.selected {
   margin-left:0;
   background-color: var(--card-background-color-foreground);
   color: var(--color-light-background);
   box-shadow:
      1px  0px 3px 0px rgba(255, 255, 255, 0.74),
      0px  0px 0px 0px rgba(255, 255, 255, 0.74),
      1px  0px 3px 0px rgba(255, 255, 255, 0.74),
      0px  0px 0px 0px rgba(255, 255, 255, 0.74);
}
.details-card-container > div:last-child > div.selected:hover {
   border-top-left-radius: 0;
   border-bottom-left-radius: 0;
   box-shadow:
      1px  0px 3px 0px rgba(255, 255, 255, 0.74),
      0px  1px 3px 0px rgba(255, 255, 255, 0.74),
      1px -0px 3px 0px rgba(255, 255, 255, 0.74),
      0px -1px 3px 0px rgba(255, 255, 255, 0.74);
}

.details-card-container > div:last-child > div {
   position: relative;
   cursor: pointer;
   margin: .75em;
   background-color: var(--primary);
   color: var(--color-dark-background);
   padding: .2em .5em;
   border-radius: 10px;
   box-shadow:
       1px  0px 3px 0px rgba(255, 255, 255, 0.74),
       0px  1px 3px 0px rgba(255, 255, 255, 0.74),
      -1px -0px 3px 0px rgba(255, 255, 255, 0.74),
      -0px -1px 3px 0px rgba(255, 255, 255, 0.74);

   transition-duration: .75s;
}
.details-card-container > div:last-child > div:hover {
   background-color: rgba(0, 0, 0, 0.2);
   color:var(--color-dark-background);
}
.details-card-container > div:last-child > div::before {
   content: '';
   position: absolute;
   height: 100%;
   width: 100%;
   background: var(--card-background-color);
   z-index: -1;
   border-radius: 10px;
   top:0;
   left:0;
}
/* Card */
.details-card,
.details-card .background-color {
   background-color: var(--card-background-color-foreground);
   color: var(--color-light-background)
}
.details-card {
   position: relative;
   border-radius: 10px;
   width: 50em;
   min-height: 25em;
   height: fit-content;
   max-height: 50em;
   text-overflow: hidden;
}
.details-card h3 {
   text-align: center;
   text-shadow:1px 1px 0px var(--primary);
   font-weight: bold;
   font-size: 1.5em;
   display: block!important;
   ;
}
.details-card > div > div {
   display: flex;
   flex-direction: row;
}
.details-card img {
   min-height: 300px;
   max-height: 40vh;
   min-width: 300px;
   max-width: 30vw;
   margin: 0 2em 2em 2em;
   object-fit: cover;
   object-position: top;
   box-shadow:
      1px 1px 2px 4px rgba(0, 0, 0, 0.2),
      -1px -1px 2px 4px rgba(0, 0, 0, 0.2);
}

.details-card div p {
   width: fit-content;
   min-height: 5em;
   height: 10em;
   max-height: 15em;
   z-index:10;
   position: relative;
   margin: auto 1.5em;
}
.details-card div p {
   height: fit-content;
}
.details-card div p:nth-child(2) {
   margin-top: 2em;
}
.details-card div p:nth-child(2) ul li {
   list-style-type: none;
   margin-left: 0;
}
.details-card div p ul {
   display: flex;
   flex-direction: row;
   width: fit-content;
   flex-wrap: wrap;
}
.details-card div p ul li {
   margin-left: 1.5em;
   flex: 1 1 100px;
}
.details-card div p ul li::marker {
   color: var(--primary);
}
.details-card > div > div > div:last-child {
   display: flex;
   flex-direction: column;
   align-items: center;
}

.details-card::after {
   content: '';
   position: absolute;
   width: 100%;
   height: 100%;
   top: 0;
   background: var(--card-background-color);
   border-radius: 10px;
   z-index: -100;
}
.details-card > div {
   padding: .5em;
}
.details-card-links {
   transition-duration: 1s;
   margin-top: 2em;
   display: flex;
   flex-direction: row;
   width: 100%;
   justify-content: space-evenly;
}

/* animation */
@keyframes animationWipe {
   0%   { clip-path: inset(0);          }
   50%  { clip-path: inset(0 100% 0 0); }
   100% { clip-path: inset(0);          }
}
.transitionWipe {
   animation: animationWipe 1s forwards;
}

/* ===================== */
/* Responsive */
/* ===================== */

@media (max-width: 1920px) {

}

@media (max-width: 1280px) {

   /* centers details card */
   .cards-container .cards:last-child > div {
      display: flex;
      flex-direction: column;
      align-items: center;   }


   /*  */
   .details-card > div > div {
      flex-direction: column;
      justify-items: center;
   }
   /* stack image and text */
   .details-card-container  {
      flex-direction: column;
      justify-content: center;
      align-items:center;
      margin-left:.75em;
      margin-right:.75em;
   }
   .details-card {
      width:100%;
      max-height: fit-content;
   }
   /* center image */
   .details-card img {
      margin: auto;
   }
   /* space betweeen image and text */
   .details-card > div > div > div:last-child {
      margin-top: 1.5em;
   }
   .details-card div p {
      height: fit-content;
      max-height: fit-content;
   }
   .details-card div p:nth-child(2) {
      margin-left: 0em;
   }
   .details-card div p:nth-child(2) b {
      margin-top: 0em;
   }
   .details-card div p:nth-child(2) span {
      transform: translateX(2em);
   }
   .details-card div p:nth-child(3) {
      margin-top: 1em;
      margin-left: 0;
   }
   /* fix fancy links */
   .details-card-container div:last-child {
      margin-left:.5em;
      margin-right:.5em;
   }
   .details-card-container > div:last-child > div.selected,
   .details-card-container > div:last-child > div.selected::before,
   .details-card-container > div:last-child > div.selected:hover {
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
   }
   .details-card-container > div:last-child > div.selected {
      margin-left: .75em;
   }

}

@media (max-width: 480px) {

}
</style>
HTML;


   // @ ===========================   Script    ===========================
   const SCRIPT = <<<HTML
<script>
// @ =============================================
   // @ ============= Update the details card body
   // @ =============================================
   const
      // cards             = <?=json_encode(Cards::GREETING_CARDS)?>,
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
      funcTarget.querySelector('span').innerHTML = '';

      funcTarget.querySelector('span')
         .appendChild(createEl('ul'))
         .appendChild(createEl('li', { textContent: cards[card]['awards'] }));
   }
   function updateStack       (card) {
      const ul = createEl('ul');
      cards[card]['stack'].forEach(stack => {
         const li = createEl('li', { textContent: stack });
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
         const span = createEl('span', { classList: 'fancy-link' });
         const a = createEl('a', { href: repo });
         a.textContent = 'Repo';
         span.appendChild(a);
         linkTarget.appendChild(span);
      })

      // @ App
      if (cards[card]['app'] !== '') {
         const span = createEl('span', { classList: 'fancy-link' });
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
      applyTransitionToDetailsCard(document.querySelector(`div[data-card-name="\${event.target.dataset.cardName}"]`))
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
   // @ Apply transition to details card in order of:
   // @     Remove existing selected
   // @     Wait for inital transition to finish (clearing transition) and then
   // @     Update project information while all text and image are not visible to user
   // @     Finally apply last transition to reveal new information
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
HTML;


   // @ ===========================   HTML Structure    ===========================
   static function detailsCard (array $cards) : void { ?>
<div>
   <div id="detailsCardContainer" class="details-card-container">
      <div id="detailsCard" class="details-card">
         <div>
            <!-- Project name -->
            <h3 class="header-text">name</h3>
            <div>
               <!-- Project image -->
               <img src="" alt="">
               <div>
                  <div></div>
                  <div>
                     <!-- Projet genreal info -->
                     <p><span></span></p>
                     <!-- Project Awards -->
                     <p>
                        <b>Awards</b><br />
                        <span></span>
                     </p>
                     <!-- Project Stack -->
                     <p>
                        <b>Stack</b><br/>
                        <span></span>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div>
         <!-- Project link buttons -->
         <?php foreach ($cards as $name => $values) {?>
            <div data-card-name="<?=$name?>" onclick="scrollToDetailsCardTop()"><?=$name?></div>
         <?php } ?>
      </div>
   </div>
   <!-- project links -->
   <div class="details-card-links">
      <a class="fancy-link" target="_blank" href="<?=$values['app']?>">App</a>
   </div>
</div>
<?php }




}