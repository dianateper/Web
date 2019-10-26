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
					  
 					prevArrow:"<img class='a-left control-c prev slick-prev' src='../img/yacht_detail/dotes_left.png'>",
 					nextArrow:"<img class='a-right control-c next slick-next' src='../img/yacht_detail/dotes_right.png'>",
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
					      breakpoint: 600,
					      settings: {
					        slidesToShow: 2,
					        slidesToScroll: 2
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
					});
		     $('.responsivertl').slick({
		     		rtl:true,
					dots: false,
					infinite: true,
					speed: 300,
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
					      breakpoint: 600,
					      settings: {
					        slidesToShow: 2,
					        slidesToScroll: 2
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
					});
			    
		      
		    });
