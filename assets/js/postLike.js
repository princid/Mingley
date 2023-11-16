$(document).ready(function () {
  let like_btn = document.querySelectorAll(".likesAnchor");
  like_btn.forEach((el) => {
    el.addEventListener("click", (e) => {
      e.preventDefault();
      const targetElement = el;
      const postID = el.dataset["postId"];
      const likeStatus = el.dataset["likeStatus"];
      const postLike = el.querySelector(`.postLike[data-post-id="${postID}"]`);
      const likeCounter = el.querySelector("#likes_count_" + postID);

      $.ajax({
        //   url: "../controller/like_controller.php",
        url: "../../src/controller/like_controller.php",
        method: "POST",
        data: {
          post_id: postID,
          like_status: likeStatus,
        },
        dataType: "json",
        success: function (response) {
          if (response["like_status"] === "liked") {
            likeCounter.innerHTML = response["likes_count"];
            targetElement.dataset["likeStatus"] = 1;

            // Changing Style of Like
            postLike.classList.remove("fa-regular");
            postLike.classList.add("fa-solid");
            postLike.style.color = "red";
            $(this).data("like-status", 1);
          } else if (response["like_status"] === "unliked") {
            likeCounter.innerHTML = response["likes_count"];
            targetElement.dataset["likeStatus"] = 0;

            // Changing Style of unlike
            postLike.classList.remove("fa-solid");
            postLike.classList.add("fa-regular");
            postLike.style.color = "initial";
            $(this).data("like-status", 0);
          }
          var post_id = response["post_id"];
          $("#likes_count_" + post_id).html(response["likes_count"]);
        },
        error: function (xhr, status, error) {
          console.error("AJAX Error:", status, error);
          console.log("Response Text:", xhr.responseText);
        },
      });
    });
  });
  $(document).on("click", ".likesAnchor", function (event) {});
});
