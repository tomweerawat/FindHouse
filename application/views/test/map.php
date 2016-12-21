<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$judul;?></title>
    <link href="<?=base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?=base_url();?>jquery.js"></script>
    <style>
    	body {
		  padding-top: 70px;
		  padding-bottom: 30px;
		}
    </style>
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Google Map With CI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?=base_url();?>">Beranda</a></li>
            <li><a href="<?php echo base_url('Map/dragmarker');?>">Drag Marker</a></li>
            <li><a href="<?=base_url();?>index.php/map/acom">Auto Complete</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?php echo $map['js'];?>

<script>
update_address(<?=$lat;?>,<?=$lng;?>); //Set terlebih dahulu alamat lokasi pusat
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
</script>


<div class="container">
<h1>Mencari alamat pada Google Map dan menandakannya</h1>
<h5>
	1. Pilih alamat otomatis akan dapatkan hasil latitude dan longitude <br/>
	2. Drag pada marker, akan diupdate jalan dan hasil latitude dan longitude <br/>
</h5>
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" id="cari" class="form-control" placeholder="Cari Alamat atau Tempat"/>
			</div>
			<?php echo $map['html'];?>
		</div>
		<div class="col-md-4">
			<div class="col-md-6">
				<label>Latitude</label><br/>
				<input type="text" id="lat" class="form-control" placeholder="Latitude" value="<?=$lat;?>"/>
			</div>
			<div class="col-md-6">
				<label>Longitude</label><br/>
				<input type="text" id="lng" class="form-control" placeholder="Longitude" value="<?=$lng;?>"/>
			</div>
		</div>
	</div>
</div>
<script src="<?=base_url();?>bootstrap/js/bootstrap.min.js"></script>
<footer style="margin-top:20px">
<div class="container">
<a href="http://www.ilmuprogrammer.com" target="_blank">Ilmu Programmer</a>
</div>
</footer>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ilmuprogrammer486x60 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-4300044080094125"
     data-ad-slot="9823879097"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
  </body>
</html>
