<?php require ('config.php'); ?>
<html>
<head>
<title>Traffic Yogyakarta</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<style>
  body {
	padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
  }
  #map_canvas img {
  	max-width: none;
	}

   #map_canvas label {
    width: auto; display:inline;
  }
</style>
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap-alert.js"></script>

<!-- load googlemaps api dulu -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
	var peta;
	
	function peta_awal(){
		
	    var lokasibaru = new google.maps.LatLng(-7.7930618,110.36066);
    	var petaoption = {
			zoom: 13,
			center: lokasibaru,
			mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
	    peta = new google.maps.Map(document.getElementById("map_canvas"),petaoption);
	}

	function setLokasi(lokasi){
		
		var koordinat = lokasi.split('|');
		var x = koordinat[0];
		var y = koordinat[1];
		var id = koordinat[2];
		
		var lokasibaru = new google.maps.LatLng(x, y);
		var petaoption = {
			zoom: 16,
			center: lokasibaru,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		
		peta = new google.maps.Map(document.getElementById("map_canvas"),petaoption);
		var trafficLayer = new google.maps.TrafficLayer();
  		trafficLayer.setMap(peta);
	}
</script> 
</head>
<body onload="peta_awal()">
<div class="container">
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Sistem Pengawasan Lalu lintas Kota Yogyakarta</a>
          <div class="btn-group pull-right">
           
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div class="row">
<div class="span8">
	<div class="control-group">
	 <div id="map_canvas" style="width:100%; height:500px"></div>
	</div>
</div>
<div class="span4">
	<div class="control-group">
	  <label class="control-label" for="input01">LOKASI</label>
	  <div class="controls">
		<select name="lokasi" id="lokasi" onchange="setLokasi(this.options[this.selectedIndex].value)" style="width:280px;" tabindex="2">
		<?php
		
		$lokasi = mysql_query("SELECT * FROM `lokasi`");
		if (mysql_num_rows($lokasi) > 0)  {
			echo '<option value="">Pilih lokasi</option>';
			while($l = mysql_fetch_array($lokasi)) {
				echo '<option value="'.$l['latittude']."|".$l['longitude']."|".$l['id'].'">'.$l['nama_lokasi'].'</option>';
			}
		} else {
			echo '<option value="">tidak ada data lokasi</option>';
		}
		
		echo $o;
	
		?>
		</select>
		</div>
	</div>

	<div class="control-group">
	  <label class="control-label" for="input01">* keterangan</label>
	  <div class="controls">
	  	<h3>
	  	<font style="color:black;">HITAM = MACET</font>
	  	<br>
	  	<font style="color:red;">MERAH = PADAT MERAYAP</font>
	  	<br>
	  	<font style="color:#ffde00;">KUNING = PADAT LANCAR</font>
	  	<br>
	  	<font style="color:green;">HIJAU = LANCAR</font>
		</h3>
		</div>
	</div>
</div>	
	
		

</div>
<hr>
	  <footer>
        <p>&copy; GoogleMaps Traffic 2015</p>
      </footer>
</div>


</body>
</html>