$(document).ready(function () {
  function chat_validation() {
    const textmsg = $("#message").val();
    // alert(textmsg);
    const receive = $("#receive").val();
    const send = $("#send").val();

    if (textmsg == "") {
      alert("Type Message...");
      return false;
    }

    // const datastr =
    //   "message=" + textmsg + "&receive=" + receive + "&send=" + send;

    $.ajax({
      url: "../../response/chatlog.php",
      type: "POST",
      data: { message: textmsg, receive: receive , send: send},
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

    const dataStr = "receive=" + receive + "&send=" + send;

    setInterval(function () {
      $.ajax({
        url: "../../response/chat_loader.php",
        type: "GET",
        data: dataStr,
        success: function (e) {
          $("#chat_load").html(e);
        },
      });
    }, 100);
  });
});
