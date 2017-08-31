<html>
<head>
    <!-- Google Tag Manager -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/gtm/js?id=GTM-KNSS957&amp;t=gtm2&amp;cid=377773536.1504097327"></script><script type="text/javascript" async="" src="http://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="http://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-PW2DCDC"></script><script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PW2DCDC');
    </script>
    <!-- End Google Tag Manager -->

    <meta name="theme-color" content="#f2c400">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f2c400">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/assets/img/favico.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php if( is_front_page() ) { ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/frontpage.css" />
    <?php } ?>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body<?php body_class(); ?>>
