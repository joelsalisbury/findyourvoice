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
  <div class="col-md-8 col-md-offset-2">
    <div class="exhibit-prose">
      <div class="col-md-6 col-sm-12 pull-right" style="transition:.5s;">
        <div class="exhibit-items <?php echo $position; ?> <?php echo $size; ?> captions-<?php echo $captionPosition; ?>">

              <div id="itemcarousel" class=" slide thumbnail" style="top:0px; margin-bottom:0px;">
               
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
              
              </div> 
        </div>
      </div> 
      <div style='font-family:"Droid Serif", serif;'><?php echo $text; ?></div>

    </div>
  </div>
</div>
</div>



