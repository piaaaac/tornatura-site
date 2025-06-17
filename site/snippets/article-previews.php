<?php

/**
 * @param articles Kirby\Cms\Pages
 * @param limit int
 */
$lim = isset($limit) ? $limit : 1000;
?>


<?php if ($articles->count() == 0): ?>
  <div class="col-12 my-5">
    <p class="mb-5">Nessun elemento</p>
  </div>
<?php else: ?>
  <?php foreach ($articles->limit($lim) as $article): ?>

    <div class="col-sm-6 col-lg-4 mb-4">
      <?php snippet("article-item-preview", ["article" => $article]) ?>
    </div>

  <?php endforeach ?>
  <div class="col-12 space-3"></div>
<?php endif ?>