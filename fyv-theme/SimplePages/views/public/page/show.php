<?php
$bodyclass = 'page simple-page';
if ($is_home_page):
    $bodyclass .= ' simple-page-home';
endif;

echo head(array(
    'title' => metadata('simple_pages_page', 'title'),
    'bodyclass' => $bodyclass,
    'bodyid' => metadata('simple_pages_page', 'slug')
));
?>
<div class="container" id="primary">
    <?php if (!$is_home_page): ?>
<!--     <p id="simple-pages-breadcrumbs breadcrumb"><?php echo simple_pages_display_breadcrumbs(); ?></p>
 -->    <h1><?php echo metadata('simple_pages_page', 'title'); ?></h1>
    <?php endif; ?>
        <div style="margin:25px;" class="pull-right thumbnail">
            <img class="img-responsive" src="/img/museum.jpg">
        </div>
    <?php
    $text = metadata('simple_pages_page', 'text', array('no_escape' => true));
    echo $this->shortcodes($text);
    ?>
</div>

<?php echo foot(); ?>
