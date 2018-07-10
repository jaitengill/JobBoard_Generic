<?php include 'header.php'; ?>
<div class="container">
    <section class="space--sm" style="padding-top:3em; padding-bottom: 0.5em;">
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
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="switchable">
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
                            <?php _e($job->city); ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="cta">
                        <h2>Sound like the job for you?</h2>
                        <p class="lead">
                            <?php _e($job->how_to_apply,'r'); ?>
                        </p>
                        <a class="btn btn--primary type--uppercase" href="<?php _e(BASE_URL . "apply/{$job->id}"); ?>">
                            <span class="btn__text">
                                Apply Now
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
</div>

<?php include 'footer.php'; ?>