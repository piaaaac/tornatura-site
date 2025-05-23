<?php

$pageTags = [];
$allArticles = site()->pages()->index()->template("article");
foreach ($allArticles as $article) {
  foreach ($article->tags()->split() as $tag) {
    if (!in_array($tag, $pageTags)) {
      $pageTags[] = $tag;
    }
  }
}

// $tags = site()->getAllTags();

kill($tags);






// $img = $p->files()->filterBy("template", "content-img")->first();
// kill($p->text());