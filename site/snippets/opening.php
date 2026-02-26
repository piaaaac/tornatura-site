<?php
$title = $page->openingTitle()->isNotEmpty() ? $page->openingTitle()->kti() : $page->title();
$subtitle = $page->openingSubtitle()->kt();
$image = $page->openingImage()->isNotEmpty() ? $page->openingImage()->toFile() : null;
$imageUrl = $image ? $image->url() : null;
$imageCss = $image ? "url('$imageUrl')" : "none";
?>

<section class="page-opening" style="background-image: <?= $imageCss ?>;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2 text-white">
        <div class="space-8"></div>
        <h1 class="page-opening-title"><strong><?= $title ?></strong></h1>
        <?php if ($subtitle): ?>
          <h2 class="page-opening-subtitle"><?= $subtitle ?></h2>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>