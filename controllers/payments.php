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
    
    $app->post('/job', 'isBanned','isJobPostAllowed', function () use ($app) {
        
        global $categories, $cities;
        global $lang;
        
        $token  = $_POST['stripeToken'];
        $email  = $_POST['stripeEmail'];

        $customer = \Stripe\Customer::create(array(
          'email' => $email,
          'source'  => $token
        ));

        $charge = \Stripe\Charge::create(array(
          'customer' => $customer->id,
          'amount'   => 90,
          'currency' => 'gbp'
        ));

       
    });
   
    
});