<?php

Kirby::plugin('ap/extensions', [

  'siteMethods' => [
    'getAllTags' => function () {
      $allTags = [];
      $allArticles = site()->pages()->index()->template("article");
      foreach ($allArticles as $article) {
        foreach ($article->tags()->split() as $tag) {
          if (!in_array($tag, $allTags)) {
            $allTags[] = $tag;
          }
        }
      }
      return $allTags;
    }
  ],

  'pageModels' => [
    'article' => ArticlePage::class,
  ]

]);


class ArticlePage extends Page
{
  public function getAllTags()
  {
    // return ["test", "test2"];
    $pageTags = [];
    $allArticles = site()->pages()->index()->template("article");
    foreach ($allArticles as $article) {
      foreach ($article->tags()->split() as $tag) {
        $pageTags[] = $tag;
      }
    }
    return $pageTags;
  }
}
