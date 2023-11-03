class updateForm {
  setError(errType, error) {
    const elements = document.getElementsByClassName(errType);
    if (elements.length > 0) {
      elements[0].innerText = error;
    }
  }

  clearErrors() {
    // Clearing all the error messages
    const errorElements = document.querySelectorAll(".formError");
    errorElements.forEach((element) => {
      element.innerText = "";
    });
  }

  validateForm(event) {
    event.preventDefault();
    let returnVal = true;

    // Clearing the previous error messages
    this.clearErrors();

    // Validating First Name
    let firstname = document.getElementById("firstname").value.trim(); // Trim whitespace
    if (firstname.length === 0) {
      this.setError("firstname", "*Firstname cannot be blank!");
      returnVal = false;
    } else if (firstname.length < 2) {
      this.setError(
        "firstname",
        "*Firstname must be at least 2 characters long."
      );
      returnVal = false;
    } else if (!/^[a-zA-Z\s]+$/.test(firstname)) {
      this.setError(
        "firstname",
        "*Firstname can only contain letters and spaces."
      );
      returnVal = false;
    }

    // Validating Last Name
    let lastname = document.getElementById("lastname").value.trim(); // Trim whitespace
    if (lastname.length === 0) {
      this.setError("lastname", "*Lastname cannot be blank!");
      returnVal = false;
    } else if (lastname.length < 2) {
      this.setError(
        "lastname",
        "*Lastname must be at least 2 characters long."
      );
      returnVal = false;
    } else if (!/^[a-zA-Z\s]+$/.test(lastname)) {
      this.setError(
        "lastname",
        "*Lastname can only contain letters and spaces."
      );
      returnVal = false;
    }

    // Validating username
    let username = document.getElementById("username").value.trim(); // Trim whitespace
    if (username.length === 0) {
      this.setError("username", "*Username cannot be blank!");
      returnVal = false;
    } else if (!/^[a-z]+$/.test(username)) {
      this.setError(
        "username",
        "*Username must contain only lowercase letters."
      );
      returnVal = false;
    } else if (username.length < 3) {
      this.setError(
        "username",
        "*Username must be at least 3 characters long."
      );
      returnVal = false;
    } else if (username.length > 20) {
      this.setError("username", "*Username cannot exceed 20 characters.");
      returnVal = false;
    }

    // Validating Email
    let email = document.getElementById("email").value;
    if (email.length === 0) {
      this.setError("email", "*Email cannot be blank!");
      returnVal = false;
    } else if (!/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/.test(email)) {
      this.setError("email", "*Please enter a valid email, like your@abc.com");
      returnVal = false;
    }

    // If there are no errors, allow form submission
    if (returnVal) {
      document.getElementById("update_form").submit(); // Use getElementById
    }
  }
}

let updateObj = new updateForm();

let update_form = document.getElementById("update_form");

update_form.addEventListener("submit", (event) => {
  if (!updateObj.validateForm(event)) {
    event.preventDefault(); // Prevent form submission if validation fails
  }
});

// console.log("Prince");
