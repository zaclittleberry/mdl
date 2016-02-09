
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
    <div class="mdl-layout--large-screen-only mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      <?php print $top_bar_secondary_menu; ?>
    </div>
    <div class="mdl-layout__header-row">
      <?php if($logo): ?>
        <?php print $linked_logo; ?>
      <?php endif; ?>
      <span class="mdl-layout__title">
        <?php print $linked_site_name; ?>
      </span>
    </div>
    <div class="mdl-layout--large-screen-only mdl-layout__header-row">
    </div>
     <div class="mdl-layout__header-row mdl-color--primary-dark">
       <?php print $top_bar_main_menu; ?>
     </div>
  </header>
  <main id="main-content" class="mdl-layout__content">
    <h2><?php print $title; ?></h2>
    <?php if ($messages): ?>
      <!--.l-messages -->
      <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <?php print $messages; ?>
      </section>
      <!--/.l-messages -->
    <?php endif; ?>

    <?php print render($page['content']); ?>

    <footer class="mdl-mega-footer">
      <div class="mdl-mega-footer--middle-section">
        <?php print render($page['footer_first']); ?>
        <?php print render($page['footer_second']); ?>
        <?php print render($page['footer_third']); ?>
        <?php print render($page['footer_fourth']); ?>
      </div>
      <div class="mdl-mega-footer--bottom-section">
        <?php print render($page['footer_fifth']); ?>
      </div>
    </footer>
  </main>
</div>
