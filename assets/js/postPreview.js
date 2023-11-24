// Post preview
const postInputBtn = document.getElementById("upload_file");

postInputBtn.addEventListener("change", function (el) {
  $("#image_preview").empty();

  const postPreview = document.querySelector("#image_preview");
  const totalFiles = postInputBtn["files"].length;
  if (totalFiles > 0) {
    $("#preview").show();

    $("#image_preview").append(
      `<div id="carouselExampleIndicators" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
    ${(() => {
      let indicators = "";
      for (let i = 0; i < totalFiles; i++) {
        indicators += `
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="${i}" ${
          i === 0 ? 'class="active" aria-current="true"' : ""
        } aria-label="Slide ${i + 1}"></button>
          `;
      }
      return indicators;
    })()}

    </div>
    <div class="carousel-inner">
      ${(() => {
        let carouselItems = "";

        for (let i = 0; i < totalFiles; i++) {
          carouselItems += `
            <div class="carousel-item preview-post ${i === 0 ? "active" : ""}">
              <img src="${URL.createObjectURL(
                postInputBtn.files[i]
              )}" class="d-block h-100 object-fit-contain w-100" alt="...">
            </div>
          `;
        }

        return carouselItems;
      })()}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
`
    );
  }
});

// Reset form
var modalCloseButton = $('[data-bs-dismiss="modal"]');

modalCloseButton.on("click", function () {
  $("#image_preview").empty();
  $("#preview").hide();
  $("#submit_post")[0].reset();
});

// Profile image preview
const fileInput = document.getElementById("profile_pic");
fileInput.addEventListener("change", function (el) {
  const profileImage = document.querySelector("#preview-avatar");
  console.log(profileImage);
  if (fileInput["files"].length > 0) {
    profileImage.src = URL.createObjectURL(fileInput.files[0]);
  }
});

$(".removeBtn").on("click", function (e) {
  const userId = e.target.dataset["userId"];
  $.ajax({
    url: "../../src/controller/crud_profile_controller.php",
    method: "POST",
    data: {
      callHandler: "deleteProfileImage",
      dataset: {
        user_id: userId,
      },
    },
    dataType: "json",
    success: function (data) {
      $(".avatar-img").attr(
        "src",
        "<?= BASE_URL ?>assets/profile_pic/profileDummy.png"
      );
      $(".btn-close").click();

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
      }, 5000);
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", status, error);
    },
  });
});
