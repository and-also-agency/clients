$(function() {
    if ((location.pathname.split("/")[1]) !== ""){
        $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').parent().addClass('active');
    }
    else {
    $('nav li.home-link a').parent().addClass('active');
    }
})

$("#contact-form").validate({
	email: {
		required: true,
		email: true
	},
	messages: {
		email: "Please enter a valid email address."
	},
	errorPlacement: function (error, element) {
		error.insertAfter(element);
	},
  	submitHandler: function(form) {
	    if ($("#special-requests").val().length !== 0) {
        	return false;
    	} else {
    		form.submit();
    	}
  	}
});