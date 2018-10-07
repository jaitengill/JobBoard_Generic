<?php include 'header.php'; ?>

<div class="container">
  <!--todo - need to move this somewhere else -->  
  <div class="wizard clearfix active" style="padding-bottom: 2em;" role="application" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Create</a></li><li role="tab" class="current" aria-disabled="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="number">2.</span> Review</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="number">3.</span> Payment</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="number">4.</span> Publish</a></li></ul></div></div>    

  <section class="col-md-12" style="background: #fafafa; border-radius:10px; padding-top: 1.5em;">
    <h2><?php echo $lang->t('jobs|review_ad'); ?></h2>
    <a class="btn btn--primary" href="#" onclick="history.go(-1)" style="background: #71e8d2; border:none; margin-bottom: 1em;">
      <span class="btn__text">Edit Posting</span>
    </a>

    <section class="space--sm" style="background:#fff; padding-top:3em; padding-bottom: 0.5em;">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php _e($job->title); ?></h1>
                <?php if ($job->logo != ''): ?>
                    <img src="<?php echo ASSET_URL ."images/thumb_{$job->logo}"; ?>" alt="" class="img-thumbnail">
                <?php endif; ?>
                <br>
                <small class="muted"><?php echo $lang->t('jobs|posted'); ?> <?php niceDate($job->created); ?></small>
                <h5><?php _e($job->company_name); ?></h5>
                <h5><?php _e($city); ?> (<?php _e($category); ?>)</h5>
                <h5><a href="<?php _e($job->url); ?>" target="_blank"><?php _e(excerpt($job->url, 50)); ?></a></h5>
                <hr>
            </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-8 col-lg-7">
                <?php echo Parsedown::instance()->parse($job->description); ?>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="text-block">
                    <h5>Compensation</h5>
                    <?php if ($job->perks != ''): ?>
                    <p class="lead">
                        <?php _e($job->perks,'r'); ?>
                    </p>
                    <?php endif; ?>
                </div>
                <div class="text-block">
                    <h5>Location</h5>
                    <p>
                        <?php _e($city); ?>
                    </p>
                </div>
                <div class="text-block">
                    <h5>How to Apply</h5>
                    <p>
                        <?php _e($job->how_to_apply,'r'); ?>
                    </p>
                </div>
            </div>
          </div>
        </div>

    </section>
    <form class="row" role="form" action="<?php _e(BASE_URL . "payment/{$job->id}/{$job->token}"); ?>" method="post">
      <input type="hidden" name="id" value="<?php _e($job->id); ?>" />
      <input type="hidden" name="token" value="<?php _e($job->token); ?>" />
      <input type="hidden" name="trap" value="" />
      <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">
      <div class="col-md-6" style="float:none; margin:0 auto; padding-top: 30px;">
      <script
              src="https://checkout.stripe.com/checkout.js" class="stripe-button"
              data-key="pk_test_YngjOGM6lZecwKYEKavkGAHq"
              data-amount="9999"
              data-name="HealthcarePrJobs.london"
              data-description="Job Posting for 90 Days"
              data-image=""
              data-locale="auto">
            </script>
        </div>
    </form>
  
  </section>

</div>   
        
<?php include 'footer.php'; ?>
