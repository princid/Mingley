const BASE_URL = "http://localhost/PHP_Assesments/Mingley/";
// const BASE_URL= "http://localhost/Demo/PHP_Practice/Mingley/";

$(document).ready(function () {
  $(".commentBtn").on("click", function (e) {
    e.preventDefault();

    const button = $(this);
    const postId = button.closest("form").data("post-id");
    const commentContent = button.siblings("textarea").val().trim();
    const individual_comment = document.querySelector(".individual_comment");

    if (commentContent == "") {
      alert("Type comment...");
      return false;
    }

    $.ajax({
      type: "POST",
      url: BASE_URL+"src/controller/comment_controller.php",
      data: {
        postId: postId,
        commentContent: commentContent,
      },
      dataType: "json",
      success: function (response) {
        console.log(response);

        if (response.status === "success") {
          // Adding this to blank the textarea
          button.siblings("textarea").val("");

          // Access comment information from the response
          const commentInfo = response.commentInfo;

          // adding the new comment element into the child div
          $(".individual_comment" + postId).append(
            `<div class="ms-2 ">
                <div class="bg-light rounded-start-top-0 rounded users_comment">
                    <div class="d-flex mb-3">
                        <div class="avatar avatar-xs">
                            <img class="avatar-img rounded-circle" src="${
                              commentInfo.user_profile_pic
                                ? BASE_URL +
                                  "assets/profile_pic/" +
                                  commentInfo.comment_owner +
                                  "/" +
                                  commentInfo.user_profile_pic
                                : BASE_URL +
                                  "assets/profile_pic/profileDummy.png"
                            }" alt="">
                        </div>
                        <div class="d-block">
                            <div class="d-flex" style="margin: 0 10px">
                                <h6 class="mb-1"> ${
                                  commentInfo.user_name
                                } </h6>
                                <small class="ms-2 text-secondary">${
                                  commentInfo.comment_date + " - " + commentInfo.comment_time
                                }</small>
                            </div>
                            <p class="small mb-0" style="margin: 0 10px; text-align: justify; line-height: 1.4;">${
                              commentInfo.comment_text
                            }</p>
                        </div>
                    </div>
                </div>
              </div>`
          );

          console.log("Comment added successfully");
        } else {
          console.log("Error: " + response.message);
        }
      },
      error: function (xhr, status, error) {
        console.log("AJAX request failed...");
        console.log("Status: " + status);
        console.log("Error: " + error);
      },
    });
  });
});
