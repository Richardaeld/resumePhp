<?php
class Header {
   const NAV_LINKS = [
      'Home'            => '#',
      'Project Details' => '#detailsCardContainer',
      'Resume'          => 'images/richard_eldridge_resume.pdf',
      // 'About',
      // 'Services',
      // 'Contact'
   ];


   // @ ===========================   Style    ===========================
   const STYLE = <<<HTML
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
   font-family: "tilt warp", sans-serif; /* "montserrat","ubuntu mono" */
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
   justify-content: center;
}
header div:last-child {
   justify-content: end;
}

/* nav menu display and links */
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
   font-family: "Varela Round"; /* "montserrat", */
   font-weight: 600;

}
/* Job Description */
header div:first-child span {
   font-family: "Roboto"; /* "ubuntu mono", "tilt warp" */
   font-weight: 400;
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



/* Burger nav responsiveness */
.burger {
   display:none;
   cursor: pointer;
   font-size: 2em;
}

header nav.activeBurger {
   right:0px;
}

@media (max-width: 1920px) {

}
@media (max-width: 1280px) {
   .burger {
      display: block;
   }
   header nav {
      width:100%;
      position: fixed;
      top: 4em;
      right: -200vh;
      background: var(--primary);
      transition: .75s ease;
   }
   header nav ul {
      display: flex;
      flex-direction: column;
      padding-left:0;

   }
   header nav ul li {
      font-size: 1em;
      margin-bottom:.5em;
   }
   header div:first-child {
      font-size: 1em;
   }
   header div:first-child span {
      font-size: .9em;
   }
}
@media (max-width: 480px) {
   header {
      padding: .5em;
   }
   header nav {
      top: 3em;
   }
   header nav ul li {
      font-size: .8em;
   }
   header div:first-child {
      width: 40%;
      font-size: .9em;

   }
   header div:first-child span {
      font-size: .85em;
   }
}
</style>
HTML;


   // @ ===========================   Script    ===========================
   const SCRIPT = <<<HTML
<script>
   // TODO Darkmode switcher
   // document.addEventListener('DOMContentLoaded', function() {
   //    document.querySelector('#switcher').addEventListener('click', function() {
   //       document.body.classList.toggle('dark-mode');
   //    })
   // });
   // TODO smooth scrolling to header
   // document.addEventListener('DOMContentLoaded', function () {
   //    document.querySelector('nav[data-header-link-name="Home"]').addEventListener('click', function() {
   //       window.scrollTo({
   //          top: 0,
   //          behavior: 'smooth'
   //       });
   //    });
   // });
   const
      menuToggle = document.querySelector('.menu-toggle'),
      nav        = document.querySelector('header nav');

   menuToggle.addEventListener('click', function () {
      nav.classList.toggle('activeBurger');
   });
</script>
HTML;


   // @ ===========================   HTML Structure    ===========================
   static function displayHeader () : void { ?>
<header>
   <div>
      Richard Eldridge
      <span>Software Developer</span>
   </div>
   <?=self::displayNavLinks()?>
   <div></div><!-- <div id="switcher"> -->
   <div class="menu-toggle burger" id="burger">&#9776;</div>
</header>
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