<?php
$articles = page("news")->children()->listed();
?>

<section class="bg-melma">

  <div class="container-fluid">
    <div class="row">

      <div class="col-12 my-5 py-3 d-flex align-items-center justify-content-between">
        <h4>News ed eventi</h4>
        <a class="button" href="<?= page("news")->url() ?>">Tutte le news</a>
      </div>

      <?php snippet("article-previews", [
        "articles" => $articles,
        "limit" => 3,
      ]) ?>

      <!--         
      <div class="col-12 mb-5 pb-3 text-center">
      </div>
      -->

    </div>
  </div>

</section>