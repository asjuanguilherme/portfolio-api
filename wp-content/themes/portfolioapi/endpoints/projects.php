<?php

function api_projects($request) {

   $args = array(
      'post_type' => 'projects',
   );

   $query = new WP_Query( $args );

   $projects = array();

   while( $query->have_posts() ) : $query->the_post();

      $getCategories = get_the_category();
      $categories = [];

      foreach( $getCategories as $category ) {
         array_push( $categories, $category->slug );
      }

      array_push($projects, array(
         "id" => get_the_ID(),
         "slug" => get_post_field( 'post_name', get_post() ),
         "name" => get_field('name'),
         "categories" => $categories,
         "description" => get_field('description'),
         "url" => get_field('link'),
         "active" => get_field('show_in_site'),
         'thumb' => get_field('thumb'),
      ));

   endwhile;

   return rest_ensure_response($projects);
}

function register_api_projects() {
   register_rest_route('api', '/projects', array(
      array(
         'methods' => 'GET',
         'callback' => 'api_projects',
      ),
   ));
}

add_action('rest_api_init', 'register_api_projects');

?>