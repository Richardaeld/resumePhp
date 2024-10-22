<?php
class Header {
   const NAV_LINKS = [
      'Home'            => '#',
      'Project Details' => '#detailsCardContainer',
      'Resume'          => 'images/richard_eldridge_resume.pdf',
      // 'About',
      // 'Services',
      // 'Contact'
      // 'Resume',
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
/* Name */
header div:first-child {
   text-align: left;
   display: flex;
   flex-direction: column;
   font-size: 1.5em;
   /* font-family: "montserrat", sans-serif; */
   font-family: "Varela Round";
   font-weight: 600;

}
/* Job Description */
header div:first-child span {
   font-family: "Roboto";
   font-weight: 400;
   /* font-family: "ubuntu mono", sans-serif; */
   /* font-family: "tilt warp", sans-serif; */
   font-size: 1em;
}


/* Nav config */
header nav ul {
   font-size:1.5em;
   font-family: "Anton SC", sans-serif;
   justify-content: space-around;
   width: 100%;
   padding-left: 2.5em;
   margin-top:.5em;
   margin-bottom:.5em;
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

   'scrollToTop' =>
   <<<HTML
   <script>
   document.querySelector('nav[data-header-link-name="Home"]').onclick = function() {
      window.scrollTo({
         top: 0,
         behavior: 'smooth' // This makes the scroll smooth
      });
   };
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
   <!-- <div id="switcher"> -->
      <div></div>
</header>
<?=self::SCRIPTS['switcher']?>
<?=self::SCRIPTS['scrollToTop']?>
<?php
   }


   static function DisplayNavLinks () :void { ?>
<nav>
   <ul>
      <?php foreach (self::NAV_LINKS as $name => $link) { ?>
         <li><a href='<?=$link?>' data-header-link-name="<?=$name?>"><?=$name?></a></li>
      <?php } ?>
   </ul>
</nav>
<?php
   }


}