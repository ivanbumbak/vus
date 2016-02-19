<?php
// TODO: Ikone
// TODO: Linkovi na interne stranice
// TODO: RSS za novinarsku
?>

<section class="programs-home main-section">
  <div class="container">
    <h1 class="section-heading">Studentski Programi</h1>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-desktop"></i>
      <a href="#" class="home-program_button">Informatička Sekcija <i class="fa fa-chevron-right"></i></a>
      <?php postsInCategory('Informatička Sekcija', 1, 20, 'full-section'); ?>
    </div>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-book"></i>
      <a href="#" class="home-program_button">Novinarska Sekcija <i class="fa fa-chevron-right"></i></a>
      <?php postsInCategory('Novinarska Sekcija', 1, 20, 'full-section'); ?>
    </div>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-users"></i>
      <a href="#" class="home-program_button">Studentski Zbor <i class="fa fa-chevron-right"></i></a>
      <?php postsInCategory('Studentski Zbor', 1, 20, 'full-section'); ?>
    </div>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-futbol-o"></i>
      <a href="#" class="home-program_button">Sportska Udruga <i class="fa fa-chevron-right"></i></a>
      <?php postsInCategory('Sportska Udruga', 1, 20, 'full-section'); ?>
    </div>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-graduation-cap"></i>
      <a href="#" class="home-program_button">Alumni <i class="fa fa-chevron-right"></i></a>
      <?php postsInCategory('Alumni', 1, 20, 'full-section'); ?>
    </div>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-money"></i>
      <a href="#" class="home-program_button">EU Fondovi <i class="fa fa-chevron-right"></i></a>
      <?php postsInCategory('EU Fond', 1, 20, 'full-section'); ?>
    </div>
  </div>
</section>
