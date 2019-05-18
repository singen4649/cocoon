<?php //モバイル用のスライドインボタンメニューの表示
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<!-- 検索ボタン -->
<?php if (!is_amp() || (is_amp() && is_ssl())): ?>
  <!-- 検索ボタン -->
  <div class="search-menu-button menu-button">
    <input id="search-menu-input" type="checkbox" class="display-none">
    <label id="search-menu-open" class="menu-open menu-button-in" for="search-menu-input">
      <span class="search-menu-icon menu-icon"></span>
      <span class="search-menu-caption menu-caption"><?php _e( '検索', THEME_NAME ) ?></span>
    </label>
    <label class="display-none" id="search-menu-close" for="search-menu-input"></label>
    <div id="search-menu-content" class="search-menu-content">
      <?php //検索フォーム
      get_template_part('searchform') ?>
    </div>
  </div>
<?php endif ?>
