$(document).ready(function() {
  //change all selects to user-friendly elements
  $('select.nice-select-trigger').niceSelect();




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
  	  // e.preventDefault();
  	  var getFormData = {};
	$("#registration input").each(function() {
	    getFormData[$(this).attr("name")] = $(this).val();
	});
	var selectedCOuntryCode = $('.country.active .dial-code').text();
	getFormData['phoneNumber'] = selectedCOuntryCode + getFormData['phoneNumber'];
	console.log(getFormData); 
  	 
	});

  //profile settings ajax
  // $('#profile_update_password').on('click', function(e){
  //   e.preventDefault();
  //   var data = {
  //     'current_password' : $('#profile_current_password').val(),
  //     'new_password' : $('#profile_new_password').val(),
  //     'retype_password' : $('#profile_retype_new_password').val(),
  //     '_token' : $(this).closest('form').find('input[name="_token"]').val()
  //   }
  //   console.log($(this).closest('form'));
  //   if(data.new_password == data.retype_password && data.new_password !== ''){
  //     $.ajax({
  //       url: '/api/passwordChange',
  //       data: data,
  //       method: 'POST',
  //       success: function (data) {
  //         console.log(data);
  //       }
  //     });
  //   }
  //   else{
  //     alert('Passwords do not match');
  //   }
  // });

  //faq questions open/close
  $('.faq-question').on('click', function(e){
    $(this).parent().toggleClass('open');
  });

  //profile tabs switching
  function getElementIndex (element) {
    return Array.from(element.parentNode.children).indexOf(element);
  }
  $('.tab-switchers .item').on('click', function(){
    // console.dir(this.parentNode.children);
    var tabIndex = getElementIndex(this);
    $('.tabs-container .tab-item').removeClass('active');
    $('.tab-switchers .item').removeClass('active');
    $(this).addClass('active');
    $('.tabs-container .tab-item').eq(tabIndex).addClass('active');

    // console.log(getElementIndex(this));
  });

  //personal data verification
  $('#company').select2({
    placeholder: "Company",
    //allowClear: true
  });

});