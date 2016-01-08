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

$youtubeurl = isset($options['youtube-url'])
    ? $options['youtube-url']
    : '';

?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div id="interior-jumbo" class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1><?php echo metadata('exhibit_page', 'title'); ?></h1>
<!--         <p class="serif blurb"><?php echo metadata('exhibit', 'description'); ?></p> -->
        <p class="serif blurb"><?php echo $text; ?></p>
      </div>
      <div class="col-md-6">
        <div style="margin-top: 40px;" class="thumbnail embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" 
          src="https://www.youtube.com/embed/<?php echo $youtubeurl;?>" frameborder="0" 
          allowfullscreen></iframe>
        </div>
      </div>
    </div>

  </div>
</div>




