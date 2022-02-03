$(function() {
  $('#sendNotificationButton').on('click', function() {
    $.post('/send-notification', {
      identity: $('#identityInput').val(),
      body: "Hello, world!"
    }, function(response) {
      $('#identityInput').val('');
      $('#message').html(response.message);
      console.log(response);
    });
  });
});
