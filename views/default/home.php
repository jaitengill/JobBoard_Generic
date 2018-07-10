<?php include 'header.php'; ?>

<?php include 'flash.php'; ?>
<!-- Missing Header -->
<section class="bg--secondary text-center" style="padding-bottom: 1em; padding-top: 1em;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="typed-text typed-text--cursor" data-typed-strings="Find Healthcare PR Jobs in London ^3000, Find Medical Communcation Jobs in London ^3000"></h1>
                <p class="lead">
                    Browse Healthcare PR and Medical Communication jobs from high-profile employers in the UK
                </p>
                <?php include 'search-form.php'; ?>

            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<div class="container">
<?php foreach($categories as $category): ?>
<a name="<?php _e($category->url); ?>"></a>
<h3><?php _e($category->name); ?> <?php echo $lang->t('jobs|jobs'); ?> <a href="<?php _e(BASE_URL ."categories/{$category->id}/{$category->url}/rss"); ?>" target="_blank" class="badge job-rss">RSS</a></h3>
<div class="list-group">
<?php foreach($jobs[$category->id] as $job): ?>
    <a class="list-group-item <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">
    <h4 style="margin-bottom: 0px;">
        <span class="job-title"><?php _e($job->title); ?></span>&nbsp;
        <span class="job-company"><?php _e($job->company_name); ?></span>
        <span class="badge pull-right"><?php niceDate($job->created); ?></span>
    </h4>
    </a>
<?php endforeach; ?>
    <a class="list-group-item" href="<?php _e(BASE_URL ."categories/{$category->id}/{$category->url}"); ?>">
        <h5><?php echo $lang->t('jobs|view_all', $category->name); ?></h5>
    </a>
    
</div>
<p class="pull-right"><a href="#top"><?php echo $lang->t('jobs|back_to_top'); ?></a></p>

<?php endforeach; ?>
</div>


<?php include 'footer.php'; ?>