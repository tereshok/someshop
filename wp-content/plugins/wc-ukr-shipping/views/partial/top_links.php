<?php
  if ( ! defined('ABSPATH')) {
      exit;
  }
?>

<div class="wcus-top-links">
    <a target="_blank" href="https://kirillbdev.pro/docs/wcus-base-setup/" class="wcus-btn wcus-btn--docs wcus-btn--md wcus-top-links__link">
        <?= wc_ukr_shipping_import_svg('docs.svg'); ?>
        <?= __('top_panel_docs', WCUS_TRANSLATE_DOMAIN); ?>
    </a>
    <a target="_blank" href="https://kirillbdev.pro/wc-ukr-shipping-pro/?ref=plugin" class="wcus-btn wcus-btn--site wcus-btn--md wcus-top-links__link">
        <?= wc_ukr_shipping_import_svg('star.svg'); ?>
        <?= __('top_panel_premium', WCUS_TRANSLATE_DOMAIN); ?>
    </a>
</div>