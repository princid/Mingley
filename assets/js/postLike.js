$(document).ready(function () {
  $(document).on("click", ".likesAnchor", function (event) {
    event.preventDefault();
    const postID = $(this).data("post-id");
    const likeStatus = $(this).data("like-status");
    const postLike = $(`.postLike[data-post-id="${postID}"]`);

    $.ajax({
    //   url: "../controller/like_controller.php",
      url: "../../src/controller/like_controller.php",
      method: "POST",
      data: {
        post_id: postID,
      },
      dataType: "json",
      success: function (response) {
        console.log(response);
        if (response["like_status"] === "liked") {
          postLike
            .removeClass("fa-regular")
            .addClass("fa-solid")
            .css("color", "red");
          $(this).data("like-status", 1);
        } else if (response["like_status"] === "unliked") {
          postLike
            .removeClass("fa-solid")
            .addClass("fa-regular")
            .css("color", "initial");
          $(this).data("like-status", 0);
        }
        var post_id = response["post_id"];
        $("#likes_count_" + post_id).html(response["likes_count"]);
      },
      error: function (error) {
        console.error("Error:", error);
      },
    });
  });
});
