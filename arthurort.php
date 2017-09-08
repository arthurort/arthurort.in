<?php
    /*
    Template Name: arthurort.in
    */
?>
<?php get_header(); ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript>&lt;iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PW2DCDC"
height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper">
        <div id="card">
            <h1><?php echo bloginfo("name"); ?></h1>
            <img id="arthurpp" src="<?php echo the_post_thumbnail_url(); ?>">
            <span id="desc"><?php echo bloginfo("description"); ?></span>
            <ul id="links">
                <li id="github" class="link"><a href="https://github.com/arthurort">GitHub</a></li>
                <li id="linkedin" class="link"><a href="https://fr.linkedin.com/in/arthurortin">Linkedin</a></li>
                <li id="twitter" class="link"><a href="https://twitter.com/Leyttow">Twitter</a></li>
                <li id="resume" class=" link"><a href="https://s3.eu-central-1.amazonaws.com/arthurort/public/CVARTHURORTIN.pdf">CV</a></li>
            </ul>
        </div>
    </div>

<?php get_footer() ?>
