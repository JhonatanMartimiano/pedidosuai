<?php
if (strpos(url(), "localhost")) {
    /**
     * CSS
     */
    $minCSS = new MatthiasMullie\Minify\CSS();
    $minCSS->add(__DIR__ . "/../../../themes/site/assets/css/bootstrap_customized.css");
    $minCSS->add(__DIR__ . "/../../../themes/site/assets/css/style.css");
    $minCSS->add(__DIR__ . "/../../../themes/site/assets/css/home.css");
    $minCSS->add(__DIR__ . "/../../../themes/site/assets/css/custom.css");

    //Minify CSS
    $minCSS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/style.css");

    /**
     * JS
     */
    $minJS = new MatthiasMullie\Minify\JS();
    $minJS->add(__DIR__ . "/../../../themes/site/assets/js/common_scripts.js");
    $minJS->add(__DIR__ . "/../../../themes/site/assets/js/common_func.js");
    $minJS->add(__DIR__ . "/../../../themes/site/assets/js/typed.min.js");

    //Minify JS
    $minJS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/scripts.js");
}