<?php
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show'));
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div id="interior-jumbo" class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1><?php echo metadata('exhibit_page', 'title'); ?></h1>
        <p class="serif blurb"><?php echo metadata('exhibit', 'description'); ?></p>
      </div>
    </div>
<!--     <div class="row video-row">

        <div class="col-md-6 col-md-offset-3">
          <div class="video-box thumbnail">
            <img src="http://findyourvoicehartford.org/files/fullsize/c05cf1301e6781c7e6eabbcfb342250d.jpg">
          </div>
        </div>
    </div> -->
  </div>
</div>

<div class="container">

<!-- <h1><span class="exhibit-page"><?php echo metadata('exhibit_page', 'title'); ?></span></h1> -->

<div id="exhibit-blocks">
<?php exhibit_builder_render_exhibit_page(); ?>
</div>

<div id="exhibit-page-navigation">
    <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
    <div id="exhibit-nav-prev">
    <?php echo $prevLink; ?>
    </div>
    <?php endif; ?>
    <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
    <div id="exhibit-nav-next">
    <?php echo $nextLink; ?>
    </div>
    <?php endif; ?>
    <div id="exhibit-nav-up">
    <?php echo exhibit_builder_page_trail(); ?>
    </div>
</div>

<nav id="exhibit-pages">
    <h4><?php echo exhibit_builder_link_to_exhibit($exhibit); ?></h4>
    <?php echo exhibit_builder_page_tree($exhibit, $exhibit_page); ?>
</nav>
</div>
<?php echo foot(); ?>
