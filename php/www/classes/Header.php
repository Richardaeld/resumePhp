<?php
class Header {
   const NAV_LINKS = [
      'Home',
      'About',
      'Services',
      'Contact'
   ];

   static function DisplayNavLinks () :void {
      ?>
<nav>
   <ul>
      <?php foreach (self::NAV_LINKS as $link) { ?>
         <li><a href='#'><?=$link?></a></li>
      <?php } ?>
   </ul>
</nav>
      <?php
   }


}