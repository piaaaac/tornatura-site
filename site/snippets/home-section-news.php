<?php
$articles = page("news")->children()->listed();
?>

<section class="bg-melma">

  <div class="container-fluid">
    <div class="row">

      <div class="col-12 my-5 py-3">
        <h4>News ed eventi</h4>
      </div>

      <?php if ($articles->count() == 0): ?>
        <div class="col-12 my-5">
          <p class="mb-5">Nessun elemento</p>
        </div>
      <?php else: ?>
        <?php foreach ($articles as $article): ?>

          <div class="col-sm-6 col-lg-4 mb-4">
            <?php snippet("article-item-preview", ["article" => $article]) ?>
          </div>

        <?php endforeach ?>
        <div class="col-12 space-3"></div>
      <?php endif ?>


    </div>
  </div>

</section>