// Agent Listing Functions addon Start to add to functions.php file
// //* Filter the property details array
add_filter( 'agentpress_property_details', 'agentpress_property_details_filter' );
function agentpress_property_details_filter( $details ) {

$details['col1'] = array(
__( 'Price:', 'agentpress' ) => '_listing_price',
__( 'Address:', 'agentpress' ) => '_listing_address',
__( 'City:', 'agentpress' ) => '_listing_city',
__( 'State:', 'agentpress' ) => '_listing_state',
__( 'ZIP:', 'agentpress' ) => '_listing_zip',
__( 'MLS #:', 'agentpress' ) => '_listing_mls',
__( 'Square Feet:', 'agentpress' ) => '_listing_sqft',
__( 'Year Built:', 'agentpress' ) => '_Year_Built',
);
$details['col2'] = array(

__( 'Bedrooms:', 'agentpress' ) => '_listing_bedrooms',
__( 'Bathrooms:', 'agentpress' ) => '_listing_bathrooms',
__( 'Garage:', 'agentpress' ) => '_listing_basement',
__( 'Full Baths:', 'agentpress' ) => '_Full_Baths',
__( 'Half Baths:', 'agentpress' ) => '_Half_Baths',
__( 'Property Type:', 'agentpress' ) => '_Property_Type',
__( 'Water Front:', 'agentpress' ) => '_Water_Front',
__( 'Zoning:', 'agentpress' ) => '_Zoning',
__( 'HOA Fees:', 'agentpress' ) => '_HOA_Fees',

);

return $details;

}
// Agent Listing Functions addon End
