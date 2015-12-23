<?php
    $pageTitle = __('Browse collections');
    echo head(array('title'=>$pageTitle,'bodyclass' => 'collections browse'));
?>


    
    <div class="container browse-collections">
        <h1><?php echo 'Browse all collections'; ?></h1>
        <?php if ($total_results > 0): ?>
<!--             <div class="browse-collections-header hidden-xs">
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-2">
                        <?php echo browse_sort_links(array('Title'=>'Dublin Core,Title'), array('')); ?>
                    </div>
                    <div class="col-sm-3">
                        <?php echo browse_sort_links(array('Creator'=>'Dublin Core,Contributor'), array('')); ?>
                    </div>
                    <div class="col-sm-4">
                        Description
                    </div>
                </div>
            </div> -->
        
            <?php foreach (loop('collections') as $collection): ?>
                <div class="collection">

<div class="media">
  <div class="media-left">
        <?php if ($collectionImage = record_image('collection', 'square_thumbnail')): ?>
            <?php echo $collectionImage; ?>
        <?php endif; ?>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
                    <?php echo link_to_collection(); ?>
                    <?php if ($collection->hasContributor()): ?>
                        <?php echo metadata('collection', array('Dublin Core', 'Contributor'), array('all'=>true, 'delimiter'=>', ')); ?>
                    <?php endif; ?>
                    <?php if (metadata('collection', array('Dublin Core', 'Description'))): ?>
                        <?php echo text_to_paragraphs(metadata('collection', array('Dublin Core', 'Description'), array('snippet'=>150))); ?>
                    <?php endif; ?>
  </div>
    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'collection' => $collection)); ?>
</div>


                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p><?php echo 'No collections added, yet.'; ?></p>
        <?php endif; ?>
    </div>
    <?php echo pagination_links(); ?>        

<?php fire_plugin_hook('public_collections_browse', array('collections'=> $collections, 'view' => $this)); ?>
<?php echo foot(); ?>
