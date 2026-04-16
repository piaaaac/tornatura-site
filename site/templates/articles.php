<?php
$articles = page("news")->children()->listed()->sortBy("date", "desc");
?>

<?php snippet("header", ["noPadding" => true]) ?>

<?php snippet("opening") ?>

<section class="bg-melma">
  <div class="container-fluid">
    <div class="row">
      <?php snippet("article-previews", ["articles" => $articles]) ?>
    </div>
  </div>
</section>

<?php snippet("footer") ?>