<?php
class Header {
   const NAV_LINKS = [
      'Home',
      'About',
      'Services',
      'Contact'
   ];


   static function displayHeader () : void { ?>
<header>
   <div>
      Richard Eldridge
      <span>
         Software Developer
      </span>
   </div>
   <?=self::displayNavLinks()?>
   <div>
      switcher
   </div>
</header><?php
   }


   static function DisplayNavLinks () :void { ?>
<nav>
   <ul>
      <?php foreach (self::NAV_LINKS as $link) { ?>
         <li><a href='#'><?=$link?></a></li>
      <?php } ?>
   </ul>
</nav><?php
   }


}