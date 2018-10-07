<?php

/*
 * Homepage
 * Front page controller
 */
$app->get('/faq', function ($page=null) use ($app) {
    
    global $lang;

    // show list of job
    $seo_title = APP_NAME;
    $seo_desc = APP_DESC;
    $seo_url = BASE_URL;
    
    $app->render(THEME_PATH . 'faq.php', 
                array('lang' => $lang,
                    'seo_url'=>$seo_url, 
                    'seo_title'=>$seo_title, 
                    'seo_desc'=>$seo_desc));

});