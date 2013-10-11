<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="row-fluid">
    <div class="span6">
      <?php
        // Hide comments, tags, and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);

         $nodeid = (arg(0) == 'node' && is_numeric(arg(1)))?arg(1):FALSE;

        if(arg(1) == $nodeid){
          print views_embed_view('markers', 'report_detail', arg(1));
        }
      ?>
      <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
        <footer>
          <?php print render($content['field_tags']); ?>
          <?php print render($content['links']); ?>
        </footer>
      <?php endif; ?>
    </div>

    <div class="span5 offset1">
      <div id="map" class="detail"></div>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6 report-log">
     <?php // print render($content); ?>
     <?php print render($content['block']); ?>
     <?php print render($content['comments']); ?>
     <?php
          $block = module_invoke('markaspot_log', 'block_view', 'markaspot_activity');
          if ($block['content']) {
            print '<h2 class="block-title">' . $block['subject'] . '</h2>';
            print $block['content'];
          }
     ?>
    </div>
  <?php if ($content['field_image']):?>
    <div class="thumbnail span5 offset1">
        <?php print render($content['field_image'])?>
    </div>
  <?php endif; ?>

  </div>
</article> <!-- /.node -->
