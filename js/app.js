(function(){


	const initMap = function() {
		mapboxgl.accessToken = 'pk.eyJ1Ijoianp1bmlnYXVhYmNzIiwiYSI6ImNrMzgyaHY5bDA1NTYzaHAxaXMzN2Z4ODAifQ.-E42F-52lBA19Yk989dU8A';
		let map = new mapboxgl.Map({
			container: 'map',
			style: 'mapbox://styles/mapbox/streets-v11',
			center: [-110.316120, 24.102782], // starting position [lng, lat]
			zoom: 14, // starting zoom
		})
		let mark = undefined;
		const addMarker= function(e) {
			if(typeof this.mark === 'undefined') {
				marker = new mapboxgl.Marker().setLngLat(e.lngLat.wrap()).addTo(map)
			}
		}
		map.on('click', addMarker)

	}

	const mapContainer = document.querySelector('.mapContainer')
	if(mapContainer) {
		initMap()
	}

})()