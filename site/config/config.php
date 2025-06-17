<?php

return [

  // Data
  "site" => [
    "menuTitle" => "Tornatura",
  ],

  // Kirby Configuration
  "debug" => true,
  "whoops" => true,
  "routes" => require_once 'routes.php',
  // "hooks" => require_once "hooks.php", // currently []
  "assets" => [
    "version" => "0.1.18",
  ],
  "thumbs" => [
    "presets" => [
      "default" => ["width" => 1024, "quality" => 80],
    ]
  ],
  'tobimori.seo.canonicalBase' => "https://tornatura.it",
  'tobimori.seo.lang' => 'it_IT',
  'tobimori.seo.robots' => [
    'active' => true,
    'content' => [
      'facebookexternalhit' =>  ['Disallow' => []],
      'Twitterbot' =>           ['Disallow' => []],
      'Googlebot' =>            ['Disallow' => ["/nogooglebot/"]],
    ]
  ],

];
