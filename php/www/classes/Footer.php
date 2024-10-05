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