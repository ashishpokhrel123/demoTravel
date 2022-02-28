	

	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/owl-carousel.js"></script>
	<script src="js/bootstrap-4.min.js"></script>



	<script>
      	new WOW().init();
    </script>

    <script>
    	$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
		    }
		})
    </script>

    <script>
    	$('.owl-carousel2').owlCarousel({
    		items : 3,
		    loop:true,
		    margin:10,
		    navigation : true,
			navigationText : ["Previous","Next"],
		    nav:true,
		    pagination:false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:3
		        }
		    }
		})
    </script>


	<script>
		$(function(){
		    //$(".chevron-down").
		    $("div[data-toggle=collapse]").click(function(){
		        $(this).children('span').toggleClass("fa-chevron-down fa-chevron-up");
		    });
		})
	</script>

	<script>
		
		 
		  $(".mobile-nav ul").addClass("flex-column");
		
		
	</script>

	<script>
		$(".mobile-nav").click(function(){
		  $(".mobile-top-nav .navbar").toggleClass("open-nav");		  
		});
	</script>


	<script>
		$(".search-box-travel").click(function(){
		  $(".search-box-form").toggleClass("d-none");		  
		});
	</script>
	
</body>
</html>