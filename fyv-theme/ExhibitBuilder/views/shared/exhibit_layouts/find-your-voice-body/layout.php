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
<!--      <div class="col-md-6 col-sm-12 pull-right" style="transition:.5s;">
        <div class="exhibit-items <?php echo $position; ?> <?php echo $size; ?> captions-<?php echo $captionPosition; ?>">

              <div id="itemcarousel" class="carousel slide thumbnail" data-ride="carousel" style="transition:0.5s;">
               
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
              
                  <a class="left carousel-control" href="#itemcarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#itemcarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div> 
        </div>
      </div> -->
      <div style='font-family:"Droid Serif", serif;'><?php echo $text; ?></div>

    </div>
  </div>
</div>
</div>



