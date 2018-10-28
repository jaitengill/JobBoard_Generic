<?php include 'header.php'; ?>

<div class="container">
  <!--todo - need to move this somewhere else -->  
  <div class="wizard clearfix active" style="padding-bottom: 2em;" role="application" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Create</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="number">2.</span> Review</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="number">3.</span> Payment</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="number">4.</span> Publish</a></li></ul></div></div>    

  <section class="col-md-12" style="background: #fafafa; border-radius:10px; padding-top: 1.5em;">

    <h2><?php echo $lang->t('jobs|create_ad'); ?></h2>
    <p><?php echo $lang->t('jobs|describe_position'); ?></p>
    <form class="row" role="form" action="<?php _e(BASE_URL); ?>jobs/review" method="post" enctype="multipart/form-data">
      <div class="row" style="padding-bottom: 20px; margin:15px !important;">
        <div class="row col-md-12">
            <label><?php echo $lang->t('jobs|title'); ?></label>
            <input type="text" id="title" name="title" placeholder="Type Name Here" />
        </div>
        <div class="row col-md-12">
          <div class="col-md-6">
              <label><?php echo $lang->t('jobs|category'); ?></label>
              <div class="input-select">
                  <select name="category" id="category">
                    <?php foreach($categories as $category): ?>
                      <option value="<?php _e($category->id); ?>"><?php _e($category->name); ?></option>
                    <?php endforeach; ?>
                  </select>

              </div>
          </div>
          <div class="row col-md-6">
              <label><?php echo $lang->t('jobs|city'); ?></label>
              <div class="input-select">
                  <select name="city" id="city">
                    <?php foreach($cities as $city): ?>
                    <option value="<?php _e($city->id); ?>"><?php _e($city->name); ?></option>
                    <?php endforeach; ?>
                  </select>
              </div>
          </div>
        </div>
        <div class="row col-md-12">
            <label><?php echo $lang->t('jobs|description'); ?></label>
            <textarea id="description" data-provide="markdown" name="description" rows="15" required ></textarea>
            <p class="help-block"><?php echo $lang->t('jobs|accepts'); ?> <a href="http://daringfireball.net/projects/markdown/syntax" target="_blank">MarkDown</a></p>            
        </div>
        <div class="row col-md-12">
          <div class="col-md-6">
              <label>Salary:</label>
              <textarea id="perks" name="perks" placeholder="eg. £100,000/yearly" rows="2" ></textarea>
          </div>
          <div class="col-md-6">
              <label><?php echo $lang->t('jobs|how_to_apply'); ?></label>
              <textarea id="how_to_apply" name="how_to_apply" placeholder="Please send your resume to hr@ourcompany.com" rows="2"></textarea>
          </div>
        </div>
      </div>  
      <div class="row" style="margin: 15px !important;">
        <div class="col-md-12 row">

          <h2><?php echo $lang->t('jobs|company'); ?></h2>
          <p class="lead"><?php echo $lang->t('jobs|company_info'); ?></p>
        </div>
        <div class="col-md-12 row">
          <div class="col-md-6">
              <label><?php echo $lang->t('jobs|company_name'); ?></label>
              <input id="company_name" name="company_name" required />
          </div>
          <div class="col-md-6">
              <label><?php echo $lang->t('jobs|logo'); ?></label>
              <input type="file" name="logo" id="logo" accept="image/*" data-buttonText="<?php echo $lang->t('jobs|btn_logo'); ?>">
          </div>
        </div>
        <div class=" col-md-12 row">
          <div class="col-md-6">
              <label><?php echo $lang->t('jobs|website'); ?></label>
              <input id="url" name="url" />
          </div>
          <div class="col-md-6">
              <label><?php echo $lang->t('jobs|email'); ?></label>
              <input type="email" name="email" id="email" placeholder="Email Address" required/>
          </div>
        </div>
              </div>

        <div class="col-md-12">
            <input type="hidden" id="token" name="token" value="<?php _e($token); ?>" />
            <input type="hidden" id="trap" name="trap" value="" />
            <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">
            <button type="submit" value="<?php echo $lang->t('jobs|btn_review'); ?>" class="btn btn--primary">Review Your Ad</button>
        </div>
    </form>

  </section>

</div>

<?php include 'footer.php'; ?>