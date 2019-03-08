$(document).ready(function() {
  //change all selects to user-friendly elements
  $('select').niceSelect();




  var phoneNumber = document.querySelector("#phoneNumber");
  var buildCountrySelector = window.intlTelInput(phoneNumber,{
  	 initialCountry: "auto",
	  geoIpLookup: function(success, failure) {
	    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
	      var countryCode = (resp && resp.country) ? resp.country : "";
	      success(countryCode);
	    });
	  },
	  separateDialCode : true,
  });

    //registration form validation
  $('#registration input').on('change',function(e) {
  	var thisInput = $(this);
  	if(thisInput.val() != ''){
  	  thisInput.parent('.formInner').removeClass('errorValid').addClass('succValid');
  	}else {
  	  thisInput.parent('.formInner').removeClass('succValid').addClass('errorValid');
  	}

  });

  //registration form ajax
  $('#registration').on('submit',function(e) {
  	  // e.preventDefault();
  	  var getFormData = {};
	$("#registration input").each(function() {
	    getFormData[$(this).attr("name")] = $(this).val();
	});
	var selectedCOuntryCode = $('.country.active .dial-code').text();
	getFormData['phoneNumber'] = selectedCOuntryCode + getFormData['phoneNumber'];
	console.log(getFormData); 
  	 
	});

});