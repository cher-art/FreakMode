<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Travel point</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>
<body>
<?php show_admin_bar( true );?>
  <header class="header-wrapper">
    <div class="header_block">
      <div><a href="<?php bloginfo( 'url' )?>">
        <h1 class="logo"><?php bloginfo( 'name' )?></h1>
      </a></div>

      <?php /* Primary navigation */
          wp_nav_menu(
            array(
              'container' => 'ul',
              'menu_class' => 'nav navbar-nav center',
              'menu_id' => 'navb',
            )
          );
          ?>

      <!-- <div class="hamburger-menu">
        
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span><img src="./image/Group 50.svg" alt=""></span>
        </label>
        <ul id="menu__box" class="menu__box" >
          <li class="menu__item"><a class="header_link" href="#">Blog</a></li>
          <li class="menu__item"><a class="header_link" href="#">About</a></li>
          <li class="menu__item"><a class="header_link" href="#">Links</a></li>
          <li class="menu__item"><a class="header_link" href="#">Projects</a></li>
        </ul>
      </div> -->

      <!-- <a class="burger_link" href=""><img src="./image/Group 50.svg" alt=""></a> -->
      <!-- <ul class="header_list">
        <li class="header_item"><a class="header_link" href="#">Blog</a></li>
        <li class="header_item"><a class="header_link" href="#">About</a></li>
        <li class="header_item"><a class="header_link" href="#">Links</a></li>
        <li class="header_item"><a class="header_link" href="#">Projects</a></li>
      </ul> -->
  </div>
  </header>