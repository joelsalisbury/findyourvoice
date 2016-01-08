<?php
    $collectionTitle = strip_formatting(metadata('collection', array('Dublin Core', 'Title')));
    echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show'));
?>

<div class="container">
    <h1><?php echo $collectionTitle; ?></h1>
    <h2>Collection Items</h2>
    <?php //echo all_element_texts('collection'); ?>

    <div class="row masonry-container" id="collection-items">
       <!--  <h2><?php echo link_to_items_browse(__('Items in the %s Collection', $collectionTitle), array('collection' => metadata('collection', 'id'))); ?></h2> -->
        <?php if (metadata('collection', 'total_items') > 0): ?>
            <?php foreach (loop('items') as $item): ?>
            <?php $itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title'))); ?>
            <div class="col-md-4">
                <div class="item hentry thumbnail">
                    <?php if (metadata('item', 'has thumbnail')): ?>
                    <div class="item-img">
                        <?php echo link_to_item(item_image('thumbnail', array('alt' => $itemTitle))); ?>
                    </div>
                    <?php endif; ?>
        
                    <?php if ($text = metadata('item', array('Item Type Metadata', 'Text'), array('snippet'=>250))): ?>
                    <div class="item-description">
                        <p><?php echo $text; ?></p>
                    </div>
                    <?php elseif ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250))): ?>
                    <div class="item-description caption">
                        <h3><?php echo link_to_item($itemTitle, array('class'=>'permalink')); ?></h3>
                        <?php echo $description; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p><?php echo __("There are currently no items within this collection."); ?></p>
        <?php endif; ?>
    </div><!-- end collection-items -->
</div>
<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>
<?php echo foot(); ?>
