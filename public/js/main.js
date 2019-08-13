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


})