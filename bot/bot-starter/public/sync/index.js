$(function () {
  //We'll use message to tell the user what's happening
  var $message = $('#message');

  //Get handle to the game board buttons
  var $buttons = $('#board .board-row button');

  //Our interface to the Sync service
  var syncClient;

  // Every browser Sync client relies on FPA tokens to authenticate and authorize it
  // for access to your Sync data.
  //
  // In this quickstart, we're using our own token generator. You can generate a token
  // in any backend language that Twilio supports, or generate a Twilio Function so
  // Twilio can host it for you. See the docs for more details.
  //
  $.getJSON('/token', function (tokenResponse) {

    // Once we have the token, we can initialize the Sync client and start subscribing
    // to data. The client will initialize asynchronously while we load the rest of
    // the user interface.
    //
    syncClient = new Twilio.Sync.Client(tokenResponse.token, { logLevel: 'info' });
    syncClient.on('connectionStateChanged', function(state) {
      if (state != 'connected') {
        $message.html('Sync is not live (websocket connection <span style="color: red">' + state + '</span>)…');
      } else {
        // Now that we're connected, lets light up our board and play!
        $buttons.attr('disabled', false);
        $message.html('Sync is live!');
      }
    });

    // Let's pop a message on the screen to show that Sync is working
    $message.html('Loading board data…');

    // Our game state is stored in a Sync document. Here, we'll attach to that document
    // (or create it, if it doesn't exist) and connect the necessary event handlers.
    // 
    syncClient.document('SyncGame').then(function(syncDoc) {
      var data = syncDoc.data;
      if (data.board) {
        updateUserInterface(data);
      }

      // Any time the board changes, we want to show the new state. The 'updated'
      // event is for this.
      syncDoc.on('updated', function(event) {
        console.debug("Board was updated", event.isLocal? "locally." : "by the other guy.");
        updateUserInterface(event.data);
      });

      // Let's make our buttons control the game state in Sync…
      $buttons.on('click', function (e) {
        // Toggle the value: X, O, or empty
        toggleCellValue($(e.target));

        // Send updated document to Sync. This will trigger "updated" events for all players.
        var data = readGameBoardFromUserInterface();
        syncDoc.set(data);
      });
    });

  });

  //Toggle the value: X, O, or empty (&nbsp; for UI)
  function toggleCellValue($cell) {
    var cellValue = $cell.html();

    if (cellValue === 'X') {
      $cell.html('O');
    } else if (cellValue === 'O') {
      $cell.html('&nbsp;');
    } else {
      $cell.html('X');
    }
  }

  //Read the state of the UI and create a new document
  function readGameBoardFromUserInterface() {
    var board = [
      ['', '', ''],
      ['', '', ''],
      ['', '', '']
    ];

    for (var row = 0; row < 3; row++) {
      for (var col = 0; col < 3; col++) {
        var selector = '[data-row="' + row + '"]' +
        '[data-col="' + col + '"]';
        board[row][col] = $(selector).html().replace('&nbsp;', '');
      }
    }

    return {board: board};
  }

  //Update the buttons on the board to match our document
  function updateUserInterface(data) {
    for (var row = 0; row < 3; row++) {
      for (var col = 0; col < 3; col++) {
        var this_cell = '[data-row="' + row + '"]' + '[data-col="' + col + '"]';
        var cellValue = data.board[row][col];
        $(this_cell).html(cellValue === '' ? '&nbsp;' : cellValue);
      }
    }
  }
});
