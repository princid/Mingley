// delete Post
$(document).ready(function () {
  let delete_btns = document.querySelectorAll(".delete_btn");
  delete_btns.forEach((el) => {
    el.addEventListener("click", (e) => {
      const postId = e.target.dataset["postId"];
      $.ajax({
        url: "http://localhost/PHP_Assesments/Mingley/src/controller/crud_post_controller.php",
        method: "POST",
        data: {
          callHandler: "userPostDeleteHandler",
          dataset: {
            post_id: postId,
          },
        },
        dataType: "json",
        success: function (data) {
          if (data["status"] == 200) {
            $(".modal").hide();
            $(".modal-backdrop").hide();
            // $("body").removeAttr("style");
            $("#msg").html(
              `<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="h1">${data["message"]}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>`
            );
          } else {
            $(".modal").hide();
            $(".modal-backdrop").hide();
            // $("body").removeAttr("style");
            $("#msg").html(
              `<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="h1">${data["message"]}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>`
            );
          }
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
        url: "http://localhost/PHP_Assesments/Mingley/src/controller/crud_post_controller.php",
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
          $(".modal").hide();
          $(".modal-backdrop").hide();
          $("#msg").html(
            `<div class="alertBox"><div class="alert alert-success" role="alert"><h1>${data["message"]}</h1></div></div>`
          );

          if (data["status"] == 200) {
            $("#post_caption_" + postId).html(data["update_caption"]);
          }
        },
        error: function (xhr, status, error) {
          console.error("AJAX Error:", status, error);
        },
      });
    });
  });
});
