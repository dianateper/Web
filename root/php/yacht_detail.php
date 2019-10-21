<!DOCTYPE html>
<html>
	<head>
		<title></title>
		
		<link rel="stylesheet" href="..\css\reset.css" type="text/css"/>
		<link rel="stylesheet" href="..\css\header.css" type="text/css"/>
		<link rel="stylesheet" href="..\css\footer.css" type="text/css"/>
		<link rel="stylesheet" href="..\css\style.css" type="text/css">
		<link rel="stylesheet" href="..\css\yacht_detail.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>
	<body>
		<!--------------------------------------Header------------------------------------------------------------->
		<div>
			<?php include 'header.php';?>		
		</div>
		<!--------------------------------------END Header------------------------------------------------------------->

		<div>
			<div class="mycontainer">
				<div>
					<h3>2015 Princess V62-S</h3>
				</div>
				<div class="yacht-slide">
					
				</div>
				<div class="yacht-detail-slide myrow">
						 <nav>
						        <h5><a href="#page-1" class="scrollitem selected">Description</a></h5>
						        <h5><a href="#page-2" class="scrollitem">Specifications</a></h5>
						        <h5><a href="#page-3" class="scrollitem">Gallery</a></h5>
						        <h5><a href="#page-4" class="scrollitem">Rent</a></h5>
						    </nav>
						<div class="wrapper">
						   
						    <div id="page-1" class="page"> 
						         <h3>page 1</h3>
						        <div class="simulate"></div>
						    </div>
						    <div id="page-2" class="page page-hide">  
						         <h3>page 2</h3>
						        <div class="simulate"></div>
						    </div>
						    <div id="page-3" class="page page-hide"> 
						        <h3>page 3</h3>
						        <div class="simulate"></div>
						    </div>
						     <div id="page-4" class="page page-hide"> 
						        <h3>page 4</h3>
						        <div class="simulate"></div>
						    </div>
						</div>
				</div>


			</div>
		</div>
		
		<!----------------------------------------------------FOOTER----------------------------------------------------------------->
		<div>
			<?php include 'footer.php';?>	
		</div>

		<!-------------------------------------------------END FOOTER---------------------------------------------------------------->

		<script>
				$(document).ready(function() {
			 	var slideNum = $('.page').length,
			    wrapperWidth = 100 * slideNum,
			    slideWidth = 100 / slideNum;
			  	$('.wrapper').width(wrapperWidth + '%');
			  	$('.page').width(slideWidth + '%');

			  	$('a.scrollitem').click(function() {
			    $('a.scrollitem').removeClass('selected');
			    $(this).addClass('selected');


			    var slideNumber = $($(this).attr('href')).index('.page'), margin = slideNumber * -100 + '%';



			    

			    var page = document.getElementById("page-"+(slideNumber+1));
			    page.classList.remove("page-hide");

			    console.log(page);

				for(var i = 0; i<4; i++)
				{
					if (i!=slideNumber)
					{
						var page = document.getElementById("page-"+(i+1));

						if(!page.classList.contains("page-hide")){
							page.classList.add("page-hide");
						}
					}
				}




			    $('.wrapper').animate({
			      marginLeft: margin
			    }, 1000);
			    return false;
			  });
			});
		</script>
	</body>
</html>