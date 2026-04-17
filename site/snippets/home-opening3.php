<?php
$ass = $kirby->url("assets") . "/images";
$mockupImages = [
  $ass . "/home-opening3/mockup-1.png",
  $ass . "/home-opening3/mockup-2.png",
  $ass . "/home-opening3/mockup-3.png",
];
$mockupSpacer = $ass . "/home-opening3/mockup-spacer.png";
$bgImage = $ass . "/home-opening3/bg-image-a.jpg";
$leafPattern = $ass . "/patterns/pattern-w0.2.svg";
?>

<section class="home-opening3" style="background-image: url('<?= $bgImage ?>');">
  <div class="bg-2" style="background-image: url('<?= $leafPattern ?>');"></div>
  <div class="text">
    <div>
      <h2><em>L'Intelligenza Artificiale</em><br />per un'agricoltura più <br class="d-none d-sm-inline" />sostenibile e&nbsp;produttiva</h2>
      <p><a class="font-sans-s upper button py-2 px-3" href="https://app.tornatura.it">Scopri la web app</a></p>
    </div>
  </div>
  <div class="mockups">
    <img src="<?= $mockupSpacer ?>" class="mockup-spacer" alt="">
    <?php foreach ($mockupImages as $i => $url): ?>
      <img
        src="<?= $url ?>"
        class="mockup"
        style="--i: <?= $i ?>;"
        alt="">
    <?php endforeach ?>
  </div>
</section>

<section>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-lg-6 align-self-center my-5">
        <h3><strong>Cos'è Tornatura</strong></h3>
        <p>Tornatura è una piattaforma gratuita che usa l’intelligenza artificiale per aiutare agricoltori e agronomi a prevedere i rischi fitosanitari e gestire meglio i trattamenti. Incrocia dati meteo, immagini satellitari e informazioni dal campo per trasformare la complessità in indicazioni chiare e operative.</p>
        <!--  
        <p class="my-4">
          <a href="<?= page("cos-e-tornatura")->url() ?>" class="font-sans-s upper button py-2 px-3">Scopri come funziona</a>
        </p>
        -->
      </div>
      <div class="col-lg-5 my-5">
        <img src="<?= $ass ?>/home-opening3/hp-intro-1.jpg" class="w-100 rounded-more" alt="Demo visualization of the Tornatura web app" />
      </div>
      <div class="col-lg-5 my-5">
        <img src="<?= $ass ?>/home-opening3/hp-intro-2.jpg" class="w-100 rounded-more" alt="Using Tornatura in the field" />
      </div>
      <div class="col-lg-6 offset-lg-1 align-self-center my-5">
        <h3><strong>Tornatura è open source e gratuita</strong></h3>
        <p>Puoi usarla subito, senza costi e senza vincoli. Inserisci i tuoi campi, osserva i dati, consulta le mappe di rischio e supporta le decisioni agronomiche con informazioni aggiornate e localizzate.</p>
        <p class="my-4">
          <a href="https://app.tornatura.it" target="_blank" class="font-sans-s upper button py-2 px-3">Apri la web app</a>
        </p>
      </div>
    </div>
  </div>
</section>

<?php /*  
<section>
  <div class="container-fluid no-max-width">
    <div class="row">
      <div class="col-xl-6 d-flex align-items-center">
        <div px-5>
          <h2>Cos'è Tornatura</h2>
          <!-- <p><?= $page->openingText1()->kti() ?></p> -->
          <p>Tornatura è una piattaforma gratuita che usa l’intelligenza artificiale per aiutare agricoltori e agronomi a prevedere i rischi fitosanitari e gestire meglio i trattamenti. Incrocia dati meteo, immagini satellitari e informazioni dal campo per trasformare la complessità in indicazioni chiare e operative.</p>
          <p><a class="button">Scopri come funziona</a></p>
        </div>
      </div>
      <div class="col-xl-6 d-flex align-items-center">
        <img src="http://tornatura-site.test/media/pages/home/e5bd0b50ca-1772099804/demo-viz.png" class="w-100 rounded" />
      </div>
      <div class="col-12 space-4"></div>
    </div>
  </div>
</section>
<section class="p-0">
  <img src="<?= $photographUrl ?>" class="img-fluid d-block" alt="<?= $page->title()->html() ?>" />
</section>
*/ ?>