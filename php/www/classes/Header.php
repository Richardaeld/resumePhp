<?php
class Header {
   const NAV_LINKS = [
      'Home',
      'About',
      // 'Services',
      // 'Contact'
      'Resume',
   ];

   const STYLES = [
      'header' =>
         <<<HTML
<style>
/* ===================== */
/* Header */
/* ===================== */
/* General and spacing */
header,
header a {
   color: var(--color-dark-background);
}

header,
header > * {
   display: flex;
}

header {
   position: fixed;
   top:0;
   width:100%;
   z-index: 11;
   background-color: var(--primary);
   padding: 1.25em;
   text-align: center;
   font-family: "tilt warp", sans-serif;
   /* font-family: "montserrat", sans-serif; */
   /* font-family: "ubuntu mono", sans-serif; */
   flex-direction: row;
   justify-content: space-around;
}
header div {
   align-self: center;
   width:20%;
}
header div:first-child {
   justify-content: start;
}
header nav {
   width: 60%;
}
header div:last-child {
   justify-content: end;
}


header nav ul li  {
   list-style: none;
}
header nav ul li a {
   text-decoration: none;
}
header nav,
header nav ul {
   display: flex;
   flex-direction: row;

}

/* Logo config */
header div:first-child {
   text-align: left;
   display: flex;
   flex-direction: column;
}
header div:first-child span {
   font-family: "ubuntu mono", sans-serif;
   /* font-family: "tilt warp", sans-serif; */
   font-size: 1.25em;
}


/* Nav config */
header nav ul {
   font-family: "Anton SC", sans-serif;
   justify-content: space-around;
   width: 100%;
   margin-left: 2.5em;
   padding-left: 2.5em;
}

header nav {
   justify-content: center;

}
</style>
HTML,
   ];

const SCRIPTS = [
   'switcher' =>
      <<<HTML
<script>
   document.addEventListener('DOMContentLoaded', function() {
      document.querySelector('#switcher').addEventListener('click', function() {
         document.body.classList.toggle('dark-mode');
      })
   });
</script>
HTML,
];

   static function displayHeader () : void { ?>
   <?=self::STYLES['header']?>
<header>
   <div>
      Richard Eldridge
      <span>
         Software Developer
      </span>
   </div>
   <?=self::displayNavLinks()?>
   <div id="switcher">
      <!-- switcher -->
   </div>
</header>
<?=self::SCRIPTS['switcher']?>
<?php
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