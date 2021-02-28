<?php define('BASE_URL', 'http://ndukellispcc.webhostingforstudents.com/cas222/'); ?>
<header>
  <!-- id="menu-btn" is the "hamburger" icon, placed above the other parts of the page to allow it to float at the top-right cornerof the page. -->
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <h1>Ace In The Hole Multisports</h1>
  <!-- while the hamburger icon was above the rest of the header, this opens at the bottom of it. I thought this would be unintuitive, but after checking the site on my phone I believe it works out well -->
  <nav class="menu">
    <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
    <li><a href="<?php echo BASE_URL; ?>contact/index.php">Contact Form</a></li>
    <li><a href="<?php echo BASE_URL; ?>registration/index.php">Registration Form</a></li>
  </nav>
</header>