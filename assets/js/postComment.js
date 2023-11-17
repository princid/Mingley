// comment.js
$(document).ready(function () {
  $(".comment-form").submit(function (e) {
    e.preventDefault();

    var form = $(this);
    var post_id = form.data("post-id");
    var comment_text = form.find(".comment-text").val();

    $.ajax({
      type: "POST",
      url: "../../src/controller/comment_controller.php",
      data: {
        action: "addComment",
        post_id: post_id,
        comment_text: comment_text,
      },
      success: function (response) {
        // You can handle the response as needed
        console.log(response);

      },
    });
  });
});
