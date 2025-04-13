<?php

/**
 * @param project - Kirby page
 */

$coverImage = null;
$coverImageUrl = "https://placehold.co/600x400/F0F0F0/F0F0F0";
$coverImagePosition = "center center";
if ($project->coverImg()->isNotEmpty()) {
  $coverImage = $project->coverImg()->toFile();
  $coverImageUrl = $coverImage->url();
  if ($coverImage->focus()->isNotEmpty()) {
    $coverImagePosition = $coverImage->focus();
  }
}
?>

<div class="col-md-6 col-xl-4">
  <div>
    <a href="<?= $project->url() ?>">
      <p class="mb-2"><?= $project->title() ?></p>

      <!-- <div class="project-prev-image" style="background-image: url('<?= $coverImageUrl ?>'); background-position: <?= $coverImagePosition ?>;"></div> -->

      <img class="img-fluid" src="https://placehold.co/600x400/F0F0F0/F0F0F0">

    </a>
  </div>
  <div class="space-2"></div>
</div>