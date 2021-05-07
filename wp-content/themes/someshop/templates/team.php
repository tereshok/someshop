<?php
/**
 * Template Name: Team Template
 *
 *
 */
?>
<?php get_header() ?>
<div class="container">
  <section class="row">
  <?php 

$arg = [
  'post_type'	    => 'team'
  
];


$taxonomy = $_GET['tax'];
$term = $_GET['t'];
if(isset($taxonomy) && !empty($taxonomy)){
  
  $the_query = new WP_Query( array(
    'post_type'	    => 'team',
    'tax_query' => array(
      array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $term,
      ))));
      var_dump(get_queried_object_id());
    }else{
      $the_query = new WP_Query( array(
        'post_type'	    => 'team',
        ) );
      }
      
      var_dump(wp_get_post_categories('team->id'));
      ?>
      <a href="?tax=department&t=development-team">11</a>
      <a href="?tax=department&t=productions-team">22</a>
      <a href="<?php the_category()?>">33</a>
      <a href="">44</a>
      <a href="">55</a>
      <a href="">66</a>

  <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="card col-lg-3">
                    <div class="card-img-top"><?php
                     the_post_thumbnail('thumbnail');
                    ?></div>
                    <div class="card-body">
                      <h4 class="card-title"><?php the_field('position'); ?></h4>
                      <?php 
                        $term_loc_id = get_field('location');
                        $term_loc_link = get_term_link($term_loc_id);
                        $term_loc = get_term($term_loc_id);
                      ?>
                      <p class="card-text"><?php echo ($term_loc->name) ?></p>
                      <?php 
                        $term_dep_id = get_field('department');
                        $term_dep_link = get_term_link($term_dep_id);
                        $term_dep = get_term($term_dep_id);
                      ?>
                      <p class="card-text"><?php echo ($term_dep->name) ?></p>
                    </div>
                </div>
            <?php endwhile;?>
        <?php endif; ?>
  </section>
</div>
<?php get_footer() ?>