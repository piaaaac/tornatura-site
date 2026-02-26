<?php
$ass = $kirby->url("assets") . "/images";

$openingImageMob = $page->openingImageMob()->toFiles()->first();
$openingImageMobUrl = ($openingImageMob) ? $openingImageMob->url() : "https://placehold.co/800x1400/000000/666666/png";
$openingImageDsk = $page->openingImageDsk()->toFiles()->first();
$openingImageDskUrl = ($openingImageDsk) ? $openingImageDsk->url() : "https://placehold.co/1400x800/000000/666666/png";


// $openingImageMobUrl = "$ass/hp-opening-image-t.jpg";
// $openingImageDskUrl = "$ass/hp-opening-image-t.jpg";

$photographUrl = "$ass/vines.jpg";
?>

<section class="home-opening2-image" data-role="opening-image">
  <div class="image only-mob" style="background-image: url('<?= $openingImageMobUrl ?>');"></div>
  <div class="image only-dsk" style="background-image: url('<?= $openingImageDskUrl ?>');"></div>
</section>

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