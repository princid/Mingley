// delete Post
$(document).ready(function () {
  let delete_btns = document.querySelectorAll(".delete_btn");
  delete_btns.forEach((el) => {
    el.addEventListener("click", (e) => {
      const postId = e.target.dataset["postId"];
      console.log();
      $.ajax({
        url: "../../src/controller/crud_post_controller.php",
        method: "POST",
        data: {
          callHandler: "userPostDeleteHandler",
          dataset: {
            post_id: postId,
          },
        },
        dataType: "json",
        success: function (data) {
          $(".btn-close").click();
          $("#post_card"+postId).remove();

          if (data["status"] == 200) {
            $("#msg").html(
              `<div class="alertBox"><div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="">${data["message"]}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></div>`
            );
          } else {
            $("#msg").html(
              `<div class="alertBox"><div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong class="">${data["message"]}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></div>`
            );
          }

          setTimeout(() => {
            $("#msg").html("");
          }, 3000);
        },
        error: function (xhr, status, error) {
          console.error("AJAX Error:", status, error);
        },
      });
    });
  });
});

// Edit Post
$(document).ready(function () {
  let edit_btns = document.querySelectorAll(".edit_btn");
  edit_btns.forEach((el) => {
    el.addEventListener("click", (e) => {
      const postId = e.target.dataset["postId"];
      const postCaption = document.querySelector("#caption" + postId).value;

      $.ajax({
        url: "../../src/controller/crud_post_controller.php",
        method: "POST",
        data: {
          callHandler: "editPostHandler",
          dataset: {
            post_id: postId,
            post_caption: postCaption,
          },
        },
        dataType: "json",
        success: function (data) {
          $(".btn-close").click();
          $("#msg").html(
            `<div class="alertBox"><div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong class="">${data["message"]}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div></div>`
          );

          if (data["status"] == 200) {
            $("#post_caption_" + postId).html(data["update_caption"]);
          }

          setTimeout(() => {
            $("#msg").html("");
          }, 3000);
        },
        error: function (xhr, status, error) {
          console.error("AJAX Error:", status, error);
        },
      });
    });
  });
});
