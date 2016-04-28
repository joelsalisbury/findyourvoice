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
<div class="container">
<div class="row">
<style>
	.exhibit-prose p{
		font-size:18px;
		line-height:1.8em;
	}
</style>
	<div class="col-md-12">
		<div class="exhibit-prose">
			<div class="col-md-6 col-sm-12 pull-right" style="transition:.5s;">
				<div class="exhibit-items <?php echo $position; ?> <?php echo $size; ?> captions-<?php echo $captionPosition; ?>">
	<?php $daRand = rand(0,2500); ?>
							<div id="itemcarousel<?php echo $daRand; ?>" class="itemcarousel carousel slide thumbnail" data-ride="carousel" style="transition:0.5s;">
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner">
							   <?php $counter = 0; ?>
							  	    <?php foreach ($attachments as $attachment): ?>

							  	    	<?php if ($counter == 0){ 
							  	    			$theclass = "active";
								  	    		}
								  	    		else{ 
								  	    			$theclass =" ";
								  	    		}
							  	    	?>

								    <div class="item <?php echo $theclass;?>">

									  <?php echo $this->exhibitAttachment($attachment, array('imageSize' => $size)); ?>
								    </div>
								    <?php 
								    	$counter++;
								    endforeach; ?>
							  </div>
							  <?php if(count($attachments) > 1) { ?>
								<!-- Controls -->
								  <a class="left carousel-control" href="#itemcarousel<?php echo $daRand; ?>" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#itemcarousel<?php echo $daRand; ?>" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a>
								<?php } ?>
							</div>
				</div>
			</div>
			<div style='font-family:"Droid Serif", serif;'><?php echo $text; ?></div>
 <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
          <div style="float:none;" id="exhibit-nav-next" class="btn btn-fyv-red">
            <?php echo $nextLink; ?>
          </div>
        <?php endif; ?>
		</div>
	</div>
</div>
</div>



