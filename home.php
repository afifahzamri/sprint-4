<!-- PHP for database -->
<?php
require_once("dbconfig.php");
$db_handle = new DBController();
$query ="SELECT * FROM state ORDER BY state";
$results = $db_handle->runQuery($query);
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>TESTING</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<!-- <link href="http://fonts/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

<!-- <script type="text/javascript">
function populate(st,zn){
	var st = document.getElementById(st);
	var zn = document.getElementById(zn);
	zn.innerHTML = "";
	if (st.value == "Selangor"){
		var optionArray = ["|","klang|Klang","rawang|Rawang","keramat|Keramat","gombak|Gombak",
						"bangi|Bangi","taman petaling|Taman Petaling","subang jaya|Subang Jaya",
						"tdi|TDI",
						"kepong & batu|Kepong & Batu",
						"shah alam & banting|Shah Alam & Banting",
						"bukit raja & kuala selangor|Bukit Raja & Kuala Selangor"];

	} else if (st.value == "Kedah"){
		var optionArray = ["|","alor setar|Alor Setar","jitra|Jitra","langkawi|Langkawi","kulim|Kulim","sungai petani|Sungai Petani"];

	} else if (st.value == "Pahang"){
		var optionArray = ["|","raub|Raub","maran & temerloh|Maran & Temerloh","teruntum & pekan|Teruntum & Pekan"]

	} else if (st.value == "Perlis"){
		var optionArray = ["|","perlis|Perlis"];

	} else if (st.value == "Kelantan"){
		var optionArray = ["|","machang & gua musang|Machang & Gua Musang","kota bharu|Kota Bharu","pasir mas|Pasir Mas"]

	} else if (st.value == "Perak"){
		var optionArray = ["|","tapah|Tapah","tasek|Tasek","batu gajah|Batu Gajah","ipoh|Ipoh","kuala kangsar|Kuala Kangsar","parit buntar|Parit Buntar","setiawan|Setiawan","teluk intan|Teluk Intan","taiping|Taiping"];

	} else if (st.value == "Melaka"){
		var optionArray = ["|","melaka selatan|Melaka Selatan","melaka utara|Melaka Utara"];

	} else if (st.value == "Pulau Pinang"){
		var optionArray = ["|","air itam|Air Itam","bayan baru|Bayan Baru","penang central|Penang Central","butterworth|Butterworth","bukit mertajam|Bukit Mertajam","seberang jaya|Seberang Jaya"];

	} else if (st.value == "Terengganu"){
		var optionArray = ["|","jertih|Jertih","dungun & chukai|Dungun & Chukai","kuala terengganu|Kuala Terengganu"];

	} else if (st.value == "Johor"){
		var optionArray = ["|","batu pahat|Batu Pahat","kluang|Kluang","Kota tinngi|Kota Tinngi","mersing|Mersing","muar|Muar",
							"nusajaya & pontian|Nusajaya & Pontian","pandan|Pandan","pelangi|Pelangi","segamat|Segamat","senai & kulai|Senai & Kulai","skudai|Skudai","tampoi|Tampoi"];

	} else if (st.value =="Negeri Sembilan"){
		var optionArray = ["|","negeri sembilan selatan|Negeri Sembilan Selatan","negeri sembilan|Negeri Sembilan Utara","negeri sembilan timur|Negeri Sembilan Timur"];


	}else if (st.value == "Sabah"){
		var optionArray = ["|","kota kinabalu|Kota Kinabalu","labuan|Labuan","lahad datu|Lahad Datu","pbp selatan|PBP Selatan","pbp utara|PBP Utara","sandakan|Sandakan","tawau|Tawau"];

	} else if (st.value == "Sarawak"){
		var optionArray = ["|","bintulu|Bintulu","kuching|Kuching","sibu|Sibu","miri|Miri","sri aman|Sri Aman","stampin|Stampin"];

	} 
	for (var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value=pair[0];
		newOption.innerHTML=pair[1];
		zn.options.add(newOption);
	}


}
</script> -->

