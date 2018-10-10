<?php
/**
 * Jobskee - open source job board
 *
 * @author      Elinore Tenorio <elinore.tenorio@gmail.com>
 * @license     MIT
 * @url         http://www.jobskee.com
 *
 * Subscriptions
 * Create and manage email subscriptions
 */

$app->group('/payment', function () use ($app) {
    
    $app->post('/:id/:token', 'isJobPostAllowed', 'isBanned', 'isValidReferrer', function ($id, $token) use ($app) {
        
        global $lang;

        $data = $app->request->post();
        $data = escape($data);
        
        $j = new Jobs($id);
        $job = $j->getJobFromToken($token);        
        $token  = $_POST['stripeToken'];
        $email  = $_POST['stripeEmail'];

        $customer = \Stripe\Customer::create(array(
            'email' => $email,
            'source'  => $token
        ));

        $charge = \Stripe\Charge::create(array(
            'customer' => $customer,
            'amount'   => 9999,
            'currency' => 'gbp'
        ));


        $data['email'] = $job->email;
        $data['token'] = $job->token;
        
        $data['title'] = $job->title;
        $data['category'] = $job->category;
        $data['city'] = $job->city;
        $data['description'] = $job->description;
        $data['perks'] = $job->perks;
        $data['how_to_apply'] = $job->how_to_apply;
        $data['company_name'] = $job->company_name;
        $data['logo'] = $job->logo;
        $data['url'] = $job->url;
        $data['is_featured'] = $job->is_featured;

        $data['is_featured'] = (isset($data['is_featured'])) ? 1 : 0;
        
        if ($data['trap'] != '' || !$job) {
            $app->redirect(BASE_URL . "jobs/new");
        }
        if (isset($_FILES['logo']) && $_FILES['logo']['name'] != '') {
            $file = $_FILES['logo'];
            $path = IMAGE_PATH;
            $data['logo'] = time() .'_'. $file['name'];
            $data['logo_type'] = $file['type'];
            $data['logo_size'] = $file['size'];
            
            $ext = strtolower(pathinfo($data['logo'], PATHINFO_EXTENSION));
            if (move_uploaded_file($file['tmp_name'], "{$path}{$data['logo']}") && isValidImageExt($ext)) {     
                 $resize = new ResizeImage("{$path}{$data['logo']}");
                 $resize->resizeTo(LOGO_H, LOGO_W);
                 $resize->saveImage("{$path}thumb_{$data['logo']}");
            } else {
                 $data['logo'] = '';
            }
        } else {
            $data['logo'] = $job->logo;
        }
        
        $data['step'] = 3;
        
        $j->jobCreateUpdate($data);
        if (!$j->getStatus()) {
            $app->flash('success', $lang->t('alert|activation_email', $job->email));
        } else {
            $app->flash('success', $lang->t('alert|edit_successful'));
        }
        
        
        $title = $j->getSlugTitle();
        $city = $j->getJobCity($job->city);
        $category = $j->getJobCategory($job->category);
        
        if (isset($job) && $job->id) {
            
            $seo_title = clean($job->title) .' | '. APP_NAME;
            $seo_desc = excerpt($job->description);
            $seo_url = BASE_URL ."jobs/{$id}/{$title}";
            
            $app->render(THEME_PATH . 'job.publish.php', 
                        array('lang' => $lang,
                            'seo_url'=>$seo_url, 
                            'seo_title'=>$seo_title, 
                            'seo_desc'=>$seo_desc, 
                            'job'=>$job, 
                            'city'=>$city, 
                            'category'=>$category));
        } else {
            $app->flash('danger', $lang->t('alert|error_encountered'));
            $app->redirect(BASE_URL . "jobs/{$id}/{$title}");
        }   
       
    });
   
    
});