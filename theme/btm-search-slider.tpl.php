<?php
/**
 * @file custom Search API ranges Min/Max UI slider widget
 */
drupal_add_css(drupal_get_path('module', 'btm_search_slider') . "/css/btm-search-slider.css", array("preprocess" => FALSE));
?>
<?php print drupal_render($form['text-range']); ?>
<div class="yui3-g">
  <div class="yui3-u range-box range-box-left"><?php print drupal_render($form['range-from']); ?></div>
  <div class="yui3-u range-slider-box"><?php print drupal_render($form['range-slider']); ?></div>
  <?php if(count($tickmarks)) { ?>
  <div class="slider-tickmarks clearfix">
    <?php print drupal_render($tickmarks); ?>
  </div>
  <?php } ?>
  <div class="yui3-u range-box range-box-right"><?php print drupal_render($form['range-to']); ?></div>
</div>
<?php print drupal_render($form['submit']); ?>
<?php
// render required hidden fields
print drupal_render_children($form);
?>
