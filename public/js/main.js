$(document).ready(function() {
	//Fading Effect
	$(".navbar-toggler").click(function(){
	    $(".backdrop").fadeToggle();
	    $(".mobile-nav").fadeToggle("slow");
	});

	//Animation
	const logo = document.querySelector('.navbar-brand');
	const nav_list = document.querySelector('.navbar-nav ');
	const t1 = new TimelineMax();
	t1.fromTo(logo, 1.5 ,{x: "-100%"},{x:"0%",ease: Power2.easeInOut})
	.fromTo(nav_list, 1.5, {x: "100%"},{x:"0%",ease: Power2.easeInOut},"-=1.5"); 

	var wrapper = $('.animation-holder');
	var fadeInLeft = $('.animation-holder-fade');
	var fadeIn= $('.animation-holder-fadeIn');
	// for (i=0; i < wrapper.length; i++) {
	// 	// console.log(typeof(wrapper));
	// 	var counted = wrapper[i];
	// 	console.log(counted);
	// 	console.log(wrapper);
	// 	wrapper.waypoint(function() {
	// 		wrapper.addClass('bounceIn animated');
	// 	},{offset:'85%'});
		
	// }
	

	// fadeInLeft.waypoint(function() {
	// 	fadeInLeft.addClass('fadeInLeftBig animated');
	// },{offset:'85%'});
	
	// fadeIn.waypoint(function() {
	// 	fadeIn.addClass('fadeIn fade-animated');
	// },{offset:'85%'});

	$.each(['animation-holder'], function(i, classname) {
		var $elements = $('.' + classname)
		$elements.each(function() {
		  new Waypoint({
			element: this,
			handler: function(direction) {
			  var previousWaypoint = this.previous()
			  var nextWaypoint = this.next()
	  
			  $elements.removeClass('np-previous np-current np-next')
			  $(this.element).addClass('np-current bounceIn animated')
			  if (previousWaypoint) {
				$(previousWaypoint.element).addClass('np-previous')
			  }
			  if (nextWaypoint) {
				$(nextWaypoint.element).addClass('np-next')
			  }
			},
			offset: '70%',
			group: classname
		  })
		})
	});

	$.each(['animation-holder-fade'], function(i, classname) {
		var $elements = $('.' + classname)
		$elements.each(function() {
		  new Waypoint({
			element: this,
			handler: function(direction) {
			  var previousWaypoint = this.previous()
			  var nextWaypoint = this.next()
	  
			  $elements.removeClass('np-previous np-current np-next')
			  $(this.element).addClass('np-current fadeInLeftBig animated')
			  if (previousWaypoint) {
				$(previousWaypoint.element).addClass('np-previous')
			  }
			  if (nextWaypoint) {
				$(nextWaypoint.element).addClass('np-next')
			  }
			},
			offset: '75%',
			group: classname
		  })
		})
	});

	$.each(['animation-holder-fadeIn'], function(i, classname) {
		var $elements = $('.' + classname)
		$elements.each(function() {
		  new Waypoint({
			element: this,
			handler: function(direction) {
			  var previousWaypoint = this.previous()
			  var nextWaypoint = this.next()
	  
			  $elements.removeClass('np-previous np-current np-next')
			  $(this.element).addClass('np-current fadeIn fade-animated')
			  if (previousWaypoint) {
				$(previousWaypoint.element).addClass('np-previous')
			  }
			  if (nextWaypoint) {
				$(nextWaypoint.element).addClass('np-next')
			  }
			},
			offset: '75%',
			group: classname
		  })
		})
	});




	//Light Gallery

	$('.gallery-wrapper').lightGallery();

	$.ajax({
		method: 'GET',
		url: '/demo',
		success: function(data) {
			// console.log(data);
		},
		error: function() {

		}
	});

})