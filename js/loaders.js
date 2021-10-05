$('.carousel.carousel-slider.myslider').carousel({
			    fullWidth: true,
			    indicators: true,
			  });

$(document).ready(function() { 
	  $('.sidenav').sidenav(); 
  $(".slider").slider({ full_width: true });  
  $('.parallax').parallax();
  $('.myreviews').carousel({
  	numVisible: 7,
  	shift: 55,
  	padding: 55
  });
  $('.modal').modal();

  $(".dropdown-trigger").dropdown({ hover: false });

}); 

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $('.dropdown-trigger').dropdown();
        

function toggleModal(heading, description){

	$('#info-modal-heading').text(heading);
	$('#info-modal-content').text(description);

	var instance = M.Modal.getInstance($('#modal3'));
	instance.open();

}