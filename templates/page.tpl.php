
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

    <section class="section--footer mdl-color--white mdl-grid">
      <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
        <div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
      </div>
      <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
        <h5>Lorem ipsum dolor sit amet</h5>
        Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
      </div>
      <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
        <div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
      </div>
      <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
        <h5>Lorem ipsum dolor sit amet</h5>
        Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
      </div>
    </section>

    <footer class="mdl-mega-footer">
      <div class="mdl-mega-footer--middle-section">
        <div class="mdl-mega-footer--drop-down-section">
          <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
          <h1 class="mdl-mega-footer--heading">Features</h1>
          <ul class="mdl-mega-footer--link-list">
            <li><a href="#">About</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">Updates</a></li>
          </ul>
        </div>
        <div class="mdl-mega-footer--drop-down-section">
          <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
          <h1 class="mdl-mega-footer--heading">Details</h1>
          <ul class="mdl-mega-footer--link-list">
            <li><a href="#">Spec</a></li>
            <li><a href="#">Tools</a></li>
            <li><a href="#">Resources</a></li>
          </ul>
        </div>
        <div class="mdl-mega-footer--drop-down-section">
          <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
          <h1 class="mdl-mega-footer--heading">Technology</h1>
          <ul class="mdl-mega-footer--link-list">
            <li><a href="#">How it works</a></li>
            <li><a href="#">Patterns</a></li>
            <li><a href="#">Usage</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Contracts</a></li>
          </ul>
        </div>
        <div class="mdl-mega-footer--drop-down-section">
          <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
          <h1 class="mdl-mega-footer--heading">FAQ</h1>
          <ul class="mdl-mega-footer--link-list">
            <li><a href="#">Questions</a></li>
            <li><a href="#">Answers</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="mdl-mega-footer--bottom-section">
        <div class="mdl-logo">
          More Information
        </div>
        <ul class="mdl-mega-footer--link-list">
          <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Privacy and Terms</a></li>
        </ul>
      </div>
    </footer>
  </main>
</div>
