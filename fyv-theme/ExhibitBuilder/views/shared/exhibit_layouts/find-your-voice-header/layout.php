<?php
$position = isset($options['file-position'])
    ? html_escape($options['file-position'])
    : 'left';
$size = isset($options['file-size'])
    ? html_escape($options['file-size'])
    : 'fullsize';
$captionPosition = isset($options['captions-position'])
    ? html_escape($options['captions-position'])
    : 'center';
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div id="interior-jumbo" class="jumbotron" >
  <div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
        <h2>Find Your Voice</h2>
        <h1><?php echo metadata('exhibit_page', 'title'); ?></h1>
  
      </div>

    </div>
  </div>
</div>





