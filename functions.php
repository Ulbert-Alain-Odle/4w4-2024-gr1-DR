<?php
    add_theme_support( 'menus');
    add_theme_support( 'custom-logo');

    function cidweb_modifie_requete_principal( $query ) {
        if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
          $query->set( 'category_name', 'note4w4' );
          $query->set( 'orderby', 'title' );
          $query->set( 'order', 'ASC' );
          }
         }
         add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );
?>