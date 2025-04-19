<?php

/**
 * @param article Kirby Page
 */

$url = $article->url();
$title = $article->title();
$image = $article->coverImg()->toFile()->url();
$label = $article->tags();
?>

<a class="article-preview" href="<?= $url ?>">
  <div class="image-cont">
    <div class="image" style="background-image: url('<?= $image ?>');"></div>
    <div class="pattern"></div>
  </div>
  <div class="text">
    <div class="label"><?= $label ?></div>
    <div class="title"><?= $title ?></div>
  </div>
</a>