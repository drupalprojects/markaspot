<div class="navbar-wrapper">
  <div class="container">
    <!-- header id="navbar" role="banner" class="navbar-inverse navbar-fixed-top" -->
    <header id="navbar" role="banner" class="navbar ">
      <div class="navbar-inner">
        <div class="container">
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <?php if (!empty($logo)): ?>
            <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>

          <?php if (!empty($site_name)): ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
            </h1>
          <?php endif; ?>

          <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
            <div class="nav-collapse collapse">
              <nav role="navigation">
                <?php if (!empty($primary_nav)): ?>
                  <?php print render($primary_nav); ?>
                <?php endif; ?>
                <?php if (!empty($page['navigation'])): ?>
                  <?php print render($page['navigation']); ?>
                <?php endif; ?>
                <?php if (!empty($secondary_nav)): ?>
                  <?php print render($secondary_nav); ?>
                <?php endif; ?>
              </nav>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </header>
  </div>
</div>



<div class="carouselheader masthead">
  <?php
    $type = 'bootstrap_carousel';
    $nodes = node_load_multiple(array(), array('type' => $type));
    foreach ($nodes as $carousel) :
  ?>
  <?php
    $carousel = node_view($carousel);
    print drupal_render($carousel);
  ?>
  <?php endforeach; ?>
</div>


<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section class="<?php print _bootstrap_content_span($columns); ?>">

      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>


      <div class="welcome-text well">
        <?php
          $block = module_invoke('block', 'block_view', '1');
          print render($block['content']);
          // $block = module_invoke('block', 'block_view', '1');
          // print $block['content'];
        ?>
      </div>
      <div  class="span4 map" id="map_wrapper_splash">
         <a id="start" title="Klicken Sie für die Kartenansicht" href="/map"></a>
         <div id="map"></div>
       </div>
      <div class="span5">
        <div class="add"><a href="node/add/report" class="btn btn-primary btn-large"><h3><i class="icon-bullhorn"></i> Machen Sie mit!</h3>Melden Sie Infrastrukturprobleme in Gießen</a></div>
        <div class="list"><a href="list" class="btn btn-custom btn-action btn-large"><h3><i class="icon-eye-open"></i> Transparente Anliegen</h3>Wie ist der Bearbeitungsstand anderer Beiträge</a></div>
      </div>
      <div>
      <h3>
        <?php print t('Reports with Media'); ?>
      </h3>
      <?php
        $viewName = 'Gallery';
        print views_embed_view($viewName);
      ?>

      </div>


    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>




</div>
<footer class="footer navbar-bottom">
  <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
    <div id="footer-columns" class="container">
      <?php print render($page['footer_firstcolumn']); ?>
      <?php print render($page['footer_secondcolumn']); ?>
      <?php print render($page['footer_thirdcolumn']); ?>
      <?php print render($page['footer_fourthcolumn']); ?>
    </div> <!-- /#footer-columns -->
  <?php endif; ?>
  <?php print render($page['footer']); ?>
</footer>
