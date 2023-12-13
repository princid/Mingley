class contactForm{
    setError(errType, error){
        const elements = document.getElementsByClassName(errType);
        if (elements.length > 0) {
          elements[0].innerText = error;
        }
    }

    clearErrors() {
        // Clearing all the error messages
        const errorElements = document.querySelectorAll('.formError');
        errorElements.forEach((element) => {
          element.innerText = '';
        });
    }

    validateContactForm(event){
        event.preventDefault();
        let returnVal = true;

        // Clearing the previous error messages
        this.clearErrors();

        // Validating Name
        let name = document.forms[0].name.value;
        // console.log("Name:", name);
        if (name.length === 0) {
          this.setError("name", "*Length of name is too short!");
          returnVal = false;
        }

        // Validating Email
        let email = document.forms[0].email.value;
        if (email.length === 0) {
          this.setError("email", "*Email cannot be blank!!");
          returnVal = false;
        } else if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(email)) {
          this.setError("email", "*Please enter a valid email, like your@abc.com");
          returnVal = false;
        }

        // Validating Phone
        let phone = document.forms[0].phone.value;
        if (phone.length !== 10) {
          this.setError("phone", "*Check your Phone number!!");
          returnVal = false;
        }

        // Validating Message
        let message = document.forms[0].message.value;
        if(message.length < 20){
            this.setError("message", "*Message length should be atleast 20!!");
            returnVal = false;
        }

        // If there are no errors, allow form submission
        if (returnVal) {
            document.forms[0].submit();
        }
    }
}

let contactFormObj = new contactForm();

document.forms[0].addEventListener("submit", (event) => {
    if (!contactFormObj.validateContactForm(event)) {
      event.preventDefault(); // Prevent form submission if validation fails
    }
  });