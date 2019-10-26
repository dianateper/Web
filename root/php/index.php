<html>
	<head>
		<meta>
		<title>WEB</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		

		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Open+Sans&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Almarai&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" href="..\css\reset.css" type="text/css"/>
		<link rel="stylesheet" href="..\css\header.css" type="text/css"/>
		<link rel="stylesheet" href="..\css\footer.css" type="text/css"/>
		<link rel="stylesheet" href="..\css\style.css" type="text/css">
		<link rel="stylesheet" href="..\css\index.css" type="text/css">
	</head>

<body>	

	<!--------------------------------------Header------------------------------------------------------------->
	<div>
		<?php include 'header.php';?>		
	</div>
	<!--------------------------------------END Header------------------------------------------------------------->


	<!--------------------------------------SLIDER------------------------------------------------------------->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	 	<ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		</ol>
  		<div class="carousel-inner myrow">
		    <div class="carousel-item active">
		        <img src="..\img\mainSlider\Group1.png" class="d-block w-100" alt="...">
			    <div class="carousel-caption d-none d-md-block">
			      	<div class="mycontainer">
				        <p>Eget vehicula magna scelerisque nunc arcu.</p>
			        </div>
		        </div>
		    </div>
		    <div class="carousel-item">
		      <img src="..\img\mainSlider\Group2.png" class="d-block w-100" alt="...">
		       
		       <div class="carousel-caption d-none d-md-block">
		       	<div class="mycontainer">
			        <p>Lorem <br>ipsum dolor sit amet</p>
		        </div>
		    </div>
		    </div>
		    <div class="carousel-item">
		      	<img src="..\img\mainSlider\Group3.png" class="d-block w-100" alt="...">
		       
		       <div class="carousel-caption d-none d-md-block">
			       	<div class="mycontainer">
				        <p>Lorem ipsum dolor sit amet. Fringila morbi</p>
			        </div>
		    	</div>
		    </div>
		    <div class="carousel-item">
		     	<img src="..\img\mainSlider\Group4.png" class="d-block w-100" alt="...">
		       	<div class="carousel-caption d-none d-md-block">
		     	<div class="mycontainer">
			        <p>Eget vehicula magna scelerisque nunc arcu.</p>
		        </div>
		    </div>
		    </div>
  		</div>
		</div>
		<div class="carousel-control">
		    <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
		      <span aria-hidden="true"><img src="..\img\arrow_left.png" alt=""></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
			   <span aria-hidden="true"><img src="..\img\arrow_right.png" alt=""></span>
			    <span class="sr-only">Next</span>
	   		</a>
   		</div>
   	</div>
		<!--------------------------------------END SLIDER------------------------------------------------------------->
		<!-----------------------------------ARTICLE SECTION------------------------------------------------------------->
		<div>
			<div class="mycontainer">
				<div class="myrow article-section">
					<article>
						<h5>A wealth of knowledge to enhance your experience</h4>
						<p>A yacht charter offers life-affirming adventure. By accommodating both your preferences and requirements, no detail is left to chance.</p>
					</article>
					<article>
						<h5>CLear understanding of your requirements</h4>
						<p>We work hand-in-hand with our clients to guide and advise them on all aspects of the purchase process.</p>
					</article>
					<article>
						<h5>Maximal convenience of search</h4>
						<p>You can search for yachts using the specialised search feature below or you can contact us to let us know your precise requirements.</p>
					</article>
				</div>
				<div>
					<h2>Yachts</h2>
				</div>
			</div>
		</div>
	<!-----------------------------------END ARTICLE SECTION------------------------------------------------------------->
	<!-------------------------------------------------PHOTO SECTION----------------------------------------------------->
	<div>
		<div class="photo-section">
			<div class="mycontainer">
				<h2>For charter</h2>
			<div class="map-photo">
				
				<div>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" usemap="#yachtmap" id="help-map">
					<img src="..\img\index\Group5.png"  id="img-map">
					
					<map name="yachtmap">
					  	<area shape="rect" coords="0,0,228,265" href="#" alt="Cruisers" id="Cruisers">
					 	<area shape="rect" coords="228,0,512,128" href="#" alt="Californian" id="Californian">
					 	<area shape="rect" coords="512,0,965,265" href="#" alt="Cruisers" id="Cruisers-new">
					 	<area shape="rect" coords="965,0,1262,344" href="#" alt="Marinette" id="Marinette">
					 	<area shape="rect" coords="228,128,512,265" href="#" alt="Sun" id="SeaRay">
					 	<area shape="rect" coords="0,265,512,510" href="#" alt="Princess" id="Princess">
					 	<area shape="rect" coords="512,343,817,510" href="#" alt="Lazzara" id="Lazzara">
					 	<area shape="rect" coords="816,343,1169,510" href="#" alt="Marquis" id="Marquis">
					</map>


				</div>

				<div class="use-map-link myrow">
					<div class="use-map-text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="use-map-arrow">
						<a  href=""><img src="..\img\index\arrow.png" alt="" ></a>
					</div>
				</div>
				<div>
					<div class="use-map-Cruisers">
						<p>2018 Cruisers</p>
					</div>
					<div class="use-map-Princess">
						<p>2015 Princess V62-S</p>
					</div>
					<div class="use-map-Marquis">
						<p>2013 Marquis</p>
					</div>
					<div class="use-map-Californian">
						<p>1991 Californian</p>
					</div>
					<div class="use-map-Lazzara">
						<p>2009 Lazzara</p>
					</div>
					<div class="use-map-SeaRay">
						<p>2015 SeaRay</p>
					</div>
					<div class="use-map-Marinette">
						<p>1981 Marinette</p>
					</div>
					<div class="use-map-Cruisers-new">
						<p>2017 Cruisers</p>
					</div>
				</div>
			</div>
			</div>
			
		</div>
		
	</div>
	<!----------------------------------------------END PHOTO SECTION---------------------------------------------------->
	
	<!------------------------------------------------VIDEO SECTION------------------------------------------------------>

	<div class="video-section">
		<div class="mycontainer">
			<p>A yacht charter offers all you could imagine and more, from absolute relaxation to breathtaking adventure and treasured family moments, it is the ultimate escape. Chartering a yacht allows you to explore a variety of destinations while offering you all the comforts and amenities of a luxury villa. The possibilities are truly endless, however your dedicated charter broker will find out your requirements and carefully guide you through the selection process, helping you to make the final choice and negotiating the best rate for you.</p>

			<h5>Enjoy</h5>
			<hr>
			<video controls poster="..\img\index\video.png">
				<source src="" type="video/mp4">
  				<source src="" type="video/webm">
		    </video>
		</div>


	</div>

	<!------------------------------------------------------END VIDEO SECTION---------------------------------------------------->
	<!-------------------------------------------------MAP SECTION--------------------------------------------------------------->

	<div class="map-section">
		<div class="mycontainer myrow">
			<div id="map">
				
			</div>

			<div class="map-section-text">
				<h2>Where we are</h2>
				<p>04071</p>
				<p>Kyiv</p>
				<p>Naberezhno-Lugova St., 8</p>
				<p>50.477829, 30.508214</p>
			</div>
		</div>
	</div>


	<!-----------------------------------------------END MAP SECTION------------------------------------------------------------->

	<!--------------------------------------------------WATCH SECTION------------------------------------------------------------>

	<div class="watch-section">
		<div>
			<div class="orange-rectangle">
			</div>
			<div class="mycontainer">
				<h3>Still here?</h3>
				<div class="myrow flex-section-watch">
					<div class="watch-text">
						<p>Just watch at whole list of our yachts and make a choice.</p>
					</div>
					<div class="watch-button">
						<a href="">Watch it!</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!----------------------------------------------END WATCH SECTION------------------------------------------------------------>

	<!----------------------------------------------------FOOTER----------------------------------------------------------------->
		<div>
			<?php include 'footer.php';?>	
		</div>

	<!-------------------------------------------------END FOOTER---------------------------------------------------------------->
	<!------------------------------------------------------SLIDER SCRIPT-------------------------------------------------------->
	<script>
		$(document).ready(function(){
		    $("#carousel-example-generic").carousel({
		        interval : 20000
    		});

    		$(".use-map-link").mouseover(function(){
     			$(".use-map-arrow").css("visibility","visible");
     			$(".use-map-text").css("border","1px solid #FFFFFF");
     		});
     		
     		$(".use-map-link").mouseleave (function(){
    		 	$(".use-map-arrow").css("visibility","hidden");
    		 	$(".use-map-text").css("border","none");
    		});

    		$("#Cruisers").mouseenter(function(){
    			$('.use-map-Cruisers').css("z-index","1");
    		});

    		$("#Cruisers").mouseleave(function(){
    			$('.use-map-Cruisers').css("z-index","-1");
    		});

    		$("#Princess").mouseenter(function(){
    			$('.use-map-Princess').css("z-index","1");
    		});

    		$("#Princess").mouseleave(function(){
    			$('.use-map-Princess').css("z-index","-1");
    		});

    		$("#Marquis").mouseenter(function(){
    			$('.use-map-Marquis').css("z-index","1");
    		});

    		$("#Marquis").mouseleave(function(){
    			$('.use-map-Marquis').css("z-index","-1");
    		});

    		$("#Californian").mouseenter(function(){
    			$('.use-map-Californian').css("z-index","1");
    		});

    		$("#Californian").mouseleave(function(){
    			$('.use-map-Californian').css("z-index","-1");
    		});


    		$("#Lazzara").mouseenter(function(){
    			$('.use-map-Lazzara').css("z-index","1");
    		});

    		$("#Lazzara").mouseleave(function(){
    			$('.use-map-Lazzara').css("z-index","-1");
    		});

    		$("#SeaRay").mouseenter(function(){
    			$('.use-map-SeaRay').css("z-index","1");
    		});

    		$("#SeaRay").mouseleave(function(){
    			$('.use-map-SeaRay').css("z-index","-1");
    		});


    		$("#Marinette").mouseenter(function(){
    			$('.use-map-Marinette').css("z-index","1");
    		});

    		$("#Marinette").mouseleave(function(){
    			$('.use-map-Marinette').css("z-index","-1");
    		});



    		$("#Cruisers-new").mouseenter(function(){
    			$('.use-map-Cruisers-new').css("z-index","1");
    		});

    		$("#Cruisers-new").mouseleave(function(){
    			$('.use-map-Cruisers-new').css("z-index","-1");
    		});

    		$(document).ready(function(){
	    		var image_map= document.getElementById('img-map');	
				var width = image_map.naturalWidth;
				var height = image_map.naturalHeight;

				console.log(width + " " + height);
				$('#help-map').css('width',width);
				$('#help-map').css('height',height);
    		});
    	
		});

		
	</script>
	<!-------------------------------------------------END SLIDER SCRIPT-------------------------------------------------------->

	<script>
		function initMap(){
			var pos = {lat: 50.481074, lng:30.515014};
			var opt = {
				center: {lat: 50.481074, lng:30.515014 },
				zoom: 12,
				  styles: [
		            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
		            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
		            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
		            {
		              featureType: 'administrative.locality',
		              elementType: 'labels.text.fill',
		              stylers: [{color: '#d59563'}]
		            },
		            {
		              featureType: 'poi',
		              elementType: 'labels.text.fill',
		              stylers: [{color: '#d59563'}]
		            },
		            {
		              featureType: 'poi.park',
		              elementType: 'geometry',
		              stylers: [{color: '#263c3f'}]
		            },
		            {
		              featureType: 'poi.park',
		              elementType: 'labels.text.fill',
		              stylers: [{color: '#6b9a76'}]
		            },
		            {
		              featureType: 'road',
		              elementType: 'geometry',
		              stylers: [{color: '#38414e'}]
		            },
		            {
		              featureType: 'road',
		              elementType: 'geometry.stroke',
		              stylers: [{color: '#212a37'}]
		            },
		            {
		              featureType: 'road',
		              elementType: 'labels.text.fill',
		              stylers: [{color: '#9ca5b3'}]
		            },
		            {
		              featureType: 'road.highway',
		              elementType: 'geometry',
		              stylers: [{color: '#746855'}]
		            },
		            {
		              featureType: 'road.highway',
		              elementType: 'geometry.stroke',
		              stylers: [{color: '#1f2835'}]
		            },
		            {
		              featureType: 'road.highway',
		              elementType: 'labels.text.fill',
		              stylers: [{color: '#f3d19c'}]
		            },
		            {
		              featureType: 'transit',
		              elementType: 'geometry',
		              stylers: [{color: '#2f3948'}]
		            },
		            {
		              featureType: 'transit.station',
		              elementType: 'labels.text.fill',
		              stylers: [{color: '#d59563'}]
		            },
		            {
		              featureType: 'water',
		              elementType: 'geometry',
		              stylers: [{color: '#17263c'}]
		            },
		            {
		              featureType: 'water',
		              elementType: 'labels.text.fill',
		              stylers: [{color: '#515c6d'}]
		            },
		            {
		              featureType: 'water',
		              elementType: 'labels.text.stroke',
		              stylers: [{color: '#17263c'}]
		            }
		          ]
			};


			var myMap  = new google.maps.Map(document.getElementById("map"),opt);

			var marker = new google.maps.Marker({
				position: pos,
				map: myMap,
				title: "Order yacht 'TEPERDA'",
				icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
			});

			var info = new google.maps.InfoWindow({
				content: '<h3>My Place</h3><p>Description</p>'
			});

			marker.addListener("click", function(){
				info.open(myMap, marker);
			});
		}
	</script>

	 
</body>


</html>
