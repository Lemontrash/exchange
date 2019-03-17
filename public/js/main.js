$(document).ready(function() {
  //change all selects to user-friendly elements
  $('select').niceSelect();




  var phoneNumber = document.querySelector("#phoneNumber");
  if(phoneNumber) {
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
  }

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
  	  e.preventDefault();
  	  var getFormData = {};
	$("#registration input").each(function() {
	    getFormData[$(this).attr("name")] = $(this).val();
	});
	var selectedCOuntryCode = $('.country.active .dial-code').text();
	getFormData['phoneNumber'] = selectedCOuntryCode + getFormData['phoneNumber'];
	getFormData['_token'] = $('meta[name="csrf-token"]').attr('content');
	//getFormData = $('getFormData').serialize();
	console.log(getFormData);
	// $.ajaxSetup({
	//
	// });
	//
	$.ajax({
		type : 'POST',
		url : 'api/register',
		datatype : 'JSON',
		data : getFormData,

		success : function (response) {
			console.log('Success');

		},
		error : function(response) {
			console.log('Error');
		}
	})
  	 
	});

  //profile settings ajax
  $('#profile_update_password').on('click', function(e){
    e.preventDefault();
    var data = {
      'current_password' : $('#profile_current_password').val(),
      'new_password' : $('#profile_new_password').val(),
      'retype_password' : $('#profile_retype_new_password').val()
    }
    if(data.new_password == data.retype_password && data.new_password !== ''){
      $.ajax({
        url: '/api/passwordChange',
        data: JSON.stringify(data),
        contentType: false,
        processData: false,
        method: 'POST',
        success: function (data) {
          console.log(data);
        }
      });
    }
    else{
      alert('Passwords do not match');
    }
  });

});