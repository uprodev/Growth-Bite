</main>

<footer class="footer">
  <div class="container-fluid">
    <div class="footer-main">
      <div class="row">
        <div class="col-md-3">

          <?php if ($field = get_field('logo_f', 'option')): ?>
            <div class="footer-logo">
              <a href="<?= get_home_url() ?>">
                <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                  <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
                <?php else: ?>
                  <?= wp_get_attachment_image($field['ID'], 'full') ?>
                <?php endif ?>
              </a>
            </div>
          <?php endif ?>

          <?php if ($field = get_field('text_f', 'option')): ?>
            <div class="footer-info"><?= $field ?></div>
          <?php endif ?>

        </div>

        <?php $footer_menus = ['footer-1', 'footer-2', 'footer-3', 'footer-4'] ?>

        <div class="col-md-9">
          <div class="row">
            <div class="col-sm d-flex flex-sm-column">

              <?php if (has_nav_menu($footer_menus[0])): ?>
                <nav class="footer-menu">
                  <div class="title"><?= wp_get_nav_menu_name($footer_menus[0]) ?></div>

                  <?php wp_nav_menu( array(
                    'theme_location'  => $footer_menus[0],
                    'container'       => '',
                    'items_wrap'      => '<ul>%3$s</ul>'
                  ) ); ?>

                </nav>
              <?php endif ?>
              
              <?php if (has_nav_menu($footer_menus[1])): ?>
                <nav class="footer-menu">
                  <div class="title"><?= wp_get_nav_menu_name($footer_menus[1]) ?></div>
                  
                  <?php wp_nav_menu( array(
                    'theme_location'  => $footer_menus[1],
                    'container'       => '',
                    'items_wrap'      => '<ul>%3$s</ul>'
                  ) ); ?>

                </nav>
              <?php endif ?>

            </div>
            <div class="col-6 col-sm">

              <?php if (has_nav_menu($footer_menus[2])): ?>
                <nav class="footer-menu">
                  <div class="title"><?= wp_get_nav_menu_name($footer_menus[2]) ?></div>
                  
                  <?php wp_nav_menu( array(
                    'theme_location'  => $footer_menus[2],
                    'container'       => '',
                    'items_wrap'      => '<ul>%3$s</ul>'
                  ) ); ?>

                </nav>
              <?php endif ?>
              
            </div>
            <div class="col-6 col-sm">

              <?php if (has_nav_menu($footer_menus[3])): ?>
                <nav class="footer-menu">
                  <div class="title"><?= wp_get_nav_menu_name($footer_menus[3]) ?></div>
                  
                  <?php wp_nav_menu( array(
                    'theme_location'  => $footer_menus[3],
                    'container'       => '',
                    'items_wrap'      => '<ul>%3$s</ul>'
                  ) ); ?>

                </nav>
              <?php endif ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">

      <?php if ($field = get_field('copyright_f', 'option')): ?>
        <div class="copyright"><?= $field ?></div>
      <?php endif ?>
      
      <?php if (($items = get_field('socials_f', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
      <div class="socials">

        <?php foreach ($items as $item): ?>
          <?php if ($item['link'] && $item['icon']): ?>
            <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

              <?php if (pathinfo($item['icon']['url'])['extension'] == 'svg'): ?>
                <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
              <?php else: ?>
                <?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
              <?php endif ?>

            </a>
          <?php endif ?>
        <?php endforeach ?>
        
      </div>
    <?php endif ?>

  </div>
</div>
</footer>
</div>

<?php wp_footer() ?>
</body>
</html>