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
<div id="interior-jumbo" class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1><?php echo metadata('exhibit_page', 'title'); ?></h1>
<!--         <p class="serif blurb"><?php echo metadata('exhibit', 'description'); ?></p> -->
        <p class="serif blurb"><?php echo $text; ?></p>
      </div>
      <div class="col-md-6">
		   <?php $counter = 0; ?>
	  	    <?php foreach ($attachments as $attachment): ?>

	  	    	<?php if ($counter == 0){ 
	  	    			$theclass = "active";
		  	    		}
		  	    		else{ 
		  	    			$theclass =" ";
		  	    		}
	  	    	?>



			  <div style="margin-top: 40px;" class="thumbnail"><?php echo $this->exhibitAttachment($attachment, array('imageSize' => $size)); ?></div>

		    <?php 
		    	$counter++;
		    endforeach; ?>
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




