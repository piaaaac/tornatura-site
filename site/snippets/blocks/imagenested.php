<?php

/** @var \Kirby\Cms\Block $block */

$image = $block->image()->toFile();
$link  = $block->link()->value();
?>

<?php if ($image): ?>
  <figure class="block-image-nested">
    <?php if ($link): ?>
      <a href="<?= esc($link) ?>" target="_blank">
        <img src="<?= $image->url() ?>" alt="<?= esc($image->alt()->or($image->filename())) ?>">
      </a>
    <?php else: ?>
      <img src="<?= $image->url() ?>" alt="<?= esc($image->alt()->or($image->filename())) ?>">
    <?php endif ?>
  </figure>
<?php endif ?>