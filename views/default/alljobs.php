<?php include 'header.php'; ?>

<?php include 'flash.php'; ?>
<!-- Missing Header -->

<div class="container" style="padding-top:2em;">
    <h2>Latest <b style="color:#0693b6;">Jobs</b></h2>
    <?php include 'search-form.php'; ?>

<hr>

<?php foreach($categories as $category): ?>
<div class="list-group">
<?php foreach($jobs[$category->id] as $job): ?>
    <a class="list-group-item <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">
        <?php if ($job->logo != ''): ?>
            <img src="<?php echo ASSET_URL ."images/thumb_{$job->logo}"; ?>" alt="" class="img-thumbnail">
        <?php endif; ?>
    <h4 style="margin-bottom: 0px;">
        <span class="job-title"><?php _e($job->title); ?></span>&nbsp;
        <span class="job-company"><?php _e($job->company_name); ?></span>
        <span class="badge pull-right">Posted on <?php niceDate($job->created); ?></span>
    </h4>
    </a>
<?php endforeach; ?>

    
</div>

<?php endforeach; ?>
</div>


<?php include 'footer.php'; ?>