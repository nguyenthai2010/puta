
var clsGoogleMap = (function() {
    $ = jQuery;
	var map = null;
	var arrMarkers = {};
    //MAP
    function render_map( $el ) {

        // var
        var $markers = $el.find('.marker');

        // vars
        var args = {
            scrollwheel: true,
            zoom		: 16,
            center		: new google.maps.LatLng(0, 0),
            mapTypeId	: google.maps.MapTypeId.ROADMAP
        };

        // create map
        map = new google.maps.Map( $el[0], args);

        // add a markers reference
        map.markers = [];

        // add markers
        $markers.each(function(){

            add_marker( $(this),map );

        });

        // center map
        center_map( map );

    }

    /*
     *  add_marker
     *
     *  This function will add a marker to the selected Google Map
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	$marker (jQuery element)
     *  @param	map (Google Map object)
     *  @return	n/a
     */

    function add_marker( $marker, map ) {

        // var
        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
		var marker_id = $marker.attr('marker_id');
        // create marker
        var marker = new google.maps.Marker({
            position	: latlng,
            map			: map,
			animation	: google.maps.Animation.DROP,
			marker_id	: marker_id
        });
        // add to array
        map.markers.push( marker );		 
        // if marker contains HTML, add it to an infoWindow
        var infowindow = null;
		if( $marker.html() )
        {
            // create info window
            var infowindow = new google.maps.InfoWindow({
                content		: $marker.html()
            });
            // show info window when marker is clicked            
        }
		google.maps.event.addListener(marker, 'click', function() {
			map.panTo(this.getPosition());	
			map.setZoom(12);
			if(infowindow != null)
				infowindow.open( map, marker );
		});
		arrMarkers[marker_id] =marker;

    }
	
	function click_marker(marker_id)
	{
		var markerObj = arrMarkers[marker_id];
		new google.maps.event.trigger( markerObj, 'click' );
	}
    /*
     *  center_map
     *
     *  This function will center the map, showing all markers attached to this map
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	map (Google Map object)
     *  @return	n/a
     */

    function center_map( map ) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each( map.markers, function( i, marker ){

            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

            bounds.extend( latlng );

        });

        // only 1 marker?
        if( map.markers.length == 1 )
        {
            // set center of map
            map.setCenter( bounds.getCenter() );
            map.setZoom( 16 );
        }
        else
        {
            // fit to bounds
            map.fitBounds( bounds );
        }

    }



    //RETURN
    return {
        render_map:render_map,
		click_marker:click_marker
    }
})();
