const alertBox = document.querySelectorAll(".alertBox");
if (alertBox) {
  setTimeout(() => {
    alertBox.forEach((el) => {
      console.log(el);
      el.innerHTML = "";
    });
  }, 3000);
}
