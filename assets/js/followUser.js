$(document).ready(function () {
  // Click event for the follow button
  $(document).on("click", ".follow_btn", function () {
    const button = $(this);
    const userId = button.data("user-id");

    // AJAX request
    $.ajax({
      type: "POST",
      url: "../controller/follow_action.php",
      data: {
        userId: userId,
      },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
          console.log($("#total-follower-count"));

          if (response.follow_status == 1) {
            console.log(response);
            $("#follow-btn-container").html(
              `<button  class=" btn btn-outline-secondary me-3" data-bs-toggle="modal" data-bs-target="#unfollow${userId}" style="padding: 10px 50px;"><i class="fa-solid fa-user-check pe-3"></i> <strong>Following</strong></button>`
            );

            $("#total-follower-count").text(response.followers_count);
          } else {
            $(".btn-close").click();
            $("#follow-btn-container").html(
              `<button data-user-id=${userId} class="follow_btn btn btn-outline-primary me-3" style="padding: 10px 50px;"><i class="fa-solid fa-user-plus pe-3"></i> <strong>Follow</strong></button>`
            );

            $("#total-follower-count").text(response.followers_count);
          }
        } else {
          console.log("Error: " + response.message);
        }
      },
      error: function () {
        console.log("AJAX request failed");
      },
    });
  });
});
