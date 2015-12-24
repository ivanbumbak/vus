<?php
// TODO: Ikone
// TODO: Linkovi na interne stranice
?>

<section class="programs-home main-section">
  <div class="container">
    <h1 class="section-heading">Studentski Programi</h1>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-desktop"></i>
      <?php postsInCategory('Informatička Sekcija', 1, 20, 'full-section'); ?>
      <a href="#" class="home-program_button">Informatička Sekcija <i class="fa fa-chevron-right"></i></a>
    </div>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-book"></i>
      <?php postsInCategory('Novinarska Sekcija', 1, 20, 'full-section'); ?>
      <a href="#" class="home-program_button">Informatička Sekcija <i class="fa fa-chevron-right"></i></a>
    </div>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-users"></i>
      <?php postsInCategory('Studentski Zbor', 1, 20, 'full-section'); ?>
      <a href="#" class="home-program_button">Informatička Sekcija <i class="fa fa-chevron-right"></i></a>
    </div>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-futbol-o"></i>
      <?php postsInCategory('Sportska Udruga', 1, 20, 'full-section'); ?>
      <a href="#" class="home-program_button">Informatička Sekcija <i class="fa fa-chevron-right"></i></a>
    </div>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-graduation-cap"></i>
      <?php postsInCategory('Alumni', 1, 20, 'full-section'); ?>
      <a href="#" class="home-program_button">Informatička Sekcija <i class="fa fa-chevron-right"></i></a>
    </div>

    <div class="home-program third-section subsection">
      <i class="home-program_icon fa fa-money"></i>
      <?php postsInCategory('EU Fond', 1, 20, 'full-section'); ?>
      <a href="#" class="home-program_button">Informatička Sekcija <i class="fa fa-chevron-right"></i></a>
    </div>
  </div>
</section>
