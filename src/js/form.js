$(function($) {
    var options = {
      beforeSubmit:  showRequest,
      success:       showResponse
    };

    $('#date-contact').ajaxForm(options);
  });

function showRequest() {
  //@TODO show a loading spinner
  return true;
}

function showResponse(responseText, statusText)  {
  var response = {};
  try {
    response = JSON.parse(responseText);
  } catch (e) {
    console.log(e);
  }

  if (statusText != 'success' || !('success' in response) || !response.success) {
    // Error happened

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
    //@TODO show success, perhaps with an animation like this: https://codepen.io/simonwuyts/pen/mmMYzx
  }
}
