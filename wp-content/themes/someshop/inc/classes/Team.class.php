<?php
class Team {
	function get_departmens() {
		$departmens = get_terms([
			'taxonomy' => 'department'
		]);
		 $get_param = '?tax=department&t='; ?>
		 <div class="col-lg-3 col-md-6 team-text all-team" ><a href="<?php echo get_post_type_archive_link('team'); ?>"
		 <?php if($_GET["t"] == NULL) echo 'class="active"'; ?>><?php _e('All', 'someshop'); ?></a></div>
		 <?php foreach ($departmens as $department) : ?>
			<div class="col-lg-3 col-md-6 team-text">
				<a href="<?php echo $get_param . $department->slug; ?>" class="team-department <?php if($_GET["t"] == $department->slug) echo 'active'; ?>">
				<?php echo $department->name; ?></a>
			</div>
		<?php endforeach;
	}

	function get_location() {
		$locations = get_terms([
			'taxonomy' => 'locations'
		]);
		$get_param = '?tax=locations&t=';
		foreach ($locations as $location) : ?>
			<div class="col-lg-4 col-md-4 team-text">
				<a href="<?php echo $get_param . $location->slug ?>" class="team-location <?php if($_GET["t"] == $location->slug) echo 'active'; ?>">
				<?php echo $location->name; ?></a>
			</div>
		<?php endforeach;
	}

	function get_all_team() {
		$taxonomy = $_GET['tax'];
		$term = $_GET['t'];
		if(isset($taxonomy) && !empty($taxonomy)){
			$all_team_members = new WP_Query([
				'post_type' => 'team',
				'posts_per_page' => -1,
				'tax_query' => [
					[
						'taxonomy' => $taxonomy,
						'field' => 'slug',
						'terms' => $term,
					]]]);
		}else{
			$all_team_members = new WP_Query([
				'post_type'	    => 'team',
				'posts_per_page' => -1,
			]);
		}
		?>
		<div class="container">
			<div class="row">
				<?php foreach ($all_team_members->posts as $team_member) : ?>
					<?php $id = $team_member->ID; ?>
					<div class="col-lg-3 col-md-6 col-sm-12 team-member">
						<?php if(!empty(get_the_post_thumbnail_url( $id, 'thumbnail' ))) : ?>
						<img src="<?php echo get_the_post_thumbnail_url( $id, 'thumbnail' );?>" class="member-img">
						<?php else : ?>
						<img src="<?php echo THEME_DIR_URI . '/assets/images/images.jpg'?>" class="member-err-img">
						<?php endif; ?>
						<a href="<?php echo $team_member->guid; ?>" class="member-title">
							<h4><?php echo $team_member->post_title; ?></h4>
						</a>
						<p class="member-position"><?php the_field('position', $id);  ?></p>
						<p class="member-department"><?php echo get_field('department', $id)->name; ?></p>
						<p class="member-location"><?php echo get_field('location', $id)->name; ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	<?php
	}
}
