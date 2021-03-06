<div id="page">

  <div id="header" class="clearfix">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print render($primary_local_tasks); ?>
    <?php if ($secondary_local_tasks): ?>
      <div class="tabs-secondary clearfix"><?php print render($secondary_local_tasks); ?></div>
    <?php endif; ?>
  </div>

  <div id="main">

    <?php if(render($page['sidebar_first'])): ?>
      <div id="sidebar-first">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>

    <div id="content">

      <div class="element-invisible"><a id="main-content"></a></div>

      <?php if ($messages): ?>
        <div id="console" class="clearfix"><?php print $messages; ?></div>
      <?php endif; ?>

      <?php if ($page['help']): ?>
        <div id="help">
          <?php print render($page['help']); ?>
        </div>
      <?php endif; ?>

      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

      <?php print render($page['content']); ?>

    </div>

  </div><!--end Main -->

  <div id="footer">
    <?php print $feed_icons; ?>
  </div>

</div>
