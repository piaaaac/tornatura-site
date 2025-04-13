<?php
$openingImage = $page->openingImage()->toFiles()->first();
$openingImageUrl = ($openingImage) ? $openingImage->url() : "https://placehold.co/1400x800/000000/666666/png";
?>

<section class="home-opening-image" style="background-image: url(<?= $openingImageUrl ?>);">
</section>

<section>
  <div class="container-fluid no-max-width">
    <div class="row">
      <div class="col-lg-7 col-xl-8">
        <h2><?= $page->openingText1()->kti() ?></h2>
      </div>
      <div class="col-lg-5 col-xl-5"><?= $page->openingText2()->kt() ?></div>
    </div>
  </div>
</section>