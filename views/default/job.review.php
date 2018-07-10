<?php include 'header.php'; ?>

<div class="container">
  <div class="wizard">
<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="sk_test_BQokikJOvBiI2HlWgH4olfQ2"
          data-description="Access for a year"
          data-amount="5000"
          data-locale="auto"></script>
      <h5><?php echo $lang->t('jobs|step2'); ?> </h5>
      <section>
        <h2 style="margin-left: -15px;"><?php echo $lang->t('jobs|review_ad'); ?></h2>
        <p class="lead" style="margin-left: -15px;"><?php echo $lang->t('jobs|describe_position'); ?></p>
        <form class="row" role="form" action="<?php _e(BASE_URL . "jobs/{$job->id}/publish/{$job->token}"); ?>" method="post" enctype="multipart/form-data">
            <div class="row col-md-12">
                <label><?php echo $lang->t('jobs|title'); ?></label>
                <input type="text" id="title" name="title" value="<?php _e($job->title); ?>" />
            </div>
            <div class="row col-md-12">
              <div class="col-md-6">
                  <label><?php echo $lang->t('jobs|category'); ?></label>
                  <div class="input-select">

                      <select name="category" id="category">
                        <?php foreach($categories as $category): ?>
                            <option value="<?php _e($category->id); ?>" <?php if($category->id == $job->category) { _e("selected"); } ?>><?php _e($category->name); ?></option>
                        <?php endforeach; ?>
                      </select>

                  </div>
              </div>
              <div class="col-md-6">
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
              <textarea id="description" data-provide="markdown" name="description" rows="15" required ><?php _e($job->description, 'input'); ?></textarea>
            </div>

            <div class="row col-md-12">
              <div class="col-md-6">
                  <label>Compensation:</label>
                  <textarea id="perks" name="perks" placeholder="100,000 GBP Yearly" rows="2" ><?php _e($job->perks, 'input'); ?></textarea>
              </div>
              <div class="col-md-6">
                  <label><?php echo $lang->t('jobs|how_to_apply'); ?></label>
                  <textarea id="how_to_apply" name="how_to_apply" placeholder="Please send your resume to hr@ourcompany.com" rows="2"><?php _e($job->how_to_apply, 'input'); ?></textarea>
              </div>
            </div>
            
            <div class="col-md-12 row">
              <h2><?php echo $lang->t('jobs|company'); ?></h2>
              <p class="lead"><?php echo $lang->t('jobs|company_info'); ?></p>
            </div>

            <div class="row col-md-12">
                <?php if ($job->logo != ''): ?>
<!--                   <img src="<?php echo ASSET_URL ."images/thumb_{$job->logo}"; ?>" alt="" class="img-thumbnail" style="width:100px; height:100px; border-radius:100px;">  
 -->                <?php endif; ?>
            </div>

            <div class="row col-md-12">
              <div class="col-md-6">
                  <label><?php echo $lang->t('jobs|company_name'); ?></label>
                  <input id="company_name" name="company_name" value="<?php _e($job->company_name); ?>" required />
              </div>
        
              <div class="col-md-6">

                  <label><?php echo $lang->t('jobs|logo'); ?></label>
                  <input type="file" class="filestyle" data-classButton="btn btn-default btn-lg" id="logo" name="logo" accept="image/*" data-buttonText="<?php echo $lang->t('jobs|btn_logo'); ?>" />
              </div>
            </div>

            <div class="row col-md-12">
              <div class="col-md-6">
                  <label><?php echo $lang->t('jobs|website'); ?></label>
                  <input id="url" name="url" type="url" value="<?php _e($job->url); ?>"/>
              </div>
              <div class="col-md-6">
                  <label><?php echo $lang->t('jobs|email'); ?></label>
                  <input type="email" name="email" id="email" placeholder="Email Address" value="<?php _e($job->email); ?>" disabled required/>
              </div>
            </div>

            <div class="col-md-12">
                <input type="hidden" name="id" value="<?php _e($job->id); ?>" />
                <input type="hidden" name="token" value="<?php _e($job->token); ?>" />
                <input type="hidden" name="trap" value="" />
                <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">
                <button type="submit" class="btn btn--primary" value="<?php echo $lang->t('jobs|btn_submit'); ?>">Submit Your Ad <button/>
           
            </div>
        </form>
      </section>
      <h5><?php echo $lang->t('jobs|step2'); ?></h5>
      <section>
        zzzzz
      </section>
      <h5>Payment</h5>
      <section>
        ... Panel Content ...
      </section>
      <h5><?php echo $lang->t('jobs|step3'); ?></h5>
      <section>
        ... Panel Content ...
      </section>
  </div>
</div>



<?php include 'footer.php'; ?>
