<?php
$articles = page("news")->children()->listed()->sortBy("date", "desc");
?>

<?php snippet("header") ?>

<section class="bg-melma">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 my-5 py-3">
        <h4>News ed eventi</h4>
      </div>

      <?php snippet("article-previews", ["articles" => $articles]) ?>

    </div>
  </div>
</section>

<?php snippet("footer", ["menuOptions" => ["classes" => ["melma"]]]) ?>