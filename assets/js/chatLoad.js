$(document).ready(function () {
  function chat_validation() {
    const textmsg = $("#message").val().trim();
    // alert(textmsg);
    const receive = $("#receive").val();
    const send = $("#send").val();

    if (textmsg == "") {
      alert("Type Message...");
      return false;
    }

    $.ajax({
      url: "../../response/chatlog.php",
      type: "POST",
      data: { 
        message: textmsg, 
        receive: receive , 
        send: send
      },
      success: function (e) {
        $("#msg").html(e);
      },
    });
    document.getElementById("chatForm").reset();
    return false;
  }

  $("#chatBtn").on("click", (e) => {
    e.preventDefault();
    chat_validation();
  });

  //   chat loader
  $(function () {
    const receive = $("#receive").val();
    const send = $("#send").val();

    setInterval(function () {
      $.ajax({
        url: "../../response/chat_loader.php",
        type: "GET",
        data: { 
          receive: receive, 
          send: send 
        },
        success: function (e) {
          $("#chat_load").html(e.trim());
        },
      });
    }, 100);
  });
});
