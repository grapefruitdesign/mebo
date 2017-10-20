$(".question > h2 > span").on("click", function(e) {

	e.preventDefault(); 
	e.stopPropagation();
	
	if ($(this).closest('.question-container').find('.answer').hasClass('answer-closed')) {
			
		$(this).closest('.question-container').find('.answer').removeClass('answer-closed');
		$(this).closest('.question-container').find('.answer').addClass('answer-open');
		
		$(this).closest('h2').removeClass('closed');
		$(this).closest('h2').addClass('open');

	} else {

		$(this).closest('.question-container').find('.answer').removeClass('answer-open');
		$(this).closest('.question-container').find('.answer').addClass('answer-closed');

		$(this).closest('h2').removeClass('open');
		$(this).closest('h2').addClass('closed');
		
	}

});

/*$(".dropdown-menu li a").click(function() {
	console.log( "HELLO" )
	$(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
	$(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});
*/
/*$("#submit-contact").on("click", function() {
	
});	


$("#submit-contact").on("click", function() {
	$("#support-form form").fadeOut(function() {
		$("#support-form .response").fadeIn();
	});
});*/

$(".dropdown-toggle").click(function(){
  $('.dropdown-selector-list').toggle('dropdown-selector-list.show')
  $('#dropdown-product-btn').toggleClass('open')
});


$('.dropdown-menu a').on('click', function() {
    $('#dropdown-product-btn').html( $(this).context.innerHTML);
    //$('.dropdown-selector-list').toggle('dropdown-selector-list.show')
    $('#dropdown-product-btn').addClass('product-selected');
    //$('#dropdown-product-btn').toggleClass('open')
	
	$('#hiddenInput input').val( $(this).context.innerHTML );
});





// SOURCES
var fname;
var lname;
var email;
var product_dropdown;
var message;
var form_send_btn;
var form_warning;
var firstRun = true;


var fname_isValid = false;
var lname_isValid = false;
var email_isValid = false;
var product_isValid = false;
var message_isValid = false;



$( window ).on('load', function()
{
	if( document.getElementById('support-form') )
	{
		init_Form();

	}

});



function init_Form()
{
	defineSources_Form();
	addEventListeners_Form();

}



function defineSources_Form()
{
	fname = document.getElementById( 'fname' );
	lname = document.getElementById( 'lname' );
	email = document.getElementById( 'email' );
	product_dropdown = document.getElementById( 'dropdown-product-btn' );
	message = document.getElementById( 'message' );
	form_send_btn = document.getElementById( 'submit-contact' );

	form_warning = document.getElementById( 'form-warning' )

}



function addEventListeners_Form()
{
	$("#support-form form").on("submit", sendForm);
	  $("#support-form form .submit-contact a").on("click", function() {
		  $("#support-form form").submit();
	  });
	
	form_send_btn.addEventListener( 'click', sendForm )

	fname.addEventListener("focus", setDefaultBorder);
	lname.addEventListener("focus", setDefaultBorder);
	email.addEventListener("focus", setDefaultBorder);
	product_dropdown.addEventListener("focus", setDefaultBorder);
	message.addEventListener("focus", setDefaultBorder);
	
}



function sendForm()
{
	if( checkFormValidation() )
	{
		$.post($("#support-form form").attr("action"), $("#support-form form").serialize(), function(response) {
	
			if (parseInt( response ) > 0) {
	
				$("#support-form form").fadeOut(function() {
					$("#support-form .response").fadeIn();
				});
	
			}
	
		});
	
		return false;

	} else {

		var form_warning_tag = form_warning.getElementsByTagName( 'p' )[0];
		form_warning_tag.style.color = '#A00';

		if( !email_isValid && firstRun )
		{
			firstRun = false;
			form_warning_tag.innerHTML = form_warning_tag.innerHTML + " Also, please be sure to use a valid email address.";  
		}

	}

}



function checkFormValidation()
{	
	var EMAIL_IS_VALID;


	if( fname.value != "" && fname.value != " " && fname.value != fname.defaultValue )
	{
		fname_isValid = true;
	} else {
		setInvalidField( fname );
	}

	if( lname.value != "" && lname.value != " " && lname.value != lname.defaultValue )
	{
		lname_isValid = true;
	} else {
		setInvalidField( lname );
	}

	if( validateEmail( email.value ) )
	{
		email_isValid = true;
	} else {
		setInvalidField( email );
	}

	if( product_dropdown.innerHTML != "SELECT PRODUCT"  )
	{
		product_isValid = true;
	} else {
		setInvalidField( product_dropdown );
	}

	if( message.value != "" && message.value != " " && message.value != message.defaultValue )
	{
		message_isValid = true;
	} else {
		setInvalidField( message );
	}



	// IF ALL VALID
	if( fname_isValid && lname_isValid && email_isValid && product_isValid && message_isValid  ) {
		EMAIL_IS_VALID = true;
	} else {
		EMAIL_IS_VALID = false;
	}




	return EMAIL_IS_VALID;

}



function validateEmail(email)
{
	var emailFormat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	return emailFormat.test( email );

}



/*function getProductName(text)
{
	var product_text = text;
	product_text = product_text.substring(0, product_text.indexOf('<'));

	return product_text;
}*/



function setInvalidField(field)
{
	field.style.borderColor = '#A00';
}



function setDefaultBorder(event)
{
	event.target.style.borderColor = '#2d82c4';
}