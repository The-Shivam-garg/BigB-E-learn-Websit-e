$(function() {
  $.get('/config', function(response) {
    Object.keys(fields).forEach(configureField(fields, response));
    Object.keys(buttons).forEach(configureButton(buttons, response));
  });

  // Button Ids' and Config Keys
  var buttons = {
    chatDemoButton: 'TwilioChatServiceSid',
    syncDemoButton: 'TwilioSyncServiceSid',
    notifyDemoButton: 'TwilioNotificationServiceSid'
  };

  // Field Ids' and Masked Flag
  var fields = {
    twilioAccountSid: false,
    twilioApiKey: false,
    twilioApiSecret: true,
    twilioNotificationServiceSid: false,
    twilioChatServiceSid: false,
    twilioSyncServiceSid: false
  };

  var configureField = function(fields, response) {
    var htmlContent = 'Not configured in .env';
    var cssClass = 'unset';
    return function(fieldId) {
      var configKey = strToConfig(fieldId);
      var isMasked = fields[fieldId];
      if (!!response[configKey]) {
        htmlContent = isMasked ? 'Configured properly' : response[configKey];
        cssClass = 'set';
      }
      $('#' + fieldId).html(htmlContent).addClass(cssClass);
    };
  };

  var configureButton = function(buttons, response) {
    var hasBasicConfig = !!response.TWILIO_ACCOUNT_SID &&
                         !!response.TWILIO_API_KEY &&
                         !!response.TWILIO_API_SECRET;
    return function(buttonId) {
      var configKey = strToConfig(buttons[buttonId]);
      var cssClass = hasBasicConfig && !!response[configKey]
        ? 'btn-success'
        : 'btn-danger';
      $('#' + buttonId).addClass(cssClass);
    };
  };

  var strToConfig = function(string) {
    return string
      .split(/(?=[A-Z])/)
      .map(function(e) { return e.toUpperCase(); })
      .join('_');
  }
});
