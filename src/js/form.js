$(function($) {
    var options = {
      beforeSubmit:  showRequest,
      success:       showResponse
    };

    $('#date-contact').ajaxForm(options);
  });

function showRequest(arr, $form) {
  if (($form.find('input[type="email"]').val() != null && $form.find('input[type="email"]').val() != '') || ($form.find('input[type="tel"]').val() != null && $form.find('input[type="tel"]').val() != '')) {
    $('.form-loading-circle-container').removeClass('hidden');
    $('.validation-error-message').addClass('hidden');
    return true;
  } else {
    $('.validation-error-message').removeClass('hidden');
    return false;
  }
}

function showResponse(responseText, statusText)  {
  var response = {};
  try {
    response = JSON.parse(responseText);
  } catch (e) {
    console.log(e);
  }
  $('.form-loading-circle-container').addClass('hidden');
  $('.panel-body.info-message').addClass('hidden');
  if (statusText != 'success' || !('success' in response) || !response.success) {
    // Error happened
    $('.panel-body.error-message').removeClass('hidden');
    $('.svg-error-wrapper').find('#successAnimation').addClass('animated');
    if ('success' in response && !response.success) {
      // The backend is reporting an error
      if (response.message == 'both_empty') {
        //@TODO print message that not both the email and the phone number can be mepty
      } else if (response.message == 'sending_failure') {
        //@TODO print message that there was a failure saving the data
      }
    }
    //@TODO show message
  } else if (response.success) {
    $('.panel-body.success-message').removeClass('hidden');
    $('.svg-success-wrapper').find('#successAnimation').addClass('animated');
    //@TODO show success, perhaps with an animation like this: https://codepen.io/simonwuyts/pen/mmMYzx
  }
}
