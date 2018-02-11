$(function($) {
    var options = {
      beforeSubmit:  showRequest,
      success:       showResponse
    };

    $('#date-contact').ajaxForm(options);
  });

function showRequest(arr, $form) {
  var form = $form[0];

  if ((form.email.value != null && form.email.value != '') || (form.tel.value != null && form.tel.value != '')) {
    $('.form-loading-circle-container').removeClass('hidden');
    $('.validation-error-message').addClass('hidden');
    return true;
  } else {
    $('.validation-error-message').removeClass('hidden');
    return false;
  }
}

function showResponse(responseText, statusText)  {
  $('.form-loading-circle-container').addClass('hidden');
  $('.info-message').addClass('invisible');

  var response = {};
  try {
    response = JSON.parse(responseText);
  } catch (e) {
    $('.error-message').removeClass('hidden');
  }

  if (statusText != 'success' || !('success' in response) || !response.success) {
    // Error happened
    $('.error-message').removeClass('hidden');
    $('.svg-error-wrapper').find('#successAnimation').addClass('animated');
    if ('success' in response && !response.success) {
      // The backend is reporting an error
      if (response.message == 'both_empty') {
        //@TODO print message that not both the email and the phone number can be mepty
      } else if (response.message == 'sending_failure') {
        $('.validation-error-message').removeClass('hidden');
      }
    }
    //@TODO show message
  } else if (response.success) {
    $('.success-message').removeClass('hidden');
    $('.svg-success-wrapper').find('#successAnimation').addClass('animated');
  }
}
