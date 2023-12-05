

$(document).ready(function () {
  $(document).on("click", ".follow_btn", function () {
    const button = $(this);
    const userId = button.data("user-id");
    console.log(userId);

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
            // User is now following, add a notification
            addNotification(
              userId,
              response.follower_name,
              "started following you",
              response.currentUserId
            );
            console.log(userId, "again");
            console.log(response.currentUserId);

            console.log("@" + response.follower_name, "started following you");

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
      error: function (xhr, status, error) {
        console.log("AJAX request failed");
        console.log("XHR:", xhr);
        console.log("Status:", status);
        console.log("Error:", error);
      },
    });

    // Function to add a notification dynamically
    function addNotification(userId, senderName, action, currentUserId) {
      senderName = senderName || "Unknown User";

      const notificationContainer =
        userId === currentUserId
          ? ".notifDropdownUL"
          : ".followedUserNotificationUL";

      const notificationItem = `
        <li>
          <div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
            <div class="avatar text-center d-none d-sm-inline-block">
              <div class="avatar-img rounded-circle bg-primary"><span class="text-white position-absolute top-50 start-50 translate-middle fw-bold">${senderName.charAt(
                0
              )}</span></div>
            </div>
            <div class="ms-sm-3">
              <div class="d-flex">
                <p class="small mb-2"><b>${senderName}</b> ${action}.</p>
                <p class="small ms-3 text-nowrap text-end">Just now</p>
              </div>
              <div class="d-flex">
                <!-- Add any additional UI elements or actions here -->
              </div>
            </div>
          </div>
        </li>`;

      $(notificationContainer).prepend(notificationItem);
    }
  });
});


