<!doctype html>
<html lang="<?= pll_current_language() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Live Product Hunt launch dashboard for Open Graph Examples - Advice, helpful content, and tools to make your Open Graph social cards stand out.. See competitors, upvotes, comments, reviews, and more." />

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="<?= preg_replace('#^https?://#i', '', get_home_url() ); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= get_the_title() ?>" />
    <meta property="og:description" content="<?= get_bloginfo('description') ?>" />
    <meta property="og:image" content="https://hunted.space/api/productOg?title=Open%20Graph%20Examples&description=Advice%20and%20tools%20for%20your%20Open%20Graph%20cards%20to%20stand%20out&url=https%3A%2F%2Fwww.producthunt.com%2Fposts%2Fopen-graph-examples%3Futm_campaign%3Dproducthunt-api%26utm_medium%3Dapi-v2%26utm_source%3DApplication%253A%2Bhunted%2Bspace%2Bstaging%2B%2528ID%253A%2B97729%2529&imageUrl=https%3A%2F%2Fph-files.imgix.net%2Fc74c5c2d-5b51-4747-87dc-45f5b7e85c84.jpeg" />

    <!-- Twitter -->
    <meta property="twitter:domain" content="<?= get_bloginfo() ?>" />
    <meta property="twitter:url" content="<?= get_home_url() ?>" />
    <meta property="twitter:image" content="https://hunted.space/api/productOg?title=Open%20Graph%20Examples&description=Advice%20and%20tools%20for%20your%20Open%20Graph%20cards%20to%20stand%20out&url=https%3A%2F%2Fwww.producthunt.com%2Fposts%2Fopen-graph-examples%3Futm_campaign%3Dproducthunt-api%26utm_medium%3Dapi-v2%26utm_source%3DApplication%253A%2Bhunted%2Bspace%2Bstaging%2B%2528ID%253A%2B97729%2529&imageUrl=https%3A%2F%2Fph-files.imgix.net%2Fc74c5c2d-5b51-4747-87dc-45f5b7e85c84.jpeg" />

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body>