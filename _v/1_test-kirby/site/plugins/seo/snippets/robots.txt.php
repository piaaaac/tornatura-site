<?php

use Kirby\Toolkit\A;

if ($content = option('tobimori.seo.robots.content')) {
  if (is_callable($content)) {
    $content = $content();
  }

  if (is_array($content)) {
    $str = [];

    foreach ($content as $ua => $data) {
      $str[] = 'User-agent: ' . $ua;
      foreach ($data as $type => $values) {
        foreach ($values as $value) {
          $str[] = $type . ': ' . $value;
        }
      }
    }

    $content = A::join($str, PHP_EOL);
  }

  echo $content;
} else {
  // output default
  echo "User-agent: *\n";

  $index = option('tobimori.seo.robots.index');
  if (is_callable($index)) {
    $index = $index();
  }

  if ($index) {
    echo "Allow: /";
    echo "\nDisallow: /panel";
  } else {
    echo "Disallow: /";
  }
}

if ($sitemap = option('tobimori.seo.robots.sitemap')) {
  echo "\n\nSitemap: {$sitemap}";
}
