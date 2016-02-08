<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp <?php print $classes; ?>" <?php print $attributes; ?>>
  <div class="mdl-card mdl-cell mdl-cell--12-col">
    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
      <?php print render($title_prefix); ?>
      <?php if(!$page): ?>
        <h2><?php print $title; ?></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php hide($content['links']); ?>
      <?php print render($content); ?>

    </div>
    <?php if(render($content['links'])!=""): ?>
    <div class="mdl-card__actions">
      <?php print render($content['links']); ?>
    </div>
    <?php endif; ?>
  </div>
</section>
