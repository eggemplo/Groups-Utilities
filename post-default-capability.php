// This code add the capability with id 160 as selected by default.
// Change the 160 to your capability_id

add_filter( 'groups_access_restrictions_capability_selected', 'my_groups_access_restrictions_capability_selected', 10, 6);
function my_groups_access_restrictions_capability_selected ( 
		$in_read_caps,
		$capability,
		$capability_id,
		$read_caps,
		$post_id,
		$post_type ) {
	
			error_log( $capability_id );
			
			if ( $capability_id == 160 ) {
				return true;
			} else {
				return $in_read_caps;
			}
}