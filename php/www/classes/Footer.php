<?php
class Footer {
   const AUTHOR_LINKS = [
      'Github' => [
         'attributes' => [
            'href'       => 'https://github.com/Richardaeld',
            'aria-label' => 'Link to Richard Eldridge\'s GitHub',
         ],
         'iconClass'  => 'fab fa-github-square',
      ],
      'LinkedIn' => [
         'attributes' => [
            'rel'        => 'noopener',
            'href'       => 'https://www.linkedin.com/in/richard-eldridge-4200221ab/',
            'aria-label' => 'Link to Richard Eldridge\'s LinkedIn',
         ],
         'iconClass'  => 'fab fa-linkedin',
      ],
      'Email' => [
         'attributes' => [
            'rel'        => 'noopener',
            'href'       => 'mailto:richardaeld@gmail.com',
            'aria-label' => 'Link to Richard Eldridge\'s email',
         ],
         'iconClass'  => 'fas fa-envelope-square',
      ],
   ];


   const STYLES = [
      'footer' =>
         <<<HTML
<style>
/* ===================== */
/* Footer */
/* ===================== */
footer {
   background-color: var(--dark-primary);
   padding: 1.25em;
   text-align: center;
   font-family: "Roboto", sans-serif;
   /* font-family: "Roboto"; */
   /* font-family: "Anton SC", sans-serif; */
   /* font-family: "Bungee Tint", "sans-serif"; */
   color: var(--dark-color-dark-background);
   display: flex;
   flex-direction: column;
   justify-content: center;
}
footer div:first-child {
   /* width: 100%; */
   padding-right: 35%;
   padding-left: 35%;
   display: flex;
   justify-content:space-evenly;

}
footer div p {
   /* font-family: "Anton SC"; */
}
footer div a i {
   color:var(--dark-color-dark-background);
   font-size: 2.5rem;
}
</style>
HTML,
   ];

   static function DisplayFooter () { ?>
<footer>
   <?=self::STYLES['footer']?>
   <?=self::DisplayLinks()?>
   <?=self::DisplayAuthorSignature()?>
</footer><?php
   }

   static function DisplayLinks () { ?>
<div>
   <?php foreach (self::AUTHOR_LINKS as $link) { ?>
      <a
         <?php foreach ($link['attributes'] as $key => $value)?><?="{$key}='{$value}'"?>
         target="_blank"
      >
            <i class="<?=$link['iconClass']?>"></i>
      </a>
   <?php } ?>
</div><?php
   }

   static function displayAuthorSignature () : void { ?>
<div>
   <p>&#169; 2022 Richard Eldridge. <span>All rights reserved.</span></p>
</div><?php
   }

}