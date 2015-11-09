<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>
        <!-- Main jumbotron for a primary marketing message or call to action -->
    <div id="interior-jumbo" class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1><?php echo metadata('exhibit', 'title'); ?></h1>
            <p class="serif blurb"></p>
          </div>
        </div>
        <div class="row video-row">

            <div class="col-md-6 col-md-offset-3">
              <div class="video-box thumbnail">
                <img src="img/video1.jpg">
              </div>
            </div>
        </div>
      </div>
    </div>
<div class="container">

<?php echo exhibit_builder_page_nav(); ?>

<div id="primary">
<?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
<div class="exhibit-description">
    <?php echo $exhibitDescription; ?>
</div>
<?php endif; ?>

<?php if (($exhibitCredits = metadata('exhibit', 'credits'))): ?>
<div class="exhibit-credits">
    <h3><?php echo __('Credits'); ?></h3>
    <p><?php echo $exhibitCredits; ?></p>
</div>
<?php endif; ?>
</div>

<?php
$pageTree = exhibit_builder_page_tree();
if ($pageTree):
?>
<nav id="exhibit-pages">
    <?php echo $pageTree; ?>
</nav>
<?php endif; ?>
</div>
<?php echo foot(); ?>
