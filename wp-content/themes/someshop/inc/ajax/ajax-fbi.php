<?php
function ajax_get_fbi_info(){
	$depr_code = $_GET['depr_code'];
	$page_numb = $_GET['page_numb'];
	$api_url = 'https://api.fbi.gov/wanted/v1/list?pageSize=12&field_offices=' . $depr_code . '&page=' . $page_numb;
	$api_raw_data = file_get_contents($api_url);
	$api_data = json_decode($api_raw_data, true); 

	if($api_data['total'] == 0){
		echo '<div class="fbi-err">Department is not a found!</div>';
		die();
	}
	?>

	<?php foreach ($api_data['items'] as $key) : ?>
	<div class="fbi-card col-lg-4 col-md-6 col-sm-12">
		<a href="<?php echo $key['url']; ?>" target="_blank">
			<h6><?php echo $key['title']; ?></h6>
			<img src="<?php echo $key['images'][0]['thumb']; ?>">
		</a>
		<div class="fbi-card-rew"><?php echo $key['reward_text']; ?></div>
		<div class="fbi-card-desc"><?php echo $key['description']; ?></div>
	</div>
	<?php endforeach;
	if ($api_data['total'] > 12) {
		$page_tot = ceil($api_data['total'] / 12);
	?>
	<div class="fbi-pagination col-lg-12">
		<ul>
			<?php for ($i = 1; $i <= $page_tot; $i++) : ?>
				<li <?php if(($i == $page_numb) || ($i == 1 && $page_numb == null)) echo 'class="fbi-active"'?>><span><?php echo $i; ?></span></li>
			<?php endfor; ?>
		</ul>
	</div>
	<?php
	}
	die();
}

add_action('wp_ajax_get_fbi_info', 'ajax_get_fbi_info');
add_action('wp_ajax_nopriv_get_fbi_info', 'ajax_get_fbi_info');
