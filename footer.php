<footer>
	<div class="content-center">
        <span>Desenvolvido por <a href="https://www.agenciaopera.com.br" target="_blank" title="Agência Ópera">Agência Ópera</a></span>
    </div>
</footer>

<script src="<?php echo TEMPLATE; ?>dist/javascripts/vendor/vendor.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP8UGsVc0xP00AG03ZeTd6lSNlRz-npUo"></script>
<script type="text/javascript">
(function( $ ) {

/**
 * initMap
 *
 * Renders a Google Map onto the selected jQuery element
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
        zoom        : $el.data('zoom') || 16,
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
        initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
}

/**
 * initMarker
 *
 * Creates a marker for the given jQuery element and map.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
        lat: parseFloat( lat ),
        lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
        position : latLng,
        map: map
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
        });
		infowindow.open( map, marker );
    }
}

/**
 * centerMap
 *
 * Centers the map showing all markers in view.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
        bounds.extend({
            lat: marker.position.lat(),
            lng: marker.position.lng()
        });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
        map.setCenter( bounds.getCenter() );

    // Case: Multiple markers.
    } else{
        map.fitBounds( bounds );
    }
}

// Render maps on page load.
$(document).ready(function(){
    $('.acf-map').each(function(){
        var map = initMap( $(this) );
    });
});

})(jQuery);
</script>
	<script src="<?php echo TEMPLATE; ?>dist/javascripts/app.js"></script>

	
	<script>
	document.addEventListener("DOMContentLoaded", function() {
		var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));

		if ("IntersectionObserver" in window) {
			var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
			entries.forEach(function(video) {
				if (video.isIntersecting) {
				for (var source in video.target.children) {
					var videoSource = video.target.children[source];
					if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
					videoSource.src = videoSource.dataset.src;
					}
				}

				video.target.load();
				video.target.classList.remove("lazy");
				lazyVideoObserver.unobserve(video.target);
				}
			});
			});

			lazyVideos.forEach(function(lazyVideo) {
			lazyVideoObserver.observe(lazyVideo);
			});
		}
	});

		$(document).ready(function(){
            App.init();
            $('#btn__whatsapp-call-rd').on('click', function(e){
                e.preventDefault();
                $('.bricks--floating--button.rdstation-popup-js-floating-button').trigger('click');
            });
            if($('.estrutura_items').length > 0) {
                $('.estrutura_items.owl-carousel').owlCarousel({
                    loop:true, 
                    items:3,
                    dots: false,
                    nav: true,
                    mouseDrag: true,
                    animateIn: 'fadeIn',
                    autoHeight: true,
                    responsive:{
                        0:{
                            items:1,
                        },
                        768:{
                            items:2,
                        },
                        1200: {
                            items:3,
                        }
                    }
                });
            }
		});
	</script>

<?php wp_footer(); ?>
</body>
</html>
