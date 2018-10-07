<?php

/*
 * Homepage
 * Front page controller
 */
$app->get('/all', function ($page=null) use ($app) {
    
    global $categories;
    global $lang;
    
    if (isset($page) && $page != '') {
        $content = R::findOne('pages', ' url=:url ', array(':url'=>$page));
        if ($content && $content->id) {
            
            // show page information
            $seo_title = $content->name .' | '. APP_NAME;
            $seo_desc = excerpt($content->description);
            $seo_url = BASE_URL . $page;

            $app->render(THEME_PATH . 'page.php', 
                    array('lang' => $lang,
                        'seo_url'=>$seo_url, 
                        'seo_title'=>$seo_title, 
                        'seo_desc'=>$seo_desc, 
                        'content'=>$content));
        } else {
            $app->flash('danger', $lang->t('alert|page_not_found'));
            $app->redirect(BASE_URL, 404);
        }
    } else {
        
        // show list of job
        $seo_title = APP_NAME;
        $seo_desc = APP_DESC;
        $seo_url = BASE_URL;
    
        $j = new Jobs();
        foreach ($categories as $cat) {
            $jobs[$cat->id] = $j->getJobs(ACTIVE, $cat->id, 0, HOME_LIMIT);
        }
        
        $app->render(THEME_PATH . 'alljobs.php', 
                    array('lang' => $lang,
                        'seo_url'=>$seo_url, 
                        'seo_title'=>$seo_title, 
                        'seo_desc'=>$seo_desc,
                        'jobs'=>$jobs));
    }
});