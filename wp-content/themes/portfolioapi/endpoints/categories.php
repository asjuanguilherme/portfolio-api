<?php

function api_categories($request) {

   $categories = get_categories(array(
      'orderby' => 'name',
      'order' => 'ASC',
   ));

   $categoriesList = [];

   foreach( $categories as $category ) {
      if( $category->slug !== "sem-categoria" )
      array_push($categoriesList, array(
         "id" => $category->term_id,
         "name" => $category->name,
         "slug" => $category->slug,
      ));
   };

   return rest_ensure_response($categoriesList);
}

function register_api_categories() {
   register_rest_route('api', '/categories', array(
      array(
         'methods' => 'GET',
         'callback' => 'api_categories',
      ),
   ));
}

add_action('rest_api_init', 'register_api_categories');

?>