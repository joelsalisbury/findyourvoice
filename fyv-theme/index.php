<?php echo head(array('bodyid'=>'home')); ?>

<?php echo get_theme_option('Homepage About'); ?>
    <div id="home-jumbo" class="jumbotron">
          <div class="container">
          <div class="col-md-10">
                <p>For centuries, the people of Hartford have used written and
    spoken expression to make their voices heard—and to make
    our city a better, more just and vibrant community for all. </p>
    <p>Browse their stories. Learn from their struggles.
    Be inspired by their dreams.</p>
          </div>
        </div>
    </div>

    <div class="container">
      <h2>Hartford Voices</h2>
      <div class="row voices-gallery">
            <?php 
                $exhibits = get_records('Exhibit', array('featured'=>true));
                foreach($exhibits as $exhibit):

                
                $exurl = url("exhibits/show/".$exhibit['slug']);
                $page = $exhibit->getpages();
                $demBlocks = $page[0]->getPageBlocks();
                $demBlocks = $demBlocks[0];
                $demTatchers = $demBlocks->getAttachments();
                $datTatcher = $demTatchers[0];
                $item = get_record_by_id('Item', $datTatcher->item_id);
                $files = $item->Files;
                $firstFile = $files[0];

                $imgUrl = file_display_url($firstFile);

            ?>




        <div class="col-xs-6">
           <div class="thumbnail">
                <img src="<?php echo $imgUrl; ?>" alt="...">
                <div class="caption">
                  <h3><?php echo "<h3>". $exhibit['title']."</h3>";?></h3>
                </div>

           </div>
       </div>

   <?php endforeach;?>
        
    </div>    

</div>
<?php echo foot(); ?>
