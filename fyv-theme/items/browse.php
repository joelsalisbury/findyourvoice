<?php
    $pageTitle = __('Browse Items');
    echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>


    <div class="container browse-items">
        <h1><?php echo 'Browse all items'; ?></h1>
    <div class="row">
        <div class="col-md-12">
        <?php $subnav = public_nav_items(); echo $subnav->setUlClass('nav nav-pills'); ?>
        </div>
    </div>

        <?php if ($total_results > 0): ?>
        <?php
            $sortLinks[__('Title')] = 'Dublin Core,Title';
            $sortLinks[__('Creator')] = 'Dublin Core,Creator';
            ?>
            <div class="browse-items-header hidden-xs">
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                       <!--  <?php echo browse_sort_links(array('Title'=>'Dublin Core,Title'), array('')); ?> -->
                        Title
                    </div>
                    <div class="col-sm-3 col-md-2">
<!--                         <?php echo browse_sort_links(array('Creator'=>'Dublin Core,Creator'), array('')); ?>
    -->  Creator               
 </div>
                    <div class="hidden-sm col-md-2">
                        Subject
                    </div>
                    <div class="col-sm-4 col-md-4">
                        Description
                    </div>
                </div>
            </div>
        
            <?php foreach (loop('items') as $item): ?>
            <div class="item">
                <div class="row" style="background-color:#eee; margin-bottom:15px; padding-top:5px; padding-bottom:5px;">
  <!--                   <div class="col-sm-2 col-md-2">
                        <?php $image = $item->Files; ?>
                        <?php if ($image) {
                                echo link_to_item('<div style="background-image: url(' . file_display_url($image[0], 'original') . ');" class="img"></div>');
                            } else {
                                echo link_to_item('<div style="background-image: url(' . img('defaultImage@2x.jpg') . ');" class="img"></div>');
                            }
                        ?>
                    </div> -->
                    <div class="col-sm-3 col-md-2">
                        <?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <?php echo metadata('item', array('Dublin Core', 'Creator')); ?>
                    </div>
                    <div class="hidden-sm col-md-2">
                        <?php echo metadata('item', array('Dublin Core', 'Subject')); ?>
                    </div>
                    <div class="col-sm-4 col-md-6">
                        <?php echo metadata('item', array('Dublin Core', 'Description'), array('snippet'=>150)); ?>
                    </div>
                
                    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
                </div>
            </div>
            <?php endforeach; ?>
            <div id="outputs">
                <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
                <?php echo output_format_list(false); ?>
            </div>
        <?php else : ?>
            <p><?php echo 'No items added, yet.'; ?></p>
        <?php endif; ?>
    </div>
    <?php echo pagination_links(); ?>

<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>
<?php echo foot(); ?>
