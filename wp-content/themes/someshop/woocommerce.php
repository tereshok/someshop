<?php
get_header();
?>

<?php if(is_archive()) : ?>

	<?php require_once THEME_DIR . '/templates/woocommerce_archive.php'; ?>

<?php else : ?>

<div class="container main_product">
	<?php woocommerce_content(); ?>
</div>

<?php endif; ?>


<?php
get_footer();
