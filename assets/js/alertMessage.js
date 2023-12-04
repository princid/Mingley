const alertBox = document.querySelectorAll(".alertBox");
if (alertBox) {
  setTimeout(() => {
    alertBox.forEach((el) => {
      el.innerHTML = "";
    });
  }, 3000);
}
