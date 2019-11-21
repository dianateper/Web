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

				if (slideNumber==1 || slideNumber==2)
				{
					var x = document.getElementsByClassName("rect-orange");
					for (var i = 0; i < x.length; i++) {
					  x[i].style.backgroundColor = "rgba(0,152,182,0.3)";
					}

					var x = document.getElementsByClassName("rect-blue");

					for(var i = 0; i < x.length; i++)
					{
						x[i].style.visibility="visible";
					}

				}
				if(slideNumber==1){
					var x = document.getElementsByClassName('rect-dark-blue');
					for(var i = 0; i < x.length; i++)
					{
						x[i].style.visibility="hidden";
					}

					var x = document.getElementsByClassName('rect-dark-blue-next');
					for(var i = 0; i < x.length; i++)
					{
						x[i].style.visibility="hidden";
					}
				}

				if(slideNumber ==2){
					var x = document.getElementsByClassName('rect-dark-blue');
					for(var i = 0; i < x.length; i++)
					{
						x[i].style.visibility="visible";
					}

					var x = document.getElementsByClassName('rect-dark-blue-next');
					for(var i = 0; i < x.length; i++)
					{
						x[i].style.visibility="visible";
					}


				}
				if (slideNumber==0)
				{
					var x = document.getElementsByClassName("rect-orange");
					for (var i = 0; i < x.length; i++) {
					  x[i].style.backgroundColor = "#F8E0C2";


					}

					var x = document.getElementsByClassName("rect-blue");

					for(var i = 0; i < x.length; i++)
					{
						x[i].style.visibility="hidden";
					}

					var x = document.getElementsByClassName('rect-dark-blue');
					for(var i = 0; i < x.length; i++)
					{
						x[i].style.visibility="hidden";
					}

					var x = document.getElementsByClassName('rect-dark-blue-next');
					for(var i = 0; i < x.length; i++)
					{
						x[i].style.visibility="hidden";
					}


				}

				if(slideNumber==3){
					var x = document.getElementsByClassName('rect-dark-blue');
					for(var i = 0; i < x.length; i++)
					{
						x[i].style.visibility="hidden";
					}

					var x = document.getElementsByClassName('rect-dark-blue-next');
					for(var i = 0; i < x.length; i++)
					{
						x[i].style.visibility="hidden";
					}
					var x = document.getElementsByClassName("rect-orange");
					for (var i = 0; i < x.length; i++) {
					  x[i].style.backgroundColor = "#F8E0C2";


					}

				}

				var imageList = ['../img/yacht_detail/line_dotes1.png','../img/yacht_detail/line_dotes2.png','../img/yacht_detail/line_dotes3.png','../img/yacht_detail/line_dotes4.png']

				var newImg = new Image;

				var src = '../img/yacht_detail/line_dotes'+(slideNumber+1)+'.png';
			

				console.log(src);

				$("#slide-arrow").attr("src", src);


			    $('.wrapper').animate({
			      marginLeft: margin
			    }, 1000);
			    return false;});
});


/*-------------------------------------------------------------------SWIPEBOX----------------------------------------------------------------------------*/

 $(document).ready(function(){
		    	if ($.swipebox.isOpen){
							console.log("swipebox");
						}
		    
					$('.responsive').slick({
					dots: false,

					infinite: true,
					speed: 300,
					slidesToShow: 4,
					slidesToScroll: 4,
					autoplay:true,
 					prevArrow:"<img class='a-left control-c prev slick-prev' src='../img/yacht_detail/dotes_left.png'>",
 					nextArrow:"<img class='a-right control-c next slick-next' src='../img/yacht_detail/dotes_right.png'>",
					

					responsive: [
					  {
					    breakpoint: 1024,
					    settings: {
					    slidesToShow: 3,
					    slidesToScroll: 3,
					    infinite: true,
					    dots: false,
					   

					   }
					    },
					    {
					      breakpoint: 900,
					      settings: {
					        slidesToShow: 4,
					        slidesToScroll: 4,
					      
					      }
					    },
					    {
					      breakpoint: 600,
					      settings: {
					        slidesToShow: 1,
					        slidesToScroll: 1,
				
					       
					      }
					    }
					  ]
					});

		     $('.responsivertl').slick({
		     		rtl:true,
					dots: false,
					infinite: true,
					speed: 300,
					autoplay:true,
					slidesToShow: 4,
					slidesToScroll: 4,
					
					prevArrow:"<img class='a-left control-c prev slick-prev' src='../img/yacht_detail/dotes_right.png'>",
 					nextArrow:"<img class='a-right control-c next slick-next' src='../img/yacht_detail/dotes_left.png'>",
					responsive: [
					  {
					    breakpoint: 1024,
					    settings: {
					    slidesToShow: 3,
					    slidesToScroll: 3,
					    infinite: true,
					    dots: false
					   }
					    },
					    {
					      breakpoint: 900,
					      settings: {
					        slidesToShow: 4,
					        slidesToScroll: 4,
					       
					      }
					    },
					    {
					      breakpoint: 600,
					      settings: {
					        slidesToShow: 1,
					        slidesToScroll: 1,
					       
					       
					       
					      }
					    }
					  ]
					});





			         
		    });






/*------------------------------------------------------PHOTO GALLERY--------------------------------------------------------------------------------*/
					function openModal() {
					  document.getElementById("myModal").style.display = "block";
					}

					// Close the Modal
					function closeModal() {
					  document.getElementById("myModal").style.display = "none";
					}

					var slideIndex = 1;
					showSlides(slideIndex);

					// Thumbnail image controls
					function currentSlide(n) {
					  showSlides(slideIndex = n);
					}

					function showSlides(n) {
					  var i;
					  var slides = document.getElementsByClassName("mySlides");
					  var dots = document.getElementsByClassName("demo");
					  if (n > slides.length) {slideIndex = 1}
					  if (n < 1) {slideIndex = slides.length}
					  for (i = 0; i < slides.length; i++) {
					    slides[i].style.display = "none";
					  }
					  for (i = 0; i < dots.length; i++) {
					    dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block";
					  dots[slideIndex-1].className += " active";
					}


					$(document).ready(function(){
					  $('.gallery-photo-slick').slick({
					  slidesToShow:12,
					  slidesToScroll: 12,
					  dots:false,
					  infinite: true,
					  prevArrow:"<img class='a-left control-c prev slick-prev' src='../img/yacht_detail/arrow_left.png'>",
 						nextArrow:"<img class='a-right control-c next slick-next' src='../img/yacht_detail/arrow_right.png'>",
					  });
					});

