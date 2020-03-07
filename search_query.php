/* Custom post type search Result By Tamim Ahmed */

add_filter( 'pre_get_posts', 'tamim_ahmed' );
function tamim_ahmed( $query ) {
     if ($query->is_search) {
          $query->set('post_type', array( 'post', 'portal_post', 'portal_catagories', 'portal_tags'));
     }
     return $query;
}
