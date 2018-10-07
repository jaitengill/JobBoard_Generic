<?php include 'header.php'; ?>


<div class="container">
      <div class="wizard clearfix active" style="padding-bottom: 2em;" role="application" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Create</a></li><li role="tab" class="current" aria-disabled="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="number">2.</span> Review</a></li><li role="tab" class="current" aria-disabled="true"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="number">3.</span> Payment</a></li><li role="tab" class="current last" aria-disabled="true"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="number">4.</span> Publish</a></li></ul></div></div>    


  <section class="col-md-12" style="padding-top:2em !important;">


    <?php include 'flash.php'; ?>
    <div class="row">
        <div class="col-md-6" style="text-align: center; float: none; margin: 0 auto;">
            <h2>Success! An email has been sent please click the link in the body to activate - <?php _e($job->title); ?></h2>
            <span class="description">If you have any issues or concerns please contact us at info@healthcareprjobs.london</span>
        </div>
    </div>

</section>
<?php include 'footer.php'; ?>