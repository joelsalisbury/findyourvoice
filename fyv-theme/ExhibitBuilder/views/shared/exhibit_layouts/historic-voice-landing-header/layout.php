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
<div id="interior-jumbo" class="jumbotron" style="margin-bottom:195px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1><?php echo metadata('exhibit_page', 'title'); ?></h1>
<!--         <p class="serif blurb"><?php echo metadata('exhibit', 'description'); ?></p> -->
        

		   <?php $counter = 0; ?>
	  	    <?php foreach ($attachments as $attachment): ?>

	  	    	<?php if ($counter == 0){ 
	  	    			$theclass = "active";
		  	    		}
		  	    		else{ 
		  	    			$theclass =" ";
		  	    		}
	  	    	?>



			  <!-- <div style="margin-top: 40px;" class="thumbnail"></div> -->

		    <?php 
		    	$counter++;
		    endforeach; ?>
      </div>
    </div>

    <div class="row video-row">
        <div class="col-md-8 col-md-offset-2"><div class="video-box thumbnail"><?php echo $this->exhibitAttachment($attachment, array('imageSize' => $size)); ?></div></div>
    </div>
  </div>
</div>
  <div class="container">
    <div class="row text-center interior-lede">
      <p class="serif blurb"><?php echo $text; ?></p>
        <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
          <div id="exhibit-nav-next btn btn-fyv-red">
            <?php echo $nextLink; ?>
          </div>
        <?php endif; ?>
    </div>

  </div>

