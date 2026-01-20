<?php

/**
 * @param noPadding boolean
 * @param embed boolean
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="content-language" content="en">

  <?php snippet('seo/head'); ?>
  <?php snippet("favicon") ?>
  <?php snippet("load-scripts") ?>

  <script>
    window.siteUrl = '<?= $site->url() ?>';
    window.currentPage = '<?= $page->uid() ?>';
    window.currentTemplate = '<?= $page->template() ?>';
  </script>

  <?php if (!isset($embed) || !$embed): ?>
    <?php snippet("gdpr-banner") ?>
    <?php snippet("ga") ?>
  <?php endif; ?>

  <?php if (isset($embed) && $embed): ?>
    <script>
      new ResizeObserver(() => {
        const height = document.documentElement.scrollHeight;
        const msg = {
          iframeHeight: height
        };
        console.log("posting message", msg);
        parent.postMessage(msg, '*');
      }).observe(document.documentElement);
    </script>
  <?php endif; ?>

</head>

<body>
  <main class="<?= (isset($noPadding) && $noPadding) ? 'no-padding' : '' ?>">