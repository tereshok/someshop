<?php
get_header();
require_once THEME_DIR . '/inc/classes/Team.class.php';
$team = new Team();
?>
<?php if(!empty($team)) : ?>
	<div class="container">
		<div class="row team-row">
			<?php echo $team->get_departmens(); ?>
			<?php echo $team->get_location(); ?>
		</div>
	</div>
	<?php echo $team->get_all_team(); ?>
<?php else : ?>
	<h3 class="team-err">Sorry, now team not a found!</h3>
<?php endif;
get_footer();