<!-- SCRIPT FOR DATABASE -->
		<script>
			function getState(val) {
				$.ajax({
				type: "POST",
				url: "ajax.php",
				data:'state_id_2='+val,
				success: function(data){
					$("#city").html(data);
				}
				});
			}

			function selectCountry(val) {
			$("#search-box").val(val);
			$("#suggesstion-box").hide();
			}
		</script>

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" class="branding">
						<img src="images/logo.png" alt="" class="logo" width="100px" height="45px">
						<div class="logo-type">
							<h1 class="site-title">TM R&D</h1>
							<small class="site-description"></small>
						</div>
					</a>

					<!-- Default snippet for navigation -->
					 <div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="news.html">Populate</a></li>
							
						</ul>
						 <!-- .menu -->
					</div> 
					<!-- .main-navigation -->

					 <div class="mobile-navigation"></div> 

			</div> 
			</div> 
			<!-- .site-header -->

			<div class="hero" data-bg-image="images/banner.png">
				<div class="container">
						
						<!-- <form action="#" class="find-location">
						<table border="0" width="90%" align="center">
						<tr>
						<td style="width: 32%">	
						
						<div>Please Choose State*</div>
						<select name="state" class="form-control" required style="width:260px" id="state" onchange="populate(this.id,'zone')">
						<option value="" enable selected>State</option>
						<option value="Selangor">Selangor</option>
						<option value="Kedah">Kedah</option>
						<option value="Pahang">Pahang</option>
						<option value="Perlis">Perlis</option>
						<option value="Kelantan">Kelantan</option>
						<option value="Perak">Perak</option>
						<option value="Melaka">Melaka</option>
						<option value="Pulau Pinang">Pulau Pinang</option>
						<option value="Terengganu">Terengganu</option>
						<option value="Johor">Johor</option>
						<option value="Negeri Sembilan">Negeri Sembilan</option>
						<option value="Sabah">Sabah</option>
						<option value="Sarawak">Sarawak</option>
						</select>

						<div>Please Choose Zone*</div>

						<select name="zone" class="form-control" required style="width:260px" id="zone" >
						<option value="" disabled selected>Zone</option>
						<option value="Selangor">Selangor</option>
						<option value="Kedah">Kedah</option>
													
						</select>
						<select name="Zone" style="width:260px" id="zone">
  						<option>Please choose from above</option>
						</select>
						<input type="submit" value="Find" align="center" style="width: 120px ">
						</td>
					</tr>
				</table>
					</form> -->

					<!-- FORM FOR DROPDOWN -->
					  <br>
					  <center><!-- <form action="script.js"> -->
					  	<form>

					  <select name="state" id="state" class="custom-select mb-3" onChange="getState(this.value);">
					  <option value="">Select State</option>

						  <?php
							foreach($results as $state) {
						  ?>
							
							<option value="<?php echo $state["id_2"]; ?>"><?php echo $state["state"]; ?></option>
						  
						  <?php
							}
						  ?>

					  </select>

					  <select name="city" id="city" class="custom-select mb-3">
						
						<option value="">Select City</option>
 
					  </select>

					    <br>
					    
					    <button id="submit-btn" type="button" class="btn btn-primary">Submit</button>
					  </form>

					</center>
				</div>
			</div>

			<br>
			<br>
			<br>

			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="title">Geolocation</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">


								<div id ="city-name" class="location"></div>
								<br>
								<div class="degree">
									<center><div id ="locationname" class="num">---</div>
									</div>	
								</div>

							    <center>
							    <!-- <img src="images/icon-sun.png" alt=""> --><span id="latitude">&nbsp;</span>
							    <!-- <img src="images/icon-a.png" alt=""> --><span id="longitude"></span>
								</center>
								<br>

							</div>
						</div>
					</div>
				</div>
			</div>

			<br>
			<br>
			<br>
			<br>
			<br>

			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="title">Weather Forecast</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">




								<!-- <div id ="city-name" class="location"></div> -->
								<br>
								<div class="degree">
									<center><div id ="temp" class="num">---</div>
									</div>	
								</div>
								<div class="temperature">
							      <div id="temp"></div>
							    </div>
							    
							    <center>
							    <img src="images/icon-sun.png" alt=""><span id="morning-div">&nbsp;</span>
							    <img src="images/icon-a.png" alt=""><span id="afternoon-div"></span>
								<img src="images/icon-n.png" alt=""><span id="night-div">&nbsp;&nbsp;</span>
								</center>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			


			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="title">Power Outage</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">




								<div id ="city-name" class="location"></div>
								<br>
								<center>
								<div class="temperature">
									<div id ="first-alert" class="num">---</div>
								</div>	
								</div>
								<div class="temperature">
								      <div id="second-alert"></div>
								 </div>
							    <div class="temperature">
							      <div id="third-alert"></div>
							    </div>
							    <div class="temperature">
							      <div id="forth-alert"></div>
							    </div>
							    <div class="temperature">
							      <div id="fifth-alert"></div>
							    </div>
							    <div class="temperature">
							      <div id="sixth-alert"></div>
							    </div>
							    <div class="temperature">
							      <div id="seventh-alert"></div>
							    </div>
							    <div class="temperature">
							      <div id="eighth-alert"></div>
							    </div>
							    <br>
							    </center>
							    <!-- <img src="images/icon-sun.png" alt=""><span id="morning-div">&nbsp;</span>
							    <img src="images/icon-a.png" alt=""><span id="afternoon-div"></span>
								<img src="images/icon-n.png" alt=""><span id="night-div">&nbsp;&nbsp;</span> -->
								

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<form action="#" class="subscribe-form">
								<input type="text" placeholder="Enter your email to subscribe...">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="social-links">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>

					<p class="colophon">Copyright 2019 TMRND. All rights reserved</p>
				</div>
			</footer> 


		</div>
		<!-- <script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script> -->
		<script  src="script.js"></script>
		<script  src="script2.js"></script>
		
	</body>

</html>