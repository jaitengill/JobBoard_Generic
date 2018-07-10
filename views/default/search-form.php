<!-- search -->


<div class="boxed boxed--lg bg--white text-center">
    <form class="form--horizontal row" role="form" method="post" action="<?php _e(BASE_URL . 'search/'); ?>">
        <div class="col-md-8">
            <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">
            <input type="text" name="terms" placeholder="Search for a Job" />
        </div>

        <div class="col-md-4">
            <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">

             <a class="btn btn--primary type--uppercase" style="width:100%; margin-top:10px; color:#fff;" href="<?php _e(BASE_URL); ?>jobs/new" <?php if (ALLOW_JOB_POST == INACTIVE) { echo 'disabled'; } ?>>
            <?php echo $lang->t('jobs|post_job'); ?>  </a>
        </div>
    </form>
</div>