<!DOCTYPE html>
<head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title><?php echo $site_title; ?></title>
<?php if ( isset( $meta_description ) ) { ?>
<meta name="description" content="<?php echo $meta_description; ?>">
<?php } ?>
<link type="text/css" rel="stylesheet" href="/themes/default/assets/css/style.css">
<script type="text/javascript" language="JavaScript" src="/themes/default/assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" language="JavaScript" src="/themes/default/assets/js/alpine.min.js" defer></script>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="google-site-verification" content="<?php echo get_option( 'google_verify' ); ?>">
<?php if ( isset( $meta_robots ) ) { ?>
<meta name="robots" content="<?php echo $meta_robots; ?>"/>
<?php } ?>
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo get_option( 'site_name' ); ?>" />
<meta property="og:url" content="<?php echo canonical_url(); ?>">
<meta property="og:title" content="<?php echo $site_title; ?>">
<?php if ( isset( $meta_description ) ) { ?>
<meta property="og:description" content="<?php echo $meta_description; ?>">
<?php } ?>
<meta property="og:image" content="/themes/default/assets/img/cover.png">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo canonical_url(); ?>">
<meta property="twitter:title" content="<?php echo $site_title; ?>">
<?php if ( isset( $meta_description ) ) { ?>
<meta property="twitter:description" content="<?php echo $meta_description; ?>">
<?php } ?>
<meta property="twitter:image" content="/themes/default/assets/img/cover.png">
<link rel="preload" href="/themes/default/assets/css/style.css" as="style">
<link rel="preload" href="/themes/default/assets/js/jquery-3.5.1.min.js" as="script">
<link rel="preconnect" href="https://www.google-analytics.com">
<link rel="dns-prefetch" href="https://www.google-analytics.com">
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="dns-prefetch" href="https://www.googletagmanager.com">
<link rel="preconnect" href="https://cdn.jsdelivr.net">
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
</head>
<body class="antialiased">
<header class="p-2 md:py-4 items-center bg-white max-w-7xl mx-auto">
<div class="flex flex-row justify-between">
<div class="">
<div class="relative font-bold">
<a class="relative z-10 block rounded-md p-2 focus:outline-none cursor-pointer flex flex-row items-center" href="/"><span class="uppercase m-1"><?php echo get_option( 'site_name' ); ?></span></a></div>
</div>
<nav class="flex flex-row">
<div class="relative font-bold hover:shadow-md hover:bg-blue-500 hover:text-white rounded-md">
<a class="relative z-10 block rounded-md p-2 focus:outline-none cursor-pointer flex flex-row items-center" href="<?php echo page_permalink('faq'); ?>">
<span class="uppercase m-1">FAQ</span>
</a>
</div>
</nav>
</div>
</header>