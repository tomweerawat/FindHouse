
//update_address(lat,lng); //Set terlebih dahulu alamat lokasi pusat
function showmap()
{
	var place = placesAutocomplete.getPlace(); //Inisialkan auto complete atau pencarian
	if (!place.geometry) //Jika hasil tidak ada
	{
		return; //Abaikan
	}
	var lat = place.geometry.location.lat(), // Ambil Posisi Latitude Auto Complete
	lng = place.geometry.location.lng(); // Ambil Posisi Longitude Auto Complete
	document.getElementById('lat').value=lat; //Set Latitude pada input lat
	document.getElementById('lng').value=lng; //Set Longitude pada input lng
	var map = new google.maps.Map(document.getElementById('map-canvas'), { //Refresh alamat
    	center: {lat: lat, lng: lng},
    	zoom: 17
  	});
  	placesAutocomplete.bindTo('bounds', map); //Render Map Auto Complete

  	//Tambah penandaan pada alamat
  	var marker = new google.maps.Marker({
    	map: map,
    	draggable: true,
		title: "Drag Untuk mencari posisi",
    	anchorPoint: new google.maps.Point(0, -29)
  	});

	if (place.geometry.viewport) {
	      map.fitBounds(place.geometry.viewport);
	    } else {
	      map.setCenter(place.geometry.location);
	      map.setZoom(17);
	}
    marker.setPosition(place.geometry.location);
    marker_0 = createMarker_map(marker);

		var alamat=document.getElementById('cari');
			google.maps.event.addListener(marker_0, "dragend", function(event) {
				document.getElementById('lat').value = event.latLng.lat();
    			document.getElementById('lng').value = event.latLng.lng();
    			update_address(event.latLng.lat(),event.latLng.lng());
			});
}

//Fungsi mendapatkan alamat disaat drag marker
function update_address(lat,lng)
{
	var geocoder = new google.maps.Geocoder;
	var latlng={lat: parseFloat(lat), lng: parseFloat(lng)};
	geocoder.geocode({'location': latlng}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        document.getElementById('cari').value=results[0].formatted_address;
      } else {
        window.alert('Tidak ada hasil pencarian');
      }
    } else {
      window.alert('Geocoder error: ' + status);
    }
  });
}
