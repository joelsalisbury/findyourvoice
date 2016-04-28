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
<div id="interior-jumbo" class="jumbotron" style="margin-bottom:70px;">
  <div class="container">
    <div class="row">
           <?php $counter = 0; ?>
          <?php foreach ($attachments as $attachment): ?>

            <?php if ($counter == 0){ 
                $theclass = "active";
                }
                else{ 
                  $theclass =" ";
                }
            ?>


        <?php 
          $counter++;
        endforeach; ?>
        <div class="col-md-6"><div class="video-box thumbnail"><!-- ?php echo $this->exhibitAttachment($attachment, array('imageSize' => $size)); ?> --> <iframe width="545" height="315" 
          src="https://www.youtube.com/embed/" frameborder="0" 
          allowfullscreen></iframe></div></div>  
      <div class="col-md-6">
        <h2><?php echo metadata('exhibit', 'title'); ?></h2>
        <h1><?php echo metadata('exhibit_page', 'title'); ?></h1>
<!--         <p class="serif blurb"><?php echo metadata('exhibit', 'description'); ?></p> -->
        


      </div>

    </div>
  </div>
</div>
  <div class="container">
    <div class="row text-center interior-lede">
      <p class="serif blurb"><?php echo $text; ?></p>
        <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
          <div style="float:none;" id="exhibit-nav-next" class="btn btn-fyv-red">
            <?php echo $nextLink; ?>
          </div>
        <?php endif; ?>
    </div>

  </div>

