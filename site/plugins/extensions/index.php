<?php

Kirby::plugin('ap/extensions', [

  'siteMethods' => [
    'getAllTags' => function () {
      $allTags = [];
      $allLinks = new Pages();
      $allLinks->add(site()->pages()->index()->template("link"));
      $allLinks->add(site()->pages()->index()->template("link-small"));
      foreach ($allLinks as $linkPage) {
        foreach ($linkPage->linkTags()->split() as $tag) {
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
