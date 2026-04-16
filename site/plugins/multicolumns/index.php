<?php


Kirby::plugin('piaaaac/multicolumns', [
  'blocks' => [
    'multicolumns' => [
      'preview' => 'multicolumns', // optional if you want a PHP preview
    ]
  ],
  'panel' => [
    'js'  => 'index.js',
    'css' => 'index.css'
  ]
]);




// Kirby::plugin('piaaaac/block-previews', [
//   'areas' => [
//     'block-previews' => function () {
//       return [
//         'css' => __DIR__ . '/assets/index.css',
//         'js' => __DIR__ . '/assets/index.js',
//       ];
//     }
//   ]
// ]);
