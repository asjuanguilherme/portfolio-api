<?php

function api_project($request) {

   $args = array(
      'post_type' => 'projects',
      'name' => $request['slug']
   );

   $query = new WP_Query( $args );

   $projects = null;

   while( $query->have_posts() ) : $query->the_post();

      $getCategories = get_the_category();
      $categories = [];

      foreach( $getCategories as $category ) {
         array_push( $categories, $category->slug );
      }

      $project = array(
         "id" => get_the_ID(),
         "name" => get_field('name'),
         "slug" => get_post_field( 'post_name', get_post() ),
         "categories" => $categories,
         "description" => get_field('description'),
         "url" => get_field('link'),
         "active" => get_field('show_in_site'),
         "skills" => get_field('skills'),
         'images' => get_field('images'),
         'thumb' => get_field('thumb'),
         'content' => get_the_content()
      );

   endwhile;

   return $project;
}

function register_api_project() {
   register_rest_route('api', '/project/(?P<slug>[-\w]+)', array(
      array(
         'methods' => 'GET',
         'callback' => 'api_project',
      ),
   ));
}

add_action('rest_api_init', 'register_api_project');

?>